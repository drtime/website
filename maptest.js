function myMap() {

    // Position focused on Google Map (Wijnhaven, Rotterdam, The Netherlands \\
    var uluru = {lat: 51.917325, lng: 4.484868};

    // Map initialisation \\
    var map = new google.maps.Map(document.getElementById('googleMap1'), {
        zoom: 15, // Managing zoom level
        center: uluru, // Centered on Wijnhaven, Rotterdam
        mapTypeId: google.maps.MapTypeId.ROADMAP, // Type of map (how it looks)
        scrollwheel: false // Disables Scrolling on map (colliding with pagePiling.js)
        });

    // Putting a Marker on our destination \\
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });

}


