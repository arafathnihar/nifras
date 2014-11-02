<?php die("Access Denied"); ?>#x#a:3:{s:4:"body";s:14180:"<!DOCTYPE html>
<!-- jsn_corsa_free 1.0.3 -->
<html lang="en-gb" dir="ltr">
<head>
	  <base href="http://localhost/P_IV_Joomla/index.php/en/my-plae" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="Just a sample project using joomla as tool" />
  <meta name="generator" content="Joomla! - Open Source Content Management" />
  <title>Our Place</title>
  <link href="http://localhost/P_IV_Joomla/index.php/en/my-plae" rel="canonical" />
  <link href="/P_IV_Joomla/templates/jsn_corsa_free/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link rel="stylesheet" href="/P_IV_Joomla/media/system/css/modal.css" type="text/css" />
  <link rel="stylesheet" href="/P_IV_Joomla/components/com_focalpoint/assets/css/focalpoint.css" type="text/css" />
  <link rel="stylesheet" href="/P_IV_Joomla/components/com_imageshow/assets/css/style.css" type="text/css" />
  <link rel="stylesheet" href="/P_IV_Joomla/media/jui/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="/P_IV_Joomla/media/jui/css/bootstrap-responsive.min.css" type="text/css" />
  <link rel="stylesheet" href="/P_IV_Joomla/media/jui/css/bootstrap-extended.css" type="text/css" />
  <link rel="stylesheet" href="/P_IV_Joomla/plugins/system/jsntplframework/assets/3rd-party/bootstrap/css/bootstrap-frontend.min.css" type="text/css" />
  <link rel="stylesheet" href="/P_IV_Joomla/templates/system/css/system.css" type="text/css" />
  <link rel="stylesheet" href="/P_IV_Joomla/templates/system/css/general.css" type="text/css" />
  <link rel="stylesheet" href="/P_IV_Joomla/templates/jsn_corsa_free/css/template.css" type="text/css" />
  <link rel="stylesheet" href="/P_IV_Joomla/templates/jsn_corsa_free/css/colors/cyan.css" type="text/css" />
  <link rel="stylesheet" href="/P_IV_Joomla/templates/jsn_corsa_free/css/styles/business.css" type="text/css" />
  <style type="text/css">
	#jsn-page,
	#jsn-topheader {
		width: 960px;
		min-width: 960px;
	}
  </style>
  <script src="/P_IV_Joomla/media/system/js/mootools-core.js" type="text/javascript"></script>
  <script src="/P_IV_Joomla/media/jui/js/jquery.min.js" type="text/javascript"></script>
  <script src="/P_IV_Joomla/media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
  <script src="/P_IV_Joomla/media/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="/P_IV_Joomla/media/system/js/core.js" type="text/javascript"></script>
  <script src="/P_IV_Joomla/media/system/js/mootools-more.js" type="text/javascript"></script>
  <script src="/P_IV_Joomla/media/system/js/modal.js" type="text/javascript"></script>
  <script src="http://maps.googleapis.com/maps/api/js?key=&sensor=false" type="text/javascript"></script>
  <script src="http://localhost/P_IV_Joomla/components/com_focalpoint/assets/js/infobox.js" type="text/javascript"></script>
  <script src="/P_IV_Joomla/plugins/system/jsntplframework/assets/joomlashine/js/noconflict.js" type="text/javascript"></script>
  <script src="/P_IV_Joomla/plugins/system/jsntplframework/assets/joomlashine/js/utils.js" type="text/javascript"></script>
  <script src="/P_IV_Joomla/templates/jsn_corsa_free/js/jsn_template.js" type="text/javascript"></script>
  <script type="text/javascript">

		jQuery(function($) {
			SqueezeBox.initialize({});
			SqueezeBox.assign($('a.modal').get(), {
				parse: 'rel'
			});
		});
    function initialize() {
        var mapProp = {
            center:new google.maps.LatLng(5.974257,80.428913),
            zoom:14,
            mapTypeControl: true,
            zoomControl: 1,
            scrollwheel: 0,
            streetViewControl: 1,
            panControl: 0,
            draggable: 1,
            mapTypeId:google.maps.MapTypeId.ROADMAP,
            styles: []
        };
        var map=new google.maps.Map(document.getElementById("fp_googleMap"),mapProp);
        var markerSets = new Array();
        var marker= new Array();    
        var infoBox = new Array();
	    var searchassist = ", ";

        var myCenter1=new google.maps.LatLng(5.974257,80.428913);
        marker[1]=new google.maps.Marker({
            position:myCenter1,
            icon: "http://localhost/P_IV_Joomla/images/markers/pins/style4/red.png"
        });
        marker[1].setMap(map);
        marker[1].status = 1;    
        var boxText1 = "<h4>Our Place</h4><div class=\"infoboxcontent\"><p>52 A, Vajiragnana Mawatha</p><p>0777271076</p><div class=\"infopointer\"></div></div>";

        infoBox[1] = new InfoBox({
            content: boxText1,
            alignBottom: true, 
            position: new google.maps.LatLng(5.974257,80.428913),
            pixelOffset: new google.maps.Size(-160, -55),
            maxWidth: 320,
            zIndex: null,
            closeBoxMargin: "7px 5px 1px 1px",
            closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
            infoBoxClearance: new google.maps.Size(20, 30)
        });
        
        google.maps.event.addListener(marker[1], 'click', function() {
            infoBox[1].open(map,marker[1]);
        });
		jQuery("#fp_searchAddressBtn").click(function() {
			geocoder = new google.maps.Geocoder();
			searchTxt = document.getElementById("fp_searchAddress").value;
			if (searchTxt == "") {return false;}
			geocoder.geocode( { "address": searchTxt+searchassist}, function(results, status) {

                if (status == google.maps.GeocoderStatus.OK) {
                    jQuery("#fp_googleMap_directions").html("");
                    if (status == google.maps.GeocoderStatus.OK) {
                        var startLocation =	results[0].geometry.location;
                    }
                    var directionsService = new google.maps.DirectionsService();
                    var directionsDisplay = new google.maps.DirectionsRenderer();

                    directionsDisplay.setMap(map);
                    directionsDisplay.setPanel(document.getElementById("fp_googleMap_directions"));

                    var request = {
                        origin: startLocation,
                        destination: myCenter1,
                        travelMode: google.maps.DirectionsTravelMode.DRIVING
                    };

                    directionsService.route(request, function(response, status) {
                        if (status == google.maps.DirectionsStatus.OK) {
                            directionsDisplay.setDirections(response);
                        } else {
                            alert("Google was unable to calculate driving directions to this location. Geolocation result: " + status);
                        }
                    });
				} else {
                    alert("Google was unable to calculate driving directions to this location. Geolocation result: " + status);
				}
			});
		});
    }       
    google.maps.event.addDomListener(window, 'load', initialize);

				JSNTemplate.initTemplate({
					templatePrefix			: "jsn_corsa_free_",
					templatePath			: "/P_IV_Joomla/templates/jsn_corsa_free",
					enableRTL				: 0,
					enableGotopLink			: 1,
					enableMobile			: 0,
					enableMobileMenuSticky	: 1,
					enableDesktopMenuSticky	: 0,
					responsiveLayout		: []
				});
			
					window.addEvent("domready", JSNUtils.setDesktopOnMobile);
				
  </script>

