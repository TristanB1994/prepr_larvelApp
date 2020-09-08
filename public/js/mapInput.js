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
                
            }
        },
        error: function() {
            console.log('failed');
        }
    });

};

function makeMarkers(locationsData, map, infoWindow){
    var lab = {}
    var points = [
        "Title",
        "Category",
        "Latitude",
        "Longitude",
        "Address",
        "City",
        "Country"
    ];
    for (var z = 0; z < points.length; z++) {
        var col = points[z];
        lab[(col)] = "";
    }

    for (var i = 0; i < locationsData.length; i++) {
        
        let node = String(locationsData[i].nodeName);
        let val = String(locationsData[i].textContent)


        if ( points.includes(node) ){
            // console.log(`${node} : ${val}`);
            lab[node] = val
        }
    }
    lab['latlon'] = { lat: parseFloat(lab.Latitude), lng: parseFloat(lab.Longitude) };
    // console.log(lab.latlon)
    var marker = new google.maps.Marker({
        position: lab.latlon,
        title: lab.Title
    });

    marker.setPosition(lab.latlon)
    marker.setMap(map);

    var infoContent = 
    `<h1> ${lab.Title} </h1>
    <p> ${lab.Address} </p>
    <p> ${lab.City}</p>
    <p> ${lab.Country}</p>`
    
    marker.addListener("click", () => {
        infoWindow.setContent(infoContent)
        infoWindow.open(map, marker)
    })
    return marker
};

// function labInfo (map)