var map = L.map('map',{
    doubleClickZoom: false,
    center: [20.98629189892332, 105.86300548132999],
    zoom: 16,
    scrollWheelZoom: false,
    zoomControl: false,
});


var greenIcon = L.icon({
    iconUrl: 'https://img.icons8.com/fluency/48/home.png',
    iconSize:     [30, 30], // size of the icon
});

var weddingIcon = L.icon({
    iconUrl: '../images/icons8-arch-64.png',
    iconSize:     [30, 30], // size of the icon
});

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

L.marker([20.9841181, 105.8647972], {icon: weddingIcon}).addTo(map);
L.marker([20.98731236240082, 105.86090797975427], {icon: greenIcon}).addTo(map);

