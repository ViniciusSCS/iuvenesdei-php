<?php

class AlbumDAO {
    
    public $con;

    public function __construct() {
        $this->con = new Conexao();
    }
    
    function inserirAlbum(AlbumVO $album){
        $sql = "INSERT INTO album (idLogin, titulo, capa) "
                . " VALUES ( :idLogin, :titulo, :capa) ";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':idLogin', $_SESSION['usuario']['idLogin']);
        $stmt->bindValue(':titulo', utf8_decode($album->titulo));
        $stmt->bindValue(':capa', $album->capa);
        return $stmt->execute();
    }
    
}
