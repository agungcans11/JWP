<div class="container my-3">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header font-weight-bold text-center">
                    <a href="<?=site_url('admin/hasil_read')?>" class="btn btn-secondary float-left">Kembali</a>
                    <span>Edit Hasil Pertandingan</span>
                </div>
                <div class="card-body">
                <?=form_open('admin/hasil_edit/' . $hasil['id_hasil'])?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col text-center">
                                <span><?=$hasil['home']?></span>
                                <input type="number" class="form-control" min="0" name="skor_home" value="<?=$hasil['skor_home']?>">
                                <input type="hidden" class="form-control" min="0" name="lokasi_id" value="<?=$hasil['lokasi_id']?>">
                                <input type="hidden" class="form-control" min="0" name="home" value="<?=$hasil['home']?>">
                                <input type="hidden" class="form-control" min="0" name="away" value="<?=$hasil['away']?>">
                                <input type="hidden" class="form-control" min="0" name="away" value="<?=$hasil['id_hasil']?>">
                            </div>
                            <div class="col text-center">
                                <span><?=$hasil['away']?></span>
                                <input type="number" class="form-control" min="0" name="skor_away" value="<?=$hasil['skor_away']?>">
                            </div>
                        </div>
                        <label for="">Mulai</label>
                        <input type="time" class="form-control" name="mulai" value="<?=$hasil['mulai']?>" readonly>
                        <label for="">tanggal</label>
                        <input type="date" class="form-control" name="tanggal" value="<?=$hasil['tanggal']?>" readonly>
                        <label for="">Lokasi</label>
                        <input type="text" class="form-control" name="lokasi" value="<?=$hasil['lokasi']?>" readonly>
                        <input type="submit" class="btn btn-success btn-block mt-2">
                    </div>
                <?=form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>