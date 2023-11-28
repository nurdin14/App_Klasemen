<div class="col">
    <div class="card">
        <div class="card-header">
            Form Tambah Score
        </div>
        <div class="card-body">
            <form action="<?= base_url('score/aksi_tambah') ?>" method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Klub 1</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="id_score">
                            <select name="klub_1" id="select2" class="form-control" required>
                                <option>-- Silahkan Pilih --</option>
                                <?php foreach($tampil as $t): ?>
                                <option value="<?= $t['nama'] ?>"><?= $t['nama'] ?> - <?= $t['kota'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Score 1</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="score_1" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Ket</label>
                        <div class="col-sm-10">
                            <select name="status_1" class="form-control">
                                <option>-- Silahkan Pilih --</option>
                                <option value="1">Seri</option>
                                <option value="0">Kalah</option>
                                <option value="3">Menang</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Klub 2</label>
                        <div class="col-sm-10">
                            <select name="klub_2" id="select2" class="form-control" required>
                                <option>-- Silahkan Pilih --</option>
                                <?php foreach($tampil as $t): ?>
                                <option value="<?= $t['nama'] ?>">
                                    <?= $t['nama'] ?> -
                                    <?= $t['kota'] ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Score 2</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="score_2" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Ket</label>
                        <div class="col-sm-10">
                            <select name="status_2" class="form-control">
                                <option>-- Silahkan Pilih --</option>
                                <option value="1">Seri</option>
                                <option value="0">Kalah</option>
                                <option value="3">Menang</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>