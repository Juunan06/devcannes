<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en-EN">



<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>< DevCannes /></title>

	<meta name="description" content="Developpeurs Web FullStack sur la CAPEL">

	<!-- FavIcon -->

	<link rel="icon" type="image/png" href="./img/brandImg.png" />

	<!-- Ajout de polices -->
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Proza+Libre" rel="stylesheet">


	<!-- CSS -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->

  <link rel="stylesheet" type="text/css" href="./css/style.css">



</head>

<body>

	<section class="container-fluid">



		<header class="row">



			

			<?php /* Menu Bootstrap */ ?>

			<nav class="navbar navbar-expand-lg navbar-light bg-light col-xl-12">

				<a class="navbar-brand policeTitle" href="index.php"><img src="./img/brandImg.png" alt="Brand Image" width="50px" height="50">< DevCannes /></a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

					<span class="navbar-toggler-icon"></span>

				</button>

				<div class="collapse navbar-collapse" id="navbarNavDropdown">

					<ul class="navbar-nav">

						<li class="nav-item">

							<a class="nav-link policeTitle" href="index.php">Accueil</a>

						</li>

						<li class="nav-item">

							<a class="nav-link policeTitle" href="#">Nos Cours</a>

						</li>

						<li class="nav-item">

							<a class="nav-link policeTitle" href="#">Nos Tutos</a>

						</li>

						<li class="nav-item dropdown">

							<a class="nav-link dropdown-toggle policeTitle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								Notre équipe

							</a>

							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

								<a class="dropdown-item policeTitle" href="#">Front End</a>

								<a class="dropdown-item policeTitle" href="#">Back End</a>

								<a class="dropdown-item policeTitle" href="#">Full Stack</a>

								<a class="dropdown-item policeTitle" href="#">En formation</a>

							</div>

						</li>

					</ul>

				</div>

			</nav>

			<?php /* Fin Menu Bootstrap */ ?>

			



			<div class="col-xl-12 nopadding" id="headerBanner">

				<p id="bannerText" class="policeTitle">Under construction ...</p>

			</div>





		</header>

		

	</section>

	<section class="container-fluid"><!-- Ouverture de la section contenant l'intégralité du contenu de page -->

		<div class="col-xl-12 parts">
			<p class="alert alert-secondary">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, quibusdam eveniet facere vitae unde, beatae tenetur blanditiis amet repudiandae ea tempore nemo fuga 
officia ipsa quam possimus dignissimos suscipit illum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, quibusdam eveniet facere vitae unde, beatae tenetur blanditiis amet repudiandae
 ea tempore nemo fuga officia ipsa quam possimus dignissimos suscipit illum?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, quibusdam eveniet facere vitae unde, beatae tenetur blanditiis
 amet repudiandae ea tempore nemo fuga officia ipsa quam possimus dignissimos suscipit illum?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, quibusdam eveniet facere vitae unde, beatae
 tenetur blanditiis amet repudiandae ea tempore nemo fuga officia ipsa quam possimus dignissimos suscipit illum?
			</p>
		</div>

		<div class="col-xl-12 parts">

			

			<div class="row">



			<?php /* Corps card X */ ?>

			<div class="card">

				

				<div class="card-body">

					<h5 class="card-title policeTitle">Les cours des licornes</h5>

					<p class="card-text">Nous proposons gratuitement des cours d'initiation accessible à tous. Les cours seront disponible sur les sujets suivants :</p>

				</div>

				<ul class="list-group list-group-flush">

					<li class="list-group-item">HTML/CSS</li>

					<li class="list-group-item">Javascript et framework</li>

					<li class="list-group-item">PHP et framework</li>

				</ul>

				<div class="card-body">

					<a href="#" class="card-link">See More...</a>

				</div>

			</div>

			<?php /* End corps card X */ ?>



			<?php /* Corps card X */ ?>

			<div class="card">

				

				<div class="card-body">

					<h5 class="card-title policeTitle">Les tutos des licornes</h5>

					<p class="card-text">Moins complets et plus spécifiques, nous mettrons à votre disposition des tutoriels sur les sujets suivants :</p>

				</div>

				<ul class="list-group list-group-flush">

					<li class="list-group-item">Lorem Ipsum</li>

					<li class="list-group-item">Lorem Ipsum</li>

					<li class="list-group-item">Lorem Ipsum</li>

				</ul>

				<div class="card-body">

					<a href="#" class="card-link">See More...</a>

				</div>

			</div>

			<?php /* End corps card X */ ?>





			<?php /* Corps card X */ ?>

			<div class="card">

				

				<div class="card-body">

					<h5 class="card-title policeTitle">Lorem Ipsum</h5>

					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, quibusdam eveniet facere vitae unde, beatae tenetur blanditiis amet repudiandae ea tempore nemo fuga officia ipsa quam possimus dignissimos suscipit illum?</p>

				</div>

				<ul class="list-group list-group-flush">

					<li class="list-group-item">Lorem Ipsum</li>

					<li class="list-group-item">Lorem Ipsum</li>

					<li class="list-group-item">Lorem Ipsum</li>

				</ul>

				<div class="card-body">

					<a href="#" class="card-link">See More...</a>

				</div>

			</div>

			<?php /* End corps card X */ ?>





			<?php /* Corps card X */ ?>

			<div class="card">

				

				<div class="card-body">

					<h5 class="card-title policeTitle">Lorem Ipsum</h5>

					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, quibusdam eveniet facere vitae unde, beatae tenetur blanditiis amet repudiandae ea tempore nemo fuga officia ipsa quam possimus dignissimos suscipit illum?</p>

				</div>

				<ul class="list-group list-group-flush">

					<li class="list-group-item">Lorem Ipsum</li>

					<li class="list-group-item">Lorem Ipsum</li>

					<li class="list-group-item">Lorem Ipsum</li>

				</ul>

				<div class="card-body">

					<a href="#" class="card-link">See More...</a>

				</div>

			</div>

			<?php /* End corps card X */ ?>





			

			

			</div>

		</div>





	</section><!-- Fermeture de la section contenant l'intégralité du contenu de page -->

	<footer class="container-fluid">

		<p class="col-xl-12">&copy; Copyright 2018 <a href="https://devcannes.com">DevCannes.com</a>- <a href="https://creativecommons.org/licenses/by-nc-nd/4.0/deed.fr" target="_blank"><img src="./img/cc-by-nc-nd.png" alt="Licence CCBYNC"></a> </p>

	</footer>

	<!-- Scripts Bootstrap -->

	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

	<!-- Scripts JS persos -->



	</html>