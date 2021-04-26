<div class="container my-3">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card shadow" style="border-radius: 50px 50px 50px 50px">
                <div class="card-body text-secondary font-weight-bold text-center">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mt-5">
                                <img src="<?=base_url()?>assets/kebutuhan/fossbat.png" width="150" alt="">
                            </div>
                            <div class="col-md-4 mt-5">
                                <h3>SELAMAT DATANG DI FOSSBAT</h3>
                            </div>
                            <div class="col-md-4">
                                <img src="<?=base_url()?>assets/kebutuhan/pssi.png" width="150" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 my-3">
            <div class="card shadow" style="border-radius: 50px 50px 50px 50px">
                    <h3 class="text-center my-3">Berita</h3>
                <div class="card-body" style="border-radius: 50px 50px 50px 50px">
                    <div class="owl-carousel owl-theme">
                    <?php foreach($berita as $item1) : ?>
                        <div class="item">
                            <div class="card shadow-sm">
                            <img src="<?=base_url('assets/berita/' . $item1['gambar'])?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="text-dark font-weight-bold"><?=$item1['tanggal']?></p>
                                    <?php $num_char = 20; ?>
                                    <p class="card-text"><?= substr($item1['isi'], 0, $num_char) . '.....' ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 my-3" >
            <div class="card shadow" style="border-radius: 50px 50px 50px 50px">
                    <h3 class="text-center my-3">Hasil Pertandingan</h3>
                <div class="card-body" style="border-radius: 50px 50px 50px 50px">
                    <table class="table text-center" id="example">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>SSB</th>
                                <th>Skor</th>
                                <th>*</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($hasil as $item) : ?>
                            <tr>
                                <td><?=$item['tanggal']?></td>
                                <td><?=$item['home']?> VS <?=$item['away']?></td>
                                <td><?=$item['skor_home']?> VS <?=$item['skor_away']?></td>
                                <td>
                                    <a href="<?=site_url('home/hasil_detail/' . $item['id'])?>" class="font-weight-bold">Detail</a>
                                </td>
                            </tr>
                            <?php endforeach ;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

                            <!-- <?php foreach($hasil as $item) : ?>
                        <div class="row my-3">
                            <div class="col-sm-4">
                                <div class="card" style="border: none;">
                                    <div class="card-body">
                                        <h3 class="text-center"><?=$item['home']?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="border:none;">
                                    <div class="card-body text-center">
                                      <div class="row">
                                          <div class="col-sm-4">
                                        <h3><?=$item['skor_home']?></h3>
                                        </div>
                                        <div class="col-sm-4">
                                        <h3>VS</h3>
                                        <a href="<?=site_url('home/hasil_detail/' . $item['id'])?>" class="font-weight-bold">Detail</a>
                                        </div>
                                        <div class="col-sm-4">
                                        <h3><?=$item['skor_away']?></h3>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="border: none;">
                                    <div class="card-body">
                                        <h3 class="text-center"><?=$item['away']?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                            <?php endforeach;?> -->