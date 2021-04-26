<div class="container my-3">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                <?=form_open('admin/hasil_add/' .$hasil['id'])?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col text-center">
                                <span><?=$hasil['home']?></span>
                                <input type="number" class="form-control" min="0" name="skor_home" value="0">
                                <input type="hidden" class="form-control" min="0" name="lokasi_id" value="<?=$hasil['lokasi_id']?>">
                                <input type="hidden" class="form-control" min="0" name="home" value="<?=$hasil['home']?>">
                                <input type="hidden" class="form-control" min="0" name="away" value="<?=$hasil['away']?>">
                            </div>
                            <div class="col text-center">
                                <span><?=$hasil['away']?></span>
                                <input type="number" class="form-control" min="0" name="skor_away" value="0">
                            </div>
                        </div>
                        <label for="">Mulai</label>
                        <input type="time" class="form-control" name="mulai" value="<?=$hasil['mulai']?>" readonly>
                        <label for="">tanggal</label>
                        <input type="date" class="form-control" name="tanggal" value="<?=$hasil['tanggal']?>" readonly>
                        <label for="">Lokasi</label>
                        <input type="text" class="form-control" name="lokasi" value="<?=$lokasi['nama']?>" readonly>
                        <input type="submit" class="btn btn-success btn-block mt-2">
                    </div>
                <?=form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>