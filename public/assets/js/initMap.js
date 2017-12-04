'use strict'

function initMap() {
      // Create a map object and specify the DOM element for display.
      var optionsCarte = {
      zoom: 9,
      center: {lat: 45.25, lng:  -1.0333},
      mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var maCarte = new google.maps.Map(document.getElementById("map"), optionsCarte);
      var optionsCercle = {
      map: maCarte,
      center: maCarte.getCenter(),
      strokeColor: '#81BEF7',
      fillColor: 'green',
      radius: 35000
      }
      var monCercle = new google.maps.Circle(optionsCercle);
      
      google.maps.event.addDomListener(window, "resize", function() {
    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(center);
});
      }
      