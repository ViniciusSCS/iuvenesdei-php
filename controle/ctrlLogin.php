<?php

session_start();

require_once ('../persistencia/LoginDAO.class.php');
require_once ('../persistencia/LoginVO.class.php');
require_once ('../persistencia/Conexao.class.php');

$acao = (isset($_POST['acao'])) ? addslashes($_POST['acao']) : '';
if ($acao == 'login') {

    $usuario = addslashes($_POST["usuario"]);
    $senha = MD5(addslashes($_POST["senha"]));
    try {
        $loginVO = new LoginVO();
        $loginVO->setUsuario($usuario);
        $loginVO->setSenha($senha);
        $loginDAO = new LoginDAO();

        $NovoUsuario = $loginDAO->entrar($loginVO);

        if ($NovoUsuario->getIdLogin() <= 0) {
            ?>
            <script>
                alert("Usuario ou Senha Invalidos");
                //window.location.href = '/site/home-cursos/nai/atividadesInternacionais/index.php';
                window.location.href = 'iuvenesdei.com.br';
            </script>
            <?php
            //echo "Usu&aacute;rio ou Senha Inv&aacute;lida";
        } else {
            $_SESSION["idLogin"] = $NovoUsuario->getIdLogin();
            $_SESSION["usuario"] = $NovoUsuario->getUsuario();
            $_SESSION["nome"] = $NovoUsuario->getNome();

            
            ?>
            <script>
                //window.location.href = '/site/home-cursos/nai/atividadesInternacionais/inicio.php';
                window.location.href = 'http://localhost:8080/Eventos/IuvenesDei/iuvenesdei/cpanel/principal';
            </script>
            <?php
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}  else {
    header("Location: iuvenesdei.com.br");
}
?>
