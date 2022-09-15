
const myMap = L.map('map').setView([13.3497971, -88.3494263], 10);
//http://{s}.tile.osm.org/{z}/{x}/{y}.png
//https://stamen-tiles-{s}.a.ssl.fastly.net/terrain/{z}/{x}/{y}.png
const tileUrl = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png';
const attribution =
        '&copy; <a href="https://www.openstreetmap.org/copyright">Artech</a> Derechos reservados ';
const tileLayer = L.tileLayer(tileUrl, { attribution });
tileLayer.addTo(myMap);


myMap.locate({enableHighAccuracy: true});

var lat = document.querySelector('#lat');
var lng = document.querySelector('#lng');
 
    myMap.on('locationfound', e => {
            
            lat.value = e.latlng.lat;
            lng.value = e.latlng.lng;
            
             const coords = [e.latlng.lat , e.latlng.lng];
            const marcador = L.marker(coords);
           // const radius = e.accuracy / 2;
             myMap.addLayer(marcador);
            // L.circle(e.latlng, radius).addTo(myMap);
            console.log(coords);
            
      });
  
 
     
    


function generateList() {
  const ul = document.querySelector('.list');
  storeList.forEach((shop) => {
    const li = document.createElement('li');
    const div = document.createElement('div');
    const a = document.createElement('a');
    const p = document.createElement('p');
    const img = document.createElement('img');
   
    
    a.addEventListener('click', () => {
        flyToStore(shop);
      
    });
    div.classList.add('shop-item');
    a.innerText = shop.properties.name;
    a.href = '#';
    p.innerText = shop.properties.address;
    img.innerText = shop.properties.img;
   


    div.appendChild(a);
    div.appendChild(p);
    li.appendChild(div);
    ul.appendChild(li);
  });
}

generateList();


const weather = {};
weather.temperature = {
    unit : "celsius"
}
const KELVIN = 273;
const key = "3c6d2950ad3dec64a4c64c29fef357e3";


function makePopupContent(shop) {
  //getWeather(shop.properties.lat,shop.properties.ing);
      if(shop.properties.fav == ''){
        var fav = 'fa fa-bookmark-o';
      }else{
        var fav = 'fa fa-bookmark';
      }

      return`
      <div>
      <h4>${shop.properties.name}</h4>
      <p>${shop.properties.address}</p>
      <div class="phone-number">
      <a href="https://icons8.com/icon/9659/phone"></a>
      <img src="https://img.icons8.com/ios/24/000000/phone.png"/>
          <a  href="tel:${shop.properties.phone}">${shop.properties.phone} </a>
      <div style="text-align: right; margin-top: -24px;">
      <span class="fa fa-star" onclick="calificar(this,${shop.properties.id})" style="cursor: pointer; color: ${shop.properties.est1};" id="1estrella" ></span>
      <span class="fa fa-star" onclick="calificar(this,${shop.properties.id})" style="cursor: pointer; color: ${shop.properties.est2};" id="2estrella" ></span>
      <span class="fa fa-star" onclick="calificar(this,${shop.properties.id})" style="cursor: pointer; color: ${shop.properties.est3};" id="3estrella" ></span>
      <span class="fa fa-star" onclick="calificar(this,${shop.properties.id})" style="cursor: pointer; color: ${shop.properties.est4};" id="4estrella" ></span>
      <span class="fa fa-star" onclick="calificar(this,${shop.properties.id})" style="cursor: pointer; color: ${shop.properties.est5};" id="5estrella" ></span>
      <span class="${fav}" onclick="favorito(this,${shop.properties.id})" style="cursor: pointer; font-size: 20px;margin-left: 20px;" id="1favorito" ></span>
      <div>Estrellas(${shop.properties.total / shop.properties.user} de ${shop.properties.user} Usuarios)</div>
      </div><br>
     
      </div>
     
      <div class="cal" >
      <input  type="button" value="Marcar" onclick="crearuta(${shop.properties.lat},${shop.properties.ing})" id="btncal" />
      <input  type="button" value="Clima" onclick="getWeather(${shop.properties.lat},${shop.properties.ing})" id="btncal" />
   
      </div>
     <a href="../gps/guardarLugar/img/${shop.properties.img}"> <img src="../gps/guardarLugar/img/${shop.properties.img}" style="max-width:100%;width:300px; height: 300px;"> </a>
  </div>

  ` ;

  
}


