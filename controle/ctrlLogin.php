<?php

require_once ('../persistencia/LoginDAO.class.php');
require_once ('../persistencia/LoginVO.class.php');
require_once ('../persistencia/Conexao.class.php');
require_once ('../action/Mensagem.class.php');
require_once ('../action/Sessao.class.php');

$acao = (isset($_POST['acao']));

if ($acao == 'login') {
    $senha = addslashes($_POST['senha']);
    $usuario = addslashes($_POST['usuario']);

    $user = (new LoginDAO)->entrar($usuario, md5($senha));

    if (count($user) > 0) {
        session_start();
        Sessao::set('usuario', $user);
        Sessao::set('mensagem', Mensagem::montar(sprintf(Mensagem::msg001), 1));
        
        header("location:/iuvenesdei/intranet/principal");

    } else {
        
        Sessao::set('mensagem', Mensagem::montar(sprintf(Mensagem::msg002), 0));
        
        header("location:/iuvenesdei/intranet");
    }
} else {
    ?>
    <script>
        window.location.href = 'http://localhost/iuvenesdei';
        //      window.location.href = 'http://iuvenesdei.com.br/';
    </script>
    <?php

}
