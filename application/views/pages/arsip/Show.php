    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Arsip Surat</h1>
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
              <div class="card card-primary">
                <div class="card-header">
                  <span class="card-title">Lihat Arsip Surat</span>
                </div>
                <?php foreach ($dataSurat as $data) : ?>
                  <div class="card-body">
                    <table class="table">
                      <tr>
                        <td>Nomor Surat</td>
                        <td>:</td>
                        <td><?= $data->nomor_surat ?></td>
                      </tr>
                      <tr>
                        <td>Kategori</td>
                        <td>:</td>
                        <td><?= $data->kategori ?></td>
                      </tr>
                      <tr>
                        <td>Judul</td>
                        <td>:</td>
                        <td><?= $data->judul ?></td>
                      </tr>
                      <tr>
                        <td>Waktu Unggah</td>
                        <td>:</td>
                        <td><?= $data->waktu_pengarsipan ?></td>
                      </tr>
                    </table>

                    <embed src="<?= base_url() . "assets/uploads/pdf/" . $data->file ?>" width="100%" height="400"></embed>
                  </div>
                  <div class="card-footer">
                    <a href="<?= base_url("menu/index") ?>" class="btn btn-primary">
                      <i class="fa fa-arrow-left" aria-hidden="true"></i>
                      <span>Kembali</span>
                    </a>
                    <a href="<?= base_url("menu/download/" . $data->id) ?>" class="btn btn-warning download">
                      <i class="fa fa-download" aria-hidden="true"></i>
                      <span>Unduh</span>
                    </a>
                    <a href="<?= base_url("menu/update/" . $data->id) ?>" class="btn btn-info">
                      <i class="fa fa-paperclip" aria-hidden="true"></i>
                      <span>Edit / Ganti File</span>
                    </a>
                  </div>

                <?php endforeach; ?>
              </div>
            </div>
            <!-- ./col -->
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>