let map; 

function initMap() {
    const pinMap = { lat: 53.02461812503404, lng: 18.63507869835964 };
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 14,
      center: pinMap,
      disableDefaultUI: false,
      styles: [
        {
            "featureType": "all",
            "elementType": "labels",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "all",
            "elementType": "labels.text",
            "stylers": [
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "all",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "color": "#000000"
                }
            ]
        },
        {
            "featureType": "all",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "color": "#ffffff"
                }
            ]
        },
        {
            "featureType": "all",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "administrative.locality",
            "elementType": "labels",
            "stylers": [
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "administrative.locality",
            "elementType": "labels.text",
            "stylers": [
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "all",
            "stylers": [
                {
                    "color": "#ffffff"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "weight": 1
                },
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "weight": 0.8
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels",
            "stylers": [
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels.text",
            "stylers": [
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "saturation": "-100"
                },
                {
                    "lightness": "0"
                },
                {
                    "gamma": "0.00"
                },
                {
                    "weight": "1"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "labels.text",
            "stylers": [
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "saturation": "-100"
                },
                {
                    "gamma": "1.00"
                },
                {
                    "lightness": "54"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        }
    ]
    
    
  
    });
    const contentString =
      '<div id="mapContent">' +
      	"Carmotive" + "<br>" + "StanisĹawa ĹťĂłĹkiewskiego 5/5," + "<br>" + " 87-100 ToruĹ" +
      "</div>";
  
    const infowindow = new google.maps.InfoWindow({
      content: contentString,
      maxWidth: 300,
    });
  

    

    const icon = {
        path: "M89.529,0A25.558,25.558,0,0,0,64,25.529c0,18.834,23.554,41.219,24.557,42.164a1.42,1.42,0,0,0,1.945,0c1-.945,24.557-23.33,24.557-42.164A25.558,25.558,0,0,0,89.529,0Zm0,39.712a14.183,14.183,0,1,1,14.183-14.183A14.2,14.2,0,0,1,89.529,39.712Z",
        fillColor: '#d10d1c',
        strokeWeight: 0,
        fillOpacity: 1, 
        anchor: new google.maps.Point(90, 72),
    };
  
    const marker = new google.maps.Marker({
      position: pinMap,
      map,
      icon: icon,
      title: "Carmotive",
    });
  
    marker.addListener("click", () => {
      infowindow.open({
        anchor: marker,
        map,
        shouldFocus: false,
      });
    });
}
  