<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data UMKM</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Data</a></div>
                <div class="breadcrumb-item">Data UMKM</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data UMKM</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                No
                                            </th>
                                            <th>Nama Pemilik</th>
                                            <th>Nama Usaha</th>
                                            <th>Jenis Usaha</th>
                                            <th>Pendapatan/Bulan</th>
                                            <th>Tanggal Pelaporan</th>
                                            <th>Detail</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>

                                      <?php
                                      $no = 1;
                                      foreach ($users->result() as $u => $data):?>
                                       <tr>
                                         <td><?php echo $no++?></td>
                                         <td><?php echo $data->nama_pemilik?></td>
                                         <td><?php echo $data->nama_usaha?></td>
                                         <td><?php echo $data->jenis_usaha?></td>
                                         <td><?php echo $data->pendapatan?></td>
                                         <td><?php echo indo_date($data->created_at)?></td>
                                         <td><button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-detail">Detail</button></td>
                                         <!-- <td><button type="button" class="btn btn-primary btn-sm" onclick="dumkm('<?php echo $u['id'] ?>')" ><i class="fas fa-pen"></i> Edit</button>
                                         <button type="button" class="btn btn-danger btn-sm" onclick="dumkm('<?php echo $u['id'] ?>')" ><i class="fas fa-trash"></i>Delete</button></td> -->
                                       </tr>
                                     <?php endforeach ?>
                                    </tbody>
                                    <tfooter>
                                      <tr>
                                          <th class="text-center">
                                              No
                                          </th>
                                          <th>Nama Pemilik</th>
                                          <th>Nama Usaha</th>
                                          <th>Jenis Usaha</th>
                                          <th>Pendapatan/Bulan</th>
                                          <th>Tanggal Pelaporan</th>
                                          <th>Detail</th>
                                          <!-- <th>Action</th> -->
                                      </tr>
                                    </tfooter>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<div class="modal fade" id="modal-detail">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Data Pelapor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table>
          <tbody>
            <tr>
              <th></th>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>

  </div>
</div>