function getWeather(latitude, longitude){
  let api = `http://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=${key}`;
  
  fetch(api)
      .then(function(response){
          let data = response.json();
          return data;
      })
      .then(function(data){
          weather.temperature.value = Math.floor(data.main.temp - KELVIN);
          weather.description = data.weather[0].description;
          weather.iconId = data.weather[0].icon;
          weather.city = data.name;
          weather.country = data.sys.country;
          weather.humidity = data.main.humidity;
      
      })
      .then(function(){
          displayWeather();
      });
}

// DISPLAY WEATHER TO UI
function displayWeather(){
 /** iconElement.innerHTML = `<img src="icons/${weather.iconId}.png"/>`;
  tempElement.innerHTML = `${weather.temperature.value}°<span>C</span>`;
  descElement.innerHTML = weather.description;
  locationElement.innerHTML = `${weather.city}, ${weather.country}`;
  */ 
  let cuidad = weather.city;
  let humedad = weather.humidity;
  let temperatura = weather.temperature.value;

  let resultado = 'La cuidad es: '+ cuidad +'<br> La temperatura es: ' + temperatura+'°C' +'<br>La humedad es de: '+ humedad+'%';
  
  alertify.alert('Clima',`<img src="../gps/icons/${weather.iconId}.png"/><br>` + resultado, function(){
  
  });

}

//calificar

var contador;
function calificar(item,id){

  contador = item.id[0];//captura el primer caracter
  let nombre = item.id.substring(1);//captura todo despues del num
  for(let i=0;i<5;i++){
    if(i<contador){
      document.getElementById((i+1)+nombre).style.color="orange";
     
    }else{
      document.getElementById(i + 1 + nombre).style.color = "black";
    }
  }
  
  guardardb(id,contador);
}


function guardardb(id,contador) {
  var datos = "id=" + id + "&cont="+ contador;

  $.ajax({
     url: "js/estrellas.php",
     method: "POST",
     data: datos, 
  })
  .done(function(res){
    alertify.alert('Ranking','Gracias por calificar', function(){
      location.reload();
    });
  })
}


//*********************************************************** */




function favorito(item,id) {

  fav = item.id[0]; //captura el primer caracter
  let nombre = item.id.substring(1); //captura todo despues del num
  var cont = document.getElementById(0 + 1 + nombre);
    if (cont.className == 'fa fa-bookmark') {
      document.getElementById(0 + 1 + nombre).className = "fa fa-bookmark-o";
    }else{
      document.getElementById(0 + 1 + nombre).className = "fa fa-bookmark";
    } 

    guardardbFvto(id);
}

function guardardbFvto(id) {
  var datosF = "id=" + id;

  $.ajax({
     url: "js/fav.php",
     method: "POST",
     data: datosF, 
  })
  .done(function(res){
    location.reload();
  })
}











function onEachFeature(feature, layer) {
    layer.bindPopup(makePopupContent(feature), { closeButton: false, offset: L.point(0, -8) });
 
}

var myIcon = L.icon({
    iconUrl: '../gps/img/marker.png',
    iconSize: [30, 40]
});

const shopsLayer = L.geoJSON(storeList, {
    onEachFeature: onEachFeature,
    pointToLayer: function(feature, latlng) {
        return L.marker(latlng, { icon: myIcon });
    }
    
});
shopsLayer.addTo(myMap);

function flyToStore(store) {
    const lat = store.geometry.coordinates[1];
    const lng = store.geometry.coordinates[0];
   
    myMap.flyTo([lat, lng], 14, {
        duration: 3
    });

   

    setTimeout(() => {
        L.popup({closeButton: false, offset: L.point(0, -8)})
        .setLatLng([lat, lng])
        .setContent(makePopupContent(store))
        .openOn(myMap);
    }, 3000);
}


var latt = document.querySelector('#lat');
var lngg = document.querySelector('#lng');
function crearuta(lat,ing){

L.Routing.control({
  waypoints: [
    L.latLng(latt.value, lngg.value),
    L.latLng(lat, ing)
  ]

}).addTo(myMap);

}


/** 
(function(){
   
     myMap.on('locationfound', e => {
        setInterval( function (){
           console.log(e);

             const coords = [e.latlng.lat , e.latlng.lng];
             console.log(coords);
            const marcador = L.marker(coords);
             myMap.addLayer(marcador);
           },1000);

           
   
      });
  
    }())  
      
*/

