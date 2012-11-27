<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map_canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDF8gq1fSwzjX0ppIv9jTs0cgfg93aFJvs&sensor=false">
    </script>
    <script type="text/javascript">
        //lagos state coordinates lat6.5831,long: 3.7500 
        //Iyana Ipaja Coordinates 6.621384,3.297522
        /* /Unilag 6.51804,3.388417
      function initialize() {
        var myOptions = {
          center: new google.maps.LatLng(6.621384,3.297522),
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            myOptions);
            var myLatLng = new google.maps.LatLng(6.51804,3.388417);
            var beachMarker = new google.maps.Marker({
            position: myLatLng,
            map : map, title:"UNILAG"
            });
      }*/
      
    </script>
  </head>
  <body onload="initialize()">
    <div id="map_canvas" style="width:100%; height:100%; backface-color:#332433;"></div>
  </body>
</html>
