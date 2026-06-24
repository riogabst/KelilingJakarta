<div id="map" style="width: 100%; height: 70vh;"></div>


<script>
    const map = L.map('map').setView([-6.2000, 106.8166], 11);

	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);
</script>