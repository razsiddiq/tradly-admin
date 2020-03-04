<script src="<?php echo base_url();?>assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins.js"></script>
<script src="<?php echo base_url();?>assets/js/main.js"></script>

<?php if(@$js_file =='dashboard'){?>  
  <script src="<?php echo base_url();?>assets/js/lib/chart-js/Chart.bundle.js"></script>
  <script src="<?php echo base_url();?>assets/js/customs/dashboard.js"></script>
<?php } ?>

<?php if(@$js_file =='roles'){?>  

  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/kendo/kendo.common.min.css" />
  <script type="text/javascript" src="<?php echo base_url();?>assets/vendors/kendo/kendo.all.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/customs/roles.js"></script>
<?php } ?>


<script src="<?php echo base_url();?>assets/js/lib/data-table/datatables.min.js"></script>
<script src="<?php echo base_url();?>assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/lib/data-table/jszip.min.js"></script>
<script src="<?php echo base_url();?>assets/js/lib/data-table/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>assets/js/lib/data-table/buttons.colVis.min.js"></script>
<!-- <script src="<?php echo base_url();?>assets/js/lib/data-table/datatables-init.js"></script> -->

<script>
(function ($) {
  $('#bootstrap-data-table-export').DataTable({
    dom: 'lBfrtip',
    lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
    buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print','colvis'
    ]
  });
})(jQuery);
</script>

  
