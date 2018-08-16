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
	</head>
	<body class="background">
	<!--	/**header section-->
		<section class="container header d-block text-center px-5 py-5 mx-auto my-4">
			<div class="headertext font">
				<h1>Sarah Heckendorn</h1>
				<h3>Web Developer | Creative</h3>
			</div>
		</section>
	<!--		/**about me and links**/-->
		<section class="aboutme container-fluid font px-3 py-3">
			<div class="row">
				<div class="col-md-2 px-2 mx-2">
					<img class="image-fluid rounded-circle profile" src="image/profileimage.jpg">
				</div>
				<div class="col-md-6 amback py-5">
					<h2 class="cursive">About Me</h2>
					<p>Hey! My name is Sarah. I've graduated CNM Ingenuity's Deep Dive Coding Bootcamp and have learned more about coding than I thought possible in ten short weeks! I've been passionate about coding for the past two years, but was able to recently incorporate it more when I learned about Deep Dive. I thoroughly enjoy the whole coding process- backend to frontend! The problem solving, the creativity, all of it! I'm excited to jump into the tech world full time and launch my career in fullstack web development. Please have a look around, check out the links, and feel free to contact me!</p>
				</div>
				<div class="col-md-3 social text-center py-5">
					<h2>Check Out My:</h2>
					<a href="https://github.com/sarahheckendorn"><i class="fab fa-github px-2 py-4"></i></a>
					<a href="https://www.linkedin.com/in/sarah-heckendorn-0721/"><i class="fab fa-linkedin px-2"></i></a>
					<a href="https://twitter.com/HeckendornSarah"><i class="fab fa-twitter-square px-2"></i></a>
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
		<section class="container-fluid portfolio font text-center pt-2 pb-4 my-5">
			<div>
				<h2 class="pb-3">Portfolio</h2>
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
		<section class="container-fluid contact font py-4 m-auto">
			<form class="container m-auto">
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
					<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
				</div>
			</form>
		</section>
		<section class="container-fluid m-auto hide-link font">
			<div class="d-xl-none d-lg-none d-md-none text-center">
				<h2>Easy Links:</h2>
				<a href="https://github.com/sarahheckendorn"><i class="fab fa-github px-2 py-4"></i></a>
				<a href="https://www.linkedin.com/in/sarah-heckendorn-0721/"><i class="fab fa-linkedin px-2"></i></a>
				<a href="https://twitter.com/HeckendornSarah"><i class="fab fa-twitter-square px-2"></i></a>
			</div>
		</section>
	</body>
</html>
