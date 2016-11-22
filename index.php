<?php $parentTitle = "Pokémon Generations"; include "inc/top.inc";?>
		
		
		
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/poke1.png" alt="poke">
   
    </div>

    <div class="item">
      <img src="images/poke2.png" alt="poke">
     
    </div>

    <div class="item">
      <img src="images/poke3.png" alt="poke">

    
  </div>
</div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<?php include "inc/nav.inc";?>

<div class="container">
		<article class="col-md-8">

			<h2>Overview</h2>
			
			<p>All of the licensed Pokémon properties overseen by The Pokémon Company are divided roughly by generation. These generations are roughly chronological divisions by release; when an official sequel in the main role-playing game series is released that features new Pokémon, characters, and gameplay concepts, that sequel is considered the start of a new generation of the franchise. The main games and their spin-offs, the anime, manga and trading card game are all updated with the new Pokémon properties each time a new generation begins. The franchise began its sixth generation with Pokémon X and Y, which were released worldwide on October 12, 2013.</p>

			<div class="cards">
			<div class="card" id="g1">
  				<div class="card-block">
    				<h3 class="card-title">Generations I-II</h3>
    				<h6 class="card-subtitle text-muted">The First Generations</h6>
  				</div>
  				<div class="card-block">
    				<p class="card-text">The first generation of games introduced the basic game concepts of capturing, training, battling and trading Pokémon with both computer and human players.</p>
    				<a class="card-link" href="gen_1-2.php">Read more ></a>
  				</div>
			</div>


			<div class="card" id="g2">
  				<div class="card-block">
    				<h3 class="card-title">Generations III-IV</h3>
    				<h6 class="card-subtitle text-muted">The New Age of Graphics</h6>
  				</div>
  				<div class="card-block">
    				<p class="card-text">Both generations introduced new innovations to graphics design, as well as new features and additional Pokemon.</p>
    				<a class="card-link" href="gen_3-4.php">Read more ></a>
  				</div>
			</div>

			

			<div class="card" id="g3">
  				<div class="card-block">
    				<h3 class="card-title">Generations V-VII</h3>
    				<h6 class="card-subtitle text-muted">Expansion and a New Era</h6>
  				</div>
  				<div class="card-block">
    				<p class="card-text">All three generations added additional Pokemon and took advantage of new technologies to expand the universe</p>
    				<a class="card-link" href="gen_5-7.php">Read more ></a>
  				</div>
			</div>


			
			<div class="card" id="g4">
  				<div class="card-block">
    				<h3 class="card-title">Colophon</h3>
    				<h6 class="card-subtitle text-muted">Who we are</h6>
  				</div>
  				<div class="card-block">
    				<p class="card-text">Meet the design teams behind the website</p>
    				<a class="card-link" href="colophon.php">Read more ></a>
  				</div>
			</div>

			</div>

		</article>

		<aside class="col-md-4">
		
			<h2>What is Pokémon?</h2>

			<img class="img-responsive" src="images/pokemon_logo.png" alt="logo">

			<p>Pokémon is a series of video games developed by Game Freak and Creatures Inc. and published by Nintendo as part of the Pokémon media franchise. First released in 1996 in Japan for the Game Boy, the main series of role-playing video games (RPGs) has continued on each generation of Nintendo's handhelds.</p>

			<p>Games are commonly released in pairs—each with slight variations—and then an enhanced remake of the games is released a few years after the original releases. While the main series consists of role-playing games, spinoffs encompass other genres, such as action role-playing, puzzle, and digital pet games. As of February 2016, more than 279 million units have been sold worldwide, more than 200 million of which from the main series, making it the second best-selling video game franchise, behind only Nintendo's own Mario franchise. The franchise's mascot is Pikachu.</p>

		</aside>

		<?php include "inc/footer.inc";?>

	</div><!--.container-->
	
	<?php include "inc/scripts.inc";?>
<!--	<script src="js/slider.min.js"></script>
	<script>
		jQuery(function($) {
			$('.slider').sss();
		});
	</script> 
	
	Not used anymore, but left commented for reference
	
	-->
	
	</body>

</html>
