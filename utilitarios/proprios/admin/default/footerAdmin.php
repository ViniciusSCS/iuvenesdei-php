        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Versão</b> 1.8.0
            </div>
            <strong>Copyright &copy; 2016-<?php echo date("Y") ?> </strong> Todos direitos reservado.
        </footer>

        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.1.4 -->
        <script src="../utilitarios/externos/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="../utilitarios/externos/admin/bootstrap/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../utilitarios/externos/admin/dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <!-- AdminLTE for demo purposes -->
        <script src="../utilitarios/externos/admin/dist/js/demo.js"></script>
        <script src="../utilitarios/externos/admin/assets/js/ativarMenu.js"></script>
        <script src="../utilitarios/externos/admin/assets/js/app.js"></script>
        <script src="../utilitarios/externos/bootstrap/datatables/jquery.dataTables.min.js"></script>
        <script src="../utilitarios/externos/bootstrap/datatables/dataTables.bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#example2').DataTable({
                    "paging": true,
                    "searching": false,
                    "ordering": false,
                    "info": true,
                    "lengthChange": false,
                    "autoWidth": true,
                    "responsive": true
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $('.message').delay(5000).fadeOut();
                $('select').selectpicker();
            });
        </script>
    </body>
</html>
<?php

    Sessao::clear('mensagem');