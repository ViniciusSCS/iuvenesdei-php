<?php
require './persistencia/Conexao.class.php';
require './persistencia/ComentsDAO.php';
require './persistencia/ComentsVO.php';

$comentsDAO = new ComentsDAO();
$formComents = $comentsDAO->buscarComents();
$total = count($formComents);
?> 


<section id="comentarios" class="page-section">
    <form action="controle/cntrlComents.php" method="post" name="valide">
        <input type="hidden" name="acao" id="acao" value="inserir"/>
        <div class="container"> 
            <div class="heading wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="row">
                    <div class="text-center col-sm-8 col-sm-offset-2">
                        <h2>Coment&aacute;rios</h2>
                    </div>

                </div> 
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <h3 id="titulo" style="font-size: 20px;">Ent&atilde;o conta pra gente seu testemunho...</h3><br>
                    <label for="coments" id="titulo" style="font-size: 15px;">O que Deus mudou na sua vida?</label>
                    <textarea name="coments" class="form-control" id="coments" cols="3" style="font-size: 15px; font-family:'Open Sans'" placeholder="Deixe seu coment&aacute;rio..." title="Por favor, digite a sua mensagem (pelo menos 10 caracteres )" required></textarea>

                    <button name="enviar" type="submit" class="btn btn-lg btn-primary" id="enviar" style="font-size: 15px;">Enviar</button>                        
                </div>

                <div id="postagem" class="form-group">
                    <table id="example2" class="table table-responsive">
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
                                        echo $comentario->getComents();
                                        echo '<br>';
                                        list ($ano, $mes, $dia) = explode("-", $comentario->getData());
                                        echo "<b id='postagem' style='font-size: 12px;'>Postado em: " . $dia . "/" . $mes . "/" . $ano .
                                        " &agrave;s " . $comentario->getHora() . "</b>";
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
                    </table>
                </div>
                <div class="result"></div>
            </div>
        </div>
    </form>
</section>
