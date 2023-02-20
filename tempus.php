<?php
	$scriptVersion = 1.20;
	$theDateToday = new DateTime();

	$theBeginningofTime = date_create('2020-01-01 00:00:00');

	$timeStart = date_create("2022-01-10 00:01:00");
	$timeEnd = date_create("2022-01-15 15:00:00");
?>
<?php if (($theDateToday > $timeStart) && ($theDateToday < $timeEnd)) { ?>

<!--The content here will appear between the timestart and the timeend dates-->

<!-- Per above, this content will appear between January 10, 2022 at 12:01am and disappear after January 15, 2022 at 3:00pm. The time is based on the local computer time. -->

<section class="concert-list">
	<div class="container">
		<div class="single-concert">
			<h2>Headliner</h2>
			<ul>
				<li>Band One</li>
				<li>Band Two</li>
				<li>Band Three</li>
			</ul>
		</div>
	</div>
</section>

<?php } else { ?>
	
<section class="concert-list">
	<div class="container">
		<div class="check-back">
			<h2>Check back soon for more details!</h2>
		</div>
	</div>
</section>

<!--If it is before the timestart or after the timeend dates, this content will show.-->

<?php } ?>


