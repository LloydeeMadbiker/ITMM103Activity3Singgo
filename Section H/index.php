<!DOCTYPE html>
<html>
<head>
	<title>Section H</title>
</head>
<body>
<?php
$x = rand(10e12, 10e16);
echo base_convert($x, 10, 36)."\n";
?>
</body>
</html>