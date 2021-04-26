<div class="container my-3">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card shadow">
            <div class="card-header text-center font-weight-bold">
                <a href="<?=site_url('admin/pemain_add');?>" class="btn btn-success float-left">Tambah</a>
                <span>Data Pemain</span>
            </div>
                <div class="card-body">
                <table class="table" id="example">
                <thead class="text-center">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>SSB</th>
                        <th>*</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                <?php $no = 1; ?>
                <?php foreach($pemain as $item) : ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$item['nama']?></td>
                        <td><?=$item['ssb']?></td>
                        <td>
                            <a href="<?=site_url('admin/pemain_edit/' . $item['id'])?>" class="btn btn-warning">Edit</a>
                            <a href="<?=site_url('admin/pemain_detail/' . $item['id'])?>" class="btn btn-primary">Detail</a>
                            <a href="<?=site_url('admin/pemain_delete/'. $item['id'])?>" class="btn btn-danger">Hapus</a>
                            <a href="<?=site_url('admin/kartu/' . $item['id'])?>" class="btn btn-secondary">Cetak Kartu</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>