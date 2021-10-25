    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Arsip Surat</h1>
              <br>
              <h3>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.</h3> <br>
              <h3>Klik "Lihat" pada kolom aksi untuk menampilkan surat</h3>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><?= $pageTitle ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-body p-0">
                    <a href="<?= base_url("menu/create") ?>" class="btn btn-secondary">
                      &nbsp;&nbsp;
                      <span>Arsipkan Surat...</span>
                    </a>
                    <br><br>
                    <form method="POST">
                      <div class="input-group mb-3">
                        <input type="text" name="search" placeholder="Judul Surat. . ." class="form-control" value="<?= $searchVal ?>">
                        <div class="input-group-append">
                          <button class="btn btn-outline-info" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <span>Cari Surat</span>
                          </button>
                        </div>
                      </div>
                    </form>
                    <br>
                    <table class="table table-sm table-bordered table-hover" id="arsipTable">
                      <thead>
                        <th>#</th>
                        <th>Nomor Surat</th>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th>Waktu Pengarsipan</th>
                        <th style="width:20%;">Aksi</th>
                      </thead>
                      <tbody>
                        <?php $no = 1;
                        foreach ($dataSurat as $data) : ?>
                          <tr id="<?= $data->id; ?>">
                            <td><?= $no++ ?></td>
                            <td><?= $data->nomor_surat ?></td>
                            <td><?= $data->kategori ?></td>
                            <td><?= $data->judul ?></td>
                            <td><?= $data->waktu_pengarsipan ?></td>
                            <td>
                              <button onclick="confirmHapus(<?= $data->id; ?>)" class="btn btn-danger hapus">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                                <span>Hapus</span>
                              </button>
                              <a href="<?= base_url("menu/download/" . $data->id) ?>" class="btn btn-warning download">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                <span>Unduh</span>
                              </a>
                              <a href="<?= base_url("menu/show/$data->id"); ?>" class="btn btn-primary">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <span>Lihat</span>
                              </a>
                            </td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- ./col -->
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>