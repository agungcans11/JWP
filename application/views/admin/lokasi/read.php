<div class="container my-3">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card shadow">
                <div class="card-header font-weight-bold text-center">
                    <a href="<?=site_url('admin/lokasi_add')?>" class="float-left btn btn-success">Tambah</a>
                    <span>Lokasi</span>
                </div>
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>*</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($lokasi as $item) : ?>
                            <tr>
                                <td><?=$item['nama']?></td>
                                <?php $num_char = 15; ?>
                                <td><?= substr($item['alamat'], 0, $num_char) . '.....' ?></td>
                                <td><?=$item['latitude']?></td>
                                <td><?=$item['longitude']?></td>
                                <td>
                                    <a href="<?=site_url('admin/lokasi_edit/' . $item['id'])?>" class="btn btn-warning">Edit</a>
                                    <a href="<?=site_url('admin/lokasi_delete/' . $item['id'])?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>