<?php include 'components/header.php'; ?>

<style>
	div.marquee {
		width:100%;
	    overflow:hidden;
	    margin: 0;
		padding: 0;
		text-indent: 2000px;
	}
	div.marquee > div.marquee-text {
	    white-space:nowrap;
	    display:inline;
	    width:auto;
	}

	.marquee-text {
		display: none;
		margin: 0;
		padding: 0;
	}

	.h1 {
		font-size: calc(40px + 30vw);
	}

</style>

<div class="flex-center" id="stage">

	<div class="marquee">
	 	<div class="marquee-text h1">

		</div>
	</div>

</div>


<?php include 'components/footer.php'; ?>
