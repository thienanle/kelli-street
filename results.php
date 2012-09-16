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
            var mapOptions = {
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
            });
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
			
			<div id="map_canvas"></div>
			<div id="mapsidebarcontainer">
				<div id="mapsidebar">
					<ul style="list-style-type:none">
						<li><strong>Environment</strong></li>
						<li>Density
							<input id="defaultSlider" type="range" min="0" max="100" />
						</li>
						<li>Open Space<input id="defaultSlider" type="range" min="0" max="100" /></li>
						<li>Traffic<input id="defaultSlider" type="range" min="0" max="100" /></li>
						<li>Age<input id="defaultSlider" type="range" min="0" max="100" /></li>
					</ul>
					<ul style="list-style-type:none">
						<li><strong>Activities</strong></li>
						<li>Restaurants<input id="defaultSlider" type="range" min="0" max="100" /></li>
						<li>Shopping<input id="defaultSlider" type="range" min="0" max="100" /></li>
					</ul>
					<ul style="list-style-type:none">
						<li><strong>Transportation</strong></li>
						<li>Walk<input id="defaultSlider" type="range" min="0" max="100" /></li>
						<li>Bicycle<input id="defaultSlider" type="range" min="0" max="100" /></li>
						<li>Public Transit<input id="defaultSlider" type="range" min="0" max="100" /></li>
						<li>Car<input id="defaultSlider" type="range" min="0" max="100" /></li>
					</ul>
					<ul style="list-style-type:none">
						<li><strong>People</strong></li>
						<li>Income<input id="defaultSlider" type="range" min="0" max="100" /></li>
						<li>Ethnicity<input id="defaultSlider" type="range" min="0" max="100" /></li>
						<li>People/Household<input id="defaultSlider" type="range" min="0" max="100" /></li>
					</ul>
				</div>
			</div>
	</div>

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
</html>
