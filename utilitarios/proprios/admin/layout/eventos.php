<?php
require '../../../../persistencia/Conexao.class.php';

require '../../../../persistencia/EventoDAO.class.php';
require '../../../../persistencia/EventoVO.class.php';

include_once '../default/headerAdmin.php';
include_once '../default/sidebarAdmin.php';


$eventoDAO = new EventoDAO;
$formEvento = $eventoDAO->buscaEvento();
$total = count($formEvento);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <input type="hidden" id="pagina" value="eventos">
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <h1>
            Gerenciar Eventos
        </h1>
    </section>

    <!-- Contente -->
    <section class="content">
        <!-- Inserir -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Inserir eventos</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="../salvarEvento" method="POST" name="valide" enctype="multipart/form-data">
                <input type="hidden" name="acao" id="acao" value="inserir"/>
                <input type="hidden" name="idLogin" id="idLogin" value="<?php $_SESSION['idLogin'] ?>"/>
                <div class="box-body">
                    <div class="form-group">
                        <label for="titulo" class="required">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulos do evento" required>
                    </div>
                    <div class="form-group">
                        <label for="descricao" class="required">Descrição</label>
                        <textarea class="form-control" rows="3" id="descricao" name="descricao" placeholder="Digite aqui" style="resize: none" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nome_imagem">Adcione imagem</label>
                        <input type="file" id="nome_imagem" name="nome_imagem" required>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button name="salvar" type="submit" class="btn btn-primary pull-right">Salvar</button>
                </div>
            </form>
        </div>
        <!-- fim inserir -->

        <!-- Listar -->

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Listar eventos</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse-out"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php
                if (!empty($formEvento)) {
                    ?>
                    <table id="example2" class="table table-responsive table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th style="text-align: center;">#</th>
                                <th class="col-md-3">TÍTULO</th>
                                <th class="col-md-3">DESCRIÇÃO</th>
                                <th>IMAGEM</th>
                                <th class="col-md-3">POSTADO POR</th>
                                <th style="text-align: center;">AÇÃO</th>
                            </tr>
                            <?php
                            $contador = 0;
                            foreach ($formEvento as $evento) {
                                ?>

                                <tr>
                                    <td style="text-align: center;" data-title="#">
                                        <?php echo '# ' . $evento['idEvento'] ?>
                                    </td>
                                    <td data-title="TÍTULO">
                                        <?php echo utf8_encode($evento['titulo']) ?>
                                    </td>
                                    <td data-title="DESCRIÇÃO">
                                        <?php echo utf8_encode($evento['descricao']) ?>
                                    </td>
                                    <td style="text-align: center;" data-title="IMAGEM">
                                        <img class="img-responsive" width="50px" src="../<?php echo $evento['nome_imagem'] ?>">
                                    </td>
                                    <td data-title="POSTADO POR">
                                        <?php echo utf8_encode($evento['nome']) ?>
                                    </td>
                                    <td style="text-align: center;" data-title="AÇÃO">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle disabled" data-toggle="dropdown" >
                                                <i class="fa fa-gear fa-fw "></i> Opções <span class="fa fa-caret-down fa-fw"></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="">
                                                        <i class="fa fa-fw fa-edit"></i>Alterar
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="controleAdmin/cntlDeleteEvento.php?idEvento=<?php echo $evento['idEvento'] ?>">
                                                        <i class="fa fa-fw fa-trash"></i>Excluir
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                } else {
                    echo '<i class="fa fa-fw fa-hdd-o"></i><b>Nenhum Evento Inserido</b>';
                }
                ?>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <div class="result"></div>
            </div>
        </div>
        <!-- fim Listar -->
    </section>
</div>
<!-- /.content-wrapper -->
<?php include_once '../default/footerAdmin.php' ?>
