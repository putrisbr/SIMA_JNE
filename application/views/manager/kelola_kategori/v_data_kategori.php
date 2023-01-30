<div class="content-wrapper">

	<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">  
          <h1 class="m-0">Kelola Data Kategori</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">  
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Dashboard Admin</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">

    <div class="container">
      <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahData">
        <span class="fa fa-plus"></span>Tambah Kategori
      </button>

      <!-- Modal -->

      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No.</th>
            <th>ID Kategori</th>
            <th>Kategori</th>
            <th>Jenis Kategori</th>
            <th>Nilai Penyusutan</th>
            <th>Masa Manfaat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1; foreach($data_kategori as $dk){ ?>

            <tr>
              <td><?= $i=1; ?></td>
              <td><?= $dk['id_kategori']; ?></td>
              <td><?= $dk['kategori']; ?></td>
              <td><?= $dk['jenis_kategori']; ?></td>
              <td><?= $dk['nilai_penyusutan']; ?></td>
              <td><?= $dk['masa_manfaat']; ?></td>              
              <td>
                <button class="btn btn-danger hapus" value="<?= $dk['id_kategori'] ?>"><span class="fa fa-trash text-white"></span> </button>
                <button class="btn btn-warning edit"><span class="fa fa-pen text-white"></span> </button>
              </td>
            </tr>

            <?php $i++; }?>
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


  //FORM TAMBAH KATEGORI
  <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php echo form_open('manager/kelola_data_kategori/tambah'); ?>
          <div class="modal-body">
            <div class="form-group">
              <label for="kategori">Kategori</label>
              <input type="text" class="form-control" name="kategori" placeholder="Masukan Nama Kategori" id="kategori" required>
              <?php echo form_error('kategori'); ?>
            </div>
            <div class="form-group">
              <label for="jenis_kategori">Jenis Kategori</label>
              <input type="text" class="form-control" name="jenis_kategori" placeholder="Masukan Jenis Kategori" id="jenis_kategori" required>
              <?php echo form_error('jenis_kategori'); ?>
            </div>
            <div class="form-group">
              <label for="nilai_penyusutan">Nilai Penyusutan</label>
              <input type="number" class="form-control" name="nilai_penyusutan" placeholder="Dalam Persen" id="nilai_penyusutan" required>
              <?php echo form_error('nilai_penyusutan'); ?>
            </div>
            <div class="form-group">
              <label for="masa_manfaat">Masa Manfaat</label>
              <input type="number" class="form-control" name="masa_manfaat" placeholder="Dalam Tahun" id="masa_manfaat" required>
              <?php echo form_error('masa_manfaat'); ?>
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


  //FORM UBAH KATEGORI
  <div class="modal fade" id="editData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <?php echo form_open('manager/kelola_data_kategori/ubah'); ?>
          <div class="modal-body">
            <div class="form-group">
              <label for="kategori">Kategori</label>
              <input type="text" class="form-control" name="kategori" placeholder="Masukan Nama Kategori" id="kategori" required>
              <?php echo form_error('kategori'); ?>
            </div>
            <div class="form-group">
              <label for="jenis_kategori">Jenis Kategori</label>
              <input type="text" class="form-control" name="jenis_kategori" placeholder="Masukan Jenis Kategori" id="jenis_kategori" required>
              <?php echo form_error('jenis_kategori'); ?>
            </div>
            <div class="form-group">
              <label for="nilai_penyusutan">Nilai Penyusutan</label>
              <input type="number" class="form-control" name="nilai_penyusutan" placeholder="Dalam Persen" id="nilai_penyusutan" required>
              <?php echo form_error('nilai_penyusutan'); ?>
            </div>
            <div class="form-group">
              <label for="masa_manfaat">Masa Manfaat</label>
              <input type="number" class="form-control" name="masa_manfaat" placeholder="Dalam Tahun" id="masa_manfaat" required>
              <?php echo form_error('masa_manfaat'); ?>
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