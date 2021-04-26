<div class="container my-3">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header text-center font-weight-bold">
                    <a href="<?=site_url('admin/pemain_detail/' . $pemain['id'])?>" class="float-left">Kembali</a>
                    <span>Riwayat Pendidikan Sepak Bola</span>
                </div>
                <div class="card-body">
                    <?=form_open('admin/pendidikan_sepakbola_edit/' . $pemain['id']);?>
                        <div class="form-group">
                            <label for="">Nama SSB</label>
                            <input type="hidden" class="form-control" name="id" value="<?=$pemain['id']?>">
                            <input type="hidden" class="form-control" name="pemain_id" value="<?=$pemain['pemain_id']?>">
                            <input type="text" class="form-control" name="ssb" value="<?=$pemain['ssb']?>">
                            <label for="">Kabupaten</label>
                            <input type="text" class="form-control" name="kabupaten" value="<?=$pemain['kabupaten']?>">
                            <label for="">Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" value="<?=$pemain['provinsi']?>">
                            <label for="">Tahun</label>
                            <input type="text" class="form-control" name="tahun" value="<?=$pemain['tahun']?>">
                            <label for="">Posisi</label>
                            <input type="text" class="form-control" name="posisi" value="<?=$pemain['posisi']?>">
                            <input type="submit" class="btn btn-success btn-block mt-2">
                        </div>
                    <?=form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>