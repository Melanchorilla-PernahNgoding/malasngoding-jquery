<!DOCTYPE html>
<html>
<head>
	<title>jquery</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>Effect dasar jquery</h1>
	<button id="tombol">Tampilkan kotak(fadeIn)</button>
	<button id="tombol2">Sembunyikan kotak(fadeOut)</button>
	<button id="tombol3">Effect fade toggle kotak</button>

	<div class="box"></div>

<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
</body>

<script type="text/javascript">
	$(document).ready(function(){
		// $('#tombol').click(function(){
		// 	$('.box').fadeIn();
		// })
		// $('#tombol2').click(function(){
		// 	$('.box').fadeOut();
		// })
		// $('#tombol3').click(function(){
		// 	$('.box').fadeToggle();
		// })
		$('#tombol').click(function(){
			$('.box').fadeIn(800);
		})
		$('#tombol2').click(function(){
			$('.box').fadeOut('fast');
		})
		$('#tombol3').click(function(){
			$('.box').fadeToggle('slow');
		})
	})
</script>
</html>