<div class="container-fluid my-3">
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?=site_url('home')?>" class="float-left ml-3 font-weight-bold my-3">Kembali</a>
                        <h3 class="text-center my-3">Detail</h3>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="float-left"><?=$detail['home']?></span>
                                    <span class="float-right"><?=$detail['skor_home']?></span>
                                </div>
                                <div class="col-md-6">
                                    <span class="float-left"><?=$detail['skor_away']?></span>
                                    <span class="float-right"><?=$detail['away']?></span>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item text-center">
                            <div class="row">
                                <div class="col-md-6 mx-auto">
                                    <span>Kick-Off : </span>
                                    <span><?=$detail['mulai']?></span>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item text-center">
                            <div class="row">
                                <div class="col-md-6 mx-auto">
                                    <span>Tanggal: </span>
                                    <span><?=$detail['tanggal']?></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header font-weight-bold text-center">
                    <span>Lokasi</span>
                </div>
                <div class="card-body text-center">
                    <h3><?=$detail['nama']?></h3>
                    <h4 class="text-secondary"><?=$detail['alamat']?></h4>
                    <div id="mapid" style="width: 700px; height: 400px;" class="mx-auto"></div>   
                </div>
            </div>
        </div>
    </div>
</div>



<script>
var curLocation=[0,0];
if (curLocation[0]==0 && curLocation[1]==0) {
	curLocation =[<?=$detail['latitude']?>, <?=$detail['longitude']?>];	
}

var mymap = L.map('mapid').setView([<?=$detail['latitude']?>, <?=$detail['longitude']?>], 16);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/streets-v11'
}).addTo(mymap);

mymap.attributionControl.setPrefix(false);
var marker = new L.marker(curLocation, {
	draggable:'true'
}).bindPopup("<?=$detail['nama']?>").openPopup();

marker.on('dragend', function(event) {
var position = marker.getLatLng();
marker.setLatLng(position,{
	draggable : 'true'
	}).bindPopup(position).update();
	$("#Latitude").val(position.lat);
	$("#Longitude").val(position.lng).keyup();
});

$("#Latitude, #Longitude").change(function(){
	var position =[parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
	marker.setLatLng(position, {
	draggable : 'true'
	}).bindPopup(position).update();
	mymap.panTo(position);
});
mymap.addLayer(marker);

</script>