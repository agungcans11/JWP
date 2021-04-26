<div class="container my-3">
    <div class="row">
        <div class="col-md-8">
            <div id="mapid" style="width: 700px; height: 400px;" class="mx-auto"></div>   
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header font-weight-bold text-center">
                    <a href="<?=site_url('admin/lokasi_read')?>" class="btn btn-secondary float-left">Kembali</a>
                    <span>Edit Lokasi</span>
                </div>
                <div class="card-body">
                    <?=form_open('admin/lokasi_edit/' . $lokasi['id']);?>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="hidden" class="form-control" name="id" value="<?=$lokasi['id']?>">
                            <input type="text" class="form-control" name="nama" value="<?=$lokasi['nama']?>">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="<?=$lokasi['alamat']?>">
                            <label for="">Latitude</label>
                            <input id="Latitude" type="text" class="form-control" name="latitude" value="<?=$lokasi['latitude']?>" readonly>
                            <label for="">Longitude</label>
                            <input id="Longitude" type="text" class="form-control" name="longitude" value="<?=$lokasi['longitude']?>" readonly>
                            <input type="submit" class="btn btn-success btn-block mt-2">
                        </div>
                    <?=form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
var curLocation=[0,0];
if (curLocation[0]==0 && curLocation[1]==0) {
	curLocation =[<?=$lokasi['latitude']?>, <?=$lokasi['longitude']?>];	
}

var mymap = L.map('mapid').setView([<?=$lokasi['latitude']?>, <?=$lokasi['longitude']?>], 16);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/streets-v11'
}).addTo(mymap);

mymap.attributionControl.setPrefix(false);
var marker = new L.marker(curLocation, {
	draggable:'true'
}).bindPopup("<?=$lokasi['nama']?>").openPopup();

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