<?php if($cek != 0 ) {  ?>
<div class="container my-5">
    <div class="col-md-12 mx-auto">
        <div class="card shadow" style="border-radius: 50px 50px 50px 50px">
            <div class="card-body">
                <table class="table table-bordered text-center" id="example">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>SSB</th>
                            <th>*</th>
                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    <tbody>
                    <?php foreach($hasil as $item) : ?>
                        <tr>
                            <td><?=$no++;?></td>
                            <td><?=$item['nama']?></td>
                            <td><?=$item['ssb']?></td>
                            <td>
                                <a href="<?=site_url('home/kartu/' . $item['id'])?>" class="btn btn-success">Cetak Kartu</a>
                                <a href="<?=site_url('home/formulir/' . $item['id'])?>" class="btn btn-primary">Cetak Formulir</a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php } else { ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <h1>'<?=$keyword?>' Tidak Ditemukan!</h1>
            </div>
        </div>
    </div>
<?php } ?>