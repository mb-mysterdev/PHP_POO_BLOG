
<?php
require_once '../models/Model.php';

//$classModel->session('login.php');
?>

<!DOCTYPE html>

	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blog Professionel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="template/favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="template/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="template/css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="template/css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="template/css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="template/css/bootstrap.css">

	<link rel="stylesheet" href="template/css/style.css">

	<!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
	<link rel="stylesheet" id="theme-switch" href="template/css/style.css">
	<!-- End demo purposes only -->


	<style>
	#colour-variations {
		padding: 10px;
		-webkit-transition: 0.5s;
	  	-o-transition: 0.5s;
	  	transition: 0.5s;
		width: 140px;
		position: fixed;
		left: 0;
		top: 100px;
		z-index: 999999;
		background: #fff;
		/*border-radius: 4px;*/
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
		-webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
	}
	#colour-variations.sleep {
		margin-left: -140px;
	}
	#colour-variations h3 {
		text-align: center;;
		font-size: 11px;
		letter-spacing: 2px;
		text-transform: uppercase;
		color: #777;
		margin: 0 0 10px 0;
		padding: 0;;
	}
	#colour-variations ul,
	#colour-variations ul li {
		padding: 0;
		margin: 0;
	}
	#colour-variations li {
		list-style: none;
		display: block;
		margin-bottom: 5px!important;
		float: left;
		width: 100%;
	}
	#colour-variations li a {
		width: 100%;
		position: relative;
		display: block;
		overflow: hidden;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		-ms-border-radius: 4px;
		border-radius: 4px;
		-webkit-transition: 0.4s;
		-o-transition: 0.4s;
		transition: 0.4s;
	}
	#colour-variations li a:hover {
	  	opacity: .9;
	}
	#colour-variations li a > span {
		width: 33.33%;
		height: 20px;
		float: left;
		display: -moz-inline-stack;
		display: inline-block;
		zoom: 1;
		*display: inline;
	}
	

	.option-toggle {
		position: absolute;
		right: 0;
		top: 0;
		margin-top: 5px;
		margin-right: -30px;
		width: 30px;
		height: 30px;
		background: #f64662;
		text-align: center;
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
		color: #fff;
		cursor: pointer;
		-webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
	}
	.option-toggle i {
		top: 2px;
		position: relative;
	}
	.option-toggle:hover, .option-toggle:focus, .option-toggle:active {
		color:  #fff;
		text-decoration: none;
		outline: none;
	}
	</style>
	<!-- End demo purposes only -->


	<!-- Modernizr JS -->
	<script src="template/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="template/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<?php require_once 'navbar.php'; ?>

	<section id="fh5co-home" data-section="home"  data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img class="to-animate" src="https://www.brandcrowd.com/gallery/brands/pictures/picture14965954502289.png">
							<h1 class="to-animate">Bouhlel Mohamed <br> Développeur PHP/Symfony4</h1>
							<h2 class="to-animate">Pour vos projets :D</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slant"></div>
	</section>

	<section id="fh5co-intro">
		<div class="container">
			<div class="row row-bottom-padded-lg">
				<div class="fh5co-block to-animate" style="background-image: url(images/img_7.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<h2>Github</h2>
						<p>Github est une entreprise de développement logiciel et de service dont le siège est situé aux États-Unis. Github développe notamment la plateforme Github, l'éditeur de texte Atom ou encore le framework Electron.</p>
						<p><a href="https://github.com/BouhlelMohamed" class="btn btn-primary">Voir</a></p>
					</div>
				</div>
				<div class="fh5co-block to-animate" style="background-image: url(images/img_8.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<h2>Linkedin</h2>
						<p>LinkedIn est un réseau social professionnel en ligne créé en 2003 à Mountain View. En novembre 2015, le site revendique plus de 400 millions de membres issus de 170 secteurs d'activités dans plus de 200 pays et territoires et plus de 10 millions d'utilisateurs en France.</p>
						<p><a href="https://www.linkedin.com/in/mohamed-bhl-54b763162/" class="btn btn-primary">Voir</a></p>
					</div>
				</div>
				<div class="fh5co-block to-animate" style="background-image: url(images/img_10.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<h2>CV</h2>
						<p>Le curriculum vitæ est un document détaillant le parcours et autres compétences acquises d'un individu. Il s'agit en général du parcours scolaire et/ou professionnel qui fait état de la compétence d'un candidat dans un poste à pourvoir. Ce document constitue le point de jonction entre l'offre d'emploi et la demande.</p>
						<p><a href="../cv.pdf" class="btn btn-primary">Voir</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="fh5co-services" data-section="services">
		
	<section id="fh5co-contact" data-section="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Contacter</h2>
				</div>
			</div>

	<?php
					if(isset($_POST['mailform']))
		{
			if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
			{
				$header="MIME-Version: 1.0\r\n";
				$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
				$header.='Content-Type:text/html; charset="uft-8"'."\n";
				$header.='Content-Transfer-Encoding: 8bit';

				$message='
				<html>
					<body>
						<div align="center">
							<img src="http://www.primfx.com/mailing/banniere.png"/>
							<br />
							<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
							<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
							<br />
							'.nl2br($_POST['message']).'
							<br />
							<img src="http://www.primfx.com/mailing/separation.png"/>
						</div>
					</body>
				</html>
				';

				mail("mohamed.bouhleel@gmail.com", "CONTACT - Monsite.com", $message, $header);
				$msg="Votre message a bien été envoyé !";
			}
			else
			{
				$msg="Tous les champs doivent être complétés !";
			}
		}
?>

		<form class="to-animate" method="POST" action="">
			<h2>Formulaire de contact !</h2>

			<input class="form-control" type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
			<input class="form-control" type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
			<textarea class="form-control" name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
			<input class="btn btn-primary btn-lg" type="submit" value="Envoyer !" name="mailform"/>
		</form>
		<?php
		if(isset($msg))
		{
			echo $msg;
		}
		?>

			</div>
		</div>
	</section>
	
	</section>
	

	

	
	<footer id="footer" role="contentinfo">
		<a href="#" class="gotop js-gotop"><i class="icon-arrow-up2"></i></a>
		<div class="container">
			<div class="">
				<div class="col-md-12 text-center">
					<p> Pour acceder a l'administration <br>
					<a href="admin/index.php">Go</a>
				</div>
			</div>
		</div>
	</footer>
	

	
	<!-- jQuery -->
	<script src="template/js/jquery.min.js"></script>

	<!-- jQuery Easing -->

	<script src="template/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->

	<script src="template/js/bootstrap.min.js"></script>
	<!-- Waypoints -->

	<script src="template/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->

	<script src="template/js/jquery.stellar.min.js"></script>
	<!-- Counter -->
	<script src="template/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="template/js/jquery.magnific-popup.min.js"></script>
	<script src="template/js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="template/js/google_map.js"></script>

	<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
	<script src="template/js/jquery.style.switcher.js"></script>
	<script>
		$(function(){
			$('#colour-variations ul').styleSwitcher({
				defaultThemeId: 'theme-switch',
				hasPreview: false,
				cookie: {
		          	expires: 30,
		          	isManagingLoad: true
		      	}
			});	
			$('.option-toggle').click(function() {
				$('#colour-variations').toggleClass('sleep');
			});
		});
	</script>
	<!-- End demo purposes only -->

	<!-- Main JS (Do not remove) -->
	<script src="template/js/main.js"></script>

	</body>
</html>

