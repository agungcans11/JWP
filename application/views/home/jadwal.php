<div class="container my-3">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card shadow" style="border-radius: 50px 50px 50px 50px">
                    <h3 class="text-center my-3">Jadwal Pertandingan</h3>
                <div class="card-body">
                    <table class="table table-bordered text-center" id="example">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Kick-Off</th>
                                <th>SSB</th>
                                <th>Lokasi</th>
                                <th>*</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($jadwal as $item) : ?>
                            <tr>
                                <td><?=$item['tanggal']?></td>
                                <td><?=$item['mulai']?></td>
                                <td><?=$item['home']?> vs <?=$item['away']?></td>
                                <td><?=$item['nama']?></td>
                                <td>
                                    <a href="<?=site_url('home/jadwal_map/' . $item['lokasi_id'])?>" class="btn btn-success">MAP</a>
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
