<?php
	$scriptVersion = 1.20;
	$theDateToday = new DateTime();

	$theBeginningofTime = date_create('2022-01-01 00:00:00');

	$timeStartDefault = date_create("2022-08-01 00:01:00");
	$timeEndDefault = date_create("2022-08-15 23:59:59");
	$timeStart1 = date_create("2022-08-15 00:00:00");
	$timeEnd1 = date_create("2022-08-31 23:59:59");
	$timeStart2 = date_create("2022-09-01 00:00:00");
	$timeEnd2 = date_create("2022-09-20 23:59:59");
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  	<meta charset="utf-8">
	<title>Tempus Example</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php if (($theDateToday > $timeStartDefault) && ($theDateToday < $timeEndDefault)) {?>
	<!--Testing if date is working-->
	<h2>Full Lineup Coming Soon!</h2>
	<p>Check back for more details.</p>

<?php } else {} ?>

<?php if (($theDateToday > $timeStart1) && ($theDateToday < $timeEnd1)) {?>
	<!--Week 1-->
	<h2>Eric Clapton</h2>
	<p>Robert Randolph and the Family Band</p>
	<p><small>John Mayer Trio</small></p>
<?php } else {} ?>

<?php if (($theDateToday > $timeStart2) && ($theDateToday < $timeEnd2)) {?>
	<!--Week 2-->
	<h2>Black Sabbath</h2>
	<p>Metallica</p>
	<p><small>Iron Madien</small></p>
<?php } else {} ?>


</body>
</html>