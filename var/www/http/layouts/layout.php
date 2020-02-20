<!DOCTYPE html>
<html lang="pt-br">
<head>

	<title> Desafio CPT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- jQuery library -->
	<script src="biblioteca/jquery-3.2.1.min.js"></script>
	<script src="biblioteca/jquery-migrate-3.0.0.min.js"></script>
  <script src="biblioteca/alertifyjs/alertify.js"></script>

	<link rel="stylesheet" href="biblioteca/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="biblioteca/bootstrap/css/style.css">

	

	
	<script src="biblioteca/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<header>
	<?php 
		require_once('header.php');
	?>	
</header>

<section>	
	<div class="container">
	<?php 

			require_once('routing.php');
			
	 ?>

	</div>
</section>

<footer>
	<?php 
		include_once('footer.php');
	?>
</footer>
</body>
</html>
