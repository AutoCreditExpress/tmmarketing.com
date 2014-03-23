<?php
$pageTitle = 'Contact US | TM Marketing';
$pageDescription = 'Get in contact with TM Marketing to get more customers or start a career of a lifetime.';
$pageKeywords = 'door to door marketing for energy deregulation.';

include($docPath.'inc/template/header.php');
?>
<!-- section map -->
<section class="section full-width section-padding-zero">
  <div  id="map" class="google_map" style="width:100%;height:500px;"> </div>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
 
  <script type="text/javascript">
	    var latlng = new google.maps.LatLng(41.103830,-74.162552);
		var MY_MAPTYPE_ID = 'mapid';
		var myOptions = {
			zoom: 12,
			center: latlng,
			scrollwheel: false,
			scaleControl: false,
			disableDefaultUI: true,
			  mapTypeControl: false,
		    mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
                 },
             mapTypeId: MY_MAPTYPE_ID
			
		};
		var map = new google.maps.Map(document.getElementById("map"),
		myOptions);
		 
         var styles = [ 
		{
		    "stylers": [
		      { "hue": "#003bff" },
		      { "invert_lightness": true },
		      { "lightness": 10 },
      		  { "gamma": 0.91 },
		      { "saturation": -60 }
		    ]
		},{
		    "featureType": "road.local",
		    "elementType": "labels",
		    "stylers": [
		      { "visibility": "off" }
		    ]
		},{
		    "featureType": "landscape",
		    "stylers": [
		      { "visibility": "simplified" }
		    ]
		},{
		    "featureType": "poi",
		    "stylers": [
		      { "visibility": "off" }
		    ]
		},{
		    "featureType": "road",
		    "stylers": [
		      { "saturation": -65 }
		    ]
		},{
		    "featureType": "water",
		    "stylers": [
		      { "saturation": -50 },
		      { "lightness": -25 }
    		]
  		},{
		    "featureType": "road",
		    "stylers": [
		      { "gamma": 0.9 }
		    ]
		  } 
		]
	  
	
     var customMapType = new google.maps.StyledMapType(styles);
	  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
	  	
	  var image = {
        url: '<?php echo $webPath;?>images/location.png',
       // This marker is 20 pixels wide by 32 pixels tall.
       size: new google.maps.Size(60, 60),
        // The origin for this image is 0,0.
       origin: new google.maps.Point(0,0),
      // The anchor for this image is the base of the flagpole at 0,32.
       anchor: new google.maps.Point(0, 32)
  };
  
    var marker = new google.maps.Marker({
        map: map,
	   icon : image
    });

   var geocoder_map = new google.maps.Geocoder();
	   var address = '5 E Long St, Columbus, OH 43215';
		geocoder_map.geocode( { 'address': address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
					map.setCenter(results[0].geometry.location);
	                marker.setPosition(map.getCenter());
			 } else {
				alert("Geocode was not successful for the following reason: " + status);
			}
			}); 
	</script> 
    
    
</section>

<!-- Section post -->
<section class="section double-section">
<div class="container">
<div class="row-fluid">
<div class="content-left">
<div class="inner-content">
<div class="textright">
<h4 class="textuppercase">Address</h4>
5 E Long St,<br> Columbus, OH 43215
</div>
</div></div>
<div class="content-right">
<div class="inner-content">
<h4 class="textuppercase">Contact</h4>
<span class="fontAwesomeIcon style1"><i class="icon-blandes-phone"></i></span>614-218-9976,<br><span class="fontAwesomeIcon style1"> <i class="icon-blandes-mail"></i></span>results@wemarketenergy.com
</div></div>

</div></div>
</section>


<section class="section grid-740 section-padding-large">
  <div class="container">
    <div class="row-fluid">
      <div class="stunning_text">
        <div class="big-title  extra-large-text">
          <div>
            <h4 class="first-title"><span>Feel Free to</span></h4>
            <span>Contact us</span>
            <h4 class="last-title"><span>Any time</span></h4>
          </div>
        </div>
      </div>
      <div class="wpcf7" id="wpcf7-f2370-p20-o1">
        <form action="<?php echo $webPath;?>contact_typ/" method="post" class="wpcf7-form" novalidate>
          <div style="display: none;">
            <input type="hidden" name="_wpcf7" value="2370" />
            <input type="hidden" name="_wpcf7_version" value="3.4.2" />
            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2370-p20-o1" />
            <input type="hidden" name="_wpnonce" value="c1e8779b4f" />
          </div>
          <div>
            <div class="row-fluid">
              <div class="span6">
                <p> <span class="wpcf7-form-control-wrap your-name"> <span class="icon"><i class="icon-blandes-user"></i></span>
                  <input type="text" name="first"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" value="First Name" />
                  </span> </p>
              </div>
              <div class="span6">
                <p> <span class="wpcf7-form-control-wrap your-last-name"> <span class="icon"><i class="icon-blandes-phone"></i></span>
                  <input type="text" name="phone"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" value="Phone" />
                  </span> </p>
              </div>
            </div>
          </div>
          <div>
            <p> <span class="wpcf7-form-control-wrap your-email"> <span class="icon"><i class="icon-blandes-mail"></i></span>
              <input type="text" name="email"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" value="Email" />
              </span> </p>
          </div>
          <p> <span class="wpcf7-form-control-wrap your-message">
            <textarea name="message" rows="8" cols="5"  class="wpcf7-form-control wpcf7-textarea">Message</textarea>
            </span> </p>
          <p style="margin-bottom:0">
            <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" />
          </p>
          <div class="wpcf7-response-output wpcf7-display-none"></div>
        </form>
      </div>
      <div class="gap" style="height:50px"></div>
    </div>
  </div>
</section>
<?php
include($docPath.'inc/template/footer.php');
?>