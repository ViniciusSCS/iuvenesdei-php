<?php 
    include_once 'headerAdmin.php';
    include_once 'sidebarAdmin.php'
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
            <form role="form">
                <div class="box-body">
                    <div class="form-group">
                        <label>Titulo</label>
                        <input type="text" class="form-control" id="titulo" placeholder="Titulos do evento">
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea class="form-control" rows="3" placeholder="Digite aqui"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Adcione imagem</label>
                        <input type="file" id="exampleInputFile">
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Salvar</button>
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
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Titulo</th>
                            <th>Descrição</th>
                            <th style="width: 80px">ação</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Update software</td>
                            <td>teste2</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-fw fa-edit"></i></button>
                                <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-fw fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Clean database</td>
                            <td>teste2</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-fw fa-edit"></i></button>
                                <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-fw fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </div>
        <!-- fim Listar -->
    </section>
</div>
<!-- /.content-wrapper -->
<?php include_once 'partials/footerAdmin.php' ?>