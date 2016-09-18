<?php

class ComentsDAO {

    public $con;

    public function __construct() {
        $this->con = new Conexao();
    }

    function inserirComents(ComentsVO $coment) {
        $sql = "INSERT INTO postagem (coments, data, hora) "
                ."VALUES ( "
                . ":coments, "
                . "NOW(), "
                . "NOW())";

        $stmt = $this->con->prepare($sql);
        $stmt->bindValue(':coments', utf8_decode($coment->coments));
        return $stmt->execute();
    }

    function buscarComents() {
        $sql = "SELECT * FROM postagem ORDER BY idComents DESC ";
        
        $stmt = $this->con->prepare($sql);
        $stmt->execute();        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}