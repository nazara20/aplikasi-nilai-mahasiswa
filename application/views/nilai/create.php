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
                                <a href="<?= base_url('nilai'); ?>" class="btn btn-secondary btn-sm">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-7 mx-auto">
                                <div class="alert alert-info" role="alert">
                                    Tambah Data Nilai....
                                </div>
                                <?php if (validation_errors()) : ?>
                                    <div class="alert alert-danger alert-dismissible fade show pb-0" role="alert">
                                        <?= validation_errors() ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif ?>
                                <form action="<?= base_url('nilai/create') ?>" method="post">
                                    <div class="mb-3">
                                        <label for="mahasiswa" class="form-label">Mahasiswa</label>
                                       
                                        <select name="mahasiswa" id="mahasiswa" class="form-control">
                                            <?php foreach ($nilaiselect as $nlis) : ?>
                                            <option class="" value="<?= $nlis['nama']; ?>"><?= $nlis['nama']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
                                        <input type="text" class="form-control" name="mata_kuliah" id="mata_kuliah" value="<?= set_value('mata_kuliah') ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nilai" class="form-label">Nilai</label>
                                        <input type="text" class="form-control" name="nilai" id="nilai" value="<?= set_value('nilai') ?>">
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