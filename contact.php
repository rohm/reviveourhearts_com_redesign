<?php

	$sectionName ="Contact Us";
	$pageTitle = "Contact Us";
	$bodyCss = "contact page page-simple";

?>

<?php include "_header.php"; ?>
<div class="social-buttons visible-xs">
	<button class="btn btn-twitter"><i class="fa fa-twitter"></i> Tweet</button><button class="btn btn-facebook"><i class="fa fa-facebook"></i> Like</button><button class="btn btn-pinterest"><i class="fa fa-pinterest"></i> Pin</button><button class="btn btn-google-plus"><i class="fa fa-google-plus"></i> +</button>
</div>
<div class="container">
	<ol class="breadcrumb">
		<li><a href="/">Home</a></li>
		<li class="active"><?php echo $pageTitle; ?></li>
	</ol>
	
	<article class="entry">
		
		<header class="entry-header" role="banner">
			<h1><?php echo $pageTitle; ?></h1>
		</header>

		<section class="main" role="main">

			<p> Feel free to send us any feedback or questions using the form below.
					But first, we encourage you to see if your question is answered in our
					<a href="/resource-library/frequently-asked-questions/"> frequently asked questions</a>.
					If you are requesting Nancy to speak at your event, please fill out <a href="http://www.reviveourhearts.com/about-us/nancy-leigh-demoss/speaking/">this form</a>.
			</p>
			<form role="form">
				<!-- Your Name -->
				<div class="form-group">
					<label for="">Your Name</label>
					<div class="row">
						<div class="col-xs-6"><input type="text" class="form-control" id="" placeholder="First"><small class="sr-only help-text">First Name</small></div>
						<div class="col-xs-6"><input type="text" class="form-control" id="" placeholder="Last"><small class="sr-only help-text">Last Name</small></div>
					</div>
				</div>
				<!-- Email Address -->
				<div class="form-group">
					<label for="">Email address</label>
					<input type="email" class="form-control" id="" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="">Phone</label>
					<input type="tel" class="form-control" id="" placeholder="(optional)">
				</div>
				<div class="form-group">
					<label for="">Notes/Comments</label>
					<textarea class="form-control" id="" placeholder="Type your message"></textarea>
				</div>
				<div class="form-group">

					<div class="checkbox">
						<label class="checkbox-inline">
							<input type="checkbox"> Sign up for email list <a href="#"><i class="glyphicon glyphicon-question-sign"></i></a>
						</label>
					</div>

				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Send Message</button>
				</div>
			</form>


		</section>

		<aside>
			<div class="well">
				<p><strong class="tel">Toll free: <?php echo $rohTollFree; ?></strong></p>
				<p>
					<address>
						<?php echo $rohMailingAddress; ?><br>
					</address>
				</p>
			</div>
		</aside>

	</article>
</div>


<?php include "_footer.php"; ?>