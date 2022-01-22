  <div class="container-fluid">
    <div class="text-center">
      <div class="row align-items-start">
        <div class="col">
          <a href="<?= base_url('mahasiswa'); ?>" class="btn btn-dark btn-sm mt-5 mb-3 mr-1 float-left">&nbsp;&nbsp;Kembali ke Data Mahasiswa</a>
        </div>
        <div class="col">
          <h1 class="h5 mt-5 mb-3">Data Nilai Mahasiswa</h1>
        </div>
        <div class="col float-right">
          <a href="<?= base_url('nilai/create'); ?>" class="btn btn-light btn-sm mt-5 mb-3 mr-1 float-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Data</a>
        </div>
      </div>
      <?php if ($this->session->flashdata('message')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?= $this->session->flashdata('message'); ?>.
        </div>
      <?php endif; ?>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-borderless" style="width: 100%">
                <tr class="bg-secondary">
                  <th>NO</th>
                  <th>NAHASISWA</th>
                  <th>MATA KULIAH</th>
                  <th>NILAI</th>
                  <th>GRADE</th>
                  <th>ACTION</th>
                </tr>
                <tr>
                  <?php $i = 1;
                  foreach ($nilai as $nli) : ?>
                    <td><?= $i; ?></td>
                    <td><?= $nli['mahasiswa']; ?></td>
                    <td><?= $nli['mata_kuliah']; ?></td>
                    <td><?= $nli['nilai']; ?></td>
                    <td><?= $nli['grade']; ?></td>
                    <td>
                      <a onclick="return confirm('apakah anda yakin?')" href="<?= base_url(); ?>nilai/hapus/<?= $nli['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                      <a href="<?= base_url(); ?>nilai/edit/<?= $nli['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-pen"></i></a>
                    </td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
              </table>
            </div>
          </div>
        </div>