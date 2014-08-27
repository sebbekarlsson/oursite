<!DOCTYPE HTML>

<html>
	<head>
		<title>Spajder</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->
		<div id="header">
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">WebsiteMakers.se</a></h1>
					<span>Vi skapar din hemsida.</span>
				</div>
				
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li ><a href="index.html">Hem</a></li>
						<li ><a href="pricelist.html">Prislista</a></li>
						<li class="active"><a href="#">Skaffa websida!</a></li>
						
					</ul>
				</nav>
			</div>
		</div>

		<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row"> 
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>websitemakers.se!</h2>
								<span class="byline">Påbörja din beställning!</span>
							</header>
							<a href="#" class="image full"><img src="images/keyboard.jpg" alt="" /></a>
							

							<form>
							<p>Ditt förnamn: <br><input type="text" name="firstname"/>
							<p>Ditt efternamn: <br><input type="text" name="lastname"/>
							<p>Din email: <br><input type="text" name="email"/>	
							<p>Kort beskrivning på vad du ska ha för slags websida: <br>
							<textarea rows="4" cols="50" name="webinfo">
							Beskriv kort din websida här! 
							</textarea>
							
							<p>Vi rekomenderar starkt att vi talas vid över telefon så att vi kan diskutera din websida mer i detalj.<br>
							<br>
							Sebastians nummer: 0708289728<br>
							Robins nummer: 0703031928<br>
							<br>
							<p>Du kan även om du vill, strunta i att fylla i dessa uppgifter och endast höra av dig över telefon för att diskutera din websida.</p>
							Har du snabba frågor maila sebbekarlsson97@gmail.com
							
							<p><input type="submit" value="Skicka" name="send"/>

							</form>
							
							<?php
							
							if(isset($_GET['send'])){
							
							$name = $_GET['firstname'];
							$lastname = $_GET['lastname'];
							$email = $_GET['email'];
							$desc = $_GET['webinfo'];
							
							if(substr_count($desc, ">") > 0 || substr_count($name, ">") > 0 || strlen($name) < 3){
								echo "THIS WAS NOT ACCEPTABLE!";
							}else{
							$desc = "$name\n$lastname\n$email\n$desc";
							mkdir("requests");
							file_put_contents("requests/$name".mt_rand(0, 25).".txt", $desc);
							echo "The form was sent!";
							}
							}
							function randLetter(){
							
							return chr(97 + mt_rand(0, 25));
							}
							
							?>
						</section>
					</div>
					
								

						</section>
					</div>
					
					

		

		
		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
			</div>
		</div>
		
	</body>
</html>