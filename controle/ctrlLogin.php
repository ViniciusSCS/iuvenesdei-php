<?php

session_start();

require_once ('../persistencia/LoginDAO.class.php');
require_once ('../persistencia/LoginVO.class.php');
require_once ('../persistencia/Conexao.class.php');


   $acao = (isset($_POST['acao']));


if ($acao == 'login') {
    $usuario = @$_GET['usuario'];
    $senha = md5(@$_POST['senha']);
    //    exit();
    //echo '<pre>';

    $loginVO = new LoginVo();
    $loginVO->setUsuario($usuario);
    $loginVO->setSenha($senha);
    $loginDAO = new LoginDAO();

    $novoUser = $loginDAO->entrar($loginVO);

    if ($novoUser->getIdLogin() <= 0) {
        
        ?>
        <script>
            window.location.href = 'http://localhost:8080/Eventos/IuvenesDei/iuvenesdei/cpanel';
        </script>
        <?php

    }else{
        $_SESSION["idLogin"] = $novoUser->getIdLogin();
        $_SESSION["usuario"] = $novoUser->getUsuario();
        $_SESSION["nome"] = $novoUser->getNome();
        ?>
        <script>
            window.location.href = 'http://localhost:8080/Eventos/IuvenesDei/iuvenesdei/cpanel/principal';
        </script>
        <?php
    }
} else {
    
}












//$acao = (isset($_POST['acao'])) ? addslashes($_POST['acao']) : '';
//if ($acao == 'login') {
//
//    $usuario = $_POST["usuario"];
//    $senha = MD5($_POST["senha"]);
//    try {
//        $loginVO = new LoginVO();
//        $loginVO->setUsuario($usuario);
//        $loginVO->setSenha($senha);
//        $loginDAO = new LoginDAO();
//
//        $NovoUsuario = $loginDAO->entrar($loginVO);
//
//        if ($NovoUsuario->getIdLogin() <= 0) {
//            
?>
<!--<script>
    alert("Usuario ou Senha Invalidos");
    window.location.href = 'iuvenesdei.com.br';
</script>-->
//<?php

//            //echo "Usu&aacute;rio ou Senha Inv&aacute;lida";
//        } else {
//            $_SESSION["idLogin"] = $NovoUsuario->getIdLogin();
//            $_SESSION["usuario"] = $NovoUsuario->getUsuario();
//            $_SESSION["nome"] = $NovoUsuario->getNome();
//
//            
//            
?>
<!--<script>
    window.location.href = 'http://localhost:8080/Eventos/IuvenesDei/iuvenesdei/cpanel/principal';
</script>-->
//<?php

//        }
//    } catch (Exception $ex) {
//        echo $ex->getMessage();
//    }
//}  else {
//    header("Location: iuvenesdei.com.br");
//}
?>
