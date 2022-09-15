const myMap = L.map('map').setView([13.3497971, -88.3494263], 10);
const tileUrl = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png';
const attribution =
'&copy; <a href="https://www.openstreetmap.org/copyright">Artech</a> Derechos reservados ';
const tileLayer = L.tileLayer(tileUrl, { attribution });
tileLayer.addTo(myMap);


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

function makePopupContent(shop) {
  return `
    <div>
        <h4>${shop.properties.name}</h4>
        <p>${shop.properties.address}</p>
        <div class="phone-number">
        <a href="https://icons8.com/icon/9659/phone"></a>
        <img src="https://img.icons8.com/ios/24/000000/phone.png"/>
         
            <a  href="tel:${shop.properties.phone}">${shop.properties.phone} </a>
        </div>
        <div class="cal" >
        <input  type="button" value="Borrar" onclick="Borrar(${shop.properties.id});" id="btnB" />
        <input  type="button" value="Publicar" onclick="publicar(${shop.properties.id});" id="btncal" />
        </div>
        <a href="../gps/guardarLugar/img/${shop.properties.img}"><img src="../gps/guardarLugar/img/${shop.properties.img}" style="max-width:100%;width:300px; height: 300px;"></a>
    </div>
  `;
  
}
function onEachFeature(feature, layer) {
    layer.bindPopup(makePopupContent(feature), { closeButton: false, offset: L.point(0, -8) });
}

var myIcon = L.icon({
    iconUrl: 'marker.png',
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


function publicar(idLugar){
 
    var datos = "id=" + idLugar;
  
    $.ajax({
       url: "procesoGuardar.php",
       method: "POST",
       data: datos, 
    })
    .done(function(res){
      alertify.alert('Sugerencias',res, function(){
        location.reload();
      });
    })
  }

  function Borrar(idLugar){
 
    var datos = "id=" + idLugar;
  
    $.ajax({
       url: "eliminar.php",
       method: "POST",
       data: datos, 
    })
    .done(function(res){
      alertify.alert('Sugerencias',res, function(){
        location.reload();
      });
    })
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