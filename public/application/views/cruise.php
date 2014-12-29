<div class="container inner">
    <div class="cruise-clock"></div>
</div>
<script>
	var date  = new Date(2015, 0, 17, 21, 0, 0);
	console.log(date);
	var now   = new Date();
	var diff  = date.getTime() / 1000 - now.getTime() / 1000;

	var clock = $('.cruise-clock').FlipClock(diff, {
		clockFace: 'DailyCounter',
		countdown: true
	});
</script>