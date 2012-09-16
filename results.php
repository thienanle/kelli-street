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
    <style type="text/css">
        #map_canvas { height: 100% }
    </style>
</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar" onload="initialize()">
		<div class="container resultscontainer">
			<ul class="breadcrumb">
			  <li><a href="#">Home</a> <span class="divider">&gt;</span></li>
			</ul>
			<h3 class="resultsh">Find Your Neighborhood</h3>
			<p>(click on the map to explore your neighborhood)</p>
		
			<div class="spacer20"></div>
			
            <div id="map_canvas" style="width:800px; height:600px"></div>
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
