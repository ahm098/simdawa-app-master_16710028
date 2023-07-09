<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Jenis Beasiswa</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('jenis') ?>" class="breadcrumb-link">Jenis Beasiswa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Jenis Beasiswa</li>
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
                        <a href="<?= base_url('jenis/tambah') ?>" class="btn btn-sm btn-success float-right">
                            <i class="fas fa-plus"></i> Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="mytabel">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Beasiswa</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($jenis as $a) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $a->nama_jenis ?></td>
                                        <td><?= $a->keterangan ?></td>
                                        <td>
                                            <a href="<?= base_url('jenis/ubah/' . $a->id) ?>" class="btn btn-sm btn-info">
                                                <i class="fas fa-edit"></i> Ubah
                                            </a>
                                            <a href="<?= base_url('jenis/hapus/' . $a->id) ?>" class="btn btn-sm btn-danger" onclick="deleteData('<?= $a->id ?>')">
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

<script>
    function deleteData(id) {
        if (confirm('Ingin hapus data ini?')) {
            // Lakukan proses penghapusan data berdasarkan id
            // Misalnya dengan menggunakan AJAX untuk mengirim permintaan penghapusan ke server
            // Setelah penghapusan berhasil, bisa lakukan refresh halaman atau manipulasi DOM untuk menghapus baris data dari tabel
        }
    }
</script>
