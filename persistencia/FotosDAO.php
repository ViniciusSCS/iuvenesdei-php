<?php

class FotosDAO {

    public $con;

    public function __construct() {
        $this->con = new Conexao();
    }

    function inserirAlbum(FotosVO $fotos) {
        $sql = "INSERT INTO fotos (idAlbum, imagem) "
                . " VALUES ( :idAlbum, :imagem) ";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':idAlbum', $fotos->idAlbum);
        $stmt->bindValue(':imagem', $fotos->imagem);
        return $stmt->execute();
    }

}
