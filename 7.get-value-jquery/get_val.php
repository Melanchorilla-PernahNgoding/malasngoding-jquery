<!DOCTYPE html>
<html>
<head>
	<title>jquery</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>Tutorial dasar jquery</h1>
	<input type="text" name="nama" class="nama">
	<button id="tombol">Tombol</button>
	

<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
</body>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tombol').click(function(){
			var nama = $('.nama').val();
			alert(nama);
		})
	})
</script>
</html>