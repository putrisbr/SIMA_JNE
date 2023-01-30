<script src="<?= base_url('assets/template/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/template/dist/js/adminlte.js')?>"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?= base_url('assets/template/plugins/jquery-mousewheel/jquery.mousewheel.js')?>"></script>
<script src="<?= base_url('assets/template/plugins/raphael/raphael.min.js')?>"></script>
<script src="<?= base_url('assets/template/plugins/jquery-mapael/jquery.mapael.min.js')?>"></script>
<script src="<?= base_url('assets/template/plugins/jquery-mapael/maps/usa_states.min.js')?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/template/plugins/chart.js/Chart.min.js')?>"></script>
<script src="<?= base_url('assets/template/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/template/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?= base_url('assets/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/template/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?= base_url('assets/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/template/plugins/jszip/jszip.min.js')?>"></script>
<script src="<?= base_url('assets/template/plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?= base_url('assets/template/plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?= base_url('assets/template/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?= base_url('assets/template/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?= base_url('assets/template/plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/template/dist/js/pages/dashboard2.js')?>"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>

<script>
  $(document).ready(function(){


      $('.btn-warning').on('click',function(){
        $('#editData').modal('show'); 
      });

  });

</script>
</body>
</html>