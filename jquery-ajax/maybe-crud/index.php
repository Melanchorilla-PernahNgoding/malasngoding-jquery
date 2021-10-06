<!DOCTYPE html>
<html>
<head>
	<title>Tutorial belajar JQuery</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
</head>
<body>
	<h1>Membuat input data ke database tanpa reload dengan ajax jquery</h1>

	<div class="wrap">
		
		<form method="post" class="form-user">
			<table>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat"></td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td><input type="text" name="pekerjaan"></td>
				</tr>
				<tr>
					<td></td>
					<td><a class="tombol-simpan">Simpan</a></td>
				</tr>
			</table>
		</form>

		<div class="tampildata"></div>

	</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('.tampildata').load('tampil.php')
		$('.tombol-simpan').click(function(){
			var data = $('.form-user').serialize();
			$.ajax({
				type: 'POST',
				url: 'aksi.php',
				data: data,
				success: function(){
					$('.tampildata').load('tampil.php')
				}
			})
		})
	})
</script>

</body>
</html>