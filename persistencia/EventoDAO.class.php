<?php


class EventoDAO {
    
    public $con;

    public function __construct() {
        $this->con = new Conexao();
    }
    
    function inserirEvento(ComentsVO $coment) {
        $sql = "INSERT INTO evento (titulo, descricao, nome_imagem) "
                ."VALUES ( "
                . ":titulo, "
                . ":descricao, "
                . ":nome_imagem)";

        $stmt = $this->con->prepare($sql);
        $stmt->bindValue(':titulo', utf8_decode($coment->titulo));
        $stmt->bindValue(':descricao', utf8_decode($coment->descricao));
        $stmt->bindValue(':nome_imagem', utf8_decode($coment->nome_imagem));
        return $stmt->execute();
    }
    
}
