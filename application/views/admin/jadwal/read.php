<div class="container my-3">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card shadow">
                <div class="card-header font-weight-bold text-center">
                    <a href="<?=site_url('admin/jadwal_add')?>" class="float-left btn btn-success">tambah</a>
                    <span>Jadwal Pertandingan</span>
                </div>
                <div class="card-body">
                    <table class="table text-center" id="jadwal">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Klub</th>
                                <th>Kick-Off</th>
                                <th>Lokasi</th>
                                <th>*</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($jadwal as $item) : ?>
                                <tr>
                                    <td><?=$item['tanggal']?></td>
                                    <td><?=$item['home']?> VS <?=$item['away']?></td>
                                    <td><?=$item['mulai']?></td>
                                    <td><?=$item['nama']?></td>
                                    <td>
                                        <a href="<?=site_url('admin/hasil_add/' .$item['id_jadwal'])?>" class="btn btn-primary">Selesai</a>
                                        <a href="<?=site_url('admin/jadwal_edit/' .$item['id_jadwal'])?>" class="btn btn-warning">edit</a>
                                        <a href="<?=site_url('admin/jadwal_delete/' .$item['id_jadwal'])?>" class="btn btn-danger">hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>