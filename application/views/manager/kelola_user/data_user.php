<div class="content-wrapper">

	<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">  
          <h1 class="m-0">Kelola Data User</h1>
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
        <span class="fa fa-plus"></span> Tambah User
      </button>

      <!-- Modal -->

      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama User</th>
            <th>Alamat</th>
            <th>Username</th>
            <th>Email</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1; foreach($data_user as $du){ ?>

            <tr>
              <td><?= $i=1; ?></td>
              <td><?= $du['nama_user']; ?></td>
              <td><?= $du['alamat']; ?></td>
              <td><?= $du['username']; ?></td>
              <td><?= $du['email']; ?></td>
              <td>
                <a href="<?= base_url('kelola_data_user/hapus/'.$du['id_user']) ?>" class="btn btn-danger" > <span class="fa fa-trash"></span></a>
                <button class="btn btn-warning"><span class="fa fa-pen text-white"></span> </button>
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


  //FORM TAMBAH DATA
  <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          <?php echo form_open('kelola_data_user/tambah'); ?>
            <div class="form-group">
              <label for="nama_user">Nama User</label>
              <input type="text" class="form-control" name="nama_user" placeholder="Masukan Nama User" id="nama_user" required>
              <?php echo form_error('nama_user'); ?>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" id="alamat" cols="30" rows="3" placeholder="Masukan Alamat" class="form-control"></textarea>
              <?php echo form_error('alamat'); ?>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="emails" class="form-control" name="email" placeholder="example@mail.com" id="email" required>
              <?php echo form_error('email'); ?>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" placeholder="Masukan Username" name="username" id="username" required>
              <?php echo form_error('username'); ?>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" required>
              <?php echo form_error('password'); ?>
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
  <div class="modal fade" id="editData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          <?php echo form_open('kelola_data_user/tambah'); ?>
            <div class="form-group">
              <label for="nama_user">Nama User</label>
              <input type="text" class="form-control" name="nama_user" placeholder="Masukan Nama User" id="nama_user" required>
              <?php echo form_error('nama_user'); ?>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" id="alamat" cols="30" rows="3" placeholder="Masukan Alamat" class="form-control"></textarea>
              <?php echo form_error('alamat'); ?>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="emails" class="form-control" name="email" placeholder="example@mail.com" id="email" required>
              <?php echo form_error('email'); ?>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" placeholder="Masukan Username" name="username" id="username" required>
              <?php echo form_error('username'); ?>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" required>
              <?php echo form_error('password'); ?>
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