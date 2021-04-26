<div class="container my-3">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header font-weight-bold text-center">
                    <a href="<?=site_url('admin/jadwal')?>" class="btn btn-secondary float-left">Kembali</a>
                    <span>Tambah Jadwal Pertandingan</span>
                </div>
                <div class="card-body">
                    <?=form_open('admin/jadwal_add');?>
                        <div class="form-group">
                            <label for="">Home</label>
                            <input type="text" class="form-control" name="home">
                            <label for="">Away</label>
                            <input type="text" class="form-control" name="away">
                            <label for="">Kick-Off</label>
                            <input type="time" class="form-control" name="mulai">
                            <label for="">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal">
                            <label for="">Lokasi</label>
                            <select name="lokasi" id="" class="form-control">
                                    <option value="0">-</option>
                                <?php foreach($lokasi as $item) : ?>
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