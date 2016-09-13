<?php

class LoginDAO {

    public $con;

    public function __construct() {
        $this->con = new Conexao();
    }

    public function entrar($usuario, $senha) {
        $sql = "SELECT * "
                . " FROM login "
                . " WHERE usuario=$usuario AND "
                . "  senha=$senha ";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

}

?>
