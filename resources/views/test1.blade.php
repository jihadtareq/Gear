<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <form method="POST" action="url{{'/map'}}">
    <div id="map" style="height:100%"></div>
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center : {lat: 55.55, lng: -66.66},
            zoom : 13
        });
    }
</script>
<script async defer 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfAvi8c9Fzl9X7SKobkGwHaOV6z4VcvAY&v=3&callback=initMap">
</script>
  </form>
  </body>
</html>
{{-- <script>
    $(document).ready(function() {
    $('.favourite').on('click', null, function() {
    var _this = $(this);
    var postid = _this.data('$id');
    $.ajax({
      type     : 'POST',
      url      : '/add.php',
      dataType : 'json',
      data     : '$itemsid='+ postid,
      complete : function(data) {
           if(_this.siblings('.favourite'))
           {
             _this.html('<img src="add2.png" />');
           }
           else
           {
             _this.html('<img src="add1.png />');
           }
        }
        });
    });
});
</script> --}}
