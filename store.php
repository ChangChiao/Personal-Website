

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
    <link rel="stylesheet" type="text/css" href="store.css">
   
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBi7e8AiTyqWiFt9vlbGqsAzGyRhVWqCsk&sensor=true"></script>
  
        
           
     <style>



     </style>  
    </head>
<body>
    <div class="wrapper">
     <div class="slider" >
       <?php  include 'header.php';  ?>
       <div class="txtbox col-xs-7 col-sm-7 col-md-5 ">
             <h4>尋找經銷商</h4>
             <p>唯有SANTAX授權的特約經銷商，方能提供銷售及保養勞力士腕錶的服務。憑藉其豐富經驗、專業知識及獨特工具，
            他們不僅確保您的勞力士腕錶的各個零件均為真品及腕錶長遠的可靠運作，竭誠助您選購可伴隨一生的時計。</p>
       </div>
           
    </div>    
    <div class="title">尋找經銷商</div> 
        
       <div class="all">
               <select id="selectList" name="country" length="10" >
                
                <option  value="taiwan">台灣</option>
                <option  value="tokyo">東京</option>
                <option  value="paris">法國</option>
                <option  value="newyork">紐約</option>

        
              </select> 

      </div>
      

      <div class="store">   
           <div class="s-i" id="box">
           </div>
           <div class="s-t"></div>        
           

      </div>


      <div class="store-info">
          <div class="info" id="info-1">
            <div class="info-t"> 
             <p>台北旗艦店</p>
             <p>02-2888567</p>
             <p>110台北市信義區松高路16號</p>  
            </div>
            <div class="gm">
              <a href="https://www.google.com.tw/maps/place/110%E5%8F%B0%E5%8C%97%E5%B8%82%E4%BF%A1%E7%BE%A9%E5%8D%80%E6%9D%BE%E9%AB%98%E8%B7%AF16%E8%99%9F/data=!4m2!3m1!1s0x3442abba4a8eab77:0x1eccdb98c501b841?sa=X&ved=0ahUKEwi9zZj9hqXPAhXDopQKHVE-CcsQ8gEIIjAB"><img src="images/maps-mark.png" alt=""></a>
            </div>
          </div>
          
          <div class="info" id="info-2">
           <div class="info-t">
              <p>東京銀座店</p>
              <p>3-3567-0077</p>
              <p>3-2-1 Ginza, Chuo, Tokyo 104-0061日本</p>
            </div>
          <div class="gm">
               <a href="https://www.google.com.tw/maps/place/3+Chome-2-1+Ginza,+Ch%C5%AB%C5%8D-ku,+T%C5%8Dky%C5%8D-to+104-0061%E6%97%A5%E6%9C%AC/@35.6733706,139.7648602,18z/data=!4m5!3m4!1s0x60188be5ac7d445f:0xf2028c2cc744c4b2!8m2!3d35.6737694!4d139.7650451">
               <img src="images/maps-mark.png" alt="">
               </a>        
          </div>
          </div>


          <div class="info" id="info-3">
            <div class="info-t">
             <p>巴黎香榭店</p>
             <p>+33 1 44 50 73 00</p>
             <p>51 Avenue Montaigne, 75008 Paris, 法國</p>
            </div> 
          <div class="gm">
               <a href="https://www.google.com.tw/maps/place/Avenue+Montaigne,+75008+Paris,+%E6%B3%95%E5%9C%8B/data=!4m2!3m1!1s0x47e66fdcaa0cb549:0x607d018620c897d7?sa=X&ved=0ahUKEwisk5uhh6XPAhVFHZQKHfJvD8sQ8gEIGTAA">
                 <img src="images/maps-mark.png" alt="">
               </a>
          </div> 
          </div>


          <div class="info" id="info-4">
            <div class="info-t">
             <p>紐約旗艦店</p>
             <p>+1 212-966-3988</p>
             <p>100 Mott St, New York, NY 10013美國</p>
            </div> 
          <div class="gm">
                <a href="https://www.google.com.tw/maps/place/100+Mott+St,+New+York,+NY+10013%E7%BE%8E%E5%9C%8B/@40.7172643,-73.9994059,17z/data=!3m1!4b1!4m5!3m4!1s0x89c25a278420dcf1:0x5f90be4a80be0260!8m2!3d40.7172643!4d-73.9972172"><img src="images/maps-mark.png" alt=""></a>
          </div>   
          </div>
      </div>  
    
       
      <?php  include 'footer.php';  ?>
     </div>

        <script>
          $(document).ready(function(){
             

           
             $('#selectList').change(function(){
                    if($('#selectList').val()=='tokyo'){
                $('#box').css('background-image','url(images/store6.jpg)');
                }

                else if($('#selectList').val()=='paris'){
                  $('#box').css('background-image','url(images/store4.png)');
                }

                else if($('#selectList').val()=='newyork'){
                  $('#box').css('background-image','url(images/store7.jpg)');
                }

                else if($('#selectList').val()=='taiwan'){
                  $('#box').css('background-image','url(images/store2.png)');
                }
             });
            


             $('#selectList').change(function(){
                   if($('#selectList').val()=='tokyo'){
                   $('#info-2').css('display','block');
                   $('#info-1').css('display','none');
                   $('#info-3').css('display','none');
                   $('#info-4').css('display','none');
                }

                else if($('#selectList').val()=='paris'){
                   $('#info-3').css('display','block');
                   $('#info-1').css('display','none');
                   $('#info-2').css('display','none');
                   $('#info-4').css('display','none');

                }

                else if($('#selectList').val()=='newyork'){
                   $('#info-4').css('display','block');
                   $('#info-1').css('display','none');
                   $('#info-2').css('display','none');
                   $('#info-3').css('display','none');
                }

                else if($('#selectList').val()=='taiwan'){
                   $('#info-1').css('display','block');
                   $('#info-4').css('display','none');
                   $('#info-2').css('display','none');
                   $('#info-3').css('display','none');
                }



             });

           

          });              
         
     </script>
        
  <!--       <script type="text/javascript">
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
        </script>  --> 
</body>
</html>