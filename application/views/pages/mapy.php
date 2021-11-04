<html>
    <head>
        <title>Mapa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
        <style>
            #map {
                width: 110%;
                height: 90vh;
                border-style: solid;
                border-width: 3px;
            }
            
        </style>
        
    
    </head>
    <body style="background-color:lightblue;">
        <div class="container">
        <div class="text-center">
          <h2><u><b>Mapa škol</b></u></h1>
      </div>
        
        <div id="map"> 
        
        </div>
        </div>
        <div>
            <p></p>
        </div>
    </body>
</html>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([49.052346, 17.501221], 11.4);
var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
   });
    osm.addTo(map)

    var popup = L.popup();

    function onMapClick(e) {
      popup
        .setLatLng(e.latlng)
        .setContent("Klikli jste na souřadnice " + e.latlng.toString())
        .openOn(map);
      }
    map.on('click', onMapClick);

var marker = L.marker([49.032687, 17.643536]).addTo(map);
marker.bindPopup("<b>ZŠ Na Výsluní Uherský Brod</b>").closePopup();
var marker1 = L.marker([49.022996, 17.649707]).addTo(map);
marker1.bindPopup("<b>Katolická základní škola Uherský Brod</b>").closePopup();
var marker2 = L.marker([49.026235, 17.645464]).addTo(map);
marker2.bindPopup("<b>ZŠ Mariánské náměstí Uherský Brod</b>").closePopup();
var marker3 = L.marker([49.026792, 17.653584]).addTo(map);
marker3.bindPopup("<b>ZŠ Pod Vinohrady Uherský Brod</b>").closePopup();
var marker4 = L.marker([49.068425, 17.449208]).addTo(map);
marker4.bindPopup("<b>ZŠ Za Alejí Uherské Hradiště</b>").closePopup();
var marker5 = L.marker([49.067784, 17.472572]).addTo(map);
marker5.bindPopup("<b>ZŠ Sportovní Uherské Hradiště</b>").closePopup();
var marker6 = L.marker([49.067068, 17.460288]).addTo(map);
marker6.bindPopup("<b>ZŠ UNESCO Uherské Hradiště</b>").closePopup();
var marker7 = L.marker([49.070963, 17.47193]).addTo(map);
marker7.bindPopup("<b>Academic School Uherské Hradiště</b>").closePopup();
var marker8 = L.marker([49.068893, 17.464523]).addTo(map);
marker8.bindPopup("<b>ZŠ Palackého náměstí Uherské Hradiště</b>").closePopup();
var marker9 = L.marker([49.136834, 17.433056]).addTo(map);
marker9.bindPopup("<b>ZŠ Traplice</b>").closePopup();
var marker10 = L.marker([49.101508, 17.54614]).addTo(map);
marker10.bindPopup("<b>ZŠ Bílovice</b>").closePopup();
var marker11 = L.marker([49.086178, 17.342145]).addTo(map);
marker11.bindPopup("<b>ZŠ Buchlovice</b>").closePopup();
var marker12 = L.marker([49.056656, 17.255367]).addTo(map);
marker12.bindPopup("<b>ZŠ Osvětimany</b>").closePopup();
var marker13 = L.marker([48.972221, 17.648486]).addTo(map);
marker13.bindPopup("<b>ZŠ Jana Ámose Komenského Nivnice</b>").closePopup();
var marker14 = L.marker([48.975716, 17.755046]).addTo(map);
marker14.bindPopup("<b>ZŠ Bystřice pod Lopeníkem</b>").closePopup();
var marker15 = L.marker([49.099497, 17.517719]).addTo(map);
marker15.bindPopup("<b>ZŠ Kněžpole</b>").closePopup();
var marker16 = L.marker([49.127723, 17.45417]).addTo(map);
marker16.bindPopup("<b>ZŠ Kudlovice</b>").closePopup();
var marker17 = L.marker([49.106862, 17.466343]).addTo(map);
marker17.bindPopup("<b>ZŠ Huštěnovice</b>").closePopup();
var marker18 = L.marker([49.040681, 17.529285]).addTo(map);
marker18.bindPopup("<b>ZŠ Podolí</b>").closePopup();
var marker19 = L.marker([49.052241, 17.526111]).addTo(map);
marker19.bindPopup("<b>ZŠ Popovice</b>").closePopup();
var marker20 = L.marker([48.970431, 17.708283]).addTo(map);
marker20.bindPopup("<b>ZŠ Suchá loz</b>").closePopup();
var marker21 = L.marker([49.072126, 17.382849]).addTo(map);
marker21.bindPopup("<b>ZŠ Zlechov</b>").closePopup();
var marker22 = L.marker([48.995911, 17.799093]).addTo(map);
marker22.bindPopup("<b>ZŠ Jana Ámose Komenského Komňa</b>").closePopup();
var marker23 = L.marker([49.118043, 17.422192]).addTo(map);
marker23.bindPopup("<b>ZŠ Jalubí</b>").closePopup();
var marker24 = L.marker([48.930711, 17.74298]).addTo(map);
marker24.bindPopup("<b>ZŠ Březová</b>").closePopup();

        </script>
 


