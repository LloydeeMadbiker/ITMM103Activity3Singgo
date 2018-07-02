<!DOCTYPE html>
<html>
<head>
	<title>Section B</title>
</head>
<body>
<?php
$json = 
'{
"uglify-js": "1.3.4"
, "jshint": "0.9.1"
, "recess": "1.1.8"
, "connect": "2.1.3"
, "hogan.js": "2.0.0"
}';
var_dump(json_decode($json));
echo "<br>";
var_dump(json_decode($json, true));
?>
</body>
</html>