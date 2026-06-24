<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Posisi Saat Ini</label>
            <input class="form-control" name="Posisi" id="Posisi">
        </div>
    </div>
</div>

<div id="map" style="width: 100%; height: 70vh;"></div>

<script>

    var peta1 = L.tileLayer('https://mt1.google.com/vt/lyrs=r&x={x}&y={y}&z={z}', {
    });

    var peta2 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });

    var peta3 = L.tileLayer('http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}', {
    });


const baseLayers = {
    'OSM': peta2,
	'Google': peta1,
	'Satelit': peta3,
};



//mengambil posisi saat ini
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
} else {
    alert("Geolocation tidak mendukung.");
}

function showPosition(position) {
    document.getElementById("Posisi").value = position.coords.latitude + "," + position.coords.longitude;
}

//menampilkan posisi pada
    const map = L.map('map', {
	center: [position.coords.latitude, position.coords.longitude],
	zoom: 11,
	layers: [peta2]
    
});

const layerControl = L.control.layers(baseLayers,null,{
    collapsed: false
}).addTo(map);

L.marker(['Posisi'])
        .bindPopup("<b><center>Posisi Saat Ini</b>")
        .addTo(map);


</script>