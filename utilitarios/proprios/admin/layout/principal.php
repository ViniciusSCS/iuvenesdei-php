<?php
include_once '../default/headerAdmin.php';
include_once '../default/sidebarAdmin.php';
?>
<!-- Content Wrapper. Contains page content -->
<section id="principal">
    <div class="content-wrapper">
        <input type="hidden" id="pagina" value="principal">
        <section class="content-header">
            <h1>
                <?php
                    echo "<b>" . utf8_encode($_SESSION['usuario']['nome']) . '!!</b>';
                ?>
            </h1>
        </section>
        <section class="content">

            <?php
                $genero = ($_SESSION['usuario']['sexo'] == 1) ? " vindo" : " vinda";
            ?>
            <div style="text-align: justify">
                <?php
                    echo '<br><br> Seja Bem ' . $genero .
                    '. A paz do Senhor esteja convosco!!<br>';
                    echo '<br>Esse é o nosso Painel de Controle.'
                    . ' Ele ainda ta em construção mas aqui voce já pode ter'
                    . 'uma noção de como vai ficar!! '
                    . 'Espero que gostem =D <br><br>'
                    . 'Ass: Desenvolvedor';
                ?> 
            </div>

        </section>
    </div>
</section>

<?php include '../default/footerAdmin.php'; ?>
