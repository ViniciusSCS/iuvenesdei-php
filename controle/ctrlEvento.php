<?php

require '../persistencia/Conexao.class.php';
require '../persistencia/EventoDAO.class.php';
require '../persistencia/EventoVO.class.php';

if (isset($_POST['salvar'])) {
    
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];

    $extensaoImagem = strtolower(end(explode('.', $_FILES[$_POST['nome_imagem']]['name'])));
//    print_r($extensaoImagem);
//    exit();

    // Pasta onde o arquivo vai ser salvo
    $_UP['pasta'] = __DIR__.'/../utilitarios/imagens/eventos';
    // Tamanho máximo do arquivo (em Bytes)
    $_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
    // Array com as extensões permitidas
    $_UP['extensoes'] = array('jpg', 'png', 'gif');

    // Array com os tipos de erros de upload do PHP
    $_UP['erros'][0] = 'Não houve erro';
    $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
    $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
    $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
    $_UP['erros'][4] = 'Não foi feito o upload do arquivo';

    // Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
    if (!$_FILES[$_POST['nome_imagem']]['error']) {
       die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES[$_POST['nome_imagem']]['error']]);
       exit;
    }

    // Faz a verificação da extensão do arquivo
    if (!array_search($extensaoImagem, $_UP['extensoes'])) {
       echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
    }

    // Verifica o tamanho da imagem
    if ($_FILES['nome_imagem']['size'] > $_UP['tamanho']) {
       echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
    }

    $nomeImagem = uniqid($_FILES[$_POST['nome_imagem']]['name'].'-').'.'.$extensaoImagem;

    // Depois verifica se é possível mover o arquivo para a pasta escolhida
    if (!move_uploaded_file($_FILES[$_POST['nome_imagem']]['tmp_name'], "{$_UP['pasta']}/$nomeImagem")) {
        echo "Não foi possível enviar o arquivo, tente novamente";
    }

    $evento = new EventoVO;

    $evento->setTitulo($titulo);
    $evento->setDescricao($descricao);
    $evento->setNome_imagem($nomeImagem);

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
