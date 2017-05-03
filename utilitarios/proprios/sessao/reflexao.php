
<section id="reflexao" class="page-section">
    <form action="controle/ctrlReflexao.php" method="post" name="valide">
        <input type="hidden" name="acao" id="acao" value="inserir"/>
        <div class="container"> 
            <div class="heading wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="row">
                    <div class="text-center col-sm-8 col-sm-offset-2">
                        <h2>Reflexão Diária</h2>
                    </div>

                </div> 
            </div>
            <div class="col-md-9">
                <div id="reflexão" class="form-group">
<!--                    <table id="reflexao" class="table table-responsive">
                        <thead>
                            <tr>
                                <th id="titulo"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $contador = 0;
                            foreach ($formComents as $comentario) {
                                ?>                                    
                                <tr>
                                    <td id='postagem'>
                                        <?php
//                                        echo utf8_encode($comentario['coments']);
//                                        echo '<br>';
//                                        list ($ano, $mes, $dia) = explode("-", $comentario['data']);
//                                        echo "<b id='postagem' style='font-size: 12px;'>Postado em: " . $dia . "/" . $mes . "/" . $ano .
//                                        " &agrave;s " . $comentario['hora'] . "</b>";
                                        ?>
                                    </td>
                                </tr>                                    
                                <?php
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th id="titulo"></th>
                            </tr>
                        </tfoot>
                    </table>-->
                </div>
                <div class="result"></div>
            </div>
        </div>
    </form>
</section>
