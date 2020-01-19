

<?php

	$args = array(
		'category_name'=>'visible',
	);

	$postList = get_posts($args);

	$client = get_post_meta($post->ID, 'client', TRUE);
	$brief = get_post_meta($post->ID, 'brief', TRUE);
	$role = get_post_meta($post->ID, 'role', TRUE);
	$credits = get_post_meta($post->ID, 'credits', TRUE);

?>


  <div class="header-splash">
    
    <div class="splash-image" style="background-image:url(<?php the_post_thumbnail_url('full'); ?>);"> 
      <div class="proj-info client">
        <span class="label">Client</span><br>
        <span class="heading"><?php echo $client ?></span>
      </div>

      <div class="proj-info proj">
        <span class="label">Project</span><br>
        <span class="heading"><?php the_title(); ?></span>
      </div>
    </div>

  </div>

  <div class="main-col">

    <div class="creds">
      <p>
        <span class="label">Brief</span><br>
        <?php echo $brief ?>
      </p>
      
      <p>
        <span class="label">Role</span><br>
        <?php echo $role ?>
      </p>

      <p>
        <span class="label">Creds</span><br>
        <?php echo $credits ?>
      </p>
    </div>

    <?php the_content(); ?>

  </div>



</body>
</html>

<script src="<?php echo get_bloginfo('template_directory'); ?>/lightbox.js"></script>