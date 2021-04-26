<div class="container my-3">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                    <a href="<?=site_url('admin/berita_read')?>" class="btn btn-secondary">Kembali</a>
                </div>
                <div class="card-body">
                    <?=form_open_multipart('admin/berita_edit/' . $berita['id']) ;?>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="hidden" name="id" value="<?=$berita['id']?>">
                            <input type="date" class="form-control" name="tanggal" value="<?=$berita['tanggal']?>">
                            <img src="<?=base_url('assets/berita/' . $berita['gambar'])?>" class="mt-2" width="150" alt=""><br>
                            <label for="">Gambar</label>
                            <input type="hidden" name="old_gambar" value="<?=$berita['gambar']?>">
                            <input type="file" class="form-control-file" name="gambar"><br>
                            <label for="">Isi</label>
                            <textarea name="isi" class="form-control" id="" cols="30" rows="10"><?=$berita['isi']?></textarea>
                            <input type="submit" class="btn btn-success mt-2 btn-block">
                        </div>
                    <?=form_close() ;?>
                </div>
            </div>
        </div>
    </div>
</div>