<?php
  require_once ('../persistencia/LoginDAO.class.php');
  require_once ('../persistencia/LoginVO.class.php');
  require_once ('../persistencia/Conexao.class.php');

  $acao = (isset($_POST['acao']));

  if ($acao == 'login') {
    $senha = addslashes($_POST['senha']);
    $usuario = addslashes($_POST['usuario']);

    $user = (new LoginDAO)->entrar($usuario, md5($senha));
    if ($user != false) {
      session_start();
      $_SESSION['usuario'] = $user;
      ?>
      <script>
        window.location.href = 'http://localhost:8080/Eventos/IuvenesDei/iuvenesdei/intranet/principal';
//        window.location.href = 'http://iuvenesdei.com.br/intranet/principal';
      </script>
      <?php

    } else {
      ?>
      <script>
        alert("Usuario ou Senha Invalidos");
        window.location.href = 'http://localhost:8080/Eventos/IuvenesDei/iuvenesdei/intranet';
//        window.location.href = 'http://iuvenesdei.com.br/intranet';
      </script>
      <?php
    }
  }else{
    ?>
    <script>
      window.location.href = 'http://localhost:8080/Eventos/IuvenesDei/iuvenesdei';
//      window.location.href = 'http://iuvenesdei.com.br/';
    </script>
    <?php
  }
