<div class="main-content">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
  <?php if ($this->session->flashdata('msg')) : ?>
    <!-- <div class="alert alert-success" role="alert"></div> -->

  <?php endif; ?>
  <section class="section">
    <div class="section-header">
      <h1>Pengaturan</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Pengaturan</a></div>
        <div class="breadcrumb-item">Pengaturan</div>
      </div>
    </div>


    <div class="row">
      <!-- Card Bidang Usaha -->
      <div class="col-9 col-md  col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Data Bidang Usaha</h4>
            <div class="card-header-form">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addDataBU" onclick="addBU()"><i class="fas fa-plus"></i> Add Data</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-2">
                <thead>
                  <tr>
                    <th>#</th>
                    <th class="text-center">Kode</th>
                    <th class="text-center">Nama Bidang Usaha</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($bu as $key => $data):?>
                    <tr>
                      <th class="text-center"><?= $no++?></th>
                      <th class="text-center"><?php echo $data->kd_bidangusaha?></th>
                      <th class="text-center"><?php echo $data->nama_bidangusaha?></th>
                      <th>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editBU<?php echo $data->kd_bidangusaha ?>"><i class="fas fa-edit"></i></a>
                        <!-- <a href="#" class="btn btn-primary"><i class="fas fa-trash"></i></a> -->
                      </th>
                    </tr>
                  <?php endforeach?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Card Bidang Usaha -->
      <div class="col-9 col-md  col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Data Tipe Usaha</h4>
            <div class="card-header-form">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addDataBU" onclick="addBU()"><i class="fas fa-plus"></i> Add Data</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-1">
                <thead>
                  <tr>
                    <th>#</th>
                    <th class="text-center">Kode</th>
                    <th class="text-center">Nama Tipe Usaha</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($tu as $key => $data):?>
                    <tr>
                      <th class="text-center"><?= $no++?></th>
                      <th class="text-center"><?php echo $data->kd_tipeusaha?></th>
                      <th class="text-center"><?php echo $data->nama_tipeusaha?></th>
                      <th>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editTU<?php echo $data->kd_tipeusaha ?>"><i class="fas fa-edit"></i></a>
                        <!-- <a href="#" class="btn btn-primary"><i class="fas fa-trash"></i></a> -->
                      </th>
                    </tr>
                  <?php endforeach?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Card Tipe Usaha -->
    </div>
    <div class="row">
      <!-- Card Jenis Usaha -->
      <div class="col-9 col-md  col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Data Jenis Usaha</h4>
            <div class="card-header-form">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addDataJU" onclick="addJU()"><i class="fas fa-plus"></i> Add Data</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-3">
                <thead>
                  <tr>
                    <th>#</th>
                    <th class="text-center">Kode</th>
                    <th class="text-center">Nama Jenis Usaha</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($ju as $key => $data):?>
                    <tr>
                      <th class="text-center"><?= $no++?></th>
                      <th class="text-center"><?php echo $data->kd_jenisusaha?></th>
                      <th class="text-center"><?php echo $data->nama_jenisusaha?></th>
                      <th>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editJU<?php echo $data->kd_jenisusaha ?>"><i class="fas fa-edit"></i></a>
                        <!-- <a href="#" class="btn btn-primary"><i class="fas fa-trash"></i></a> -->
                      </th>
                    </tr>
                  <?php endforeach?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Card Jenis Usaha -->
      <!-- Ganti Password -->
      <div class="col-9 col-md  col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Ganti Password</h4>
          </div>
          <div class="card-body">
            <form  action="index.html" method="post">
              <div class="form-group">
                <label for="Passwordkini">Password Saat Ini</label>
                <input class="form-control rounded" type="password" name="passkini" placeholder="Password Saat ini">
              </div>
              <div class="form-group">
                <label for="Passwordbaru">Password baru</label>
                <input class="form-control rounded" type="password" name="passbaru" placeholder="Password Baru">
              </div>
              <div class="form-group">
                <label for="Passwordbaru2">Verifikasi Password baru</label>
                <input class="form-control rounded" type="password" name="passbaru2" placeholder="Verifikasi Password Baru">
              </div>
            </form>
          </div>
        </div>
      <!-- Akhir Ganti Password -->

    </div>
  </section>
</div>

<!-- Modal Tambah Bidang Usaha -->
<div class="modal fade" id="addDataBU" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Input Data Bidang Usaha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <?php if (validation_errors()): ?>
            <div class="alert alert-danger" role="alert">
              <?= validation_errors();?>
            </div>
          <?php endif; ?>
          <form action="<?php echo base_url('admin/Pengaturan/addDataBU') ?>" method="post" >
          <div class="form-group">
            <label for="kodeinput">Kode Bidang Usaha</label>
            <input type="text" class="form-control" maxlength="5" id="kodeinput" name="kd_bidangusaha" placeholder="contoh : KBU01" required>
          </div>
          <div class="form-group">
            <label for="namainput">Nama Bidang Usaha</label>
            <input type="text" class="form-control" name="nama_bidangusaha" id="namainput" placeholder="Nama Bidang usaha" required>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" name="btn" value="Simpan">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<!-- Akhir Modal Tambah Data Bidang Usaha -->

<!-- Modal Edit bidang Usaha -->
<?php
$no =0;
foreach ($bu as $key => $data): $no++
?>

