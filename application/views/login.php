<div class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow bg-light">
                <div class="card-body">
                    <?= form_open('auth/aksi_login') ;?>
                        <div class="form-group">
                            <label for="">username</label>
                            <input type="text" class="form-control" name="username" autocomplete="off" required>
                            <label for="">password</label>
                            <input type="password" class="form-control" name="password" required>
                            <input type="submit" class="btn btn-secondary btn-block mt-3">
                            <a href="<?=site_url('home')?>" class="btn btn-light font-weight-bold btn-block mt-3">Kembali Ke Beranda</a>
                        </div>
                    <?=form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>