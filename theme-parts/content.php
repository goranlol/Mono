<a 
  href="<?php the_permalink(); ?>" 
  class="project-link"

> 
  <div class="project-title heading"><?php the_title(); ?></div>
  <span class="project-meta"><span class="label">Role:</span> <?php echo get_post_meta(get_the_ID(),'role', TRUE);?></span><br>
  <span class="project-meta"><span class="label">Brief:</span> <?php echo get_post_meta(get_the_ID(),'brief', TRUE);?></span>
</a> 
<div class="project-thumbnail"   style="background-image:url(<?php echo get_the_post_thumbnail_url()?>);"></div>