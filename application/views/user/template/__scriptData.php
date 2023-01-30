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
<script src="<?= base_url('assets/sweetalert/dist/sweetalert2.all.min.js')?>"></script>
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

      <?php if($this->session->flashdata('tambah')){ ?>
            Swal.fire({
            icon: 'success',
            title: '<?= $this->session->flashdata('tambah'); ?>',
            text: 'Data Berhasil Ditambahkan',
          })
      <?php }?>

      $('.hapus').on('click',function(){
        
        var id_pengajuan = $(this).val();

          Swal.fire({
            title: 'Anda Yakin Ingin Menghapus Data ?',
            text: "Data Akan Terhapus dari database!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
          }).then((result) => {
            if (result.isConfirmed) {
              $.ajax({
                type : 'POST',
                dataType : 'json',
                url : '<?= base_url('user/kelola_data_pengajuan/hapus'); ?>',
                data : {id_pengajuan:id_pengajuan},
                success : function(data){
                  if(data){
                    Swal.fire(
                      'Data Telah Terhapus!',
                      'Data yang anda pilih sudah terhapus pada database.',
                      'success'
                    )
                    window.location.reload();
                  }else{
                    Swal.fire(
                      'Data Gagal dihapus!',
                      'Data yang anda pilih gagal terhapus.',
                      'error'
                    )
                  }
                }
              })

            }
          })

      });

      $('.edit').on('click',function(){

        //SET DATA MODAL

        //DATA KATEGORI
        var id_kategori = $(this).closest("tr").find(".id_kategori").val();
        var kategori = $(this).closest("tr").find(".kategori").text();
        var jenis_kategori = $(this).closest("tr").find(".jenis_kategori").val();

        var nama_aset = $(this).closest("tr").find(".nama_aset").text();
        var jumlah_aset = $(this).closest("tr").find(".jumlah_aset").val();
        var harga_aset = $(this).closest("tr").find(".harga_aset").val();

        $('#edit_kategori').val(kategori)


        $.ajax({
            type : 'POST',
            dataType : 'json',
            url : '<?= base_url('user/kelola_data_pengajuan/ambil_jenis'); ?>',
            data : {kategori_aset:kategori},
            success : function(data){
                $.each(data, function(index, val){
                  $('#edit_jenis_kategori').append($('<option>',{
                      value:val['id_kategori'],
                      text:val['kategori'] + " - " + val['jenis_kategori'],
                  }));
                });

                $('#edit_nama_aset').val(nama_aset)
                $('#edit_jumlah_aset').val(jumlah_aset)
                $('#edit_harga_aset').val(harga_aset)

                $('#edit_jenis_kategori').val(id_kategori)
              }
          });          
        $('#editData').modal('show'); 
      });

      $("#editData").on('hidden.bs.modal',function (){
        $('#edit_jenis_kategori').empty()
      });

     $('#kategori').on('change',function(){

        var kategori_aset = $(this).val();
        console.log(kategori_aset);
        if($(this).val() != "")
        {
          
            $('#jenis_kategori').empty();
              $('#jenis_kategori').append($('<option>',{
                value:"",
                text:"--PILIH JENIS ASET--",
                selected : true,
                disabled : true
              }));


          $.ajax({
            type : 'POST',
            dataType : 'json',
            url : '<?= base_url('user/kelola_data_pengajuan/ambil_jenis'); ?>',
            data : {kategori_aset:kategori_aset},
            success : function(data){
                $.each(data, function(index, val){
                  $('#jenis_kategori').append($('<option>',{
                      value:val['id_kategori'],
                      text:val['kategori'] + " - " + val['jenis_kategori'],
                  }));
                });

                $('.data1').attr('disabled',false); 
                $('#jenis_kategori').on('change',function(){

                  $('.data2').attr('disabled',false);                
                });            
              }
          });          
        }
     }); 

  });

</script>
</body>
</html>