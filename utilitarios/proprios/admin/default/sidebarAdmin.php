<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../utilitarios/imagens/icone/icone.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?= $_SESSION['usuario']['nome'] ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Navegação</li>
      <li id="principal" class="treeview">
        <a href="principal">
          <i class="fa fa-dashboard"></i> <span>Principal</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
      </li>

      <li id="eventos" class="treeview">
        <a href="eventos">
          <i class="fa fa-calendar"></i> <span>Eventos</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
      </li>

      <li id="album" class="treeview">
        <a href="album">
          <i class="fa fa-book"></i> <span>Albuns</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
      </li>

<!--      <li id="comentarios" class="treeview">
        <a href="comentario.php">
          <i class="fa fa-comments"></i> <span>Comentários</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
      </li>-->
    </ul>
  </section>
</aside>
  <!-- /.sidebar -->
