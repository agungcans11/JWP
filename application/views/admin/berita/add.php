<div class="container my-3">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                    <a href="<?=site_url('admin/berita_read')?>" class="btn btn-secondary">Kembali</a>
                </div>
                <div class="card-body">
                    <?=form_open_multipart('admin/berita_add') ;?>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" required>
                            <label for="">Gambar</label>
                            <input type="file" class="form-control-file" name="gambar"><br>
                            <label for="">Isi</label>
                            <textarea name="isi" class="form-control" id="" cols="30" rows="10" required></textarea>
                            <input type="submit" class="btn btn-success mt-2 btn-block">
                        </div>
                    <?=form_close() ;?>
                </div>
            </div>
        </div>
    </div>
</div>