<!DOCTYPE html>
<html>
<head>
	<title>jquery</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>Effect dasar jquery</h1>
	<button id="tombol">Tampilkan kotak</button>
	<button id="tombol2">Sembunyikan kotak</button>

	<div class="box"></div>

<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
</body>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tombol').click(function(){
			$('.box').show();
		})
		$('#tombol2').click(function(){
			$('.box').hide();
		})
	})
</script>
</html>