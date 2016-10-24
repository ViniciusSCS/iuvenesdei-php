<?php

session_start();

require '../persistencia/Conexao.class.php';
require '../persistencia/AlbumDAO.class.php';
require '../persistencia/AlbumVO.class.php';
require '../persistencia/FotosDAO.class.php';
require '../persistencia/FotosVO.class.php';
require_once ('../action/Mensagem.class.php');
require_once ('../action/Sessao.class.php');


if (isset($_POST['salvar'])) {

    $capa = new stdClass;
    $foto = new stdClass;
    $titulo = $_POST['titulo'];

    $diretorio = __DIR__ . '/../utilitarios/imagens/eventos/'; // Pasta onde o arquivo vai ser salvo
    $diretorioImagem = 'utilitarios/imagens/eventos/'; // Pasta onde o arquivo vai ser salvo
    $tiposPermitidos = array('image/jpeg', 'image/png', 'image/jpg',); // Tamanho máximo do arquivo (em Bytes)
    $tamanhoPermitido = 1024 * 1024 * 2; // Array com as extensões permitidas

    if (isset($_FILES['capa'])) { // valida a imagem
        $arqName = $_FILES['capa']['name'];
        $arqType = $_FILES['capa']['type'];
        $arqSize = $_FILES['capa']['size'];
        $arqTemp = $_FILES['capa']['tmp_name'];
        if (array_search($arqType, $tiposPermitidos) === false) {
            echo "Erro, extensões permitidas: jpg, png ou jpeg";
            return false;
        } else if ($arqSize > $tamanhoPermitido) {
            echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
            return false;
        }

        $capa->nome = uniqid(time()) . $arqName;
        $capa->arqTemp = $arqTemp;

        $upload = move_uploaded_file($capa->arqTemp, $diretorio . $capa->nome);
        // Depois verifica se é possível mover o arquivo para a pasta escolhida
        if (!$upload) {
            echo "Não foi possível enviar o arquivo, tente novamente";
            return false;
        } else {
            //Aqui é onde o sistema salva no banco
        }
    } else {
        echo "Erro";
        return false;
    }
}

