var map = L.map('map',{
    doubleClickZoom: false,
    center: [20.98629189892332, 105.86300548132999],
    zoom: 16,
    scrollWheelZoom: false,
    zoomControl: false,
    dragging: true
});

L.control.zoom({
    position: 'bottomright'
}).addTo(map);
var greenIcon = L.icon({
    iconUrl: '../images/home1.png',
    iconSize: [50, 50], // size of the icon
    iconAnchor:   [10, 45],
});

var weddingIcon = L.icon({
    iconUrl: '../images/arch4.png',
    iconSize: [50, 50], // size of the icon
    iconAnchor:   [0, 45],
});

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

L.marker([20.9841181, 105.8647972], {icon: weddingIcon}).addTo(map);
L.marker([20.98731236240082, 105.86090797975427], {icon: greenIcon}).addTo(map);

