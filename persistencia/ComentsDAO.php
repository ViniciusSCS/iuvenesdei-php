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
        $stmt->bindValue(':coments', utf8_decode($coment->getComents()));
        return $stmt->execute();
    }

    function buscarComents() {
        $sql = "SELECT coments FROM postagem ORDER BY idComents DESC ";

        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}





class Coments {

    function inserirComents(ComentsVO $coment) {
        $con = Conexao::getConexao();

        $sql = "INSERT INTO postagem (coments, data, hora) "
                . "VALUES ('" . utf8_decode($coment->getComents()). "', NOW(), NOW())";

        $executou = $con->query($sql);
        $idComents = mysqli_insert_id($con);
        if (!$executou) {
            return false;
        } else {
            return $idComents;
        }
    }

    function buscarComents() {
        $con = Conexao::getConexao();
        $sql = "SELECT * FROM postagem ORDER BY idComents DESC";

        $executou = $con->query($sql);
        if (!$executou) {
            throw new Exception('Erro ao consultar os dados - SQL');
        }

        if ($executou) {
            $arrayDados = array();

            while ($linhaDados = mysqli_fetch_array($executou)) {
                $formBusca = new ComentsVO();

                $formBusca->setIdComents($linhaDados['idComents']);
                $formBusca->setComents(utf8_encode($linhaDados['coments']));
                $formBusca->setData($linhaDados['data']);
                $formBusca->setHora($linhaDados['hora']);
                $arrayDados[] = $formBusca;
            }
            return $arrayDados;
        }
        return false;
    }

}
