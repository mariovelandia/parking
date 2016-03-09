<!doctype html>
<html>
<head>
	<title>Looksave - Look More!</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="Looksave"> 
	<meta name="keywords" content="motor de busqueda, resultados escolares, compartir contenidos, citar, busqueda avanzada"><meta name="description" content="Looksave, es un motor de busqueda cuyo enfoque es promover la utilizacion de recursos escolares. Tepermite buscar, guargar, compartir.">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
</head>
<body <?php if( !isset($_GET['req']) ) echo 'class="home"' ?>>
	<?php				

		$request = $_GET['req'];

		switch ($request) {
			case 'dashboard':
				include 'app/includes/layout.php';
				include 'app/dashboard.php';
				break;

			case 'search':
				include 'app/includes/layout.php';
				include 'app/search.php';
				break;
			
			default:
				include 'app/home.php';
				break;
		}

	?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
</html>
