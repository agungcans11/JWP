<div class="container my-3">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card shadow">
                <div class="card-header font-weight-bold text-center">
                    <span>Hasil Pertandingan</span>
                </div>
                <div class="card-body">
                    <table class="text-center table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Klub</th>
                                <th>Skor</th>
                                <th>Kick-Off</th>
                                <th>Lokasi</th>
                                <th>*</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($hasil as $item) : ?>
                                <tr>
                                    <td><?=$item['tanggal']?></td>
                                    <td><?=$item['home']?> VS <?=$item['away']?></td>
                                    <td><?=$item['skor_home']?> VS <?=$item['skor_away']?></td>
                                    <td><?=$item['mulai']?></td>
                                    <td><?=$item['lokasi']?></td>
                                    <td>
                                        <a href="<?=site_url('admin/hasil_edit/' .$item['id_hasil'])?>" class="btn btn-warning">edit</a>
                                        <a href="<?=site_url('admin/hasil_delete/' .$item['id_hasil'])?>" class="btn btn-danger" >hapus</a>
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