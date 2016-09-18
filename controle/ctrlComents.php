<?php

require '../persistencia/Conexao.class.php';
require '../persistencia/ComentsDAO.php';
require '../persistencia/ComentsVO.php';

if (isset($_POST['enviar'])) {

    $coments = $_POST['coments'];
    
    $post = new ComentsVO();

    $post->setComents($coments);

    $comentsDAO = (new ComentsDAO)->inserirComents($post);
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>
    alert("Comentário realizado com sucesso");
//    window.location.href = 'http://localhost:8080/Eventos/IuvenesDei/index.php#comentarios';
    window.location.href = 'http://iuvenesdei.com.br/#comentarios';
</script>