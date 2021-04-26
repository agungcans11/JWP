<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
		* {
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
#box1{
    width:700px;
    height:400px;
    background-image: url('assets/kebutuhan/bg.png');
}
img.foto{
    border-radius: 50%;
}
			
</style>
<body>
<div id="box1">
    <div class="row">
        <div class="col-12" style="margin-top: 6%;">
            <h3 style="text-align: center;">Kartu Identitas Pemain (KIP)</h3>
        </div>
    </div>
    
    <div class="row">
        <div class="col-6" style="padding-bottom: 5%">
            <img src="assets/foto/<?=$pemain['foto']?>" class="foto" width="200px" alt="">
            <img src="assets/qr/<?=$pemain['qr_code']?>" style="position: absolute; left: 550px; top: 80px;" width="100px" alt="">
            <div class="row">
                <div class="col-6">
                    <img src="assets/kebutuhan/pssi.png" width="70px" alt="">
                    <img src="assets/kebutuhan/fossbat.png" style="padding-bottom: 5%" width="70px" alt="">
                </div>
            </div>
        </div>
        <h3>ID: <?=$pemain['id']?></h3>
        <span>NAMA: </span> <span style="font-weight: bold"><?=$pemain['nama']?></span><br><br>
        <span>ALAMAT: </span> <span style="font-weight: bold"><?=$pemain['alamat']?></span><br><br>
        <span>Handphone: </span> <span style="font-weight: bold"><?=$pemain['no_hp']?></span><br><br>
        <span>Berlaku Hingga: </span><span style="font-weight: bold">01/04/25</span><br>

    </div>
</div>

</body>
</html>