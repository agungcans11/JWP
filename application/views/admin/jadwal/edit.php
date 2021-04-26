<div class="container my-3">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header font-weight-bold text-center">
                    <a href="<?=site_url('admin/jadwal')?>" class="btn btn-secondary float-left">Kembali</a>
                    <span>Edit Jadwal Pertandingan</span>
                </div>
                <div class="card-body">
                    <?=form_open('admin/jadwal_edit/' .$jadwal['id']);?>
                        <div class="form-group">
                            <label for="">Home</label>
                            <input type="text" class="form-control" name="home" value="<?=$jadwal['home']?>">
                            <input type="hidden" class="form-control" name="id" value="<?=$jadwal['id']?>">
                            <label for="">Away</label>
                            <input type="text" class="form-control" name="away" value="<?=$jadwal['away']?>">
                            <label for="">Kick-Off</label>
                            <input type="time" class="form-control" name="mulai" value="<?=$jadwal['mulai']?>">
                            <label for="">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="<?=$jadwal['tanggal']?>">
                            <label for="">Lokasi</label>
                            <select name="lokasi" id="" class="form-control">
                                <?php foreach($lokasi as $item) : ?>
                                    <?php if($item['id'] == $jadwal['lokasi_id'])?>
                                    <option value="<?=$item['id']?>"><?=$item['nama']?></option>
                                <?php endforeach ?>
                            </select>
                            <input type="submit" class="btn btn-success btn-block mt-2">
                        </div>
                    <?=form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>