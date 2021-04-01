<div class="card abbe-card-hover" style="width: 18rem;">

  <a class="text-reset text-decoration-none" href="<?php the_permalink(); ?>"><img class="card-img-top abbe-img" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="thumbnail">
    <div class="card-body text-center">
      <h3 class="title mb-1 "><?php the_title(); ?></h3>
      <div class="meta mb-1"><span class="date"><?php the_time('Y'); ?></span></div>
    </div>
  </a>
  <div class="d-flex justify-content-center mb-3"><?php the_tags('<span class="tag"><i class="fa fa-tag me-1"></i>', '</span><span class="tag"><i class="fa fa-tag me-1"></i>', '</span>'); ?></div>
</div>            
