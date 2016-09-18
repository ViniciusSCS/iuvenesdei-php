<?php


class EventoDAO {
    
    public $con;

    public function __construct() {
        $this->con = new Conexao();
    }
    
    function inserirEvento(EventoVO $evento) {
        $sql = "INSERT INTO eventos (titulo, descricao, nome_imagem) "
                ."VALUES ( "
                . ":titulo, "
                . ":descricao, "
                . ":nome_imagem)";

        $stmt = $this->con->prepare($sql);
        $stmt->bindValue(':titulo', utf8_decode($evento->titulo));
        $stmt->bindValue(':descricao', utf8_decode($evento->descricao));
        $stmt->bindValue(':nome_imagem', utf8_decode($evento->nome_imagem));
        return $stmt->execute();
    }
    
}
