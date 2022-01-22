<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link href="<?= base_url('assets/'); ?>/vendor/css/all.css" rel="stylesheet">

  <title><?= $title; ?></title>
</head>

<body class="bg-secondary">



  <div class="container-fluid">

    <div class="text-center">


      <div class="row align-items-start">
        <div class="col">
          <a href="<?= base_url('mahasiswa'); ?>" class="btn btn-info btn-sm mt-5 mb-3 mr-1 float-left">&nbsp;&nbsp;Data Mahasiswa</a>
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

        <div class="row mb-2">
          <div class="col-lg-0 d-flex ml-4">
            <img src="<?= base_url('assets/img/default.svg'); ?>" class="rounded-circle mt-2" width="35px" height="35px" />
          </div>
          <div class="col-lg">
          <p class="mb-0">Created by:</p>
            <p><strong>Muhammad Nazar Abdillah</strong></p>
          </div>
        </div>



      </div>
    </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
  <script defer src="<?= base_url('assets/'); ?>/vendor/js/all.js"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>

</html>