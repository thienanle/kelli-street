<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Kelli Street</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>

	<!-- Le styles -->
	<link href="bs/docs/assets/css/bootstrap.css" rel="stylesheet">
	<link href="bs/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="bs/docs/assets/css/docs.css" rel="stylesheet">
	<link href="bs/docs/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
	<link href="assets/style.css" rel="stylesheet">

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="bs/docs/assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="bs/docs/assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="bs/docs/assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="bs/docs/assets/ico/apple-touch-icon-57-precomposed.png">

	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBrikYEHCgBxN8l4XS7I7Me8Igvbuw6bug&sensor=false"></script>
    <script type="text/javascript">
        function initialize() {
            /*var mapOptions = {
                center: google.maps.LatLng(0, 0),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

            var geocoder = new google.maps.Geocoder();
            var address = <?php echo "'" . $_GET['dest'] . "'"; ?>;
            geocoder.geocode( { 'address' : address }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                }
                else {
                    alert("Geocode was not successful: " + status);
                }
            });*/
        }
    </script>
</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar" onload="initialize()">
	
	<!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./index.html">Kelli Street</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li>
	            <a href="./index.html">Sign In</a>
	          </li>
			  <li>
                <a href="./index.html">Help</a>
              </li>
            </ul>
          </div><!-- .nav-collapse collapse -->
        </div>
      </div>
    </div>
	
		<div class="container resultscontainer">
			<ul class="breadcrumb">
			  <li><a href="#">Home</a> <span class="divider">&gt;</span></li>
			</ul>
			<h3 class="resultsh">Find Your Neighborhood</h3>
			<p>(click on the map to explore your neighborhood)</p>
			
			<div class="spacer20"></div>
			
			<!-- <div id="map_canvas"></div> -->
			<div id="map_canvas">
				<div id="map1" class="dummymap1"></div>
				<div id="map2" class="dummymap2"></div>
				<div id="map3" class="dummymap3"></div>
				<div id="maplinks">
					<div id="l1" style="top: 50px; width:140px;height:180px;left: 20%;"></div>
					<div id="l2" style="top: 250px; left: 70%;"></div>
					<div id="l3" style="top: 180px; width: 70px; left: 50%;"></div>
				</div>
				<script>
					var $ = function(what) {
						return document.getElementById(what);
					}
					$('maplinks').addEventListener('click', function(e){
						var target = e.target;
						document.getElementById('mapsidebar').className = target.id;
					});
				</script>
			</div>
			<div id="mapsidebarcontainer">
				<div id="mapsidebar" class="l1">
					<h4 class="l1">Ballard</h4>
					<h4 class="l3">Wallingford</h4>
					<h4 class="l2">Madison Park</h4>
					
					<ul style="list-style-type:none">
						<li><strong>Environment</strong></li>
						<li>Density
							<input id="defaultSlider1" type="range" min="0" max="100" />
							<div class="rankcontainer"><div id="bar1" class="bar"></div><div class="line" id="line1"></div></div>
						</li>
						<li>Open Space
                            <input id="defaultSlider2" type="range" min="0" max="100" />
							<div class="rankcontainer"><div id="bar2" class="bar"></div><div class="line" id="line2"></div></div>
                        </li>
						<li>Traffic
                            <input id="defaultSlider3" type="range" min="0" max="100" />
							<div class="rankcontainer"><div id="bar3" class="bar"></div><div class="line" id="line3"></div></div>
                        </li>
						<li>Age
                            <input id="defaultSlider4" type="range" min="0" max="100" />
							<div class="rankcontainer"><div id="bar4" class="bar"></div><div class="line" id="line4"></div></div>
                        </li>
					</ul>
					<ul style="list-style-type:none">
						<li><strong>Activities</strong></li>
						<li>Restaurants
                            <input id="defaultSlider5" type="range" min="0" max="100" />
							<div class="rankcontainer"><div id="bar5" class="bar"></div><div class="line" id="line5"></div></div>
                        </li>   
						<li>Shopping
                            <input id="defaultSlider6" type="range" min="0" max="100" />
							<div class="rankcontainer"><div id="bar6" class="bar"></div><div class="line" id="line6"></div></div>
                        </li>
					</ul>
					<ul style="list-style-type:none">
						<li><strong>Transportation</strong></li>
						<li>Walk
                            <input id="defaultSlider7" type="range" min="0" max="100" />
							<div class="rankcontainer"><div id="bar7" class="bar"></div><div class="line" id="line7"></div></div>
                        </li>
						<li>Bicycle
                            <input id="defaultSlider8" type="range" min="0" max="100" />
							<div class="rankcontainer"><div id="bar8" class="bar"></div><div class="line" id="line8"></div></div>
                        </li>
						<li>Public Transit
                            <input id="defaultSlider9" type="range" min="0" max="100" />
							<div class="rankcontainer"><div id="bar9" class="bar"></div><div class="line" id="line9"></div></div>
                        </li>
						<li>Car
                            <input id="defaultSlider10" type="range" min="0" max="100" />
							<div class="rankcontainer"><div id="bar10" class="bar"></div><div class="line" id="line10"></div></div>
                        </li>
					</ul>
					<ul style="list-style-type:none">
						<li><strong>People</strong></li>
						<li>Income
                            <input id="defaultSlider11" type="range" min="0" max="100" />
							<div class="rankcontainer"><div id="bar11" class="bar"></div><div class="line" id="line11"></div></div>
                        </li>
						<li>Ethnicity
                            <input id="defaultSlider12" type="range" min="0" max="100" />
							<div class="rankcontainer"><div id="bar12" class="bar"></div><div class="line" id="line12"></div></div>
                        </li>
						<li>People/Household
                            <input id="defaultSlider13" type="range" min="0" max="100" />
							<div class="rankcontainer"><div id="bar13" class="bar"></div><div class="line" id="line13"></div></div>
                        </li>
					</ul>
				</div>
			</div><!-- #mapsidebarcontainer -->
			<div id="meter"><div><span>No match</span><span>Best match</span></div></div>
	</div>

	<footer>&copy; Copyright 2012 Kelli Street. All rights reserved.</footer>

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="bs/docs/assets/js/jquery.js"></script>
	<script src="bs/docs/assets/js/google-code-prettify/prettify.js"></script>
	<script src="bs/docs/assets/js/bootstrap-transition.js"></script>
	<script src="bs/docs/assets/js/bootstrap-alert.js"></script>
	<script src="bs/docs/assets/js/bootstrap-modal.js"></script>
	<script src="bs/docs/assets/js/bootstrap-dropdown.js"></script>
	<script src="bs/docs/assets/js/bootstrap-scrollspy.js"></script>
	<script src="bs/docs/assets/js/bootstrap-tab.js"></script>
	<script src="bs/docs/assets/js/bootstrap-tooltip.js"></script>
	<script src="bs/docs/assets/js/bootstrap-popover.js"></script>
	<script src="bs/docs/assets/js/bootstrap-button.js"></script>
	<script src="bs/docs/assets/js/bootstrap-collapse.js"></script>
	<script src="bs/docs/assets/js/bootstrap-carousel.js"></script>
	<script src="bs/docs/assets/js/bootstrap-typeahead.js"></script>
	<script src="bs/docs/assets/js/bootstrap-affix.js"></script>
	<script src="bs/docs/assets/js/application.js"></script>



