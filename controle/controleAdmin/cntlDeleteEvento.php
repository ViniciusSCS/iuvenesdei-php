<?php
require '../../persistencia/Conexao.class.php';
require '../../persistencia/EventoDAO.class.php';
require '../../persistencia/EventoVO.class.php';


$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$nome_imagem = $_POST['nome_imagem'];

$evento = new EventoVO();

$evento->setTitulo($titulo);
$evento->setDescricao($descricao);
$evento->setNome_imagem($nome_imagem);

$eventoDAO = (new EventoDAO)->deletaEvento($idEvento);

if ($eventoDAO) {
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script>
        alert("Evento deletado com <b>sucesso</b>");
        window.location.href = 'http://localhost:8080/Eventos/IuvenesDei/iuvenesdei/intranet/eventos';
    //            window.location.href = 'http://iuvenesdei.com.br/#comentarios';
    </script>
    <?php
} else {
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script>
        alert("<b>Falha</b> ao deletar Evento");
        window.location.href = 'http://localhost:8080/Eventos/IuvenesDei/iuvenesdei/intranet/eventos';
    //            window.location.href = 'http://iuvenesdei.com.br/#comentarios';
    </script>
    <?php
}