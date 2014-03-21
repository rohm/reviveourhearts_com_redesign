<?php include "_variables_global.php" ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageTitle ?> | <?php echo $siteName ?></title>
    <!-- <link rel="stylesheet" href="/css/bootstrap.css" /> -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
		<link rel="stylesheet" href="/css/social-buttons-3.css" />
		<link rel="stylesheet" href="/css/bootstrap-player.css">
		<link rel="stylesheet" href="/css/theme.css" />
    <!--[if lt IE 9]>
      <script src="bower_components/modernizr/modernizr.js"></script>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      $('.collapse').collapse();
    </script>
  </head>
  <body class="<?php echo $bodyCss; ?>">
    <div id="main-nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
				<div class="navbar-wrap">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="/"><em><?php echo $siteName ?></em></a>
	        </div>
	        <div class="navbar-collapse collapse">
	          <form role="search" class="visible-xs">
	            <input name="" class="form-control" type="search" placeholder="Search" />
	          </form>
	          <ul id="member-menu" class="nav navbar-nav navbar-right hidden-xs">
	            <li id="parent-cart">
								<a href="#" class="collapsed has-mega-menu" data-toggle="collapse" data-target="#shopping-cart-mega">
									<span class="shopping-cart-count badge">0</span>
									<i class="fa fa-shopping-cart"></i> 
								</a>
							</li>
	            <li id="parent-account">
	              <a href="#" class="collapsed has-mega-menu" data-toggle="collapse" data-target="#account-mega">
									<i class="fa fa-user"></i><b class="caret"></b>
								</a>
	            </li>

	          </ul>

	          <ul class="nav navbar-nav navbar-left">
	            <li id="parent-about"><a href="/about-us/who-we-are/">About</a></li>

	            <li id="parent-resources" class="dropdown">
	              <a href="/resource-library/" class="dropdown-toggle" data-toggle="dropdown">Resources <b class="caret"></b></a>
	              <ul class="dropdown-menu">
	                <li><a href="#">Browse All</a></li>
	                <li><a href="#">By Category</a></li>
	                <li><a href="#">By Topic</a></li>
	                <li class="divider"></li>
	                <li class="dropdown-header">Nav header</li>
	                <li><a href="#">Separated link</a></li>
	                <li><a href="#">One more separated link</a></li>
	              </ul>
	            </li>
	            <li id="parent-resources" class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programs <b class="caret"></b></a>
	              <ul class="dropdown-menu">
				          <li><a href="/programs/revive-our-hearts/immanuel/">Revive Our Hearts</a></li>
									<li><a href="/programs/seeking-him/">Seeking Him</a></li>
	              </ul>
	            </li>
	            <li id="parent-blogs" class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blogs <b class="caret"></b></a>
	              <ul class="dropdown-menu">
				          <li><a href="/blogs/true-woman/">True Woman</a></li>
									<li><a href="/blogs/lies-young-women-believe/">Lies Young Women Believe</a></li>
	              </ul>
	            </li>
	            <li id="parent-events" class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events <b class="caret"></b></a>
	              <ul class="dropdown-menu">
				          <li><a href="#">Upcoming Events</a></li>
									<li><a href="#">Past Events</a></li>
	              </ul>
	            </li>
	            <li id="parent-store" class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Store <b class="caret"></b></a>
	              <ul class="dropdown-menu">
				          <li><a href="#">All</a></li>
									<li><a href="#">By Category</a></li>
									<li><a href="#">By Topic</a></li>
									<li><a href="/store/sample-product/">Sample Product</a></li>
	              </ul>
	            </li>
	            <li id="parent-donate"><a href="/donate/">Donate</a></li>
	            <li role="presentation" class="divider visible-xs"></li>
	          </ul>

	          <ul id="member-menu2" class="nav navbar-nav navbar-right visible-xs">
	            <li id="parent-contact"><a href="/contact/"><i class="fa fa-envelope"></i> <span class="visible-xs">Contact Us</span></a></li>
	            <li><a href="#"><i class="fa fa-shopping-cart"></i> <span class="visible-xs">Shopping Cart</span></a></li>
	            <li id="parent-account" class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="visible-xs">Account</span></a>
	              <ul class="dropdown-menu">
	                <li><a href="#">Edit Account</a></li>
	                <li><a href="#">Sign Out</a></li>
	              </ul>
	            </li>
	          </ul>
	          <ul id="search-menu" class="item-search nav navbar-nav navbar-right hidden-xs">
	           <li><a href="#" class="collapsed has-mega-menu" data-toggle="collapse" data-target="#search-mega"><i class="fa fa-search"></i></a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>

			</div>
			<!-- Search Mega Dropdown -->
	    <div id="search-mega" class="mega-menu hidden-xs collapse" role="search">
	      <div class="container">
					<form class="navbar-form" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>
		      </form>
	      </div>
	    </div>
			<!-- Account Mega Dropdown -->
	    <div id="account-mega" class="mega-menu hidden-xs collapse">
	      <div class="container">
					<h2>This is the member account mega menu</h2>
	        <ul>
	          <li><a href="#">Edit Account</a></li>
	          <li><a href="#">Sign Out</a></li>
	        </ul>
	      </div>
	    </div>
			<!-- Shopping Cart Mega Dropdown -->
	    <div id="shopping-cart-mega" class="mega-menu hidden-xs collapse">
	      <div class="container">
					<h2>This is the Shopping Cart mega menu</h2>
	      </div>
	    </div>
	  </div>
	</div>
	

