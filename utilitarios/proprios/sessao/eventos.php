<?php
require 'persistencia/EventoDAO.class.php';
require 'persistencia/EventoVO.class.php';


$eventoDAO = new EventoDAO;
$formEvento = $eventoDAO->buscaEvento();
$total = count($formEvento);
?>


<section id="eventos">
    <div class="container">
        <div class="heading wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="row">
                <div class="text-center col-sm-8 col-sm-offset-2">
                    <h2>Eventos</h2>
                </div>
            </div> 
        </div>
        <ul class="timeline">
            <?php
            $contador = 0;
            foreach ($formEvento as $evento) {
                ?>
                <li>
                    <div class="timeline-badge success"><i class="fa fa-check fa-lg"></i></div>
                    <div class="timeline-panel" id="timeline">
                        <div class="timeline-heading">
                            <p id="timeline-title"><?php echo utf8_encode($evento['titulo']) ?> </p>
                        </div>
                        <div class="timeline-body">
                            <img src="<?php echo $evento['nome_imagem'] ?>">
                        </div>
                        <div class="timeline-footer">
                            <p id="timeline-title"><?php echo utf8_encode($evento['descricao']) ?> </p>
                        </div>
                    </div>
                </li>
                <?php
            }
            ?>
            <!--<li>
                <div class="timeline-badge success"><i class="fa fa-check fa-lg"></i></div>
                <div class="timeline-panel" id="timeline">
                    <div class="timeline-heading">
                        <p id="timeline-title"></p>
                    </div>
                    <div class="timeline-body">
                        <p>
                            <img class="img-responsive" src="utilitarios/imagens/eventos/Slide1.jpg" alt="">
                        </p>
                    </div>
                </div>
            </li>

           <li>
                <div class="timeline-badge success"><i class="fa fa-check fa-lg"></i></div>
                <div class="timeline-panel" id="timeline">
                    <div class="timeline-heading">
                        <p id="timeline-title"></p>
                    </div>
                    <div class="timeline-body">
                        <p>
                            <img class="img-responsive" src="utilitarios/imagens/eventos/Slide2.jpg" alt="">
                        </p>
                    </div>
                </div>
            </li>-->
        </ul>
    </div>
</section>

