<html>
  <head>
    <title>Add Map</title>
  </head>
  <body>
    <!-- [START maps_add_map_heading] -->
    <h3>My Google Maps Demo</h3>
    <!-- [END maps_add_map_heading] -->
    <!-- [START maps_add_map_div] -->
    <!--The div element for the map -->
    <div id="map"></div>
    <!-- [END maps_add_map_div] -->

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    
    <script type="text/javascript">
      function initMap() {


      const ambad            = { lat: 19.944473, lng: 73.7428839};
      const vilholi          = { lat: 19.911251, lng: 73.71834, };
      const masrul           = { lat: 20.045889, lng: 73.81204 };
      const satpur           = { lat: 19.998689898719487, lng: 73.74672265607617 };
      const yeola            = { lat: 20.050237939140658, lng: 74.48080803439238 };
      const hingna_road      = { lat: 21.120468619073954, lng: 79.1047039361768  };
      const manewada         = { lat: 21.121263664108536, lng: 79.10567262963397 };
      const amravati_road    = { lat: 21.15280825553144,  lng: 79.02117533557893 };
      const gopuri_chauck    = { lat: 20.756168494954437, lng: 78.61948411044045 };
      const hinghan_ghat     = { lat: 20.570191778350566, lng: 78.87770986773059 };
      // The map, centered at ambad
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 7,
        icon: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png",
        center: yeola,
      });
      // The marker, positioned at ambad
      const ambad_marker = new google.maps.Marker({
        position: ambad,
        map: map,
      });

      const vilohi_marker = new google.maps.Marker({
        position: vilholi,
        map: map,
      });

      const masrul_marker = new google.maps.Marker({
        position: masrul,
        map: map,
      });
      
      const satpur_marker = new google.maps.Marker({
        position: satpur,
        map: map,
      });

      const yeola_marker = new google.maps.Marker({
        position: yeola,
        map: map,
      }); 

      const hingna_road_marker = new google.maps.Marker({
        position: hingna_road,
        map: map,
      }); 

      const manewada_marker = new google.maps.Marker({
        position: manewada,
        map: map,
      });

      const amravati_road_marker = new google.maps.Marker({
        position: amravati_road,
        map: map,
      });

      const gopuri_chauck_marker = new google.maps.Marker({
        position: gopuri_chauck,
        map: map,
      });

}
    </script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDm2WEkNxEQTvrl2wWwXu6YCklHFmoBLx0&callback=initMap&libraries=&v=weekly"
      async
    ></script>
    <style type="text/css">
      #map {
  height: 400px;
  /* The height is 400 pixels */
  width: 100%;
  /* The width is the width of the web page */
}
    </style>
  </body>
</html>