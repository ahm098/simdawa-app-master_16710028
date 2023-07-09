<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Form Persyaratan</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('persyaratan') ?>" class="breadcrumb-link">Persyaratan/a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Persyaratan Beasiswa</li>
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
                        <a href="<?= base_url('persyaratan/tambah') ?>" class="btn btn-sm btn-success float-right">
                            <i class="fas fa-plus"></i> Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="mytabel">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Persyaratan</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($persyaratan as $row) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row->nama_persyaratan ?></td>
                                        <td><?= $row->keterangan ?></td>
                                        <td>
                                            <a href="<?= base_url('persyaratan/ubah/' . $row->id) ?>" class="btn btn-sm btn-info">
                                                <i class="fas fa-edit"></i> Ubah
                                            </a>
                                            <a href="<?= base_url('persyaratan/hapus/' . $row->id) ?>" class="btn btn-sm btn-danger" onclick="deleteData('<?= $row->id ?>')">
                                                <i class="fas fa-trash"></i> Hapus
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
