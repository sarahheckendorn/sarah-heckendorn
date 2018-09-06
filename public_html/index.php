<!DOCTYPE html>
<html lang="en">
	<head id="background-image">
		<title>Sarah Heckendorn</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Styling sheets from font awesome and onsite-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="stylesheets/stylesheet.css" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Dancing+Script|Raleway" rel="stylesheet">
		<!--Jquery and popper-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<!--scripts for form-->
		<script src="js/validator.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
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
		<section class="container font px-3 py-3">
			<div class="row">
				<div id="aboutme" class="col-md-6 mb-3 py-3">
					<img id="profile" class="image rounded-circle" src="image/profileimage%20-%20Copy.jpg" alt="profile picture">
					<h2 class="cursive">About Me</h2>
					<p>Hey! My name is Sarah. I've graduated CNM Ingenuity's Deep Dive Coding Bootcamp and have learned more about coding than I thought possible in ten short weeks! I've been passionate about coding for the past two years, but was able to recently incorporate it more when I learned about Deep Dive. I thoroughly enjoy the whole coding process- backend to frontend! The problem solving, the creativity, all of it! I'm excited to jump into the tech world full time and launch my career in fullstack web development. Please have a look around, check out the links, and feel free to contact me!</p>
				</div>
				<div id="social" class="col-md-5 text-center ml-auto pt-5">
					<h2 class="title pb-2">Check Out My:</h2>
					<div class="align-items-center">
						<a class="link" href="https://github.com/sarahheckendorn"><i class="fab fa-github fa-4x px-2 py-2"></i></a>
					<a class="link" href="https://www.linkedin.com/in/sarah-heckendorn-0721/"><i class="fab fa-linkedin fa-4x px-2"></i></a>
					<a class="link" href="https://twitter.com/HeckendornSarah"><i class="fab fa-twitter-square fa-4x px-2"></i></a>
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
<!--				will update the carousel as I have items to add. Have commented out code for ease so that I can easily add items as they come.-->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="image/image%20(2).jpg" alt="Image for bootstrap challenge">
						<div class="carousel-caption d-none d-md-block">
							<h5>Bootstrap Challenge</h5>
							<p>Used a simple layout to practice styling with bootstrap and css. Completed during Deep Diving Coding Fullstack Bootcamp.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/lake.jpg" alt="Image coming soon for NM-Outdoors Project">
						<div class="carousel-caption d-none d-md-block">
							<h5>NM-Outdoors</h5>
							<p>A collaborative project with teammates from DDC Bootcamp. Implementing mySQL for backend databases, PHP for structuring the database, Api's for pulling data from a government site, Angular for putting the pieces together, and finally, bootstrap and css for styling.</p>
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
			<form id="form" action="php/mailer.php" method="post" class="container m-auto">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control" id="name" placeholder="John Doe">
				</div>
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<input type="text" name="subject" class="form-control" id="subject" placeholder="Asking about...">
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<textarea name="message" class="form-control" id="message" rows="3"></textarea>
				</div>
				<div class="g-recaptcha" data-sitekey="6LcIZG0UAAAAANrDHKCeUg7zNRqnzgQxAEnk6TSd"></div>
				<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
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
				<a href="https://github.com/sarahheckendorn"><i class="tiny fab fa-github px-2 py-4"></i></a>
				<a href="https://www.linkedin.com/in/sarah-heckendorn-0721/"><i class="tiny fab fa-linkedin px-2"></i></a>
				<a href="https://twitter.com/HeckendornSarah"><i class="tiny fab fa-twitter-square px-2"></i></a>
			</div>
		</section>
	</body>
</html>
