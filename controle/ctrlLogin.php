<?php
session_start();

require_once ('../persistencia/LoginDAO.class.php');
require_once ('../persistencia/LoginVO.class.php');
require_once ('../persistencia/Conexao.class.php');


$acao = (isset($_POST['acao']));


if ($acao == 'login') {

    $usuario = @$_POST['usuario'];
    $senha = MD5(addslashes(@$_POST["senha"]));
    $user = (new LoginDAO)->entrar($usuario, $senha);
    if ($user != false) {
//        Sessao::set('usuario', $usuario);
//        $genero = ($usuario['sexo'] == 1) ? " vindo" : " vinda";
        ?>
        <script>
            window.location.href = 'http://localhost:8080/Eventos/IuvenesDei/iuvenesdei/cpanel/principal';
        </script>
        <?php
    } else {
        
        ?>
        <script>
            alert("Usuario ou Senha Invalidos");
            window.location.href = 'http://localhost:8080/Eventos/IuvenesDei/iuvenesdei/cpanel';
        </script>        
        <?php
        exit();
    }
}