<div class="container my-3">
      <div class="row">
          <div class="col-md-8 mx-auto">
              <div class="card shadow" style="border-radius: 50px 50px 50px 50px">
                  <div class="card-body text-center">
                    <h3><?=$contact['nama']?></h3>
                    <h5 class="text-secondary"><?=$contact['alamat']?></h5>
                    <div id="mapid" style="width: 700px; height: 400px;" class="mx-auto"></div>   
                  </div>
              </div>
          </div>
      </div>
</div>

<script>
var curLocation=[0,0];
if (curLocation[0]==0 && curLocation[1]==0) {
	curLocation =[<?=$contact['latitude']?>, <?=$contact['longitude']?>];	
}

var mymap = L.map('mapid').setView([<?=$contact['latitude']?>, <?=$contact['longitude']?>], 16);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/streets-v11'
}).addTo(mymap);

mymap.attributionControl.setPrefix(false);
var marker = new L.marker(curLocation, {
	draggable:'true'
}).bindPopup("<?=$contact['nama']?>").openPopup();

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