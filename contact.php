<?php

	$sectionName ="Contact Us";
	$pageTitle = "Contact Us";
	$bodyCss = "contact page page-simple has-top-social-buttons";

?>

<?php include "_header.php"; ?>

<?php include "_social_buttons_2.php" ?>

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
					<div class="form-group-row">
						<div class="first-name"><input type="text" class="form-control" id="" placeholder="First"><small class="sr-only help-text">First Name</small></div>
						<div class="last-name"><input type="text" class="form-control" id="" placeholder="Last"><small class="sr-only help-text">Last Name</small></div>
					</div>
				</div>
				<!-- Email Address -->
				<div class="form-group">
					<div class="form-group-row">
						<div class="email">
							<label for="">Email address</label>
							<input type="email" class="form-control" id="" placeholder="Enter email">
						</div>
						<div class="phone">
							<label for="">Phone</label>
							<input type="tel" class="form-control" id="" placeholder="(optional)">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="">Notes/Comments</label>
					<textarea class="form-control" id="" placeholder="Type your message"></textarea>
				</div>
				<div class="form-group">

					<div class="checkbox">
						<input type="checkbox" id="signup-email">
						<label class="checkbox-inline" for="signup-email">
							 <span><i class="fa fa-check"></i></span> Sign up for email list <a href="#"><i class="glyphicon glyphicon-question-sign"></i></a>
						</label>
					</div>

				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Send Message</button>
				</div>
			</form>


		</section>

		<aside>

			<p><strong class="tel">Toll free: <?php echo $rohTollFree; ?></strong></p>

			<address>
				<?php echo $rohMailingAddress; ?><br>
			</address>


		</aside>

	</article>
</div>


<?php include "_footer.php"; ?>