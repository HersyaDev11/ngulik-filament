@push('scripts')
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
@endpush

<div style="width: 100%; height: 400px;" id="map"></div>

<script>
    var map = L.map('map').setView([{{ $latitude }}, {{ $longitude }}], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([{{ $latitude }}, {{ $longitude }}]).addTo(map)
        .bindPopup('Your Location')
        .openPopup();
</script>