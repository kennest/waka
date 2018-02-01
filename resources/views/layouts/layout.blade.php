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
		#first-nav {
			height: 50px;
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
		#third-nav {
			border-top: 1px solid #8d9598;
		}
		#second-nav>div>div>nav>ul>li>a {
			color: #3b4042;
			padding: 5px;
		}
		#second-nav>div>div:nth-child(4) {
			top: 30px;
		}
		#third-nav>div>div>div>ul>li.nav-item>a {
			color: #53585d;
		}
		#third-nav>div>div>div:nth-child(3)>form>a {
			color: #41aa46;
		}
		#third-nav>div>div>div:nth-child(3)>form>a:hover {
			color: white;
		}
		#slide {
			margin-top: 200px;
		}
		body>footer>nav>div.container>div>div>ul>li>a,
		body>footer>nav>div.container>div>div>p {
			color: white;
		}
		body>footer>nav>div.container>div>div>ul>li {
			margin: 0 0 20px 0;
		}
		body>footer>nav>div>div>div>h5 {
			color: black;
			background-color: white;
		}
	</style>
	@yield('styles')
</head>
<body>
	<header class="fixed-top">
		<nav id="first-nav" class="container-fluid navbar navbar-inverse bg-primary">
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
				<div class="col-lg-6">
					&nbsp;
				</div>
				<div class="col">
					<ul class="nav list-inline">
						<li>
							<a href=""><i class="fa fa-envelope"></i>Email : infos@waka-sa.ga</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-1">&nbsp;</div>
			</div>
			<hr/>
		</nav>
		<nav id="second-nav" class="navbar bg-light container-fluid">
			<div class="row">
				<div class="col-lg-1">&nbsp;</div>
				<div class="col">
					<img src="{{asset('images/logo.jpg')}}" height="80" width="170" class="rounded">
				</div>
				<div class="col-lg-5">&nbsp;</div>
				<div class="col">
					<nav class="nav list-inline">
						<ul class="nav list-inline">
							<li>
								<a href="#">A propos</a>
							</li>
							<li>|</li>
							<li>
								<a href="#">Solutions Waka</a>
							</li>
							<li>|</li>
							<li>
								<a href="#">Blog</a>
							</li>
							<li>|</li>
							<li>
								<a href="#">Contact</a>
							</li>
							<li>&nbsp;</li>
							<li>
								<a href="#">
										<i class="fa fa-question-circle"></i>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</nav>
		<nav id="third-nav" class="navbar bg-faded">
			<div class="container">
				<div class="row">
					<div class="col">
						<ul class="nav list inline">
							<li class="nav-item active">
								<a class="nav-link" href="#">Fibre <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">VSAT</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">VOIP</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">WIMAX</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">VPN</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-6">
						&nbsp;
					</div>
					<div class="col">
						<form class="form-inline my-2 my-lg-0">
							<a href="#" class="btn btn-outline-success">Login</a>
						</form>
					</div>
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
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img class="d-block img-fluid" src="http://via.placeholder.com/1900x450" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block img-fluid" src="http://via.placeholder.com/1900x450" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block img-fluid" src="http://via.placeholder.com/1900x450" alt="Third slide">
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
		<nav class="navbar navbar-inverse" style="background-color:black;">
			<div class="container">
				<p>&nbsp;</p>
				<div class="row">
					<div class="col-lg-3">
						<img src="images/logo.jpg" height="150" width="200" class="rounded" alt="">
						<p class="lead">
							Opérateur télécom - Expert dans la gestion de réseaux de télécommunications et la confidentialité des données - 20 ans d’expérience.
						</p>
					</div>
					<div class="col-lg-2">
						<h5>SOLUTIONS ET SERVICES</h5>
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
					<div class="col-lg-2">
						<h5>DIVERS</h5>
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
					<div class="col-lg-2">
						<h5>CONTACT</h5>
						<ul class="nav navbar-nav">
							<li>
								<a href="">Centre Ville BP 123000 Port Gentil</a>
							</li>
							<li>
								<a href="#">+241 01931667 - 06122732</a>
							</li>
							<li>
								<div id="map"></div>
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
					<div class="col-lg-3">
							<div class="fb-page" data-href="https://www.facebook.com/wakagabon/" data-tabs="timeline" data-width="450" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/wakagabon/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/wakagabon/">WAKA</a></blockquote></div>
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