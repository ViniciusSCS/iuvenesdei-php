<?php
    //session_start();
    if (!isset($_SESSION['usuario']['nome'])) {

        session_destroy();
        ?>
        <div id="page-wrapper" style="text-align: right;">
            <div class="container-fluid ">
                <!-- mensagem -->
                <div class="message">
                    <div class='alert alert-msg-danger' id='mensagem'>
                        <i class='fa fa-flag fa-fw'></i>Usuário ou senha inválidos
                    </div>
                </div>
                <!-- /#mensagem -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <?php
        header("Location: ../intranet");
        exit;
    }
