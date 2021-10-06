<!DOCTYPE html>
<html>
<head>
	<title>jquery</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>Mengenal event pada jquery</h1>
	<button id="tombol">Tombol</button>

	<div class="box"></div>

<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
</body>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tombol').dblclick(function(){
			$('.box').toggle();
		})
	})
</script>
</html>