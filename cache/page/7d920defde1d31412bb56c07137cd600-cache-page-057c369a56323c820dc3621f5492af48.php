<?php die("Access Denied"); ?>#x#a:3:{s:4:"body";s:25698:"<!DOCTYPE html>
<!-- jsn_corsa_free 1.0.3 -->
<html lang="en-gb" dir="ltr">
<head>
	  <base href="http://localhost/P_IV_Joomla/index.php/en/our-location" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="Just a sample project using joomla as tool" />
  <meta name="generator" content="Joomla! - Open Source Content Management" />
  <title>Our Location</title>
  <link href="http://localhost/P_IV_Joomla/index.php/en/our-location" rel="canonical" />
  <link href="/P_IV_Joomla/templates/jsn_corsa_free/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link rel="stylesheet" href="/P_IV_Joomla/media/system/css/modal.css" type="text/css" />
  <link rel="stylesheet" href="http://localhost/P_IV_Joomla/components/com_focalpoint/assets/css/focalpoint.css" type="text/css" />
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
	var allowScrollTo = false;
	var searchTxt = "";
	var showlisttab = 1;
	var showmapsearch = 0;
	var mapsearchzoom = 12;
	var mapsearchrange = 15;
	var mapsearchprompt = "Suburn or Postal Code";
	var searchassist = ", ";
	var fitbounds = 0;
	var markerclusters = 0;
	var listtabfirst = 0;
	var map;
	var mapCenter = new google.maps.LatLng(5.974257,80.428913);
	var markerCluster;
    var clusterMarkers = [];
    if(typeof clusterStyles === 'undefined') {
        var clusterStyles = [];
    }
    var marker= new Array();
	function updateActiveCount(marker){
		var locationTxt ="";
		var status=""
		var activeCount = 0;
		jQuery.each(marker, function(i,m){
			if(typeof m !== 'undefined') {
				if (marker[i].status > 0 ) {
					activeCount += 1;
					status = status+" "+marker[i].status;
				}
			}
		});
		if (searchTxt !="" ) {
			locationTxt = " (within "+mapsearchrange+"Kms of "+searchTxt+")";
		}
		var locationPlural = "locations";
		if (activeCount == 1) { locationPlural = "location"; }
		jQuery("#activecount").html("Showing " + activeCount +" "+locationPlural+locationTxt+".");
		if (activeCount == 0){
			if (jQuery(".nolocations").length == 0){
				jQuery("#fp_locationlist .fp_ll_holder").append("<div class=\"nolocations\">No location types selected.</div>");
			}
		} else {
			jQuery(".nolocations").remove();
		}
	}
    function initialize() {
        var mapProp = {
            center:new google.maps.LatLng(5.974257,80.428913),
            zoom:12,
            mapTypeControl: true,
            zoomControl: 1,
            scrollwheel: 0,
            streetViewControl: 1,
            panControl: 0,
            draggable: 1,
            mapTypeId:google.maps.MapTypeId.ROADMAP,
            styles: []
        };
        map = new google.maps.Map(document.getElementById("fp_googleMap"),mapProp);
        var markerSets = new Array();
        var markerInfoBox = new Array();
        var mappedMarkers = new Array();
        var mapinfobox = false;
        var columns = 4;
        var columnCount = 0;

    	if (jQuery.inArray(1 ,mappedMarkers) == -1) {
			var myCenter1=new google.maps.LatLng(5.974257,80.428913);
			marker[1]=new google.maps.Marker({
				position:myCenter1,
				icon: "http://localhost/P_IV_Joomla/images/markers/pins/style4/red.png"
			});
			var boxText1 = "<h4>Our Place</h4><div class=\"infoboxcontent\"><p>52 A, Vajiragnana Mawatha, Weligama</p><p>0777271076</p><p><p><strong>Cricket Saga Gods</strong></p></p><p class=\"infoboxlink\"><a title=\"Our Place\" href=\"/P_IV_Joomla/index.php/en/our-location/our-place\">Find out more</a></p><div class=\"infopointer\"></div></div>";
			markerInfoBox[1] = new InfoBox({
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
			google.maps.event.addListener(map, "click", function(e) {
                contextMenu:true
            });
            if (markerclusters) {
			    clusterMarkers.push(marker[1]);
			} else {
			    marker[1].setMap(map);
			}
			google.maps.event.addListener(marker[1], 'click', function() {
				if (mapinfobox == markerInfoBox[1] && mapinfobox.getVisible()) {
					mapinfobox.close();
				} else {
					if (mapinfobox) {
						mapinfobox.close()
					}
					mapinfobox = markerInfoBox[1];
					mapinfobox.open(map,marker[1]);
				}
			});
			if (showlisttab) {
				jQuery("#fp_locationlist .fp_ll_holder").append("<div class=\"fp_list_marker1 fp_listitem\">"+boxText1+"</div>");
			}
			marker[1].status = 0;
			marker[1].lat=5.974257;
			marker[1].lng= 80.428913;
			jQuery(".fp_list_marker1").status = 0;
        }
		marker[1].status += 1;
		jQuery(".fp_list_marker1").status +=1;

        if(typeof markerSets[1] === 'undefined') {
            markerSets[1] = new Array();
        }
        mappedMarkers.push(1)
        markerSets[1].push(1);

    
        if (showlisttab) {
			jQuery("#locationlisttab").click(function(e){
				e.preventDefault();
				jQuery("a[href=\"#tabs1-map\"]").tab('show');
				jQuery("#fp_googleMap").css("display","none");
				jQuery(".fp-map-view .nav-tabs li.active").removeClass("active");
				jQuery("#fp_locationlist_container").css("display","block");
				jQuery("#locationlisttab").parent().addClass("active");
				var locationListHeight = jQuery("#fp_locationlist .fp_ll_holder").outerHeight();
				jQuery("#fp_locationlist").css("height", locationListHeight);
			});
			jQuery('a[href="#tabs1-map"]').click(function(){
				jQuery("#fp_googleMap").css("display","block");
				jQuery(".fp-map-view .nav-tabs li.active").addClass("active");
				jQuery("#fp_locationlist_container").css("display","none");
				jQuery("#locationlisttab").parent().removeClass("active");
			});
		}
        jQuery(".markertoggles").click(function() {
		    marker.forEach(function(m,i){
                markerInfoBox[i].close();
            });
            el = jQuery(this);
            mid = el.attr("data-marker-type");
            var arrlength = markerSets[mid].length;
            if (el.hasClass("active")) {
            	for (var i = 0; i < arrlength; i++) {
            		marker[markerSets[mid][i]].status -= 1;
                    if ( marker[markerSets[mid][i]].status == 0) {

                    	if (!markerclusters) {
                    	    marker[markerSets[mid][i]].setMap();
                    	}
                    	markerInfoBox[markerSets[mid][i]].close();
                    	jQuery(".fp_list_marker"+markerSets[mid][i]).fadeOut(100,function(){
							jQuery(this).addClass("fp_listitem_hidden");
							jQuery(this).appendTo("#fp_locationlist .fp_ll_holder");
                    	});

                	}
            	}
            	el.removeClass("active");
           	} else {
           		for (var i = 0; i < arrlength; i++) {
            		marker[markerSets[mid][i]].status += 1;
                    if ( marker[markerSets[mid][i]].status == 1) {

                        if (!markerclusters) {
                    	    marker[markerSets[mid][i]].setMap(map);
                    	}

                    	jQuery(".fp_list_marker"+markerSets[mid][i]).prependTo("#fp_locationlist .fp_ll_holder");
                    	jQuery(".fp_list_marker"+markerSets[mid][i]).fadeIn(100,function(){
							jQuery(this).removeClass("fp_listitem_hidden");
                    	});
                    }
            	}
                el.addClass("active");
            }
            if (fitbounds) {
                var bounds = new google.maps.LatLngBounds();
                var newbounds = false;
                marker.map(function(m){
                    if (m.status > 0) {
                        newbounds = true;
                        var thisbounds = new google.maps.LatLng(m.lat,m.lng);
                        bounds.extend(thisbounds);
                    }
                });
                if (newbounds) {
                    map.fitBounds(bounds);
                } else {
                    map.panTo(new google.maps.LatLng(5.974257,80.428913));
                    map.setZoom(12);
                }
            }
            if (markerclusters) {
                clusterMarkers = [];
                marker.forEach(function(m,i){
					if(marker[i].status > 0){
					    clusterMarkers.push(marker[i]);
					}
				});
                markerCluster.clearMarkers();
                markerCluster = new MarkerClusterer(map, clusterMarkers, {
                    styles: clusterStyles
                });
            }
			setTimeout(function(){
			var locationListHeight = jQuery("#fp_locationlist .fp_ll_holder").outerHeight();
				jQuery("#fp_locationlist").css("height", locationListHeight);
			},150);
			updateActiveCount(marker,searchTxt);
			if (allowScrollTo == true){
				//jQuery("html, body").animate({
				//	scrollTop: jQuery("#fp_main").offset().top
				//},300);
			}
            return false;
        });
        jQuery("ul.nav-tabs > li >a").click(function() {
            setTimeout(function(){
                google.maps.event.trigger(map, 'resize');
                map.panTo(new google.maps.LatLng(5.974257,80.428913));
                map.setZoom(12);
            },500); 
        });
        jQuery(window).resize(function() {
            map.panTo(new google.maps.LatLng(5.974257,80.428913)); 
        });
		jQuery("#fp_reset").click(function() {
			allowScrollTo = false;
			jQuery("#fp_searchAddress").val(mapsearchprompt);
			jQuery("#fp_searchAddressBtn").attr("disabled", true);
			searchTxt = "";
			marker.forEach(function(m,i){
				if (marker[i].status < -999 ){
					marker[i].status += 5000;
					marker[i].setMap(map);
					jQuery(".fp_list_marker"+i).fadeIn(100,function(){
						jQuery(this).removeClass("fp_listitem_hidden");
						jQuery(this).prependTo("#fp_locationlist .fp_ll_holder");
					});
				}
			});
			jQuery("#fp_toggle").each(function(){
				if ("on" == "on") {
					jQuery(this).data("togglestate","off");
					jQuery(this).html("Hide  all");
					jQuery(".markertoggles").each(function(e){
						if (jQuery(this).hasClass("active")) {
							jQuery(this).trigger("click");
						}
						jQuery(this).trigger("click");
					});
				} else {
					jQuery(this).data("togglestate","on");
					jQuery(this).html("Show all");
					jQuery(".markertoggles").each(function(e){
						if (jQuery(this).hasClass("active")) {
							jQuery(this).trigger("click");
						}
					});
				}
			});
			allowScrollTo = true;
			map.panTo(new google.maps.LatLng(5.974257,80.428913));
			map.setZoom(12);
		});
		jQuery("#fp_toggle").click(function() {
			allowScrollTo = false;
			if (jQuery(this).data("togglestate") == "on") {
				jQuery(this).data("togglestate","off");
				jQuery(this).html("Hide  all");
				jQuery(".markertoggles").each(function(e){
					if (!jQuery(this).hasClass("active")) {
						jQuery(this).trigger("click");
					}
				});
			} else {
				jQuery(this).data("togglestate","on");
				jQuery(this).html("Show all");
				jQuery(".markertoggles").each(function(e){
					if (jQuery(this).hasClass("active")) {
						jQuery(this).trigger("click");
					}
				});
			}
			allowScrollTo = true;
		});
		if (showmapsearch) {
			var geocoder;
			var resultLat;
			var resultLng;
			jQuery("#fp_searchAddress").keypress(function(e){
                if (e.which == 13) {
                    return false;
                }
            });
			jQuery("#fp_searchAddressBtn").click(function() {
				geocoder = new google.maps.Geocoder();
				searchTxt = document.getElementById("fp_searchAddress").value;
				if (searchTxt == "") {return false;}
				geocoder.geocode( { "address": searchTxt+searchassist}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {

						resultLat = results[0].geometry.location.lat();
						resultLng = results[0].geometry.location.lng();
						allowScrollTo = false;
						marker.forEach(function(m,i){
							if (marker[i].status < -999 ){
								marker[i].status += 5000;
								if (!markerclusters){
								    marker[i].setMap(map);
								}
								jQuery(".fp_list_marker"+i).fadeIn(100,function(){
									jQuery(this).removeClass("fp_listitem_hidden");
									jQuery(this).prependTo("#fp_locationlist .fp_ll_holder");
								});
							}
						});
						jQuery("#fp_toggle").each(function(){
							jQuery(this).data("togglestate","off");
							jQuery(this).html("Hide  all");
							jQuery(".markertoggles").each(function(e){
								if (jQuery(this).hasClass("active")) {
									jQuery(this).trigger("click");
								}
								jQuery(this).trigger("click");
							});
						});
						marker.forEach(function(m,i){
							var dLat = resultLat-m.lat;
							var dLong = resultLng-m.lng;
							var distance = Math.sqrt(dLat*dLat + dLong*dLong)*111.32;
							if (distance > mapsearchrange) {
								marker[i].status -= 5000;
                    			if ( marker[i].status < 1) {
                    				markerInfoBox[i].close();
                    				if (!markerclusters){
                    				    marker[i].setMap();
                    				}
                    				jQuery(".fp_list_marker"+i).fadeOut(100,function(){
										jQuery(this).addClass("fp_listitem_hidden");
										jQuery(this).appendTo("#fp_locationlist .fp_ll_holder");
                    				});
                    			}
							}
                    		updateActiveCount(marker,searchTxt);
							allowScrollTo = true;
						});
                        if (markerclusters) {
                            clusterMarkers = [];
                            marker.forEach(function(m,i){
                                if(marker[i].status > 0){
                                    clusterMarkers.push(marker[i]);
                                }
                            });

                            markerCluster.clearMarkers();
                            markerCluster = new MarkerClusterer(map, clusterMarkers, {
                                styles: clusterStyles
                            });
                        }
                        map.setCenter(results[0].geometry.location);
						map.setZoom(mapsearchzoom);
						setTimeout(function(){
							var locationListHeight = jQuery("#fp_locationlist .fp_ll_holder").outerHeight();
							jQuery("#fp_locationlist").css("height", locationListHeight);
						},500);
					} else {
						alert("Geocode was not successful for the following reason: " + status);
					}
				});
			});
		}
        jQuery("#fp_toggle").trigger("click");
        allowScrollTo = true;
        updateActiveCount(marker);

        if (markerclusters){
            markerCluster = new MarkerClusterer(map, clusterMarkers, {
                styles: clusterStyles
            });
        }

        if (showlisttab && (listtabfirst == 1)) {
            setTimeout(function(){
                jQuery("#locationlisttab").trigger("click");
            },100);
        }

        if ("off" == "on") {
            setTimeout(function(){
                jQuery("#fp_toggle").trigger("click");
            },100);
        }
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
<body id="jsn-master" class="jsn-textstyle-business jsn-color-cyan jsn-direction-ltr jsn-desktop jsn-joomla-30  jsn-com-focalpoint jsn-view-map jsn-itemid-1287">
		
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
</a></li><li ><a  href="/P_IV_Joomla/index.php/en/shopping" >
	<span>
		Shopping	</span>
</a></li><li  class="current active last"><a class="current" href="/P_IV_Joomla/index.php/en/our-location" >
	<span>
		Our Location	</span>
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

										




    <div id="focalpoint" class="fp-map-view legend_below ">

                    <h1>Our Location</h1>
        
                    <div class="fp_mapintro clearfix">
                <div class="fp_mapintro clearfix">
<h2>Cricket Saga</h2>
<p>Address -</p>
<p>52 A, Vajiragnana Mawatha, Weligama</p>
<p>Contacts -</p>
<p>0777271076 (Mobile), 0412243123 (Tel)</p>
</div>            </div>
                <div id="fp_main" class="clearfix">
                        <div id="tab-container" class="tab-container">
                <ul class='nav nav-tabs'>
                                        <li class='active'><a href="#tabs1-map" data-toggle="tab">Map</a></li>
                                            <li class=''><a id="locationlisttab" href="#">List</a></li>
                                                        </ul>
                
                <div class="tab-content">
                                        <div id="tabs1-map" class="tab-pane active">
                                                <div id="fp_googleMapContainer" class="fp_vert fp_below"
                             style="width:100%; min-height:400px; ">
                                                        <div id="fp_googleMap" style="min-height: 400px; "></div>
                                                            <div id="fp_locationlist_container">
                                    <div id="fp_locationlist" class="" style="min-height: 400px; ">
                                        <div class="fp_ll_holder"></div>
                                    </div>
                                </div>
                                                                                        <div id="fp_googleMapSidebar" style="">
                                    <div class="row-fluid"><div class="span3 legend"><h4>Our Legend<small></small></h4><ul class="sidebar"><li><a data-marker-type='1' class='active markertoggles markers-our-place' href='#'>Our Place</a></li></div></ul></div>
<div class="row-fluid ">
	<p><small id="activecount"></small></p>
	<div id="fp_map_actions">
		<form onsubmit="return false;">
                        <div id="fp_map_buttons" class="input-append">
                <button class="btn btn-mini" id="fp_reset" onclick="return false;">Reset Map</button>
                <button class="btn btn-mini" id="fp_toggle" data-togglestate="on" onclick="return false;"></button>
            </div>
        </form>
	</div>
</div>                                </div>
                                                    </div>
                                            </div>
                                                </div>
            </div>
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