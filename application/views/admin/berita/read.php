<div class="container my-3">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card shadow">
                <div class="card-header text-center font-weight-bold">
                    <a href="<?=site_url('admin/berita_add')?>" class="btn btn-success float-left">Tambah</a>
                    <span>Berita</span>
                </div>
                <div class="card-body">
                    <table class="table text-center" id="example">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Gambar</th>
                                <th>Isi</th>
                                <th>*</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($berita as $item) : ?>
                            <tr>
                                <td><?=$item['tanggal']?></td>
                                <td><img src="<?=base_url('assets/berita/' . $item['gambar'] )?>" width="200" alt=""></td>
                                <?php $num_char = 20; ?>
                                <td><?= substr($item['isi'], 0, $num_char) . '.....' ?></td>
                                <td>
                                    <a href="<?=site_url('admin/berita_edit/' . $item['id'])?>" class="btn btn-warning">Edit</a>
                                    <a href="<?=site_url('admin/berita_delete/' . $item['id'])?>" class="btn btn-danger" >Hapus</a>
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