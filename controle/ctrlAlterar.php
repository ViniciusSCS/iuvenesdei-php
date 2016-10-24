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

    if (isset($_FILES['nome_imagem'])) { // valida a imagem
        $arqName = $_FILES['nome_imagem']['name'];
        $arqType = $_FILES['nome_imagem']['type'];
        $arqSize = $_FILES['nome_imagem']['size'];
        $arqTemp = $_FILES['nome_imagem']['tmp_name'];
        if (array_search($arqType, $tiposPermitidos) === false) {
            echo "Erro, extensões permitidas: jpg, png ou jpeg";
            return false;
        } else if ($arqSize > $tamanhoPermitido) {
            echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
            return false;
        }

        $imagem->nome = uniqid(time()) . $arqName;
        $imagem->arqTemp = $arqTemp;

        $upload = move_uploaded_file($imagem->arqTemp, $diretorio . $imagem->nome);
        // Depois verifica se é possível mover o arquivo para a pasta escolhida
        if (!$upload) {
            echo "Não foi possível enviar o arquivo, tente novamente";
            return false;
        } else {
            
        }
    } else {
        echo "Erro";
        return false;
    }
}

