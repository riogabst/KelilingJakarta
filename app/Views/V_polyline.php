<div id="map" style="width: 100%; height: 70vh;"></div>


<script>
    var peta1 = L.tileLayer('https://mt1.google.com/vt/lyrs=r&x={x}&y={y}&z={z}', {
    });

    var peta2 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });

    var peta3 = L.tileLayer('http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}', {
    });

    const map = L.map('map', {
	center: [-6.2000, 106.8166],
	zoom: 11,
	layers: [peta2]
    
});

const baseLayers = {
    'OSM': peta2,
	'Google': peta1,
	'Satelit': peta3,
};

const layerControl = L.control.layers(baseLayers,null,{collapsed: false}).addTo(map);

// buat marker
const marker = 
L.marker([-6.360751798045154, 106.83166601407896])
        .bindPopup("<img src='<?= base_url('gambar/ui.jpg') ?>' width=250px>" +    
        "<br><b><center>Universitas Indonesia</b>")
        .addTo(map);
L.marker([-6.330294938449788, 106.83481661041539]).addTo(map);
L.marker([-6.30743261737504, 106.83882224686192]).addTo(map);
L.marker([-6.2840565103819035, 106.84473966446312]).addTo(map);
L.marker([-6.262941704348026, 106.851628145336334]).addTo(map);
L.marker([-6.2423086975369735, 106.85872904638487]).addTo(map);
L.marker([-6.226275666965915, 106.85845245583013]).addTo(map);

L.marker([-6.210079732195305, 106.8501241536123]).addTo(map);
L.circle([-6.210079732195305, 106.8501241536123], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 500
}).addTo(map).bindPopup("Radius 500 meter");

L.polyline([
    [-6.199387309297978, 106.85395251452137],
    [-6.202580292454109, 106.85709211485013],
    [-6.213271263760579, 106.86145868542238],
    [-6.21563903364541, 106.86651091540124], 
    [-6.214347524196348, 106.88773028261987],
    [-6.213285747920088, 106.8913446512883],
    [-6.213488689669311, 106.9054048580561],
    [-6.21889198486242, 106.94962688721452]
      ], {
    color: 'red',
    weight: 5,
    opacity: 0.7,
    smoothFactor: 1
}).addTo(map);

</script>