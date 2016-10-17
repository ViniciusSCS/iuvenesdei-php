<?php
session_start();
require_once '../verificaAutenticacao.php';
require_once '../../../../action/Mensagem.class.php';
require_once '../../../../action/Sessao.class.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Iuvenes Dei</title>
        <link href="../utilitarios/imagens/imagens.jpg" rel="shortcut icon" type="text/css" />
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="../utilitarios/externos/admin/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../utilitarios/externos/admin/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../utilitarios/externos/admin/dist/css/skins/_all-skins.min.css">

        <link rel="stylesheet" href="../utilitarios/externos/admin/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <link href="../utilitarios/externos/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Theme style -->
        <link rel="stylesheet" href="../utilitarios/externos/admin/dist/css/AdminLTE.min.css">
        
        <link rel="stylesheet" href="../utilitarios/externos/css/mensagem.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="../utilitarios/externos/admin/plugins/iCheck/square/blue.css">

        <link href="../utilitarios/externos/bootstrap/datatables/dataTables.bootstrap.css" rel="stylesheet" >

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="principal" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>I</b>Dei</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Iuvenes </b>Dei</span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!--<img src="../utilitarios/externos/admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
                                    <span class="hidden-xs"><?= utf8_encode($_SESSION['usuario']['nome']) ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <!--<img src="../utilitarios/externos/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->

                                        <p>
                                            <?= utf8_encode($_SESSION['usuario']['nome']) ?>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="../sair" class="btn btn-default btn-flat">Sair</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- mensagem -->
                    <div id="page-wrapper" style="text-align: right;">
                        <div class="container-fluid ">
                            <!-- mensagem -->
                            <div class="message"><?php echo Sessao::get('mensagem') ?></div>
                            <!-- /#mensagem -->
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                </nav>
            </header>
