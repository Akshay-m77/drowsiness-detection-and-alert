<?php
	include("auth.php");
	include('../db_connect/db.php');
	$Log_Id=$_SESSION['SESS_DRIVER_ID'];
	
	$alt_id=$_GET['alt_id'];
	$result = $db->prepare("select * from alert where alt_id='$alt_id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$ulocation = $row['ulocation'];
		$alocation = $row['location'];
		$photo = $row['photo'];
	}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Driver Monitoring</title>
	<meta name="description" content="" />
	<meta name="author" content="hencework"/>
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<?php include("include\css.php");?>
    <script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript">
	  var map = null;
	  var directionsDisplay = null;
	  var directionsService = null;
	  function initialize() {
		  var myLatlng = new google.maps.LatLng(10.640739,122.968956);
		  var myOptions = {
			  zoom: 7,
			  center: {lat:10.640739, lng:122.968956},
			  mapTypeId: google.maps.MapTypeId.ROADMAP
		  };
		  map = new google.maps.Map($("#map_canvas").get(0), myOptions);
		directionsDisplay = new google.maps.DirectionsRenderer();
		directionsService = new google.maps.DirectionsService();
		var input = document.getElementById('start');
		var searchBox = new google.maps.places.SearchBox(input);
		var input2 = document.getElementById('end');
		var searchBox2 = new google.maps.places.SearchBox(input2);
	  }
	
	  function getDirections(){
		var start = $('#start').val();
		var end = $('#end').val();
		if(!start || !end){
		  alert("Origin and destination are required");
		  return;
		}
		var request = {
				origin: start,
				destination: end,
				travelMode: google.maps.DirectionsTravelMode[$('#travelMode').val()],
				unitSystem: google.maps.DirectionsUnitSystem[$('#unitSystem').val()],
				provideRouteAlternatives: true
		  };
		directionsService.route(request, function(response, status) {
			  if (status == google.maps.DirectionsStatus.OK) {
				  directionsDisplay.setMap(map);
				  directionsDisplay.setPanel($("#directions_panel").get(0));
				  // console.log(response)
				  directionsDisplay.setDirections(response);
				  var summaryPanel = ($("#distance_panel").get(0));
			summaryPanel.innerHTML = '';
			var x = document.getElementById("rutaS");
			$('#rutaS option').remove();
				  for (var j = 0; j < response.routes.length; j++){
			var option = document.createElement("option");
					var route = response.routes[j];
					// console.log(response.routes[j]);
					console.log(route)
			  var routeSegment = j + 1;
			  summaryPanel.innerHTML += '<b>Route ' + routeSegment + ': ';
			  summaryPanel.innerHTML += route.legs[0].distance.text;
			  option.text = route.legs[0].distance.text;
			  option.value =route.legs[0].distance.text.substring(0,(route.legs[0].distance.text.length - 2));
			  x.add(option);
			  summaryPanel.innerHTML += ' (' + route.legs[0].distance.value + 'm)<br><br>';
				  }
			  } else {
				  alert("Please place the origin and destine correctly");
			  }
		  });
	  }
	  function c(){
		var price = $('#type').val();
		var km = $('#rutaS').val();
		$('#costo').val('0');
		if (price != "" && km != "") {
			  var nkm;
			  if (parseFloat(km)>3) {
				nkm = parseInt(km);
				var neto = nkm * 1;
				  document.getElementById('costo').value = Math.round(price) + Math.round(neto);
			  }else{
				nkm = parseInt(km); // xd 3 km o menos
				document.getElementById('costo').value = price;  
			  }
			}else{
			  console.log("")
			}
	  }
	  $('#type').live('change',function(){
		c();
	  });
	  $('#rutaS').live('change',function(){
		c();
	  });
	  $('#search').live('click', function(){ getDirections(); });
	  $('.routeOptions').live('change', function(){ getDirections(); });
	  
	  $(document).ready(function() {
		  initialize();
	  });
	
	
	
	  function printPage(id) {
		var html="<html>";
		html+= document.getElementById(id).innerHTML;
		html+="</html>";
		var printWin = window.open('','','left=0,top=0,width=1,height=1,toolbar=0,scrollbars=0,status =0');
		printWin.document.write(html);
		printWin.document.close();
		printWin.focus();
		printWin.print();
		printWin.close();
	}
  </script>
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-1-active pimary-color-red">
		
        <!-- Top Menu Items -->
			<?php include("include\menu.php");?>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
			<?php include("include\leftmenu.php");?>
		<!-- /Left Sidebar Menu -->
				
        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
				
				<!-- Row -->
				<div class="row">
				<h2>All Alert</h2>
					<hr>
       				<!-- Start -->
                			<div class="col-xs-12">                                 
                                	<input type="text" id="start" value="<?php echo $alocation;?>" class="form-control" required>
                                </div>                                                          
                                <div class="col-xs-12"> 
	                                <br>       
                                	 <input type="text" id="end"  value="<?php echo $ulocation;?>"  class="form-control" required>
                                </div> 
                                <div class="col-xs-12"> 
	                                <br>       
                                      <input type="submit" class="pull-right btn-lg btn-warning" id="search" value="Start Track">
                                </div>
                                <div class="col-xs-12">
                                	<select id="rutaS" class="form-control" style="visibility:hidden">
                                    <option value="">-- Select Distance--</option>
                                   </select>
                                   <input type="hidden" id="rutaS"  class="form-control"  style="visibility:hidden"/>
                                	<p style="display: none;">Route Options 
                                    <select id="travelMode" class="routeOptions"  style="visibility:hidden">
                                        <option value="DRIVING" selected="selected">Driving</option>
                                        <option value="BICYCLING">Bicycling</option>
                                        <option value="WALKING">Walking</option>
                                    </select>
                                    <select id="unitSystem" class="routeOptions"  style="visibility:hidden">
                                        <option value="METRIC" selected="selected">Metric</option>
                                        <option value="IMPERIAL">Imperial</option>
                                    </select>
                                    <div id="results" style="width:100%;height:500px;display: inline-block;"> 
                                        <div id="map_canvas" style="width:100%; height: 100%; float: left;"></div>
                                    </div>
                                      <aside>
                                        <div class="widget">
                                             <div id="routes_panel" >
                                                  <div id="distance_panel" ></div>
                                                  <div id="directions_panel"></div>
                                            </div>
                                        </div>                                
                                  	</aside>
                                </div>    
                			</div>
                <!-- End -->
                			<div class="col-md-12">
                                 <a href="alert_search.php" class="btn btn-block btn-danger">Back</a>
                                </div>        
		           		 </div>
		   	<!-- End Start -->							
                  
										
				</div>
				<!-- /Row -->
			</div>
			
			
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<?php include("include\js.php");?>
    <script>
      function initMap() 
	  {
        var map = new google.maps.Map(document.getElementById('map'), {
          	mapTypeControl: false,
     		center: {lat:10.640739, lng:122.968956},
          zoom: 2
        });
        new AutocompleteDirectionsHandler(map);
      }

       /**
        * @constructor
       */
      function AutocompleteDirectionsHandler(map) 
	  {
        this.map = map;
        this.originPlaceId = null;
        this.destinationPlaceId = null;
        this.travelMode = 'DRIVING';
        var originInput = document.getElementById('origin-input');
        var destinationInput = document.getElementById('destination-input');
        var modeSelector = document.getElementById('mode-selector');
        this.directionsService = new google.maps.DirectionsService;
        this.directionsDisplay = new google.maps.DirectionsRenderer;
        this.directionsDisplay.setMap(map);

        var originAutocomplete = new google.maps.places.Autocomplete(
            originInput, {placeIdOnly: true});
        var destinationAutocomplete = new google.maps.places.Autocomplete(
            destinationInput, {placeIdOnly: true});

        this.setupClickListener('changemode-walking', 'WALKING');
        this.setupClickListener('changemode-transit', 'TRANSIT');
        this.setupClickListener('changemode-driving', 'DRIVING');

        this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
        this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');

        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(destinationInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector);
      }

   
      AutocompleteDirectionsHandler.prototype.setupClickListener = function(id, mode) {
        var radioButton = document.getElementById(id);
        var me = this;
        radioButton.addEventListener('click', function() {
          me.travelMode = mode;
          me.route();
        });
      };

      AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(autocomplete, mode) {
        var me = this;
        autocomplete.bindTo('bounds', this.map);
        autocomplete.addListener('place_changed', function() {
          var place = autocomplete.getPlace();
          if (!place.place_id) {
            window.alert("Please select an option from the dropdown list.");
            return;
          }
          if (mode === 'ORIG') {
            me.originPlaceId = place.place_id;
          } else {
            me.destinationPlaceId = place.place_id;
          }
          me.route();
        });

      };

      AutocompleteDirectionsHandler.prototype.route = function() {
        if (!this.originPlaceId || !this.destinationPlaceId) {
          return;
        }
        var me = this;

        this.directionsService.route({
          origin: {'placeId': this.originPlaceId},
          destination: {'placeId': this.destinationPlaceId},
          travelMode: this.travelMode
        }, function(response, status) {
          if (status === 'OK') {
            me.directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      };

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFmeHX_gudPm1dRUGWoWo0LiHFJGxkc6M&libraries=places"></script>
</body>

</html>
