<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>尋找經銷商</title>
    <link rel="Shortcut Icon" type="image/x-icon" href="images/sm-logo.ico"/>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="title.css">
    <link rel="stylesheet" type="text/css" href="grid.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="footer.css">   
    <link rel="stylesheet" type="text/css" href="fix.css">
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBi7e8AiTyqWiFt9vlbGqsAzGyRhVWqCsk&sensor=true"></script>
    
            <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
            <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
            <script src="https://www.amcharts.com/lib/3/themes/none.js"></script>
            <script src="http://www.amcharts.com/lib/3/plugins/responsive/responsive.min.js?0.9.1a"></script>
            <script>
            // svg path for target icon
var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";
// svg path for plane icon
// var planeSVG = "M 100 100 L 300 100 L 200 300 z";

window.map = AmCharts.makeChart("chartdiv", {
    type: "map",
    projection:"miller",
    selectable: true,
    dataProvider: {
        map: "worldLow",
  
        lines: [{
            // id: "line1",
            // arc: -0.85,
            // alpha: 0.3,
            // latitudes: [48.8567, 43.8163, 34.3, 23],
            // longitudes: [2.3510, -79.4287, -118.15, -82]
        }, {
            // id: "line2",
            // alpha: 0,
            // color: "#000000",
            // latitudes: [48.8567, 43.8163, 34.3, 23],
            // longitudes: [2.3510, -79.4287, -118.15, -82]
        }],



        images: [{
            svgPath: targetSVG,
            title: "Pairs 51 Avenue Montaigne, 75008 Paris, 法國 <br>  電話： +33 1 44 50 73 00",
            latitude: 48.8567,
            longitude: 2.3510,
            scale:2
        }, {
            svgPath: targetSVG,
            title: "New york 100 Mott St, New York, NY 10013美國  <br>       電話：+1 212-966-3988",
            latitude: 40.8163,
            longitude: -74.4287,
            scale:2
        }, {
            svgPath: targetSVG,
            title: "tokyo 3-2-1 Ginza, Chuo, Tokyo 104-0061日本   <br>       電話：+3-3567-0077",
            latitude: 35,
            longitude: 139,
            scale:2
        }, {
            svgPath: targetSVG,
            title: "Taiwan 110台北市信義區松高路16號   <br>      電話：02-2888567",
            latitude: 23,
            longitude: 121,
            scale:2
        }, {
            // svgPath: planeSVG,
            // positionOnLine: 0, 
            // color: "#000000",
            // alpha: 0.1,
            // animateAlongLine: true,
            // lineId: "line2",
            // flipDirection: false,
            // loop: true,
            // scale: 0.03,
            // positionScale: 1.3
        }, {
            // svgPath: planeSVG,
            // positionOnLine: 0,
            // color: "#585869",
            // animateAlongLine: true,
            // lineId: "line1",
            // flipDirection: false,
            // loop: true,
            // scale: 0.03,
            // positionScale: 1.8
        }]
    },

    areasSettings: {
        unlistedAreasColor: "#41767c"
    },

    imagesSettings: {
        color: "rgba(0,180,240,.5)",
        rollOverColor: "rgba(0,180,240,.5)",
        selectedColor: "rgba(0,180,240,.5)",
        pauseDuration: 0.2,
        animationDuration: 4,
        adjustAnimationSpeed: true
    },

    linesSettings: {
        color: "#585869",
        alpha: 0.4
    },
     
    export:{
     enabled:false
    },
  
     fontSize:20
  
     
}); 
            </script>
     <style>
            .wrapper{
                position: relative;
            }
         
             #chartdiv {
                width       : 100%;
                height      : 500px;
                margin:20px 0; 
                /*font-size : 11px;*/
            }                       
            /*.ammapDescriptionWindow{
              border:1px solid #D1D1D1;
              border-radius:10px;
              padding:1em;
              background-color:#D1D1D1;
              box-shadow: 10px 10px 5px #888888;
             } */
             /* .ammapDescriptionTitle{
                font-weight:bold;
                text-align:center;
                font-size:2em;

              }*/
              /*.ammapDescriptionText{
                font-size:1.5em;
                margin-top:1em;
                color:#fa0;
              }*/
            }
            .amcharts-chart-div a{
              display:none !important;
            }   


             

           
     </style>       
    </head>
<body>
    <div class="wrapper">
     <div class="slider" >
       <?php  include 'header.php';  ?>
        <div class="txtbox col-xs-7 col-sm-7 col-md-5">
           	 <h4>維修中心</h4>
           	 <p>SANTAX為確保每枚時計離開SANTAX錶廠後，均符合原來的功能和美學設計規格，SANTAX特別制定出一套檢修程序。每枚機芯均經詳細檢查，而錶殼及錶鏈亦經過精細拋光，重現原來色澤。此外，SANTAX腕錶經嚴格的計時和防水測試，對品質水平作出保證，精準可靠。</p>
       </div>
           
    </div>    
    <div class="title">尋找服務據點</div> 
        
     

       <div id="chartdiv"></div>

     
      <div class="m-maps">
      	<div class="m-1-t mt">
      		<p>台灣</p>
      		<p>02-2888567</p>
      		<p>110台北市信義區松高路16號</p>



      	</div>	
      	<div id="map">  </div>
      	<div class="m-2-t mt">
      		<p>日本</p>
      		<p>3-3567-0077</p>
      		<p>3-2-1 Ginza, Chuo, Tokyo 104-0061日本</p>

      	</div>
        <div id="map2"> </div>
        <div class="m-3-t mt">
        	<p>巴黎</p>
        	<p>+33 1 44 50 73 00</p>
        	<p>51 Avenue Montaigne, 75008 Paris, 法國</p>

        </div>
        <div id="map3"> </div>
        <div class="m-4-t mt">
        	<p>紐約</p>
        	<p>+1 212-966-3988</p>
        	<p>100 Mott St, New York, NY 10013美國</p>

        </div>
        <div id="map4"> </div>
      </div>

      <?php  include 'footer.php';  ?>

       <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(25.0387252, 121.5650909), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.locality","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":"1.68"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#236f7a"},{"visibility":"on"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(25.0387252, 121.5650909),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>  

         <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(35.6733706, 139.7648602), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.locality","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":"1.68"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#236f7a"},{"visibility":"on"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map2');

                // Create the Google Map using our element and options defined above
                var map2 = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(35.6733706, 139.7648602),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>  

         <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(48.8667058, 2.3035123), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.locality","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":"1.68"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#236f7a"},{"visibility":"on"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map3');

                // Create the Google Map using our element and options defined above
                var map3 = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(48.8667058, 2.3035123),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>  

                <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.7172643, -73.9994059), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.locality","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":"1.68"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#236f7a"},{"visibility":"on"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map4');

                // Create the Google Map using our element and options defined above
                var map4 = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.7172643, -73.9994059),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>  
     </div>
  
</body>
</html>
