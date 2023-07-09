<!--
jenis_create.php
-->
 
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Tambah Data Persyaratan Beasiswa </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('persyaratan') ?>" class="breadcrumb-link">Persyaratan Beasiswa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Persyaratan Beasiswa
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="nama_persyaratan" class="col-md-2">Jenis Persyaratan</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama_persyaratan" required placeholder="Persyaratan" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="keterangan" class="col-md-2">Keterangan</label>
                                <div class="col-md-10">
                                    <input type="text" name="keterangan" required placeholder="Keterangan" class="form-control">
                                </div>
                            </div>
                            <a href="<?= base_url('jenis') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                            <button type="submit" name="create" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
<!--
jenis_update.php
-->
 
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Jenis Beasiswa </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('jenis') ?>" class="breadcrumb-link">Jenis Beasiswa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Perbaharui Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        Perbaharui Data Jenis Beasiswa
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <input type="hidden" name="id" value="<?= $jenis->id ?>">
                                <label for="nama_jenis" class="col-md-2">Nama Jenis Beasiswa</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama_jenis" required placeholder="Nama Jenis Beasiswa" value="<?= $jenis->nama_jenis ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="keterangan" class="col-md-2">Keterangan</label>
                                <div class="col-md-10">
                                    <input type="text" name="keterangan" required placeholder="Keterangan" value="<?= $jenis->keterangan ?>" class="form-control">
                                </div>
                            </div>
                            <a href="<?= base_url('persyaratan') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                            <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 