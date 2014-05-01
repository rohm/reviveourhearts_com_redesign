<?php

$sectionName = "Events";
$pageTitle = "The Wonder of His Name Book + Bookmark";
$bodyCss = "events page page-full-width has-top-social-buttons page-secondary-nav";

?>

<?php include "_header.php"; ?>

<?php include "_social_buttons_2.php" ?>

<?php include "_navbar_events.php" ?>


<div class="container">
	
	<div class="jumbotron" style="padding-top: 80px; background: #333  url(https://deasb92jiz6fv.cloudfront.net/9b/7242b98c6fe6bda18bccdc61a4ea2b/lightstock-96118-family-bible-study-after-the-thanksgiving-meal--16.jpg); background-size: 100% auto; background-position: center center; background-repeat: no-repeat;">
		<h1>Big Huge Ad for Upcoming Event</h1>
		<div class="video-container">
			<div class="video">
				<video src="/media/connection.mp3" poster="<?php echo $rohDomain; ?>/static/uploads/program-images/rectangular/rs-wonder-immanuel_jpg_615x300_q85.jpg"  style="width: 100%; height: 100%;" id="player1" preload="none" >
					<object width="436" height="331" type="application/x-shockwave-flash" data="/build/flashmediaelement.swf">        
            <param name="movie" value="<?php echo $rohDomain; ?>/static/swf/player.swf" /> 
            <param name="flashvars" value="controls=true&amp;file=/media/connection.mp3" />         
            <!-- Image fall back for non-HTML5 browser with JavaScript turned off and no Flash player installed -->
            <img src="http://placehold.it/800x640/text=No+Video+Playback+Capabilities" alt="No video playback capabilities" 
                title="No video playback capabilities" />
	        </object>
				</video>
			</div>
		</div>
		<nav style="margin-top: 30px;">
		<a class="btn btn-primary btn-lg">Register Today</a> 
		</nav>
	</div>
	
	<article class="entry">
		<section class="main">
			
			
			<h2>Previous Events</h2>
			<div id="events-carousel">
      
	      <div class="cards">
    
	        <div class="card">
	          <div class="thumbnail">
	            <img src="http://placehold.it/500x300" alt="">
	              <div class="caption">
	                <h4>True Woman</h4>
	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
	                <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
	            </div>
	          </div>
	        </div>

	        <div class="card">
	          <div class="thumbnail">
	            <img src="http://placehold.it/500x300" alt="">
	              <div class="caption">
	                <h4>Revive</h4>
	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
	                <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
	            </div>
	          </div>
	        </div>

	        <div class="card">
	          <div class="thumbnail">
	            <img src="http://placehold.it/500x300" alt="">
	              <div class="caption">
	                <h4>Revive Tour</h4>
	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
	                <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
	            </div>
	          </div>
	        </div>

	        
					
    
	      </div><!-- End cards -->
  
	    </div><!-- End #events-carousel -->
		</section>
		
		
	</article>
</div>



<?php include "_footer.php"; ?>