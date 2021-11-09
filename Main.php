<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<link href="//fonts.googleapis.com/css?family=Roboto:700,500,400&amp;display=swap" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="css/maincss.css">

</head>

<!--top nav php-->
<?php
include("includes/topNav.php");
?>



<!--Cut for php-->
<nav class="sideNav">
	<div id="mySidenav" class="sidenav">
		<a href="sidePage/tabs/About.html" id="about">About</a>
		<a href="sidePage/Media/Gallery.html" id="gallery">Directions</a>
		<a href="#" id="projects">Meet</a>
		<a href="sidePage/Quizzes/Contact.html" id="contact">Contact</a>
	</div>
</nav>

<body>

	<!--Main Slider Start-->
	<div class="wrap">

		<div id="arrow-left" class="arrow"></div>

		<div id="slider">

			<div class="slide slide1">
				<div class="slide-content">

				</div>
			</div>

			<div class="slide slide2">
				<div class="slide-content">

				</div>
			</div>

			<div class="slide slide3">
				<div class="slide-content">

				</div>
			</div>

			<div class="slide slide4">
				<div class="slide-content">

				</div>
			</div>

		</div>

		<div id="arrow-right" class="arrow"></div>

	</div>

	<!--Main Slider End-->


	<!--edit and cut for php -->
	<footer class="footer">

		<div class="container">
			<div class="btmTag">
				<span><img src="pics/icons/upArrow.png" alt="icon" width="30" /></span> &nbsp;&nbsp;
			</div>

			<div class="about">
				<h4> About </h4>
				<!--Change to opening times-->
				<p>
					Welcome to My little gym website </br>
					Its just a little area I made to help me learn htmls, css,
					javascript, msql, and php. Amongst others. <br>.

					<hr>

					Will add a link to the final product on GitHub once its all done.

				</p>
			</div>

			<div class="quickLink">
				<h4> External Links </h4>
				<!--Change these to directions, a youtube video- pegigo maybe - the wiki and-->
				<ul>
					<li>
						<a href="https://evolve-mma.com/blog/9-reasons-brazilian-jiu-jitsu-perfect-martial-art/" target="_blank">
							<img id="linkimg" alt="Evolve MMA" />
							<!--bjj wiki-->
						</a>
					</li>
					<li>
						<a href="https://bjjfanatics.com/" target="_blank">
							<img id="linkimg" alt="Bjj Fanatics " />
							<!---->
						</a>
					</li>
					<!--alter this-->
					<li>
						<a href="https://en.wikipedia.org/wiki/Brazilian_jiu-jitsu" target="_blank">
							<img id="linkimg" alt="Bjj Wiki" />
						</a>
					</li>
					<li>
						<a href="https://bjj-world.com/" target="_blank">
							<img id="linkimg" alt="Bjj World" />
						</a>
					</li>
				</ul>
			</div>

			<div class="follow">
				<h4> Follow </h4>
				<a href="https://www.facebook.com/"> <img src="pics/icons/wFacebook.jpg" alt="white facebook logo" width="30px"></a>
				<a href="https://www.instagram.com/"> <img src="pics/icons/insta.png" alt="white instagram logo" width="35px"></a>
				<a href="https://twitter.com"> <img src="pics/icons/twitterB.png" alt="white twitter logo" width="30px"></a>
				<a href="https://www.pinterest.ie/search/pins/?q=brazilian%20jiu%20jitsu&rs=typed&term_meta[]=brazilian%7Ctyped&term_meta[]=jiu%7Ctyped&term_meta[]=jitsu%7Ctyped"> <img src="pics/icons/pintW.jpg" alt="white pintrest logo" width="30px"></a>

			</div>

			<div class="email">
				<h4> Email </h4>
				<p> Don't hesitate to get in touch </p>
				<form class="newsForm" action="mailto: Genniferee@yahoo.ie" method="post" enctype="text/plain">
					<input type="email" id="yourEmail" placeholder="Email" />
					<input type="image" img src="pics/icons/whiteArrow.jpg" width="20" alt="submit" /> </span>
				</form>
			</div>

		</div>
	</footer>

	<script src="js/Main.js"></script>
</body>

</html>