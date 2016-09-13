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

//    function entrarAki(LoginVO $log) {
//        $con = Conexao::getConexao();
//
//        $sql = "SELECT * "
//                . " FROM login "
//                . " WHERE cpf='" . $log->getCpf() . "' AND senha='" . $log->getSenha() . "' AND situacao='1'";
//
//        $executou = $con->query($sql);
//
//        if (!$executou) {
//            throw new Exception('Erro ao consultar os dados - SQL');
//        }
//
//        if ($executou) {
//            $linhaUser = mysqli_fetch_array($executou);
//
//            $log = new LoginVO();
//            $log->setIdLogin($linhaUser['idLogin']);
//            $log->setNome($linhaUser['nome']);
//            $log->setCpf($linhaUser['cpf']);
//            $log->setSenha($linhaUser['senha']);
//            $log->setSituacao($linhaUser['situacao']);
//
//            return $log;
//        } else {
//            return false;
//        }
//    }

}

?>
