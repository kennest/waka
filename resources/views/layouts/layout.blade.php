<!doctype html>
<html>
<head lang="fr">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<title>WAKA - Opérateur internet</title>
	<meta name="description" content="Waka .sa - opérateur internet" />
	<meta name="keywords" content="opérateur internet, afrique, haut-débit, waka, Gabon, Côte d'ivoire,communication" />
	<meta property="og:title" content="" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
	/>
	<!--link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mega-menu.css"-->
	<link rel="stylesheet" type="text/css" href="css/chat-box.css">
	<link rel="stylesheet" type="text/css" href="wow/dist/animate.css">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext' rel='stylesheet'
	 type='text/css' />
	<style>
		header{
			box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
		}
		#first-nav {
			height: 50px;
			background-color: #04BAEE;
		}
		#first-nav>div>div>ul>li>a {
			color: white;
		}
		#first-nav>div>div>ul>li>a:hover {
			color: #41aa46;
		}
		#second-nav,
		#third-nav {
			background-color: white;
		}

		#second-nav>div>div>nav>ul>li>a {
			color: #3b4042;
			padding-right: 35px;
		}
		#second-nav>div>div:nth-child(4) {
			top: 30px;
		}
		#third-nav > div > div> ul > li.nav-item > a {
			color: #53585d;
			font-size: 23px;
			font-weight: 600;
		}
		#third-nav > div > div> ul > li.nav-item > a:hover{
			color: #282b2e;
		}
		#third-nav > div > div:nth-child(3) > form > a{
			color: #41aa46;
			font-weight: 600;
			font-size: 20px;
		}
		#third-nav > div > div:nth-child(3) > form > a:hover {
			color: white;
			font-weight: bold;
		}
		#third-nav {
			border-top: 1px solid #8d9598;
		}
		#slide {
			margin-top: 200px;
		}
		body>footer>nav>div.container-fluid>div>div>div>ul>li>a,
		body>footer>nav>div.container-fluid>div>div>div>p,body > footer > nav > div > div > div > p {
			color: white;
		}
		.badge {
			display: inline-block;
			padding: .25em .5em ;
			font-size: 15px;
			font-weight: 700;
			line-height: 1.5;
			color: #0e0d0d;
			text-align: justify;
			white-space: nowrap;
			vertical-align: baseline;
			border-radius: .25rem;
			margin-bottom: 80px;
		}
		body>footer>nav>div.container-fluid>div>div>div>ul>li {
			margin: 0 0 25px 0;
		}
		footer .container-fluid{
			padding-left: 50px;
			padding-right: 50px;
		}
		body > footer > nav > div > div > div >div> h5 {
			color: black;
			background-color: white;
		}
	</style>
	@yield('styles')