</body>
<script type="text/javascript">
    var numImages = 3;
    var maps = [];
    var sliders = [];

    function onSliderChange() {
        var index2;
        var val = interpolationValue();
        var index1 = Math.floor(val);
        var t = val - index1;
        if (t < 0.5) {
            t = Math.pow(t, 1.25);
        }
        else {
            t = 1 - t;
            t = Math.pow(t, 1.25);
            t = 1 - t;
        }
        index1 = index1 % numImages;
        index2 = (index1 + 1) % numImages;

        for (var i = 0; i < maps.length; ++i) {
            maps[i].style.opacity = 0;
        }

        maps[index1].style.opacity = 1 - t;
        maps[index2].style.opacity = t;
    }

    // Add all of the sliders to an internal array
    for (var i = 1; i <= 13; ++i) {
        var sliderName = "defaultSlider" + i;
        var e = document.getElementById(sliderName);
        sliders.push(e);
        e.onchange = function() { onSliderChange(); };
        sliders[i-1].value = Math.floor(Math.random() * 100);

        var ln = document.getElementById('line' + i);
        ln.style.marginLeft = sliders[i-1].value / 100 * 122 + "px";
    }

    for (var i = 1; i <= numImages; ++i) {
        maps.push(document.getElementById("map" + i));
    }

    function interpolationValue() {
        val = 0;
        for (var i = 0; i < sliders.length; ++i) {
            val += Number(sliders[i].value);
        }
        val = (val % 100) / (100 / (numImages));
        return val;
    }
    onSliderChange();

</script>
</html>
