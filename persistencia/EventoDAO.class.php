<?php


class EventoDAO {
    
    public $con;

    public function __construct() {
        $this->con = new Conexao();
    }
    
    function inserirEvento(EventoVO $evento) {
        $sql = "INSERT INTO eventos (idLogin, titulo, descricao, nome_imagem) "
                ."VALUES ( "
                . " :idLogin, "
                . " :titulo, "
                . " :descricao, "
                . " :nome_imagem)";

        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':idLogin', $_SESSION['idLogin']);
        $stmt->bindValue(':titulo', utf8_decode($evento->titulo));
        $stmt->bindValue(':descricao', utf8_decode($evento->descricao));
        $stmt->bindValue(':nome_imagem', $evento->nome_imagem);
        return $stmt->execute();
    }    
    
    function  buscaEvento(){
        $sql = "SELECT e.*, "
                . "     l.nome "
                . " FROM eventos AS e, login AS l "
                . " WHERE l.idLogin = e.idLogin "
                . " ORDER BY e.idEvento DESC ";
        
        $stmt = $this->con->prepare($sql);
        $stmt->execute();        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
    
    function  deletaEvento($idEvento){
        $sql = "DELETE FROM eventos WHERE idEvento = $idEvento ";
        
        $stmt = $this->con->prepare($sql);
        $stmt->execute();        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
    
}
