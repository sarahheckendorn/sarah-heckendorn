<!DOCTYPE html>
<html lang="en">
	<head id="background-image">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="stylesheets/stylesheet.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Dancing+Script|Raleway" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script src="js/validator.js"></script>
	</head>
	<body class="background">
	<!--	/**header section-->
		<section id="header" class="container header d-block text-center px-5 py-5 mx-auto my-4">
			<div class="headertext font">
				<h1>Sarah Heckendorn</h1>
				<h3>Web Developer | Creative</h3>
				<blockquote>"You only have one life to live... so live it to the fullest."</blockquote>
			</div>
		</section>
	<!--		/**about me and links**/-->
		<section id="aboutme" class="container font px-3 py-3">
			<div class="d-flex">
				<div class="col py-3">
					<img id="profile" class="image rounded-circle" src="image/profileimage%20-%20Copy.jpg" alt="profile picture">
					<h2 class="cursive">About Me</h2>
					<p>Hey! My name is Sarah. I've graduated CNM Ingenuity's Deep Dive Coding Bootcamp and have learned more about coding than I thought possible in ten short weeks! I've been passionate about coding for the past two years, but was able to recently incorporate it more when I learned about Deep Dive. I thoroughly enjoy the whole coding process- backend to frontend! The problem solving, the creativity, all of it! I'm excited to jump into the tech world full time and launch my career in fullstack web development. Please have a look around, check out the links, and feel free to contact me!</p>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div id="social" class="col text-center ml-3 py-5">
					<h2>Check Out My:</h2>
					<div class="d-flex align-items-center">
					<a class="link" href="https://github.com/sarahheckendorn"><i class="fab fa-github px-2 py-2"></i></a>
					<a class="link" href="https://www.linkedin.com/in/sarah-heckendorn-0721/"><i class="fab fa-linkedin px-2"></i></a>
					<a class="link" href="https://twitter.com/HeckendornSarah"><i class="fab fa-twitter-square px-2"></i></a>
					</div>
				</div>
			</div>
		</section>
	<!--		/**Languages section-->
		<table class="table container font my-3 text-center">
			<thead>
				<tr>
					<td>Languages</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>HTML</td>
					<td>CSS</td>
					<td>Bootstrap</td>
					<td>Angular6</td>
				</tr>
				<tr>
					<td>JQuery</td>
					<td>JavaScript</td>
					<td>PHP</td>
					<td>mySQL</td>
				</tr>
			</tbody>
		</table>
	<!--		/**Portfolio-->
		<div class="container">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="image/adobe.jpg?auto=yes&bg=777&fg=555" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>Lorum Ipsum</h5>
							<p>Description of slide and what work it was. Keep it brief but informative</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/pink%20adobe.jpg?auto=yes&bg=666&fg=444" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>Lorum Ipsum</h5>
							<p>Description of slide and what work it was. Keep it brief but informative</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/rustic-pictures.jpg?auto=yes&bg=555&fg=333" alt="Third slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>Lorum Ipsum</h5>
							<p>Description of slide and what work it was. Keep it brief but informative</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	<!--		/**Contact Me Section-->
		<section id="contact" class="container-fluid font py-4 m-auto">
			<form id="form" class="container m-auto">
				<div class="form-group">
					<label for="nameControlInput">Name</label>
					<input type="text" class="form-control" id="nameControlInput" placeholder="John Doe">
				</div>
				<div class="form-group">
					<label for="emailControlInput">Email address</label>
					<input type="email" class="form-control" id="emailControlInput" placeholder="name@example.com">
				</div>
				<div class="form-group">
					<label for="numberControlInput">Phone Number</label>
					<input type="number" class="form-control" id="numberControlInput" placeholder="555-555-5555">
				</div>
				<div class="form-group">
					<label for="FormControlTextarea1">Example textarea</label>
					<textarea class="form-control" id="FormControlTextarea1" rows="3"></textarea>
				</div>
				<div>
					<div class="g-recaptcha" data-sitekey="6LcIZG0UAAAAANrDHKCeUg7zNRqnzgQxAEnk6TSd"></div>
					<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
				</div>
			</form>
			<!--empty area for form error/success output-->
			<div class="row">
				<div class="col-xs-12">
					<div id="output-area"></div>
				</div>
			</div>
		</section>
		<section id="hide-link" class="container-fluid m-auto font">
			<div class="d-xl-none d-lg-none d-md-none text-center">
				<h2>Easy Links:</h2>
				<a href="https://github.com/sarahheckendorn"><i id="tiny" class="fab fa-github px-2 py-4"></i></a>
				<a href="https://www.linkedin.com/in/sarah-heckendorn-0721/"><i id="tiny" class="fab fa-linkedin px-2"></i></a>
				<a href="https://twitter.com/HeckendornSarah"><i id="tiny" class="fab fa-twitter-square px-2"></i></a>
			</div>
		</section>
	</body>
</html>
