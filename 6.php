<?php include 'header.php'; ?>

<div class="flex-center" id="stage">

	<h1 class="h1" style="white-space: nowrap;" id="rotate">Adorable Errors</h1>

</div>

<script>

	$('body').mousemove(function(e){
		$('#rotate').css('transform','rotate(' + event.pageX + 'deg)');
		$('#rotate').css('font-size', 40 + event.pageX +'px');
	});

</script>


<?php include 'footer.php'; ?>
