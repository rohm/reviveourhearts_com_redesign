<?php

$sectionName = "Store";
$programName = "Books";
$pageTitle = "The Wonder of His Name Book + Bookmark";
$bodyCss = "store books page page-full-width page-product-detail page-product-book has-top-social-buttons";

?>

<?php include "_header.php"; ?>
<div class="top-social-buttons visible-xs">
	<button class="btn btn-twitter"><i class="fa fa-twitter"></i> Tweet</button><button class="btn btn-facebook"><i class="fa fa-facebook"></i> Like</button><button class="btn btn-pinterest"><i class="fa fa-pinterest"></i> Pin</button><button class="btn btn-google-plus"><i class="fa fa-google-plus"></i> +</button>
</div>
<div class="jumbotron">
	<div class="container">
		<h1><?php echo $programName; ?></h1>
	</div>
</div>
<div class="container">
	<ol class="breadcrumb">
		<li><a href="/">Home</a></li>
		<li><a href="/radio/"><?php echo $sectionName; ?></a></li>
		<li><a href="/revive-our-hearts/"><?php echo $programName; ?></a></li>
		<li class="active"><?php echo $pageTitle; ?></li>
	</ol>

	<article class="entry">

		<header class="entry-header" role="banner">
			<h1><?php echo $pageTitle; ?></h1>
			<p class="meta">
				A <span class=""><a href="">book</a></span> by 
				<span class="author"><a href="#">Nancy Leigh DeMoss</a></span>
				about 
				<span class=""><a href="">The Son</a></span> 
				<a class="pull-right" href="#comments">4 Comments <i class="glyphicon glyphicon-comment"></i></a>
			</p>
		</header>

		<section class="main" role="main">
			<div class="product-photo">
				<img class="img-responsive"  src="http://placehold.it/1400x600" alt="">
			</div>
			<div class="actionbar">
				<div class="buy">
					<div class="well well-bg">
						<form class="navbar-form" role="buy">
			        <div class="form-group">
			          <input type="text" class="form-control form-control-lg quantity" placeholder="Quantity">
			        </div>
			        <button type="submit" class="btn btn-primary btn-lg">Buy</button>
			      </form>
					</div>
				</div>
				<div class="social-buttons-inner">
					<div class="well well-bg">
						<div class="button-group">
							<button class="btn btn-twitter"><i class="fa fa-twitter"></i> Tweet</button>
							<button class="btn btn-facebook"><i class="fa fa-facebook"></i> Like</button>
							<button class="btn btn-pinterest"><i class="fa fa-pinterest"></i> Pin</button>
							<button class="btn btn-google-plus"><i class="fa fa-google-plus"></i> +</button>
						</div>
					</div>
				</div>
			</div>
			<section class="main-content">
				
				<div class="product-info">
					<h3>About the Book</h3>
					<p><em>The Wonder of His Name </em>devotional includes meditations from Nancy Leigh DeMoss on thirty-two of the names of Jesus. Each day’s reflection, along with the beautiful calligraphy of Timothy Botts, is designed to help you contemplate new aspects of our Savior. As you delve deeper into the character of Jesus with Nancy for a month, you’ll be strengthened in in your faith, comforted by His promises, and ultimately transformed to be more like Him. Also includes a <em>The Wonder of His Name</em> bookmark. (size 9"x6", softcover, 96 pages)</p>
					<ul>
						<li>Order 1-4 copies at $14 each</li>
						<li>Order 5 or more copies at $9.80 each (30% discount)</li>
					</ul>
				</div>
			
				<div class="aside">
					<h3>Additional Info</h3>
					<ul>
						<li class="sku">SKU: 85140</li>
						<li class="type">Paperback</li>
						<li class="publish-date">Published: Jan 14, 2014</li>
					</ul>
				</div>
				
				<div class="testimonials">
					<blockquote>
						<p class="product-review-quote">Applicake apple pie danish sweet roll halvah tart jelly apple pie brownie. Apple pie toffee macaroon lemon drops. Cookie candy sugar plum cotton candy cookie macaroon cookie dragée.</p>
						<p class="product-review-byline">
							<span class="byline-prefix">&mdash;</span>
							<a class="byline-name" href="">Jane Doe</a> <span class="byline-title">Author, <em>Book Title</em> and <em>Another Book Title</em></span></p>
					</blockquote>
					<blockquote>
						<p class="product-review-quote">Applicake apple pie danish sweet roll halvah tart jelly apple pie brownie. Apple pie toffee macaroon lemon drops. Cookie candy sugar plum cotton candy cookie macaroon cookie dragée.</p>
						<p class="product-review-byline">
							<span class="byline-prefix">&mdash;</span>
							<a class="byline-name" href="">Jane Doe</a> <span class="byline-title">Author, <em>Book Title</em> and <em>Another Book Title</em></span></p>
					</blockquote>
					
				</div>
				
				<div class="related-products">
					<h3>Related Products</h3>
					<div class="pods">
						<div class="pod">
							<div class="well well-lg">
								<h4>Book Title</h4>
							</div>
						</div>
						<div class="pod">
							<div class="well well-lg">
								<h4>CD Title</h4>
							</div>
						</div>
						<div class="pod">
							<div class="well well-lg">
								<h4>Series Title</h4>
							</div>
						</div>
					</div>
				</section>
			</section>
		</section>
		
	</article>

</div>


<?php include "_footer.php"; ?>