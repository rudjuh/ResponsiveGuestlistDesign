<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guestlist</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div style="z-index: 1050;"class="top-menu-wrapper navbar-fixed-top hidden-sm hidden-xs">
		<div class="top-menu">
			<div class="join-btn">
				<a href="/users/add">Join Guestlist now</a>
			</div>
			<div class="hr-hor"></div>
			<form id="formTopBarLogin" class="loginHeader" accept-charset="utf-8" method="post" controller="users" action="/users/login">
				<span>Login</span>
				<input required="" id="username" name="data[User][email]" autocomplete="on" placeholder="Email" type="email">
				<div id="forget">
					<input required="" id="passwordLogin" name="data[User][password]" autocomplete="on" placeholder="Password" type="password">
					<a href="/users/forgot_password" class="passwordForgottenLink">
					  <div class="forget">(forgot ?)</div>
					</a>
				</div>
				<button id="loginbtn" type="submit">Login</button>
			</form>				
			<ul>
				<li>|</li>
				<li><span>or</span></li>
				<li>|</li>
			</ul>
			<span style="line-height: 29px; float: left;">With</span>
			<div id="loginFacebook"><a href="/auth/facebook" title="login with Facebook"></a></div>
			<br class="clr" />
			<div class="top-menu-toggle">Login <span id="arrowLogin" class="arrowWhite easeInOutAll400 menuArrow"></span></div>
		</div>
		
					
	</div>
	<div class="header-wrapper">
		<div class="header">
			<div class="row">
				<div class="banner-img">
					<img src="images/logo.png" width="350px"/>
				</div>
				<div class="nav-wrapper">
					<nav class="navbar navbar-default main-menu" role="navigation">
						<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header navbar-fixed-top">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
								<div class="profil"><a href="#"></a></div>
								<div id="navbrand" ><a class="navbar-brand" href="index.html"><img src="images/guestlist-logo_tall.png" class="img-responsive" width="" /></a></div>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a href="">News</a></li>
									<li><a href="">Events</a></li>
									<li><a href="">Video</a></li>
									<li><a href="">Film</a></li>
									<li><a href="">Fashion</a></li>
									<li><a href="">Tech</a></li>
									<li><a href="">Travel</a></li>
								</ul>
							</div>
							<!-- /.navbar-collapse -->
						</div>  
						<!-- /.container -->
					</nav>
					<div class="second-menu">
						<ul class="second-nav">
							<li><a href="">House/Techno</a></li>
							<li><a href="">RnB / HipHop</a></li>
							<li><a href="">Drum & Bass</a></li>
							<li><a href="">Indie</a></li>
							<li><a href="">Regae</a></li>
							<li><a href="">Festivals</a></li>
							<li><a href="">Competition</a></li>
							<form class="navbar-right" role="search">
								<input type="text" class="search" placeholder="Search">
							</form>
							<br class="clr" />
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content-wrapper">