</head>
<body>
	<header class="fixed-top">
		<nav id="first-nav" class="container-fluid navbar navbar-inverse bg-faded">
			<div class="row">
				<div class="col-lg-1">&nbsp;</div>
				<div class="col">
					<ul class="nav list-inline">
						<li>
							<a href=""><i class="fa fa-2x fa-facebook-official"></i></a>
						</li>
						<li>&nbsp;</li>
						<li>&nbsp;</li>
						<li>
							<a href=""><i class="fa fa-2x fa-twitter-square"></i></a>
						</li>
						<li>&nbsp;</li>
						<li>&nbsp;</li>
						<li>
							<a href=""><i class="fa fa-2x fa-linkedin-square"></i></a>
						</li>
					</ul>
				</div>
				<div class="col-lg-5">
					&nbsp;
				</div>
				<div class="col">
					<ul class="nav list-inline">
						<li>
							<a href=""><i class="fa fa-envelope"></i>Email : infos@waka-sa.ga</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-2">&nbsp;</div>
			</div>
			<hr/>
		</nav>
		<nav id="second-nav" class="navbar bg-light container-fluid">
			<div class="row">
				<div class="col-lg-1">&nbsp;</div>
				<div class="col">
					<img src="{{asset('/images/logo-waka.png')}}" height="120" width="170" class="rounded">
				</div>
				<div class="col-lg-4">&nbsp;</div>
				<div class="col">
					<nav class="nav list-inline">
						<ul class="nav list-inline">
							<li>
								<a href="#">A propos</a>
							</li>
							<li>
								<a href="#">Solutions WAKA</a>
							</li>
							<li>
								<a href="#">Blog</a>
							</li>
							<li>
								<a href="#">Contact</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</nav>
		<nav id="third-nav" class="navbar bg-faded container-fluid">
				<div class="row">
					<div class="col offset-lg-1">
						<ul class="nav list inline">
							<li class="nav-item active">
								<a class="nav-link" href="#">Fibre <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Vsat</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Wimax</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Hotspot</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-5">
						&nbsp;
					</div>
					<div class="col">
						<form class="form-inline my-2 my-lg-0">
							<a href="#" class="btn btn-outline-success">LOGIN</a>
						</form>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<section id="slide">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img class="d-block img-fluid" src="{{asset('/slides/slide1.png')}}" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block img-fluid" src="{{asset('/slides/slide2.jpg')}}" alt="Second slide">
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
	</section>
	<!-- Chat Box>
	<div id="chatbox" role="tablist">
		<div class="panel panel-info">
			<div class="panel-heading" role="tab" id="headingOne">
				<h4 class="panel-title">
					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<i class="fa fa-wechat" aria-hidden="true"></i>
						Support en ligne
					</a>
				</h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
				<div class="panel-body">
					<ul class="list-group list-unstyled">
						<li>
							<a class="list-group-item active">
								<h4 class="list-group-item-heading">Moi:</h4>
								<p class="list-group-item-text">Bonjour...</p>
							</a>
						</li>
						<li>
							<a class="list-group-item">
								<h4 class="list-group-item-heading">Admin:</h4>
								<p class="list-group-item-text">Bonjour,Comment allez vous?</p>
							</a>
						</li>
					</ul>
					<br>
					<form class="form-inline">
						<div class="input-group">
							<textarea class="form-control" placeholder="Message..."></textarea>
							<span class="input-group-btn">
								<button class="btn btn-info" type="button">Envoyer</button>
							</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<Chat Box-->
	<!-- === MAIN Background === -->
	@yield('content')
	<footer class="footer">
		<nav class="navbar navbar-inverse" style="background-color:black;padding:  70px;">
			<div class="container-fluid">
				<p>&nbsp;</p>
				<div class="row">
					<div class="col-lg-2">
						<img src="{{asset('/images/logo-waka.png')}}" height="100" width="200" class="rounded" alt="">
						<p class="lead">
							Opérateur télécom - Expert dans la gestion de réseaux de télécommunications et la confidentialité des données - 20 ans d’expérience.
						</p>
					</div>
					<div class="col-lg-8 row">
						<div class="col">
							<h5 class="badge">SOLUTIONS ET SERVICES</h5>
							<ul class="nav navbar-nav list-unstyled">
								<li>
									<a href="#">Solution connectivité haut-débit</a>
								</li>
								<li>
									<a href="#">Solutions à valeurs ajoutée</a>
								</li>
								<li>
									<a href="#">Etude de développement</a>
								</li>
							</ul>
						</div>
						<div class="col">
							<h5 class="badge">DIVERS</h5>
							<ul class="nav navbar-nav list-unstyled">
								<li>
									<a href="#">Partenaires</a>
								</li>
								<li>
									<a href="#">Blog</a>
								</li>
								<li>
									<a href="#">Plan du site</a>
								</li>
								<li>
									<a href="#">Mentions légales</a>
								</li>
								<li>
									<a href="#">Conditions</a>
								</li>
								<li>
									<a href="#">FAQ</a>
								</li>
							</ul>
						</div>
						<div class="col">
							<h5 class="badge">CONTACT</h5>
							<ul class="nav navbar-nav">
								<li>
									<a href="">Centre Ville BP 123000 Port Gentil</a>
								</li>
								<li>
									<a href="#">+241 01931667 - 06122732</a>
								</li>
								<li>
									<div id="map">
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31915.932954709537!2d8.761765709397002!3d-0.7332283839077801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sci!4v1518088044140" width="180" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</li>
								<li>
									<ul class="nav list-inline">
										<li>
											<a href=""><i class="fa fa-2x fa-facebook-official"></i></a>
										</li>
										<li>&nbsp;</li>
										<li>&nbsp;</li>
										<li>
											<a href=""><i class="fa fa-2x fa-twitter-square"></i></a>
										</li>
										<li>&nbsp;</li>
										<li>&nbsp;</li>
										<li>
											<a href=""><i class="fa fa-2x fa-linkedin-square"></i></a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2">
							<div class="fb-page" data-href="https://www.facebook.com/wakagabon/" data-tabs="timeline" data-width="200" data-height="420" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/wakagabon/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/wakagabon/">WAKA</a></blockquote></div>
					</div>
				</div>
			</div>
		</nav>
	</footer>
	<!-- SCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
	<script src="wow/dist/wow.min.js"></script>
	<script src="js/megamenu.js"></script>
	<script src="https://js.pusher.com/4.1/pusher.min.js"></script>
	<script>
		wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         false        // default
                    }
                    )
                    wow.init();
		// Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
        var pusher = new Pusher('9849132e1f27d01ac2fc', {
            cluster: 'eu',
            encrypted: true
        });
        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            alert(data.message);
        });
	</script>
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.12&appId=279563225902445&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
	</script>
</body>
</html>