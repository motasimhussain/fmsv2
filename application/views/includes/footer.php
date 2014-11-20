</div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.1.0 -->
        <script src="<?=base_url(); ?>js/jquery-2.1.0.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?=base_url(); ?>js/jquery-ui-1.10.4.min.js" type="text/javascript"></script>
        


        <!-- Bootstrap -->
        <script src="<?=base_url(); ?>js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?=base_url(); ?>js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?=base_url(); ?>js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?=base_url(); ?>js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?=base_url(); ?>js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <!-- AdminLTE App -->
        <script src="<?=base_url(); ?>js/AdminLTE/app.js" type="text/javascript"></script>

 
        <script>
            $(function() {
                $( "#pickdate" ).datepicker({ dateFormat: "yy-mm-dd" });
                $( "#pickdate1" ).datepicker({ dateFormat: "yy-mm-dd" });

            });
        </script>




        </script>
        <script type="text/javascript">
            $(function() {
                $('#reservation').daterangepicker({format: 'YYYY-MM-DD'});
            });
        </script>

        
        

    </body>
</html>