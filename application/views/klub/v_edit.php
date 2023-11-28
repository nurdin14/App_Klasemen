<div class="col">
    <div class="card">
        <div class="card-header">
            Form Ubah Klub
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Klub</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id_klub" value="<?= $tampil['id_klub'] ?>">
                        <input type="text" class="form-control" name="nama" value="<?= $tampil['nama'] ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">kota</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kota" value="<?= $tampil['kota'] ?>" required>
                    </div>
                </div>
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>