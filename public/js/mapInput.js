// function loadLocations() {
//     var xml = new XMLHttpRequest;
//     xml.open('GET', 'locations.xml', true);
//     xml.responseType = 'xml';
//     xml.send();
//     return xml.responseXML
// }



// $.ajax({
//     type: "GET",
//     async: true,
//     url: "locations.xml",
//     dataType: "xml",
//     success:
//     function (xml) {      
//         // var stuff = xml.response;
//         console.log(xml);

//         var node, childNodes = xml.documentElement.childNodes;
        
//         // for (var i = 0; i < items.length; i++) {
//         //     var lat = items[i].getAttribute('latitude');
//         //     var long = items[i].getAttribute('longitude');
//         //     var latLng = new google.maps.LatLng(lat, long);
//         //     var marker = new google.maps.Marker({
//         //         position:  latLng,
//         //         map: map,
//         //         label:items[i].title
//         //     });
//         //     alert(marker.position)
            
//         // }
//     }
// });

function initMap() {
    var mapOptions = {
        zoom: 3.5,
        center: new google.maps.LatLng(33.71070, 79.447015),
        mapTypeId: 'roadmap'
    };
    var map = new google.maps.Map(document.getElementById('address-map'), mapOptions);

    $.ajax({
        type:'GET',
        url:'locations.xml',
        dataType: 'xml',
        async: true,
        success:
        function(labs) {
            var allLabs = labs.documentElement.getElementsByTagName('item');       

            // var geocoder = new google.maps.Geocoder;
            var infoWindow = new google.maps.InfoWindow;
            
            for (var z = 0; z < allLabs.length; z++){

                var item = allLabs[z].childNodes;

                var lab = makeMarkers(item, map, infoWindow);  
                
                console.log(typeof(lab));
            }
        },
        error: function() {
            console.log('failed');
        }
    });

};

function makeMarkers(locationsData, map, infoWindow){
    var lab = { 
        title:"", 
        lat:"", 
        long:"",
        latlon:""
    }
    for (var i = 0; i < locationsData.length; i++) {
        if ( locationsData[i].nodeName == "Latitude") {
            lab['lat'] = parseFloat(locationsData[i].textContent); 
        }
        if ( locationsData[i].nodeName == "Longitude") {
            lab['long'] = parseFloat(locationsData[i].textContent);
        }
        if ( locationsData[i].nodeName == "Title") {
            lab['title'] = locationsData[i].textContent;
        }
        if ( locationsData[i].nodeName == "Address") {
            lab['adr'] = locationsData[i].textContent;
        }
    }
    lab['latlon'] = { lat: lab.lat, lng: lab.long}
    var marker = new google.maps.Marker({
        position: lab.latlon,
        title: lab.title
    });

    marker.setPosition(lab.latlon)
    marker.setMap(map);

    marker.addListener("click", () => {
        infoWindow.setContent(lab.adr)
        infoWindow.open(map, marker)
    })
    return marker
};

// function labInfo (map)