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
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-9 mx-auto d-table h-100">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-start">
                            <div class="col">
                            </div>
                            <div class="col">
                                <h1 class="h5">Form Edit</h1>
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
                                    Edit Data Mahasiswa
                                </div>
                                <?php if (validation_errors()) : ?>
                                    <div class="alert alert-danger alert-dismissible fade show pb-0" role="alert">
                                        <?= validation_errors() ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif ?>
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="<?= $editmahasiswa['id']; ?>">
                                    <div class="mb-3">
                                        <label for="nim" class="form-label">NIM</label>
                                        <input type="text" class="form-control" name="nim" id="nim" value="<?= $editmahasiswa['nim']; ?>" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="nama" value="<?= $editmahasiswa['nama']; ?>" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="program_studi" class="form-label">Program Studi</label>
                                        <input type="text" class="form-control" name="program_studi" id="program_studi" value="<?= $editmahasiswa['program_studi']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_hp" class="form-label">No HP</label>
                                        <input type="text" class="form-control" name="no_hp" id="no_hp" value="<?= $editmahasiswa['no_hp']; ?>">
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
        <div class="mt-3">
            <div class="col text-end">
                <p class="mb-0">Created by:</p>
                <p><strong>Muhammad Nazar Abdillah</strong></p>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>

</html>