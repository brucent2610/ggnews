 <!-- Google Map Start -->
 <div class="container mt-30">
    <div class="row">
        <div class="col-xs-12">
            <h3 class="mb-5"><?php echo @$instance['title_infomation'] ?></h3>
            <p class="text-capitalize"><?php echo @$instance['address_infomation'] ?></p>
            <p class="text-capitalize"><?php echo @$instance['company_infomation'] ?></p>                        
            <p class="text-capitalize mb-40"><?php echo @$instance['phone_infomation'] ?></p>                        
        </div>
    </div>
</div>
<!-- Google Map End -->
 <!-- Google Map Start -->
 <div class="container mt-10">
    <div id="map" style="height:400px"></div>
</div>
<!-- Google Map End -->
<!-- Contact Email Area Start -->
<div class="contact-email-area ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mb-5">
                    <?php echo __('Liên hệ') ?>
                </h3>
                <div class="row">
                    <?php echo do_shortcode(@$instance['contact']) ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Email Area End -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
<script>
    var lat = '<?php echo @$instance['lat'] ?>';
    var long = '<?php echo @$instance['long'] ?>';
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 11,

            scrollwheel: false,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(lat, long), // New York

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#444444"
                    }]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{
                        "color": "#f2f2f2"
                    }]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [{
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "simplified"
                    }]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [{
                            "color": "#314453"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [{
                            "lightness": "-12"
                        },
                        {
                            "saturation": "0"
                        },
                        {
                            "color": "#4bc7e9"
                        }
                    ]
                }
            ]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(lat, long),
            map: map,
            title: 'GG News'
        });
    }
</script>