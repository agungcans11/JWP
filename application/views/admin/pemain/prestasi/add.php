<div class="container my-3">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header text-center font-weight-bold">
                    <a href="<?=site_url('admin/pemain_detail/' . $pemain['id'])?>" class="float-left">Kembali</a>
                    <span>Prestasi Sepak Bola</span>
                </div>
                <div class="card-body">
                    <?=form_open('admin/prestasi_sepakbola_add/' . $pemain['id']);?>
                        <div class="form-group">
                            <label for="">Nama SSB</label>
                            <input type="hidden" class="form-control" name="pemain_id" value="<?=$pemain['id']?>">
                            <input type="text" class="form-control" name="ssb">
                            <label for="">Kompetisi</label>
                            <input type="text" class="form-control" name="kompetisi">
                            <label for="">Prestasi</label>
                            <input type="text" class="form-control" name="prestasi">
                            <label for="">Tahun</label>
                            <input type="text" class="form-control" name="tahun">
                            <label for="">Posisi</label>
                            <input type="text" class="form-control" name="posisi">
                            <input type="submit" class="btn btn-success btn-block mt-2">
                        </div>
                    <?=form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>