  <div class="container-fluid">
    <div class="text-center">
      <div class="row align-items-start">
        <div class="col">
          <a href="<?= base_url('nilai'); ?>" class="btn btn-dark btn-sm mt-5 mb-3 mr-1 float-left">&nbsp;&nbsp;Data Nilai Mahasiswa</a>
        </div>
        <div class="col">
          <h1 class="h5 mt-5 mb-3">Data Mahasiswa</h1>
        </div>
        <div class="col float-right">
          <a href="<?= base_url('mahasiswa/create'); ?>" class="btn btn-light btn-sm mt-5 mb-3 mr-1 float-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Data</a>
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
                  <th>NIM</th>
                  <th>NAMA</th>
                  <th>PROGRAM STUDI</th>
                  <th>NO HP</th>
                  <th>ACTION</th>
                </tr>
                <tr>
                  <?php $i = 1;
                  foreach ($mahasiswa as $mhs) : ?>
                    <td><?= $i; ?></td>
                    <td><?= $mhs['nim']; ?></td>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['program_studi']; ?></td>
                    <td><?= $mhs['no_hp']; ?></td>
                    <td>
                      <a onclick="return confirm('apakah anda yakin?')" href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                      <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-pen"></i></a>
                      <a href="<?= base_url(); ?>mahasiswa/inputnilai/<?= $mhs['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-spell-check"></i><small>Input Nilai</small></a>
                    </td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
              </table>
            </div>
          </div>
        </div>
