<a 
  href="<?php the_permalink(); ?>" 
  class="project-link" 
  style="
    background-image: url(<?php the_post_thumbnail_url(); ?>);
  "
> 
  <div class="project-title heading"><?php the_title(); ?></div>
</a>