</head>
<body id="jsn-master" class="jsn-textstyle-business jsn-color-cyan jsn-direction-ltr jsn-desktop jsn-joomla-30  jsn-com-focalpoint jsn-view-location jsn-itemid-1286">
		
	<div id="jsn-topheader"  class="  jsn-hastopright">
	<div id="jsn-topheader-inner">
	
		</div></div>

	<div id="jsn-page" class="container">
		<div id="jsn-header"><div id="jsn-header-inner">
			<div id="jsn-logo" class="pull-left">
			<a href="/P_IV_Joomla/index.php" title=""><img src="/P_IV_Joomla/images/photo/logo.jpg" alt="" id="jsn-logo-desktop" /></a>			</div>

						<div id="jsn-menu" class="pull-right">
							<div id="jsn-pos-mainmenu">
					<div class=" jsn-modulecontainer"><div class="jsn-modulecontainer_inner"><div class="jsn-modulecontent">
<ul class="menu-mainmenu">
<li  class="first jsn-icon-home"><a  href="/P_IV_Joomla/index.php/en/" title="Start here" >
	<span>
		<span class="jsn-menutitle">Home</span><span class="jsn-menudescription">Start here</span>	</span>
</a></li><li  class="parent jsn-icon-image"><a  href="/P_IV_Joomla/index.php/en/our-products" title="36 positions" >
	<span>
		<span class="jsn-menutitle">Our Products</span><span class="jsn-menudescription">36 positions</span>	</span>
</a><ul><li  class="first"><a  href="/P_IV_Joomla/index.php/en/our-products/left-center-right" >
	<span>
		Jugs 110 Volt Cricket Machine	</span>
</a></li><li ><a  href="/P_IV_Joomla/index.php/en/our-products/left-innerleft-center" >
	<span>
		Slazenger Elite Cricket Wicket Keeping Gloves	</span>
</a></li><li ><a  href="/P_IV_Joomla/index.php/en/our-products/left-center-innerright" >
	<span>
		Slazenger Icon Cricket Batting Pads	</span>
</a></li><li ><a  href="/P_IV_Joomla/index.php/en/our-products/center-innerright-right" >
	<span>
		Slazenger Icon Cricket Batting Gloves	</span>
</a></li><li ><a  href="/P_IV_Joomla/index.php/en/our-products/jugs-110-volt-cricket-machine" >
	<span>
		Slazenger V100 Club Cricket Bat	</span>
</a></li><li ><a  href="/P_IV_Joomla/index.php/en/our-products/main-content-only" >
	<span>
		Slazenger Senior International Cricket Helmet	</span>
</a></li><li ><a  href="/P_IV_Joomla/index.php/en/our-products/slazenger-training-cricket-ball" >
	<span>
		Slazenger Training Cricket Ball	</span>
