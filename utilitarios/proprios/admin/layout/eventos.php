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
            <form action="../salvarEvento" method="post" name="valide">
                <input type="hidden" name="acao" id="acao" value="inserir"/>
                <div class="box-body">
                    <div class="form-group">
                        <label for="titulo" class="required">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulos do evento" required>
                    </div>
                    <div class="form-group">
                        <label for="descricao" class="required">Descrição</label>
                        <textarea class="form-control" rows="3" id="descricao" name="descricao" placeholder="Digite aqui" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nome_imagem">Adcione imagem</label>
                        <input type="file" id="nome_imagem" name="nome_imagem">
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
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-responsive">
                    <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Título</th>
                            <th>Descrição</th>
                            <th>Imagem</th>
                            <th style="width: 80px">Ação</th>
                        </tr>
                        <?php
                        $contador = 0;
                        foreach ($formEvento as $evento) {
                            ?>

                            <tr>
                                <td><?php echo $evento['idEvento'] ?></td>
                                <td><?php echo utf8_encode($evento['titulo']) ?></td>
                                <td><?php echo utf8_encode($evento['descricao']) ?></td>
                                <td><?php echo $evento['n'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-fw fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-fw fa-trash"></i></button>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
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
<?php include_once '../default//footerAdmin.php' ?>