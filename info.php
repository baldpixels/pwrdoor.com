<!doctype html>
<html>

	<head>
		<meta charset="UTF-8">
		<?php include 'style/cssLinks.php';?>
		<link rel="stylesheet" type="text/css" href="style/navTop.css">
		<link rel="stylesheet" type="text/css" href="style/content.css">
		<?php include 'style/fonts.php';?>
		<title>pwrdoor off</title>
	</head>

	<body>

		<div id="container"> <!--fixed position-->
			<figure> <!--absolute position-->
				<a href="index.php"><img id="logoTop" src="images/logo.png" onmouseover="this.src='images/logo_hover.png';" onmouseout="this.src='images/logo.png';" alt="pwrdoor.com"/></a>
			</figure>

			<?php include 'nav.php';?> <!--absolute position-->

			<main> <!--absolute position-->
				<section>
					<article>
						<div class="info">
							<p>STAFF: Connor Rudmann</p>
							<p>EMAIL: baldpixels@gmail.com</p>
						</div>
					</article>
				</section>
			</main>

			<div id="footer"><?php include 'footer.php';?></div> <!--absolute position-->
		</div>

	</body>

</html>