<div class="col">
    <div class="card">
        <div class="card-header">
            <a href="<?= site_url('score/tambah') ?>" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
             <?= $this->session->flashdata('pesan'); ?>
             <table class="table table-striped table-bordered">
                <?php foreach($tampil as $t):?>
                <tr>
                    <td align="center" style="width: 40%;">
                        <?= $t['klub_1']; ?><br>
                        <?= $t['score_1']; ?><br>
                        <?php 
                            if($t['status_1'] == 1) {
                                echo "Seri"; 
                            } else if($t['status_1'] == 0) {
                                echo "Kalah";
                            }else if($t['status_1'] == 3) {
                                echo "Menang";
                            }
                        ?>
                    </td>
                    <td align="center">vs</td>
                    <td align="center" style="width: 40%;">
                        <?= $t['klub_2']; ?><br>
                        <?= $t['score_2']; ?><br>
                        <?php 
                            if($t['status_2'] == 1) {
                                echo "Seri"; 
                            } else if($t['status_2'] == 0) {
                                echo "Kalah";
                            }else if($t['status_2'] == 3) {
                                echo "Menang";
                            }
                        ?>
                    </td>
                    <td>
                        <a href="<?= site_url('score/edit/'. $t['id_score']) ?>" class="btn btn-sm btn-warning">Ubah</a>
                        <a href="<?= site_url('score/hapus/'. $t['id_score']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
             </table>
        </div>
    </div>
</div>
</div>
</div>