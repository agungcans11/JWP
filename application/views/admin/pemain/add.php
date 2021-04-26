<div class="container my-3">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header text-center font-weight-bold">
                <a href="<?=site_url('admin/pemain_read')?>" class="btn btn-secondary float-left">kembali</a>
                <span>Tambah Pemain</span>
                </div>
                <div class="card-body">
                    <?=form_open_multipart('admin/pemain_add');?>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama">
                            <label for="">Nama Panggilan</label>
                            <input type="text" class="form-control" name="panggilan">
                            <label for="">No. Handphone</label>
                            <input type="number" class="form-control" name="no_hp">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir">
                            <label for="">SSB</label>
                            <input type="text" class="form-control" name="ssb">
                            <label for="">Nama Ayah</label>
                            <input type="text" class="form-control" name="nama_ayah">
                            <label for="">Nama Ibu</label>
                            <input type="text" class="form-control" name="nama_ibu">
                            <label for="">Administrasi</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="administrasi_pemain" id="AKTE" value="AKTE">
                                <label class="form-check-label" for="AKTE">AKTE</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="administrasi_pemain" id="NISN" value="NISN">
                                <label class="form-check-label" for="NISN">NISN</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="administrasi_pemain" id="KK" value="KK">
                                <label class="form-check-label" for="KK">KK</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="administrasi_pemain" id="RAPORT" value="RAPORT">
                                <label class="form-check-label" for="RAPORT">RAPORT</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="administrasi_pemain" id="PASSPORT" value="PASSPORT">
                                <label class="form-check-label" for="PASSPORT">PASSPORT</label>
                            </div><br><br>

                            <label for="">Golongan Darah</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="golongan_darah" id="A" value="A">
                                <label class="form-check-label" for="A">A</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="golongan_darah" id="B" value="B">
                                <label class="form-check-label" for="B">B</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="golongan_darah" id="AB" value="AB">
                                <label class="form-check-label" for="AB">AB</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="golongan_darah" id="O" value="O">
                                <label class="form-check-label" for="O">O</label>
                            </div><br><br>
                            <label for="">Jenis Kelamin</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="Laki-Laki" value="Laki-Laki">
                                <label class="form-check-label" for="Laki-Laki">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="Perempuan" value="Perempuan">
                                <label class="form-check-label" for="Perempuan">Perempuan</label>
                            </div><br><br>
                            <label for="">Berat Badan</label>
                            <input type="number" class="form-control" name="bb" min="0">
                            <label for="">Tinggi Badan</label>
                            <input type="number" class="form-control" name="tb" min="0">
                            <label for="">Alamat</label>
                            <textarea name="alamat" class="form-control" id="" cols="30" rows="10"></textarea>
                            <label for="">Foto</label>
                            <input type="file" name="foto" class="form-control-file">
                            <input type="submit" class="btn btn-success btn-block mt-3">
                        </div>
                    <?=form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>