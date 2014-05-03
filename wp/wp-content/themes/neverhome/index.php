<?php
get_header(); ?>

  <div class="container">
    <section id="about">
      <h2>We are Never Home, a global boutique creating original sound for your stories. An intimate outfit of key tastemakers bringing your visual to life through sound.</h2>
    </section>
  </div>

  <div class="container">
    <section id="portfolio">
      <h3>Portfolio</h3>


      <?php
      $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 16);
      $loop = new WP_Query($args);
      while ($loop->have_posts()) : $loop->the_post();
      ?>
      
      <div class="work">
        <a href="<?php echo types_render_field('video-url', array('raw' => 'true')); ?>" class="video-image">
          <?php 
          if ( has_post_thumbnail() ) {
            the_post_thumbnail(array(480, 270));
          }
          ?>
        </a>

        <h4><?php the_title(); ?></h4>
        <p><?php echo get_the_excerpt(); ?></p>
      </div>

      <?php
      endwhile;
      ?>
    </section>
  </div>

<?php
get_footer(); ?>