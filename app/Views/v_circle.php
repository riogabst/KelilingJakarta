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

</script>