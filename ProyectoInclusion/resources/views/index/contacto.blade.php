@extends('masterPages.index_mp')
@section('content')
	<div class="row papel-color borde space">
		<div class="col-md-offset-1 col-md-5 rsp ">
		<p class="centrado-texto space-top">Contactenos</p>
			<p class="p-contacto">Santiago 850, Los Angeles, Los Ángeles, Región del Bío Bío, Chile</p>
			<p class="p-contacto">Fono (Chile) : 43 – 2321331</p>
			<p class="p-contacto">E-mail : unpadela@gmail.com</p>
		</div>
		<div class="col-md-6 space-top">
			<div id="mapa" ></div>
		</div>
	</div>

<script>function initMap() {

  var customMapType = new google.maps.StyledMapType([
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ebe3cd"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#523735"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f1e6"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#c9b2a6"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#dcd2be"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#ae9e90"
      }
    ]
  },
  {
    "featureType": "landscape.natural",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#93817c"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#a5b076"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#447530"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f1e6"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#fdfcf8"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f8c967"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#e9bc62"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e98d58"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#db8555"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#806b63"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#8f7d77"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#ebe3cd"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#b9d3c2"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#92998d"
      }
    ]
  }
], {
      name: 'Custom Style'
  });
  var customMapTypeId = 'custom_style';


  var haightAshbury = {lat: 37.769, lng: -122.446};

  map = new google.maps.Map(document.getElementById('mapa'), {
    zoom: 14,
    center: haightAshbury,
    mapTypeId: google.maps.MapTypeId.TERRAIN,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
    }
  });

  map.mapTypes.set(customMapTypeId, customMapType);
  map.setMapTypeId(customMapTypeId);
  // This event listener will call addMarker() when the map is clicked.
 

 var geocoder = new google.maps.Geocoder();

    geocodeAddress(geocoder, map);
  
  // Adds a marker at the center of the map.
  //addMarker(haightAshbury);
  
}
function geocodeAddress(geocoder, resultsMap) {
      //--------
  var address = "Santiago 850, Los Angeles, Los Ángeles, Región del Bío Bío, Chile";//punto de ubicacion
  $("#direccion").innerHTML = "<strong>Ubicacion: </strong>"+address+`
  <p><strong>Horario atención: </strong>8:00 a 1:00 de lunes a viernes.</p>`;
  geocoder.geocode({'address': address}, function(results, status) {

        resultsMap.setCenter(results[0].geometry.location);
        addMarker(results[0].geometry.location, resultsMap);
    
  });
}
function addMarker(location, mapp) {
  var marker = new google.maps.Marker({
    position: location,
    map: mapp,
    draggable: true,
    /*animation: google.maps.Animation.DROP,
    label: labels[labelIndex++ % labels.length]*/
  });

 
}</script>
<script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"></script>

@endsection
