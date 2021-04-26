<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>* {
        box-sizing: border-box;
    }

    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    [class*="col-"] {
        float: left;
        padding: 15px;
    }

    .col-1 {
        width: 8.33%;
    }

    .col-2 {
        width: 16.66%;
    }

    .col-3 {
        width: 25%;
    }

    .col-4 {
        width: 33.33%;
    }

    .col-5 {
        width: 41.66%;
    }

    .col-6 {
        width: 50%;
    }

    .col-7 {
        width: 58.33%;
    }

    .col-8 {
        width: 66.66%;
    }

    .col-9 {
        width: 75%;
    }

    .col-10 {
        width: 83.33%;
    }

    .col-11 {
        width: 91.66%;
    }

    .col-12 {
        width: 100%;
    }

    html {
        font-family: "Lucida Sans", sans-serif;
    }

    .header {
        background-color: green;
        color: #ffffff;
        padding: 15px;
    }


table, th, td {
  border: 1px solid black;
}
table {
  width: 100%;
  border-collapse: collapse;
}
ul.demo {
  list-style-type: none;
  margin: 2;
  padding: 2;
}
</style>

<body>
    <div class="header" style="text-align: center;">
        <h1>FORMULIR DATA DIRI PEMAIN</h1>
    </div>

    <div class="row">
        <div class="col-6">
            <ul class="demo">
                <li>NAMA LENGKAP : <?=$pemain['nama']?></li>
                <li>NAMA PANGGILAN :<?=$pemain['panggilan']?></li>
                <li>JENIS KELAMIN : <?=$pemain['jenis_kelamin']?></li>
                <li>TEMPAT/TGL LAHIR : <?=$pemain['tempat_lahir']?>,<?=$pemain['tanggal_lahir']?></li>
                <li>NO. HP : <?=$pemain['no_hp']?></li>
                <li>ALAMAT : <?=$pemain['alamat']?></li>
                <li>SSB PEMAIN SAAT INI : <?=$pemain['ssb']?></li>
                <?php if ($pemain['nama_ayah'] != NULL) { ?>
                    <li>NAMA AYAH : <?=$pemain['nama_ayah']?></li>
                <?php } else { ?>
                    <li>-</li>
                <?php } ?>
                <?php if ($pemain['nama_ibu'] != NULL) { ?>
                    <li>NAMA IBU : <?=$pemain['nama_ibu']?></li>
                <?php } else { ?>
                    <li>-</li>
                <?php } ?>
                <li>ADMINISTRASI PEMAIN : <?=$pemain['administrasi_pemain']?></li>
                <li>GOLONGAN DARAH : <?=$pemain['golongan_darah']?></li>
                <li>BERAT BADAN : <?=$pemain['bb']?></li>
                <li>TINGGI BADAN : <?=$pemain['tb']?></li>
            </ul>
        </div>
        <div class="col-6">
            <img src="assets/foto/<?=$pemain['foto']?>" width="50%" alt="">
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <table style="text-align: center">
                <tr>
                    <th>SD</th>
                    <th>SMP</th>
                </tr>
            <?php foreach($pendidikan as $item) : ?>
                <tr>
                    <td><?=$item['sd']?></td>
                    <td><?=$item['smp']?></td>
                </tr>
            <?php endforeach ?>  
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table style="text-align: center">
                <tr>
                    <th>NAMA SSB</th>
                    <th>KABUPATEN</th>
                    <th>PROVINSI</th>
                    <th>TAHUN</th>
                    <th>POSISI</th>
                </tr>
            <?php foreach($pendidikan_sepakbola as $item2): ?>
                <tr>
                    <td><?=$item2['ssb']?></td>
                    <td><?=$item2['kabupaten']?></td>
                    <td><?=$item2['provinsi']?></td>
                    <td><?=$item2['tahun']?></td>
                    <td><?=$item2['posisi']?></td>
                </tr>
            <?php endforeach ?> 
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table style="text-align: center">
                <tr>
                    <th>NAMA SSB</th>
                    <th>KOMPETISI</th>
                    <th>PRESTASI</th>
                    <th>TAHUN</th>
                    <th>POSISI</th>
                </tr>
            <?php foreach($prestasi as $item3) : ?>
                <tr>
                    <td><?=$item3['ssb']?></td>
                    <td><?=$item3['kompetisi']?></td>
                    <td><?=$item3['prestasi']?></td>
                    <td><?=$item3['tahun']?></td>
                    <td><?=$item3['posisi']?></td>
                </tr>
            <?php endforeach ?>
            </table>
        </div>
    </div>

    <h3 style="text-align: center">Dengan ini setuju untuk ikut serta dalam LIGA U13 FOSSBAT</h3><br>
    <h3 style="text-align: center">Batam,............ 2021</h3>
    <div class="row" style="text-align: center">
        <div class="col-4">
            <p><?=$pemain['nama']?></p>
            <p>(PEMAIN)</p>
        </div>
        <div class="col-4">
            <p>....................</p>
            <p>(MANAGER TIM)</p>                
        </div>
        <div class="col-4">
            <?php if($pemain['nama_ayah'] != NULL) { ?>
            <p><?=$pemain['nama_ayah']?></p>
            <?php } else { ?>
                <p><?=$pemain['nama_ibu']?></p>
                <?php } ?>
            <p>(ORANG TUA/WALI)</p>
        </div>
    </div>
</body>

</html>