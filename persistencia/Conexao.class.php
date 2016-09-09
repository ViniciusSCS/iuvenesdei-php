<?php

//use PDO;

//class Conexao {
//
//    static function getConexao() {
//
//        $local = "localhost";
//        $usuar = "iuvenesd_id";
//        $senha = "vynce@!92";
//        $banco = "iuvenesd_iuvenesdei";
//
//        $con = mysqli_connect($local, $usuar, $senha, $banco);
//        if (mysqli_error($con)) {
//            return "Erro ao conectar o banco de dados";
//        }
//
//        return $con;
//    }
//
//}

class Conexao {

    static function getConexao() {

        $local = "localhost";
        $usuar = "root";
        $senha = "";
        $banco = "iuvenesd_iuvenesdei";

        $con = mysqli_connect($local, $usuar, $senha, $banco);
        if (mysqli_error($con)) {
            return "Erro ao conectar o banco de dados";
        }

        return $con;
    }

}
