        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div id="texto" class="col-sm-12 text-center" style="font-size: 15px;"> © Copyright 2007 - <?php echo date("Y") ?> | Grupo de Ora&ccedil;&atilde;o Iuvenes Dei |</div>
                    <div id="texto" class="col-sm-12 text-center" style="font-size: 12px;"> Desenvolvido por Vinicius Sarmento</div>
                </div>
            </div>
        </section>

        <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>
        <script src="utilitarios/externos/js/modernizr-latest.js" type="text/javascript"></script>
        <script src="utilitarios/externos/js/jquery-1.8.2.min.js" type="text/javascript"></script> 
        <script src="utilitarios/externos/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="utilitarios/externos/js/jquery.isotope.min.js" type="text/javascript"></script> 
        <script src="utilitarios/externos/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
        <script src="utilitarios/externos/js/jquery.nav.js" type="text/javascript"></script> 
        <script src="utilitarios/externos/js/jquery.fittext.js" type="text/javascript"></script> 
        <script src="js/waypoints.js" type="text/javascript"></script> 
        <script src="utilitarios/externos/flexslider/jquery.flexslider.js" type="text/javascript"></script>
        <script src="utilitarios/externos/js/custom.js" type="text/javascript"></script>
        <script src="utilitarios/externos/js/owl-carousel/owl.carousel.js"></script>
        <script src="utilitarios/externos/bootstrap/datatables/jquery.dataTables.min.js"></script>
        <script src="utilitarios/externos/bootstrap/datatables/dataTables.bootstrap.min.js"></script>
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
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-81304274-1', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
</html>