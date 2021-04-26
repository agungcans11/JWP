<div class="container my-3">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header text-center font-weight-bold">
                    <a href="<?=site_url('admin/pemain_detail/' . $pemain['id'])?>" class="float-left">Kembali</a>
                    <span>Tambah Riwayat Pendidikan</span>
                </div>
                <div class="card-body">
                    <?=form_open('admin/pendidikan_add/' .$pemain['id']);?>
                        <div class="form-group">
                            <label for="">SD</label>
                            <input type="hidden" class="form-control" name="pemain_id" value="<?=$pemain['id']?>">
                            <input type="text" class="form-control" name="sd">
                            <label for="">SMP</label>
                            <input type="text" class="form-control" name="smp">
                            <input type="submit" class="btn btn-success btn-block mt-2">
                        </div>
                    <?=form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>