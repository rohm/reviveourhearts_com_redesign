<?php
	//	Global Footer
?>

		<footer id="global-footer">
			<div class="container">
				<div id="footer-main">
					<section class="featured-book">
						<h3>Featured Book</h3>
						<div class="media">
								<a class="pull-left" href="#"><img src="http://placehold.it/100x130" alt="Featured Book Title" class="img-rounded img-responsive" /></a>
								<div class="media-body">
									<h4><a href="#">The Wonder of His Name Bookmark pk/25</a></h4>
									<p>Featuring the beautiful calligraphy of Timothy Botts, this bookmark encourages ...</p>
								</div>
						</div>
					</section>
					<section class="fun-stuff">
			      <h3 class="title-wallpapers">Wallpapers</h3>
						<div class="thumbnails">
							<a href="#">
								<img src="http://placehold.it/140x140" class="img-responsive img-rounded" />
							</a>
						
							<a href="#">
								<img src="http://placehold.it/140x140" class="img-responsive img-rounded" />
							</a>
						
							<a href="#">
								<img src="http://placehold.it/140x140" class="img-responsive img-rounded" />
							</a>
						</div>
					
						<h3 class="title-challenges">Challenges</h3>
						<div class="thumbnails">
							<a href="#">
								<img src="http://placehold.it/140x140" class="img-responsive img-rounded" />
							</a>

							<a href="#">
								<img src="http://placehold.it/140x140" class="img-responsive img-rounded" />
							</a>

							<a href="#">
								<img src="http://placehold.it/140x140" class="img-responsive img-rounded" />
							</a>

						</div>
					</section>
					<section class="contact-info">
						<h3>Stay in Touch</h3>
						<div class="well email-sign-up">
			        <form role="form">

								<form class="form-inline" role="form">
		              <label>Sign up for email list</label>
									<label class="sr-only">Your Email</label>
		              <input type="text" class="form-control" placeholder="Enter email" />
									<button type="submit" class="btn btn-default">Sign Up</button>
								</form>

							</form>
						</div>
						<address>
							<?php echo $rohMailingAddress; ?><br>
							<strong class="tel">Toll free: <?php echo $rohTollFree; ?></strong>
						</address>
					</section>
				</div>
				
				<div id="footer-social">

					<p class="credits pull-left-sm"><a href="/"><em><?php echo $siteName ?></em></a> is a ministry of <a href="http://www.lifeaction.org">Life&nbsp;Action&nbsp;Ministries</a>.</p>
				
					<nav class="social-nav pull-right-sm">
						<a href="#" class="rss badge"><i class="fa fa-rss"></i></a>
						<a href="#" class="google-plus badge"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="vimeo badge"><i class="fa fa-vimeo-square"></i></a>
						<a href="#" class="facebook badge"><i class="fa fa-facebook"></i></a>
						<a href="http://twitter.com/reviveourhearts" class="twitter badge"><i class="fa fa-twitter"></i></a>
					</nav>
					
				</div>

				<div id="footer-legal">

					<nav>

								<a href="/about-us">About Us</a>
								<a href="/privacy">Privacy</a>
								<a href="/permissions">Permissions</a>
								<a href="/faqs">FAQs</a>
								<a href="/site-map">Site Map</a>
								<a href="/contact/">Contact Us</a>

					</nav>
					
					<div class="copyright">
						<p>Copyright &copy; <em><?php echo $siteName ?></em> 2001-<?php echo date("Y") ?></p>
					</div>

				</div>
			</div>
		<footer>
		<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
		  <div class="container">
		    <p class="visible-xs">xs</p>
				<p class="visible-sm">sm</p>
				<p class="visible-md">md</p>
				<p class="visible-lg">lg</p>
		  </div>
		</nav>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script src="/js/mediaelement-and-player.min.js"></script>
		<link rel="stylesheet" href="/css/mediaelementplayer.min.css" />
		<script>
			// jQuery method
			$('video').mediaelementplayer();
			</script>
		
			<script>
			// normal JavaScript 
			var player = new MediaElementPlayer('#player');

			jQuery(function($) {
				$('.navbar .dropdown').hover(function() {
				$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
				}, function() {
				$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
				});
				$('.navbar .dropdown > a').click(function(){
					location.href = this.href;
				});
			});
		</script>
  </body>
</html>