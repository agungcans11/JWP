<div class="container my-3">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header text-center font-weight-bold">
                <a href="<?=site_url('admin/pemain_read')?>" class="btn btn-secondary float-left">kembali</a>
                <span>Tambah Pemain</span>
                </div>
                <div class="card-body">
                    <?=form_open_multipart('admin/pemain_edit/' . $pemain['id']);?>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="hidden" name="id" class="form-control" value="<?=$pemain['id']?>">
                            <input type="text" class="form-control" name="nama" value="<?=$pemain['nama']?>">
                            <label for="">Nama Panggilan</label>
                            <input type="text" class="form-control" name="panggilan" value="<?=$pemain['panggilan']?>">
                            <label for="">No. Handphone</label>
                            <input type="number" class="form-control" name="no_hp" min="0" value="<?=$pemain['no_hp']?>">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="<?=$pemain['tempat_lahir']?>">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="<?=$pemain['tanggal_lahir']?>">
                            <label for="">SSB</label>
                            <input type="text" class="form-control" name="ssb" value="<?=$pemain['ssb']?>">
                            <label for="">Nama Ayah</label>
                            <input type="text" class="form-control" name="nama_ayah" value="<?=$pemain['nama_ayah']?>">
                            <label for="">Nama Ibu</label>
                            <input type="text" class="form-control" name="nama_ibu" value="<?=$pemain['nama_ibu']?>">
                            <label for="">Administrasi</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="administrasi_pemain" id="AKTE" value="AKTE" <?= ($pemain['administrasi_pemain'] == 'AKTE') ? 'checked="checked"': ''; ?>>
                                <label class="form-check-label" for="AKTE">AKTE</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="administrasi_pemain" id="NISN" value="NISN" <?= ($pemain['administrasi_pemain'] == 'NISN') ? 'checked="checked"': ''; ?>>
                                <label class="form-check-label" for="NISN">NISN</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="administrasi_pemain" id="KK" value="KK" <?= ($pemain['administrasi_pemain'] == 'KK') ? 'checked="checked"': ''; ?>>
                                <label class="form-check-label" for="KK">KK</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="administrasi_pemain" id="RAPORT" value="RAPORT" <?= ($pemain['administrasi_pemain'] == 'RAPORT') ? 'checked="checked"': ''; ?>>
                                <label class="form-check-label" for="RAPORT">RAPORT</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="administrasi_pemain" id="PASSPORT" value="PASSPORT" <?= ($pemain['administrasi_pemain'] == 'PASSPORT') ? 'checked="checked"': ''; ?>>
                                <label class="form-check-label" for="PASSPORT">PASSPORT</label>
                            </div><br><br>

                            <label for="">Golongan Darah</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="golongan_darah" id="A" value="A" <?= ($pemain['golongan_darah'] == 'A') ? 'checked="checked"': ''; ?>>
                                <label class="form-check-label" for="A">A</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="golongan_darah" id="B" value="B" <?= ($pemain['golongan_darah'] == 'B') ? 'checked="checked"': ''; ?>>
                                <label class="form-check-label" for="B">B</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="golongan_darah" id="AB" value="AB" <?= ($pemain['golongan_darah'] == 'AB') ? 'checked="checked"': ''; ?>>
                                <label class="form-check-label" for="AB">AB</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="golongan_darah" id="O" value="O" <?= ($pemain['golongan_darah'] == 'O') ? 'checked="checked"': ''; ?>>
                                <label class="form-check-label" for="O">O</label>
                            </div><br><br>
                            <label for="">Jenis Kelamin</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="Laki-Laki" value="Laki-Laki" <?= ($pemain['jenis_kelamin'] == 'Laki-Laki') ? 'checked="checked"': ''; ?>>
                                <label class="form-check-label" for="Laki-Laki">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="Perempuan" value="Perempuan" <?= ($pemain['jenis_kelamin'] == 'Perempuan') ? 'checked="checked"': ''; ?>>
                                <label class="form-check-label" for="Perempuan">Perempuan</label>
                            </div><br><br>
                            <label for="">Berat Badan</label>
                            <input type="number" class="form-control" name="bb" min="0" value="<?=$pemain['bb']?>">
                            <label for="">Tinggi Badan</label>
                            <input type="number" class="form-control" name="tb" min="0" value="<?=$pemain['tb']?>">
                            <label for="">Alamat</label>
                            <textarea name="alamat" class="form-control" id="" cols="30" rows="10"><?=$pemain['alamat']?></textarea>
                            <img src="<?=base_url()?>assets/foto/<?=$pemain['foto']?>" width="200" class="my-2" alt=""><br>
                            <input type="text" class="form-control" name="old_foto" value="<?=$pemain['foto']?>">
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