<html>
<head>
	<title>Zillo Map Search</title>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&dummy=.js"></script>
	<script>
		function initialize()
		{
			var input = document.getElementById('searchTextField');
			new google.maps.places.Autocomplete(input);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</head>
<body>
	<form method="post" action="result.php">
			<label for="searchTextField">Please Insert an address:</label>
		<br>
			<input id="searchTextField" name="search" type="text" size="50">
			<input type="submit" value="search">
		<br>
			Eg.: 29522 Via Valverde, Laguna Niguel, CA
	</form>
</body>
</html>
