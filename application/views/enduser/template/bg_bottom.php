<?php
echo "
<!-- Modal Confirmation -->
    <div class='modal fade modal-danger' id='confirmation' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
      <div class='modal-dialog modal-sm'>
         <div class='modal-content'>
            <div class='modal-header'>
               <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
               <h4 class='modal-title' id='myModalLabel'>Konfirmasi</h4>
            </div>
            <div class='modal-body'>
               <div class='box-body' id='body_delete'>
                  <p>Anda yakin ingin menghapus data ini ?</p>
               </div>
            </div>
            <div class='modal-footer'>
               <button type='button' class='btn btn-default' data-dismiss='modal' id='delete_cancel'>Cancel</button>
               <button type='button' class='btn btn-primary' id='delete_ok'>OKE</button>
            </div>
         </div>
      </div>
    </div>
<footer class='main-footer'>
        <div class='pull-right hidden-xs'></div>
        <strong>Copyright &copy; 2016 <a href='".base_url('index')."'>SPK SAW</a>.</strong> All rights reserved.
      </footer>

 <!-- jQuery 2.1.4 -->
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js' type='text/jscript' ></script>
    <script src='".base_url("design/core/plugins/jQuery/jQuery-2.1.4.min.js")."'></script>
    <!-- jQuery UI 1.11.4 -->
    <script src='https://code.jquery.com/ui/1.11.4/jquery-ui.min.js'></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src='".base_url("design/core/bootstrap/js/bootstrap.min.js")."'></script>
    <!-- Sparkline -->
    <script src='".base_url("design/core/plugins/sparkline/jquery.sparkline.min.js")."'></script>
    <script type='text/javascript' src='".base_url("assets/jLib/jQuery/jquery.price_format.2.0.min.js")."'></script>
    <!-- jvectormap -->
    <script src='".base_url("design/core/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")."'></script>
    <script src='".base_url("design/core/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")."'></script>
    <!-- jQuery Knob Chart -->
    <script src='".base_url("design/core/plugins/knob/jquery.knob.js")."'></script>
    <!-- daterangepicker -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js'></script>
    <script src='".base_url("design/core/plugins/daterangepicker/daterangepicker.js")."'></script>
    <!-- datepicker -->
    <script src='".base_url("design/core/plugins/datepicker/bootstrap-datepicker.js")."'></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src='".base_url("design/core/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")."'></script>
    <!-- Slimscroll -->
    <script src='".base_url("design/core/plugins/slimScroll/jquery.slimscroll.min.js")."'></script>
    <!-- FastClick -->
    <script src='".base_url("design/core/plugins/fastclick/fastclick.min.js")."'></script>
    <!-- Validate -->
    <script src='".base_url("assets/jLib/jQuery/jquery.validate.js")."'></script>
    <!-- AdminLTE App -->
    <script src='".base_url("design/core/dist/js/app.min.js")."'></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src='".base_url("design/core/dist/js/pages/dashboard.js")."'></script>
    <!-- AdminLTE for demo purposes -->
    <script src='".base_url("design/core/dist/js/demo.js")."'></script>
    <!-- custom.adminlte.js -->
    <script src='".base_url("design/core/dist/js/custom.adminlte.js")."'></script>
    <!-- dashboard.js -->
    <script src='".base_url("design/core/dist/js/pages/dashboard.js")."'></script>
    <script src='".base_url("design/core/plugins/barcode/jquery-barcode.min.js")."'></script>

    <script src='".base_url("assets/jController/admin/globe.js")."'></script> 
    <!-- CK Editor -->
    <!-- <script src='https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js'></script> -->

    <!-- core setting ckeditor -->
     <script src='".base_url("design/js/core.js")."'></script>
    <!-- Ambience -->
    <script src='".base_url("design/core/bootstrap/js/jquery.ambiance.js")."'></script>    
       
    <script type='text/javascript'>
           
        $(function () {
          CKEDITOR.replace('editor');
        });  
    </script>

    ";
      
     if(!empty($scjav)){
        echo "<script src='".site_url($scjav)."' type='text/javascript'></script>";
        }

       echo" 

       </body>
</html>


";

?>