    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Ubah Arsip Surat</h1>
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
              <div class="card card-warning">
                <div class="card-header">
                  <span class="card-title">Ubah Arsip Surat Lama</span>
                </div>
                <form enctype="multipart/form-data" method="post" class="form-horizontal">
                  <?php foreach ($dataSurat as $data) : ?>
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nomor Surat</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Masukkan nomor surat" name="nomor_surat" value="<?= $data->nomor_surat ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kategori</label>

                        <div class="col-sm-10">
                          <select name="kategori" class="form-control">
                            <option value="Undangan" <?= $data->kategori == 'Undangan' ? 'selected' : '' ?>>Undangan</option>
                            <option value="Pengumuman" <?= $data->kategori == 'Pengumuman' ? 'selected' : '' ?>>Pengumuman</option>
                            <option value="Nota Dinas" <?= $data->kategori == 'Nota Dinas' ? 'selected' : '' ?>>Nota Dinas</option>
                            <option value="Pemberitahuan" <?= $data->kategori == 'Pemberitahuan' ? 'selected' : '' ?>>Pemberitahuan</option>
                          </select>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Masukkan judul surat" name="judul" value="<?= $data->judul ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">File Surat (PDF)</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="file_surat">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-warning">Submit</button>
                      <a href="<?= base_url("menu/index") ?>" class="btn btn-primary float-right">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        <span>Kembali</span>
                      </a>
                    </div>
                  <?php endforeach ?>
                </form>
              </div>
            </div>
            <!-- ./col -->
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>