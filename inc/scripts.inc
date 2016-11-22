<script src="js/jquery-1.12.3.min.js"></script>
	<script src="js/current_page_highlighter.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/jstiles/jstiles.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/jquery-1.12.3.min.js"></script>
	<script src="js/slider.min.js"></script>
	<script>
		jQuery(function($) {
			$('.slider').sss();
		});
	</script>
	<script>
  $(document).ready(function() {  
  		 $("#myCarousel").swiperight(function() {  
    		  $(this).carousel('prev');  
	    		});  
		   $("#myCarousel").swipeleft(function() {  
		      $(this).carousel('next');  
	   });  
	});  
</script>

<script>
		$(document).on('tl.tilecontent.appended', function(e, data) {
			console.log('Tiles appended on: ' + data);
		});
		$(document).on('tl.template.built', function(e, data) {
			console.log('Templates built on: ' + data);
		});
	</script>
	<script src="scripts/jquery-1.11.2.min.js"></script>
	<script src="resources/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
	<script src="scripts/jstiles/jstiles.js"></script>
	<script src="scripts/jquery.easing.1.3.js"></script>
	<script src="scripts/scripts.js"></script>
	<script>
		$(document).on('tl.tilecontent.appended', function(e, data) {
			console.log('Tiles appended on: ' + data);
		});
		$(document).on('tl.template.built', function(e, data) {
			console.log('Templates built on: ' + data);
		});
	</script>