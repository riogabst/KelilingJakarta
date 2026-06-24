<div class="row">
 <div class="row justify-content-center">
                        <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" >
                            <div class="">
                                <div class=""></div>
                                </div>
                                    <label><b>Jarak Tempuh</b>
                                    <input ="text" class="form-control" name="jarak" id="jarak">
                                </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" >
                            <div class="">
                                <div class=""></div>
                                </div>
                                    <label><b>Durasi Online</b>
                                    <input class="form-control" value="8 Jam 32 Menit" readonly>
                                </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" >
                            <div class="">
                                <div class=""></div>
                                </div>
                                    <label><b>Hari Ke</b>
                                    <input class="form-control" value="1" readonly>
                                </div>
                    </div>
    </div>
</div>
<div id="map" style="width: 100%; height: 80vh;"></div>

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
	layers: [peta1]
    
});

const baseLayers = {
    'Google': peta1,
    'OSM': peta2,
	'Satelit': peta3,
};

const layerControl = L.control.layers(baseLayers,null,{collapsed: false}).addTo(map);

var routingControl = L.Routing.control({
  waypoints: [
    L.latLng(-6.176231094646086, 106.8229103099581),
    L.latLng(-6.359864088971343, 106.82789103281928),
    L.latLng(-6.123834354617365, 106.66090488556144),
    L.latLng(-6.082346062557967, 106.74987070741119)
  ]
}).addTo(map);

//mengambil jarak
routingControl.on('routesfound', function(e) {
    var routes = e.routes;
    var summary = routes[0].summary;
    var jarak = summary.totalDistance / 1000; // jarak dalam kilometer
    document.getElementById('jarak').value = jarak.toFixed(2) + ' km';
});

</script>