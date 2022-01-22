  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-sm-10 col-md-8 col-lg-9 mx-auto d-table h-100">
        <div class="card">
          <div class="card-header">
            <div class="row align-items-start">
              <div class="col">
              </div>
              <div class="col">
                <h1 class="h5">Form Tambah</h1>
              </div>
              <div class="col text-end">
                <a href="<?= base_url('mahasiswa'); ?>" class="btn btn-secondary btn-sm">Back</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-7 mx-auto">
                <div class="alert alert-info" role="alert">
                  Tambah Data Mahasiswa....
                </div>
                <?php if (validation_errors()) : ?>
                  <div class="alert alert-danger alert-dismissible fade show pb-0" role="alert">
                    <?= validation_errors() ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php endif ?>
                <form action="<?= base_url('mahasiswa/create') ?>" method="post">
                  <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" name="nim" id="nim" value="<?= set_value('nim') ?>" placeholder="input your NIM...">
                  </div>
                  <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?= set_value('nama') ?>" placeholder="input nama name...">
                  </div>
                  <div class="mb-3">
                    <label for="program_studi" class="form-label">Program Studi</label>
                    <input type="text" class="form-control" name="program_studi" id="program_studi" value="<?= set_value('program_studi') ?>" placeholder="input your project leader...">
                  </div>
                  <div class="mb-3">
                    <label for="no_hp" class="form-label">No HP</label>
                    <input type="text" class="form-control" name="no_hp" id="no_hp" value="<?= set_value('no_hp') ?>" placeholder="input your email...">
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>