<div class="modal fade" id="editBU<?php echo $data->kd_bidangusaha ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data Bidang Usaha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <?php if (validation_errors()): ?>
            <div class="alert alert-danger" role="alert">
              <?= validation_errors();?>
            </div>
          <?php endif; ?>
          <form action="<?php echo base_url('admin/Pengaturan/EditBU'); ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="kodeinput">Kode Bidang Usaha</label>
            <input type="text" class="form-control" maxlength="5" id="kodeinput" name="kd_bidangusaha" placeholder="contoh : KBU01" required readonly value="<?php echo $data->kd_bidangusaha?>">
          </div>
          <div class="form-group">
            <label for="namainput">Nama Bidang Usaha</label>
            <input type="text" class="form-control" name="nama_bidangusaha" id="namainput" placeholder="Nama Bidang usaha" required value="<?php echo $data->nama_bidangusaha ?>">
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" name="btn" value="Simpan">
          <!-- <button type="button" class="btn btn-primary" id="saveDataBU" onclick="simpanDbu()" data-dismiss="modal">Simpan</button> -->
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<?php endforeach; ?>


<!-- Modal Tambah Tipe Usaha -->
<div class="modal fade" id="addDataTU">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Input Data Tipe Usaha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php if (validation_errors()): ?>
          <div class="alert alert-danger" role="alert">
            <?= validation_errors();?>
          </div>
        <?php endif; ?>
        <table>
          <tbody>
            <form class="" action="<?= base_url('admin/Pengaturan/addDataTU') ?>" method="post">
              <div class="form-group">
                <label for="kodeinput">Kode Tipe Usaha</label>
                <input type="text" class="form-control" id="kodeinput" maxlength="5" name="kd_tipeusaha" placeholder="contoh : KTU01" required>
              </div>
              <div class="form-group">
                <label for="namainput">Nama Tipe Usaha</label>
                <input type="text" class="form-control" name="nama_tipeusaha" id="namainput" placeholder="Nama Tipe usaha" required>
              </div>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" name="btn" value="Simpan">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>

</div>
<!-- Akhir Modal Tambah Tipe Usaha -->

<!-- Modal Edit Tipe Usaha -->
<?php
$no =0;
foreach ($tu as $key => $data): $no++
?>

<div class="modal fade" id="editTU<?php echo $data->kd_tipeusaha ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data Tipe Usaha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <?php if (validation_errors()): ?>
            <div class="alert alert-danger" role="alert">
              <?= validation_errors();?>
            </div>
          <?php endif; ?>
          <form action="<?php echo base_url('admin/Pengaturan/EditTU'); ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="kodeinput">Kode Bidang Usaha</label>
            <input type="text" class="form-control" maxlength="5" id="kodeinput" name="kd_tipeusaha" placeholder="contoh : KTU01" required readonly value="<?php echo $data->kd_tipeusaha?>">
          </div>
          <div class="form-group">
            <label for="namainput">Nama Bidang Usaha</label>
            <input type="text" class="form-control" name="nama_tipeusaha" id="namainput" placeholder="Nama Tipe usaha" required value="<?php echo $data->nama_tipeusaha ?>">
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" name="btn" value="Simpan">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<?php endforeach; ?>
<!-- Akhir Modal Edit Tipe Usaha -->

<!-- Modal Tambah Data Jenis Usaha -->
<div class="modal fade" id="addDataJU">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Input Data Jenis Usaha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php if (validation_errors()): ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors();?>
        </div>
      <?php endif; ?>
      <div class="modal-body">
        <table>
          <tbody>
            <form class="" action="<?= base_url('admin/Pengaturan/addDataJU') ?>" method="post">
              <div class="form-group">
                <label for="kodeinput">Kode jenis Usaha</label>
                <input type="text" class="form-control" id="kodeinput" maxlength="5" name="kd_jenisusaha" placeholder="contoh : KJU01" required>
              </div>
              <div class="form-group">
                <label for="namainput">Nama Jenis Usaha</label>
                <input type="text" class="form-control" name="nama_jenisusaha" id="namainput" placeholder="Nama Jenis usaha" required>
              </div>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" name="btn" value="Simpan">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Akhir Modal Jenis Usaha -->
<!-- Modal Edit Jenis Usaha -->
<?php
$no =0;
foreach ($ju as $key => $data): $no++
?>

<div class="modal fade" id="editJU<?php echo $data->kd_jenisusaha ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data Tipe Usaha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <?php if (validation_errors()): ?>
            <div class="alert alert-danger" role="alert">
              <?= validation_errors();?>
            </div>
          <?php endif; ?>
          <form action="<?php echo base_url('admin/Pengaturan/EditJU'); ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="kodeinput">Kode Bidang Usaha</label>
            <input type="text" class="form-control" maxlength="5" id="kodeinput" name="kd_jenisusaha" placeholder="contoh : KTU01" required readonly value="<?php echo $data->kd_jenisusaha?>">
          </div>
          <div class="form-group">
            <label for="namainput">Nama Bidang Usaha</label>
            <input type="text" class="form-control" name="nama_jenisusaha" id="namainput" placeholder="Nama Tipe usaha" required value="<?php echo $data->nama_jenisusaha ?>">
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" name="btn" value="Simpan">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<?php endforeach; ?>
<!-- Akhir Modal Edit Jenis Usaha -->

</div>
