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


</script>