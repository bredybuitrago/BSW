mapboxgl.accessToken = 'pk.eyJ1IjoiYnJlZHlidWl0cmFnbyIsImEiOiJjbDE4ajZnZXUxemV3M2puMW0wZ3M2NGNjIn0.5ckPAuGIlVaIBRGtBmdPAQ';
const map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v11',
  // style: 'mapbox://styles/mapbox/satellite-v9',
  center: [-74.1113621765959, 4.618494967854005],
  zoom: 12.5,

  // interactive: false
  // scrollZoom: false
});
var marker = [];
new mapboxgl.Marker({});
let c = [];


function createMarker(){

  for(var i = 0; i < c.length; i++){
  m = new mapboxgl.Marker({})
                    .setLngLat([c[i].lng, c[i].lat])
                    .addTo(map);
    marker.push(m);
  }
}

function add_marker (event) {
  var coordinates = event.lngLat;

  console.log('Lng:', coordinates.lng, 'Lat:', coordinates.lat);
  c.push(coordinates);
  createMarker();
  console.log(c)
}

map.on('click', add_marker);

function clearing() {
  c = [];
  for (var i = marker.length - 1; i >= 0; i--) {    
  marker[i].remove();
  }  
}

 map.on('load', () => {
        // Add a data source containing GeoJSON data.
        map.addSource('maine', {
            'type': 'geojson',
            'data': {
                'type': 'Feature',
                'geometry': {
                    'type': 'Polygon',
                    // These coordinates outline Maine.
                    'coordinates': [
                        [
                            [-74.110414966398, 4.6448457422452805],
                            [-74.09162080462823, 4.625723182749027],
                            [-74.08295843974015, 4.624830972574387],
                            [-74.08783203319388, 4.619225784091498],
                            [-74.09151958382056, 4.614639197757313],
                            [-74.0937464735715, 4.612018093873857],
                            [-74.09655932766479, 4.608591270821648],
                            [-74.09917927297228, 4.60507428496409],
                            [-74.10187877241239, 4.60245998234393],
                            [-74.10547592736383, 4.599679710124008],
                            [-74.1071933549845, 4.598451609511926],
                            [-74.10887344722228, 4.598246925871365],
                            [-74.1117911213648, 4.596906260860138],
                            [-74.11649698212463, 4.5952018908523655],
                            [-74.1221651604427, 4.594004232069821],
                            [-74.12832805139838, 4.593638842974457],
                            [-74.13096019590425, 4.593750489324378],
                            [-74.13424570961394, 4.594364543946398],
                            [-74.13770236321533, 4.595147627550688],
                            [-74.13725433861887, 4.596078011310496],
                            [-74.13665697249002, 4.5970828244080195],
                            [-74.13534295981007, 4.599076475436789],
                            [-74.13349485834746, 4.602031239994361],
                            [-74.13121731764147, 4.605269021014593],
                            [-74.12917682605064, 4.608795711449673],
                            [-74.12805433340343, 4.611872578391825],
                            [-74.12583741042484, 4.618977292941594],
                            [-74.12423785840251, 4.624123970842476],
                            [-74.12174031226346, 4.630501324190902],
                            [-74.11955145160104, 4.635675888828914],
                            [-74.11834477200338, 4.637130354227864],
                            [-74.11517373027712, 4.640151157414209],
                            [-74.11155369148975, 4.643591500856644],
                            [-74.110414966398, 4.6448457422452805]
                        ]
                    ]
                }
            }
        });

        // Add a new layer to visualize the polygon.
        map.addLayer({
            'id': 'maine',
            'type': 'fill',
            'source': 'maine', // reference the data source
            'layout': {},
            'paint': {
                'fill-color': '#0080ff', // blue color fill
                'fill-opacity': 0.1
            }
        });
        // Add a black outline around the polygon.
        map.addLayer({
            'id': 'outline',
            'type': 'line',
            'source': 'maine',
            'layout': {},
            'paint': {
                'line-color': '#000',
                'line-width': 3
            }
        });
    });


map.addControl(new mapboxgl.NavigationControl());
map.addControl(new mapboxgl.FullscreenControl());
map.addControl(new mapboxgl.GeolocateControl({
    positionOptions: {
        enableHighAccuracy: true
    },
    trackUserLocation: true
}));