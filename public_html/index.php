<!DOCTYPE html>
<html lang="en">
	<head id="background-image">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="stylesheets/StylesheetSH.css">
	</head>
	<body class="background">
	<!--	/**header section-->
		<section class="container header d-block text-center px-5 py-5 mx-5 my-4">
			<div class="headertext">
				<h1>Sarah Heckendorn</h1>
				<h3>Web Developer | Creative</h3>
			</div>
		</section>
	<!--		/**about me and links**/-->
		<section class="aboutme container-fluid px-3 py-3">
			<div class="row">
				<div class="col-md-2 px-2 mx-2">
					<img class="image-fluid rounded-circle profile" src="image/profileimage.jpg">
				</div>
				<div class="col-md-6 amback py-5">
					<h2>About Me</h2>
					<p>Hey! My name is Sarah. I've graduated CNM Ingenuity's Deep Dive Coding Bootcamp and have learned more about coding than I thought possible in ten short weeks! I've been passionate about coding for the past two years, but was able to recently incorporate it more when I learned about Deep Dive. I thoroughly enjoy the whole coding process- backend to frontend! The problem solving, the creativity, all of it! I'm excited to jump into the tech world full time and launch my career in fullstack web development. Please have a look around, check out the links, and feel free to contact me!</p>
				</div>
				<div class="col-md-3 social text-center py-5">
					<h2>Check Out My:</h2>
					<a href="https://github.com/sarahheckendorn"><i class="fab fa-github px-2 py-4"></i></a>
					<a href="https://www.linkedin.com/in/sarah-heckendorn-0721/"><i class="fab fa-linkedin px-2"></i></a>
					<a href="#"><i class="fab fa-twitter-square px-2"></i></a>
				</div>
			</div>
		</section>
	<!--		/**Languages section-->
		<table class="table container my-3">
			<thead>
				<tr>
					<th>Languages</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>HTML</td>
					<td>CSS</td>
					<td>Bootstrap</td>
					<td>AngularJS</td>
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
		<section class="container-fluid portfolio px-4 py-4">
			<div>
				<h4>Portfolio</h4>
			</div>
			<div class="card-deck">
				<div class="card">
					<p class="card-title">Lorum Ipsum</p>
					<div class="card-body">
						<img class="card-img-bottom w-100" src="http://absolute-respiratory.com/wp-content/uploads/2015/01/image-coming-soon.jpg">
					</div>
				</div>
				<div class="card">
					<p class="card-title">Lorum Ipsum</p>
					<div class="card-body">
						<img class="card-img-bottom w-100" src="http://absolute-respiratory.com/wp-content/uploads/2015/01/image-coming-soon.jpg">
					</div>
				</div>
				<div class="card">
					<p class="card-title">Lorum Ipsum</p>
					<div class="card-body">
						<img class="card-img-bottom w-100" src="http://absolute-respiratory.com/wp-content/uploads/2015/01/image-coming-soon.jpg">
					</div>
				</div>
				<div class="card">
					<p class="card-title">Lorum Ipsum</p>
					<div class="card-body">
						<img class="card-img-bottom w-100" src="http://absolute-respiratory.com/wp-content/uploads/2015/01/image-coming-soon.jpg">
					</div>
				</div>
			</div>
		</section>
	<!--		/**Contact Me Section-->
		<section class="container">
			<div>
				<form>
					<h3>Contact Me!</h3>
					<fieldset>
						<input placeholder="Your name" type="text" tabindex="1" required autofocus>
					</fieldset>
					<fieldset>
						<input placeholder="Your Email Address" type="email" tabindex="2" required>
					</fieldset>
					<fieldset>
						<input placeholder="Your Phone Number" type="tel" tabindex="3" required>
					</fieldset>
					<fieldset>
						<textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
					</fieldset>
					<fieldset>
						<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
					</fieldset>
				</form>
			</div>
		</section>
		<section>
			<div class="d-xl-none d-lg-none d-md-none">
				<h2>Easy Links:</h2>
				<a href="https://github.com/sarahheckendorn"><i class="fab fa-github px-2 py-4"></i></a>
				<a href="https://www.linkedin.com/in/sarah-heckendorn-0721/"><i class="fab fa-linkedin px-2"></i></a>
				<a href="#"><i class="fab fa-twitter-square px-2"></i></a>
			</div>
		</section>
	</body>
</html>
