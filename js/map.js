function initMap() {
  // Styles a map in night mode.
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 44.500130, lng: -81.373552},
    zoom: 14,
    styles:
[
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#212121"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#212121"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "administrative.country",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#ffeb3b"
      }
    ]
  },
  {
    "featureType": "administrative.country",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "administrative.locality",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.medical",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#181818"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#4e4e4e"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1b1b1b"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#363636"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#8a8a8a"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#373737"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#3c3c3c"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#b1b1b1"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#b1b1b1"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#4e4e4e"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#000000"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#000000"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#3d3d3d"
      }
    ]
  }
]
  });

  var content = '<div id="content">'+'<div id="siteNotice">'+'</div>'+
            '<h1 id="Chantry Info" class="ToolTip">Chantry Island Tour Base</h1>'+
            '<div id="mainContent">'+
            '<p><b>Location:</b>, 86 Saugeen St. Southampton, ON. Canada n0h2l0</p>'+
            '<p><b>Directions:</b>, From Highway 21 in Southampton, tunr west on Clarendon and follow the signs, or Grom High Street, (the main street), turn north on Huron or Grosvenor Street and look for the signs.</p>'+
            '</div>'+'</div>';


        var toolTip = new google.maps.InfoWindow({
          content: content
        });


  var image = 'https://lh3.googleusercontent.com/xhoYTIG4g8kyWHxYCvNdg-QGJgz5pWE1u-1r5F_0DIKdcTSwj49M7HoFS2VE5KWRTXeR7iSUH4cgIjPh59x81mgLRe2UbcJ-jKtsyZdhw6EcuBhilLBku2GA-6F2PyXKSDbv3iWwSkmzla8vJwPsdhmfZG8B3Q0oXvMVoQWGzUiQZ7RmFPyD-CntLfhgwGhQOgofuL1ZJAuvVFa1GBoD9GsWr6JAV9ZFXWGUPapP4BVNzPlk8E0Hi78wGG33Ah24gPlB4grBlqCwEgjb1sP5Ye3i9B6btwT8tjDsiBloUkga64OGtZDaQS2cMPc0Z5YWs6m-rWwrvY2szGPCRFNmekdDhR1_MttorTaMCFCMfg9PiGtAJzxnwuAYK-3nl764qrokG3rvXW44tHUBqmhzzQ4AVsgTb10PJhPdLBmVP5MHMsQO8QQwTg5-XxjjtgAptRXgMKPB4LB0o5OU5x5XrQHnp5zPX1CNrx-hj61am8-tNwLjDzBFKRjlhrKz7M2slqTE_Q3bl4iopQ41nqwzTnPooBCVSyDBqb8hW0lKAmfOWMmc4YZPEGAN2WEKNVpBS61Xi1AvwGOaehZQcczftyuEP7kkAhFE7nPywv_fzGHDUGGnxLU8=w34-h49-no';

  var marker = new google.maps.Marker({
    position: {lat: 44.499912, lng: -81.373536},
    map: map,
    icon: image

  });

  marker.addListener('click', function() {
         toolTip.open(map, marker);
       });
}