</a></li><li  class="last"><a  href="/P_IV_Joomla/index.php/en/our-products/slazenger-county-cricket-ball" >
	<span>
		Slazenger County Cricket Ball	</span>
</a></li></ul></li><li ><a  href="/P_IV_Joomla/index.php/en/module-styles" title="Make it beautiful" >
	<span>
		<span class="jsn-menutitle">Gallery</span><span class="jsn-menudescription">Make it beautiful</span>	</span>
</a></li><li ><a  href="/P_IV_Joomla/index.php/en/free-extensions" title="Extend func.." >
	<span>
		<span class="jsn-menutitle">Our Location</span><span class="jsn-menudescription">Extend func..</span>	</span>
</a></li><li ><a  href="/P_IV_Joomla/index.php/en/shopping" >
	<span>
		Shopping	</span>
</a></li><li  class="current active last"><a class="current" href="/P_IV_Joomla/index.php/en/my-plae" >
	<span>
		My Plae	</span>
</a></li></ul><div class="clearbreak"></div></div></div></div>
				</div>
						</div>
			<div class="clearbreak"></div>
		</div></div>
		<div id="jsn-body">
					<div id="jsn-content" class="">
				<div id="jsn-content_inner" class="row-fluid">
						<div id="jsn-maincontent" class="span12 order1  row-fluid">
					
								<div id="jsn-centercol" class="span12 order1 "><div id="jsn-centercol_inner">
									<div id="jsn-mainbody-content" class=" jsn-hasmainbody">
											<div id="jsn-mainbody">
										<div id="system-message-container">
	</div>

										




<div id="focalpoint" class="fp-location-view">
	<div class="row-fluid">
			<h1 class="backlink">
		<a class="backtomap" href="/P_IV_Joomla/index.php/en/free-extensions">Back to map</a>Our Place		</h1>
		</div>
	<div class="row-fluid">
		<div class="fp_left_column span8">
            <div id="fp_googleMap"></div>
                            <div id="fp_googleMap_directions"></div>
                <div id="fp_map_actions" class="input-append">
                    <form onsubmit="return false;"><label for="fp_searchAddress">Your Address?</label>
                        <input class="" id="fp_searchAddress" type="text" value="Your Address?" onblur="if (this.value=='') {this.value='Your Address?';jQuery('#fp_searchAddressBtn').attr('disabled', true);}" onfocus="if (this.value=='Your Address?') this.value='';jQuery('#fp_searchAddressBtn').attr('disabled', false);">
                        <button class="btn " id="fp_searchAddressBtn" type="submit" disabled >Get Directions</button>
                    </form>
                </div>
            
						

            			            
		</div>

		<div class="fp_right_column span4">
                            <div class="row-fluid fp_address">
                                            <div class="span12">
                            <h3>Address:</h3>
                            <p>52 A, Vajiragnana Mawatha</p>
                        </div>
                                                                <div class="span12">
                            <h3>Phone:</h3>
                            <p>0777271076</p>
                        </div>
                                    </div>
            
            
		</div>
	</div>
	<div class="row-fluid">
		<p>
		<a class="btn backtomap" href="/P_IV_Joomla/index.php/en/free-extensions">Back to map</a>
	</p>
		</div>
		
</div>
									</div>
										</div>
		        				</div></div> <!-- end centercol -->
        				</div> <!-- end jsn-maincontent -->
		                </div>
            </div>
				</div>
					<div id="jsn-footer">
				<div id="jsn-footermodules" class="jsn-modulescontainer jsn-modulescontainer1 row-fluid">
								<div id="jsn-pos-footer" class="span12">
						<div class=" jsn-modulecontainer"><div class="jsn-modulecontainer_inner"><div class="jsn-modulecontent">
<ul class="menu-divmenu">
<li  class="first"><a  href="/P_IV_Joomla/index.php/en/joomlashine" >
	<span>
		Privacy Policy	</span>
</a></li><li ><a  href="/P_IV_Joomla/index.php/en/joomla-templates" >
	<span>
		Security	</span>
</a></li><li  class="last">	<a  href="/P_IV_Joomla/index.php/en/" >
		<span>
		Home		</span>
	</a>
	</li></ul><div class="clearbreak"></div></div></div></div><div class=" jsn-modulecontainer"><div class="jsn-modulecontainer_inner"><div class="jsn-modulecontent">
<div  >
	<p>Copyright Â© 2008 - 2014 CricketSaga..</p>
<p>All rights reserved</p></div><div class="clearbreak"></div></div></div></div>
					</div>
								<div class="clearbreak"></div>
				</div>
			</div>
			</div>
	<div id="jsn-brand">
		JSN Corsa template designed by <a href="http://www.joomlashine.com" target="_blank" title="Free Hi-Quality Joomla Templates on JoomlaShine">JoomlaShine.com</a>
	</div>

</body>
</html>";s:13:"mime_encoding";s:9:"text/html";s:7:"headers";a:1:{i:0;a:2:{s:4:"name";s:3:"P3P";s:5:"value";s:50:"CP="NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM"";}}}