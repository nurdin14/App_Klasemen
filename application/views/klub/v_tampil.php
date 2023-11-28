<div class="col">
    <div class="card">
        <div class="card-header">
            <a href="<?= site_url('klub/tambahKlub') ?>" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
             <?= $this->session->flashdata('pesan'); ?>
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Klub</th>
                        <th>Kota</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach($tampil as $t): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $t['nama']; ?></td>
                            <td><?= $t['kota']; ?></td>
                            <td>
                                <a href="<?= site_url('klub/edit/'. $t['id_klub']) ?>" class="btn btn-warning">Ubah</a>
                                <a href="<?= site_url('klub/hapus/'. $t['id_klub']) ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>