<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
        <header class="header">
            <div class="top-header">
                <div class="wrap-box">
                    <h1 class="logo">
                      <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                        </a>

                      <?php else: /* Use h1 when the content title is empty */ ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                            LOGO
                        </a>  
                      <?php endif; ?>
                    </h1>

                    <div id="search-box">
                        <form class="search-form" action="#" method="get">
                            <input type="search" class="search-input" name="s" placeholder="Search">
                            <input type="submit" class="search-submit" value="">
                            <i class="fa fa-search"></i>
                        </form>
                    </div>

                  <nav class="main-nav">

                    <?php if (!empty($primary_nav)): ?>
                    <?php print render($primary_nav); ?>
                    <?php endif; ?>

                  </nav>   

                </div>
            </div>
        </header>

        <main class="main-content">

            <?php print render($page['content']); ?>     

        </main>
</div><!--end WRAPPER-->

  <?php print render($page['footer']); ?>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--[if lt IE 10]><script src="js/jquery.placeholder.js"></script><![endif]-->
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map_canvas');
            var mapOptions = {
                center: new google.maps.LatLng(48.4705052,31.2268153),
                zoom: 6,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true
            }

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using out element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            setMarkers(map, places);
        }
        google.maps.event.addDomListener(window, 'load', initialize);

        function setMarkers(map, locations) {
            // Display area markers
            var latlngbounds = new google.maps.LatLngBounds();

            var image = new google.maps.MarkerImage( '',
                    new google.maps.Size(46,66), // icon sizes
                    new google.maps.Point(0,0),
                    new google.maps.Point(7,36)
            );

            for (var i = 0; i < places.length; i++) {
                var myLatLng = new google.maps.LatLng(locations[i][1], locations[i][2]);
                // Add coordinates of the marker in the area
                latlngbounds.extend(myLatLng);
                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: image,
                    title: locations[i][0]
                });
            }
        }
        var places = [
            ['Ukraine',48.4705052,31.2268153]
        ];
    </script>
