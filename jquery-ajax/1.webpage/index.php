<!DOCTYPE html>
<html>
<head>
	<title>Tutorial belajar JQuery</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
</head>
<body>

	<div class="content">
		
		<header>
			<h1 class="judul">Hello World!</h1>
			<h3 class="deskripsi">Membuat halaman website ajax tanpa reload dengan jQuery</h3>
		</header>

		<div class="menu">
			<ul>
				<li><a href="#" class="klik_menu" id="home">Home</a></li>
				<li><a href="#" class="klik_menu" id="tentang">Tentang</a></li>
				<li><a href="#" class="klik_menu" id="tutorial">Tutorial</a></li>
				<li><a href="#" class="klik_menu" id="sosmed">Sosial Media</a></li>
			</ul>
		</div>

		<div class="badan">
			
		</div>

	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.klik_menu').click(function(){
				var menu = $(this).attr('id');

				if(menu == 'home'){
					$('.badan').load('home.php');
				}
				else if(menu == 'tentang'){
					$('.badan').load('tentang.php');
				}
				else if(menu == 'tutorial'){
					$('.badan').load('tutorial.php');
				}
				else if(menu == 'sosmed'){
					$('.badan').load('sosmed.php');
				}

			})

			$('.badan').load('home.php');
		})
	</script>

</body>
</html>