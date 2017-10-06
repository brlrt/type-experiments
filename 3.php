<?php include 'header.php'; ?>

<style>
	div.marquee {
			width:100%;
	    overflow:hidden;
	    	margin: 0;
		padding: 0;
	}
	div.marquee > div.marquee-text {
	    white-space:nowrap;
	    display:inline;
	    width:auto;

	}

	.marquee-text {
		display: none;
		font-weight: bold;
		margin: 0;
		padding: 0;
	}


</style>



<div class="flex-center" id="stage">

	<div class="marquee">
	 	<div class="marquee-text h1">

		</div>
	</div>

</div>

<script>

var headline = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum";

$('.marquee-text').html(headline);
$('.marquee').fadeIn('slow');

var marquee = $('div.marquee');
marquee.each(function() {
    var mar = $(this),
    indent = mar.width();
    mar.marquee = function() {
        indent-=3;
        mar.css('text-indent',indent);
        if (indent < -1 * mar.children('div.marquee-text').width()) {
            indent = mar.width();
        }
    };
    mar.data('interval',setInterval(mar.marquee,100/60));
});
</script>

<?php include 'footer.php'; ?>
