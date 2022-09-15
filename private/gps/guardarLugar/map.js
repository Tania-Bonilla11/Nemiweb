var map = L.map('map').setView([13.3497971, -88.3494263], 14);

// Capas base
var osmLayer = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">Nemi<\/a> contributors'
}).addTo(map);



var marcador = L.marker(13.3497971, -88.3494263,{id:1,  draggable:"false"});
var lat = document.querySelector('#lat');
var ing = document.querySelector('#ing');
function onMapClick(e) {
   map.removeLayer(marcador);
 
        const coords = [e.latlng.lat , e.latlng.lng];
        marcador = L.marker(coords,{id:1,  draggable:"false"});
        map.addLayer(marcador);
        console.log(e.latlng.lat , e.latlng.lng);
        lat.value = e.latlng.lat;
        ing.value = e.latlng.lng;

      
}

map.on('click', onMapClick);


function upload() {
    var imagcanvas = document.getElementById("c2");
    var fileinput = document.getElementById("finput");
    var image = new SimpleImage(fileinput);
    image.drawTo(imagcanvas);
 }