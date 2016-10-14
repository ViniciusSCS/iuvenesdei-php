<?php

require '../persistencia/Conexao.class.php';
require '../persistencia/EventoDAO.class.php';
require '../persistencia/EventoVO.class.php';

if (isset($_POST['salvar'])) {

    $imagem = new stdClass;
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];

    $diretorio = __DIR__.'/../utilitarios/imagens/eventos/'; // Pasta onde o arquivo vai ser salvo
    $diretorioImagem = 'utilitarios/imagens/eventos/'; // Pasta onde o arquivo vai ser salvo
    $tiposPermitidos = array('image/jpeg','image/png', 'image/jpg'); // Tamanho máximo do arquivo (em Bytes)
    $tamanhoPermitido = 1024 * 1024 * 2; // Array com as extensões permitidas

    if(isset($_FILES['nome_imagem'])){ // valida a imagem
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

        $imagem->nome = uniqid(time()).$arqName;
        $imagem->arqTemp = $arqTemp;

        $upload = move_uploaded_file($imagem->arqTemp, $diretorio.$imagem->nome);
        // Depois verifica se é possível mover o arquivo para a pasta escolhida
        if (!$upload) {
            echo "Não foi possível enviar o arquivo, tente novamente";
            return false;
        }else{
            $evento = new EventoVO;
            $evento->setTitulo($titulo);
            $evento->setDescricao($descricao);
            $evento->setNome_imagem($diretorioImagem.$imagem->nome);

            $eventoDAO = (new EventoDAO)->inserirEvento($evento);

            if ($eventoDAO) {
                ?>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <script>
                alert("Evento cadastrado com <b>sucesso</b>");
                window.location.href = 'http://localhost:8080/Eventos/IuvenesDei/iuvenesdei/intranet/eventos';
                // window.location.href = 'http://iuvenesdei.com.br/#comentarios';
                </script>
                <?php
            } else {
                ?>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <script>
                alert("<b>Falha</b> ao cadastrar Evento");
                window.location.href = 'http://localhost:8080/Eventos/IuvenesDei/iuvenesdei/intranet/eventos';
                // window.location.href = 'http://iuvenesdei.com.br/#comentarios';
                </script>
                <?php
            }
        }
    }else{
        echo "Erro";
        return false;
    }
}


if (isset($_POST['excluir'])) {
    $eventoDAO = (new EventoDAO)->deletaEvento($idEvento);

    if ($eventoDAO) {
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script>
        alert("Evento deletado com <b>sucesso</b>");
        window.location.href = 'http://localhost:8080/Eventos/IuvenesDei/iuvenesdei/intranet/eventos';
        // window.location.href = 'http://iuvenesdei.com.br/#comentarios';
        </script>
        <?php
    } else {
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script>
        alert("<b>Falha</b> ao deletar Evento");
        window.location.href = 'http://localhost:8080/Eventos/IuvenesDei/iuvenesdei/intranet/eventos';
        // window.location.href = 'http://iuvenesdei.com.br/#comentarios';
        </script>
        <?php
    }
}
