<?php get_header(); ?>
<body>

	<div class="container">
    
		<div class="title">Goran Grče</div>
		<div class="heading">Design & Concept</div>
		
		<div class="note">
			About<br>Digital designer and art director creating UI/UX, digital content, and live experiences for major national and global brands. 
		</div>

		<div class="note">
			Contact<br><a href="mailto:grce.goran@gmail.com">grce.goran@gmail.com</a><br>0409 992 904 
		</div>

		<hr>
		<div class="heading">Work</div>

		<a href="_#" class="heading">All</a>
		<a href="_#" class="heading">Digital</a>
		<a href="_#" class="heading">Live</a>
		
		<div class="folio-items">
					<?php
					$args = array(
						'category_name'=>'visible',
					);


					$FP_Items = new WP_Query($args);

					if ( $FP_Items->have_posts() ) : while ( $FP_Items->have_posts() ) : $FP_Items->the_post();

						get_template_part( 'theme-parts/content', get_post_format() );
						

					endwhile; endif;
					?>
		</div>
	
	</div>


	</body>
</html>
<?php get_footer(); ?>
