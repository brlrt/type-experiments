<?php include 'components/header.php'; ?>

<style>

h1 {
	font-size: calc(16px + 20vw);
}

.wordWrapper {
	width: 100vw;
	height: 90vh;

}

.word-container {
	overflow: hidden !important;
	background: white;
}

#controlWidth {
	border-right: 10px solid red;
}

</style>

<div id="stage" class="parent fullpage">
	<div class="word-container fullpage child topleft">
		<div class="wordWrapper flex-center">
			<h1>Mishima</h1>
		</div>
	</div>
	<div id="controlWidth" class="word-container fullpage child topleft">
		<div class="wordWrapper flex-center">
			<h1>Hakusan</h1>
		</div>
	</div>

</div>

<?php include 'components/footer.php'; ?>
