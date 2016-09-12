<?php include 'partials/header.php' ?>
<?php include 'partials/sidebar.php' ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <input type="hidden" id="pagina" value="comentarios">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
       Gerenciar Comentários
      </h1>
    </section>

    <!-- Contente -->
    <section class="content">
      <!-- Listar -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Listar comentários</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <th style="width: 15px">#</th>
                <th>Comentários</th>
                <th style="width: 80px">ação</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Update software</td>
                <td>
                  <button type="button" class="btn btn-info btn-xs"><i class="fa fa-fw fa-check-square-o"></i></button>
                  <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-fw fa-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Clean database</td>
                <td>
                  <button type="button" class="btn btn-info btn-xs"><i class="fa fa-fw fa-check-square-o"></i></button>
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
<?php include 'partials/footer.php' ?>