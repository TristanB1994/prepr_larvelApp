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
        zoom: 10,
        center: new google.maps.LatLng(43.71070, -79.447015),
        mapTypeId: 'roadmap'
    };
    var map = new google.maps.Map(document.getElementById('address-map'), mapOptions);

};

$(document).ready(function(){
    $.ajax({
        type:'GET',
        url:'locations.xml',
        dataType: 'xml',
        async: true,
        success:
        function(labs) {
            var allLabs = labs.getElementsByTagName('item');         
            console.log(makeMarkers(allLabs));
        },
        error: function() {
            console.log('failed');
        }
    });
})

function makeMarkers(locationsData){
    var allLabs = locationsData;

    return allLabs
}

// function loadDoc() {
//     var xhttp = new XMLHttpRequest();
//     xhttp.open("GET", "locations.xml", false);
//     xhttp.responseType = 'json';
//     xhttp.send();
//     let data = xhttp.response;
//     alert(data.data);
// }


// function setLocationCoordinates(key, lat, lng) {
//     const latitudeField = document.getElementById(key + "-" + "latitude");
//     const longitudeField = document.getElementById(key + "-" + "longitude");
//     latitudeField.value = lat;
//     longitudeField.value = lng;
// }

// $('form').on('keyup keypress', function(e) {
//     var keyCode = e.keyCode || e.which;
//     if (keyCode === 13) {
//         e.preventDefault();
//         return false;
//     }
// });
// const locationInputs = document.getElementsByClassName("map-input");

// const autocompletes = [];
// const geocoder = new google.maps.Geocoder;
// for (let i = 0; i < locationInputs.length; i++) {

//     const input = locationInputs[i];
//     const fieldKey = input.id.replace("-input", "");
//     const isEdit = document.getElementById(fieldKey + "-latitude").value != '' && document.getElementById(fieldKey + "-longitude").value != '';

//     const latitude = parseFloat(document.getElementById(fieldKey + "-latitude").value) || 43.71070;
//     const longitude = parseFloat(document.getElementById(fieldKey + "-longitude").value) || -79.447015;

//     const map = new google.maps.Map(document.getElementById(fieldKey + '-map'), {
//         center: {lat: latitude, lng: longitude},
//         zoom: 10
//     });
//     const marker = new google.maps.Marker({
//         map: map,
//         position: {lat: latitude, lng: longitude},
//     });

//     marker.setVisible(isEdit);

//     const autocomplete = new google.maps.places.Autocomplete(input);
//     autocomplete.key = fieldKey;
//     autocompletes.push({input: input, map: map, marker: marker, autocomplete: autocomplete});
// }

// for (let i = 0; i < autocompletes.length; i++) {
//     const input = autocompletes[i].input;
//     const autocomplete = autocompletes[i].autocomplete;
//     const map = autocompletes[i].map;
//     const marker = autocompletes[i].marker;

//     google.maps.event.addListener(autocomplete, 'place_changed', function () {
//         marker.setVisible(false);
//         const place = autocomplete.getPlace();

//         geocoder.geocode({'placeId': place.place_id}, function (results, status) {
//             if (status === google.maps.GeocoderStatus.OK) {
//                 const lat = results[0].geometry.location.lat();
//                 const lng = results[0].geometry.location.lng();
//                 setLocationCoordinates(autocomplete.key, lat, lng);
//             }
//         });

//         if (!place.geometry) {
//             window.alert("No details available for input: '" + place.name + "'");
//             input.value = "";
//             return;
//         }

//         if (place.geometry.viewport) {
//             map.fitBounds(place.geometry.viewport);
//         } else {
//             map.setCenter(place.geometry.location);
//             map.setZoom(17);
//         }
//         marker.setPosition(place.geometry.location);
//         marker.setVisible(true);

//     });
// }