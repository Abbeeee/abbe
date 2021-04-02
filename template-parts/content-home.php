<div class="card abbe-card-hover" style="width: 18rem;">

  <a class="text-reset text-decoration-none" href="<?php the_permalink(); ?>"><img class="card-img-top abbe-img" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="thumbnail">
    <div class="card-body text-center">
      <h3 class="title mb-1 "><?php the_title(); ?></h3>
      <div class="meta mb-1"><span class="date"><?php the_time('Y'); ?></span></div>
    </div>
    <div class="d-flex justify-content-center mb-3">
      <?php 

        $terms = get_the_terms($post->ID , 'type');

        foreach ($terms as $term) {
          echo '<span class="tag"><span class="dashicons dashicons-portfolio me-1"></span>';
          echo $term->name;
          echo '</span>';
        }

      ?>
    </div>
  </a>
  
</div>            
