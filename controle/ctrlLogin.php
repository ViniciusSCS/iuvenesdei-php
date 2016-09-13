<?php
session_start();

require_once ('../persistencia/LoginDAO.class.php');
require_once ('../persistencia/LoginVO.class.php');
require_once ('../persistencia/Conexao.class.php');


$acao = (isset($_POST['acao']));


if ($acao == 'login') {    

//    $usuario = 'vinicius.sarmento';    
//    $senha = '#1DViniS';
    $usuario = @$_POST['usuario'];    
    $senha = @$_POST['senha'];
//    print_r($_POST);
//    echo '<pre>';
    $user = (new LoginDAO)->entrar($usuario, md5($senha));
//    exit();
    
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
        
    }
}