<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">  
          
        </div><!-- /.col -->
        <div class="col-sm-6">  
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Dashboard User</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">

    <div class="container">
      <div class="container text-center"> <h2 class="mb-1">Kelola Data Pengajuan</h2> </div>
      <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahData">
        <span class="fa fa-plus"></span> Tambah Pengajuan
      </button>

      <!-- Modal -->

      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No.</th>
            <th>ID Pengajuan</th>
            <th>Nama Aset</th>
            <th>Kategori Aset</th>
            <th>Tanggal Pengajuan</th>
            <th>Status Pengajuan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if($data_pengajuan){?>
          <?php $i=1; foreach($data_pengajuan as $dp){ ?>

            <tr>
              <td><?= $i=1; ?></td>
              <td class="id_pengajuan"><?= $dp['id_pengajuan']; ?></td>
              <td class="nama_aset"><?= $dp['nama_aset']; ?></td>
              <td class="kategori"><?= $dp['kategori']; ?></td>              
              <td class="tgl_pengajuan"><?= $dp['tgl_pengajuan']; ?></td>
              <input type="hidden" class="jenis_kategori" value="<?= $dp['jenis_kategori'] ?>">
              <input type="hidden" class="id_kategori" value="<?= $dp['id_kategori'] ?>">
              <input type="hidden" class="jumlah_aset" value="<?= $dp['jumlah_aset'] ?>">
              <input type="hidden" class="harga_aset" value="<?= $dp['harga_aset'] ?>">              
              <td>
                
                <?php 
                  if($dp['status'] == '0'){
                ?>

                <span class="btn btn-warning text-white"> <b>Menunggu</b> </span>  

                <?php }else{ ?>

                <span class="btn btn-success text-white"> <b>Disetujui</b> </span>  

                <?php }?>

              </td>
              <td>
                <button class="btn btn-danger hapus" value="<?= $dp['id_pengajuan'] ?>"><span class="fa fa-trash text-white"></span> </button>
                <button class="btn btn-warning edit"><span class="fa fa-pen text-white"></span> </button>
              </td>
            </tr>

            <?php $i++; }?>
          <?php }?>
          </tbody>
        </table>          
        <!-- /.col -->
        <!-- /.col -->

        <!-- fix for small devices only -->
        
        <!-- /.col -->
        <!-- /.col -->  

      </div>

    </section>

  </div>


  //FORM TAMBAH DATA
  <div class="modal fade bd-example-modal-xl" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          <?php echo form_open('user/kelola_data_pengajuan/tambah'); ?>
            <div class="form-group">
              <label for="alamat">Kategori Aset</label>
              <select name="kategori" id="kategori" class="form-control">
                  <option value="" disabled="" selected>-- PILIH KATEGORI --</option>
                <?php foreach($kategori as $k){ ?>
                  <option value="<?= $k['kategori'] ?>"> <?= $k['kategori'] ?> </option>
                <?php }?>
              </select>
            </div>
            <div class="form-group">
              <label for="alamat">Jenis Aset</label>
              <select name="id_kategori" id="jenis_kategori" class="form-control data1" required disabled>
                  <option value="" disabled="" selected>-- PILIH JENIS ASET --</option>
              </select>
            </div>
            <div class="form-group">
              <label for="nama_aset">Nama Aset</label>
              <input type="text" class="form-control data2" name="nama_aset" placeholder="Masukan Nama Aset" id="nama_aset" required disabled>
              <?php echo form_error('nama_aset'); ?>
            </div>
            <div class="form-group">
              <label for="jumlah_aset">Jumlah Aset</label>
              <input type="number" class="form-control data2" name="jumlah_aset" placeholder="Masukan Jumlah Aset" id="jumlah_aset" required disabled>
              <?php echo form_error('jumlah_aset'); ?>
            </div>  
            <div class="form-group">
              <label for="jumlah_aset">Harga Aset</label>
              <input type="number" class="form-control data2" name="harga_aset" placeholder="Masukan Harga Satuan Dari Aset" id="harga_aset" required disabled>
              <?php echo form_error('harga_aset'); ?>
            </div>                        
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  //FORM EDIT DATA
  <div class="modal fade bd-example-modal-xl" id="editData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
        <?php echo form_open('user/kelola_data_pengajuan/edit'); ?>
            <div class="form-group">
              <label for="alamat">Kategori Aset</label>
              <select name="kategori" id="edit_kategori" class="form-control">
                <option value="" disabled="">-- PILIH KATEGORI --</option>
                <?php foreach($kategori as $k){ ?>
                  <option value="<?= $k['kategori'] ?>"> <?= $k['kategori'] ?> </option>
                <?php }?>
              </select>
            </div>
            <div class="form-group">
              <label for="alamat">Jenis Aset</label>
              <select name="id_kategori" id="edit_jenis_kategori" class="form-control data1" required >
                  <option value="" selected>-- PILIH JENIS ASET --</option>
              </select>
            </div>
            <div class="form-group">
              <label for="nama_aset">Nama Aset</label>
              <input type="text" class="form-control data2" name="nama_aset" placeholder="Masukan Nama Aset" id="edit_nama_aset" required >
              <?php echo form_error('nama_aset'); ?>
            </div>
            <div class="form-group">
              <label for="jumlah_aset">Jumlah Aset</label>
              <input type="number" class="form-control data2" name="jumlah_aset" placeholder="Masukan Jumlah Aset" id="edit_jumlah_aset" required >
              <?php echo form_error('jumlah_aset'); ?>
            </div>  
            <div class="form-group">
              <label for="jumlah_aset">Harga Aset</label>
              <input type="number" class="form-control data2" name="harga_aset" placeholder="Masukan Harga Satuan Dari Aset" id="edit_harga_aset" required >
              <?php echo form_error('harga_aset'); ?>
            </div>                        
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>