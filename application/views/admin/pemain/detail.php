<div class="container my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header text-center font-weight-bold">
                    <a href="<?=site_url('admin/pemain_read')?>" class="float-left btn btn-secondary">Kembali</a>
                    <a href="<?=site_url('admin/formulir/'. $pemain['id'])?>" class="float-right btn btn-info">Cetak PDF</a>
                    <span>FORMULIR DATA DIRI PEMAIN</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>Nama Lengkap : <?=$pemain['nama']?></li>
                                <li>Nama Panggilan : <?=$pemain['panggilan']?></li>
                                <li>Tempat/Tgl Lahir : <?=$pemain['tempat_lahir']?>, <?=$pemain['tanggal_lahir']?></li>
                                <li>Alamat : <?=$pemain['alamat']?></li>
                                <li>SSB Pemain Saat Ini : <?=$pemain['ssb']?></li>
                                <li>Nama Ayah : <?=$pemain['nama_ayah']?></li>
                                <li>Nama Ibu : <?=$pemain['nama_ibu']?></li>
                                <li>Administrasi Pemain : <?=$pemain['administrasi_pemain']?></li>
                                <li>Golongan Darah : <?=$pemain['golongan_darah']?></li>
                                <li>Jenis Kelamin : <?=$pemain['jenis_kelamin']?></li>
                                <li>Berat Badan : <?=$pemain['bb']?></li>
                                <li>Tinggi Badan : <?=$pemain['tb']?></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <img src="<?=base_url()?>assets/foto/<?=$pemain['foto']?>" class="float-right mr-5" width="50%" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header text-center font-weight-bold">
                    <span>Riwayat Pendidikan Formal</span>
                    <a href="<?=site_url('admin/pendidikan_add/' .$pemain['id'])?>" class="btn btn-success float-right">+</a>
                </div>
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>SD</th>
                                <th>SMP</th>
                                <th>*</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($pendidikan as $item) : ?>
                            <tr>
                                <td><?=$item['sd']?></td>
                                <td><?=$item['smp']?></td>
                                <td>
                                    <a href="<?=site_url('admin/pendidikan_edit/' . $item['id'])?>" class="btn btn-warning">Edit</a>
                                    <a href="<?=site_url('admin/pendidikan_delete/' . $item['id'])?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center font-weight-bold">
                    <span>Riwayat Pendidikan Sepak Bola/Akademi Sepak Bola</span>
                    <a href="<?=site_url('admin/pendidikan_sepakbola_add/' . $pemain['id'])?>" class="btn btn-success float-right">+</a>
                </div>
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>Nama SSB</th>
                                <th>Kabupaten</th>
                                <th>Provinsi</th>
                                <th>Tahun</th>
                                <th>Posisi</th>
                                <th>*</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($pendidikan_sepakbola as $item2): ?>
                            <tr>
                                <td><?=$item2['ssb']?></td>
                                <td><?=$item2['kabupaten']?></td>
                                <td><?=$item2['provinsi']?></td>
                                <td><?=$item2['tahun']?></td>
                                <td><?=$item2['posisi']?></td>
                                <td>
                                    <a href="<?=site_url('admin/pendidikan_sepakbola_edit/' .$item2['id'])?>" class="btn btn-warning">Edit</a>
                                    <a href="<?=site_url('admin/pendidikan_sepakbola_delete/' .$item2['id'])?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center font-weight-bold">
                    <span>Prestasi Sepak Bola</span>
                    <a href="<?=site_url('admin/prestasi_sepakbola_add/' . $pemain['id'])?>" class="btn btn-success float-right">+</a>
                </div>
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>Nama SSB</th>
                                <th>Kompetisi</th>
                                <th>Prestasi</th>
                                <th>Tahun</th>
                                <th>Posisi</th>
                                <th>*</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($prestasi as $item3) : ?>
                            <tr>
                                <td><?=$item3['ssb']?></td>
                                <td><?=$item3['kompetisi']?></td>
                                <td><?=$item3['prestasi']?></td>
                                <td><?=$item3['tahun']?></td>
                                <td><?=$item3['posisi']?></td>
                                <td>
                                    <a href="<?=site_url('admin/prestasi_sepakbola_edit/' .$item3['id'])?>" class="btn btn-warning">Edit</a>
                                    <a href="<?=site_url('admin/prestasi_sepakbola_delete/' .$item3['id'])?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>