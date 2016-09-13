<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Iuvenes Dei | Log in</title>
        <link href="utilitarios/imagens/imagens.jpg" rel="shortcut icon" type="text/css" />
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="utilitarios/externos/admin/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="utilitarios/externos/admin/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="utilitarios/externos/admin/plugins/iCheck/square/blue.css">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>Iuvenes</b>Dei</a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Faça Login para começar a sessão</p>

                <form action="controle/ctrlLogin.php" method="post" enctype="multipart/form-data" name="login" id="login">

                    <div class="form-group has-feedback">
                        <input type="text" id="usuario" class="form-control" placeholder="Usuário">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" id="senha" class="form-control" placeholder="Senha">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <input type="hidden" value="login" name="acao" id="acao">
                        <button id="entrar" type="submit" name="entrar" class="btn btn-lg btn-success btn-block">Entrar</button>
                        <br>
                        <a href="index">
                            <button id="voltar" type="button" name="voltar" class="btn btn-lg btn-info btn-block">
                                Site Iuvenes Dei
                            </button>
                        </a>
                    </div>

                </form>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src="utilitarios/externos/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="utilitarios/externos/admin/bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="utilitarios/externos/admin/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>
