<!DOCTYPE html>
<html>
<head>
	<title>Section F</title>
</head>
<body>
<?php
$target_days = mktime(0,0,0,12,31,2013);// modify the birth day 12/31/2013
$today = time();
$diff_days = ($target_days - $today);
$days = (int)($diff_days/86400);
print "Days till next birthday: $days days!"."\n";
?>
</body>
</html>