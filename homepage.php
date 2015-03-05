<?php
/*
Template Name: Home Page
*/
get_header(); ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php 
      $thumb_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );

      if (empty($thumb_url)) {
        $thumb_url = get_stylesheet_directory_uri() . '/assets/img/hero_placeholder.jpg';
      }
    ?>


<section class="parallax-hero" data-speed="17" style="background:url(<?php echo $thumb_url;?>) 100% 0 no-repeat fixed; min-height: 600px;">
    <div class="parallax-hero-text large-12 columns">
      <div class="large-4 large-offset-4 columns end">
      <h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
      <h4 class="subheader"><?php bloginfo('description'); ?></h4>
      </div>
    </div>
</section>
  <?php endwhile; // End the loop ?>

<div class="row centered-text">
  <div class="large-12 columns">
    <h2>CHOOSE YOUR NEXT ADVENTURE</h2>
    <h4 class="subheader">Take that sailing class you always told yourself you would take or plan an unforgettable night watching the fireworks from Lake Michigan. Whatever you choose, you're in good hands with our captain. </h4>
  </div>
</div>
<div class="row centered-text">
  <div class="medium-4 large-4 columns marketing-icon">
    <a href="<?php echo esc_url(bloginfo('url') . '/charters')?>">
      <div class="rounded">
        <i class="fa fa-anchor fa-5x"></i>
      </div>
      <h3>Charters</h3>
    </a>
    <p>Take a dip in the cool, refreshing waters of Lake Michigan with your friends and family! Weekday and weekend times available.</p>
    <a class="show-for-small-only" href="<?php echo esc_url(bloginfo('url') . '/classes')?>">
      Read More&rarr;
    </a>   
  </div>
  <div class="medium-4 large-4 columns marketing-icon">
    <a href="<?php echo esc_url(bloginfo('url') . '/classes')?>">
      <div class="rounded">
        <i class="fa fa-mortar-board fa-5x"></i>
      </div>
      <h3>Classes</h3>
      <br>
    </a>
    <p>Learning "hands on" is the best way to learn sailing. Steering, trimming the sails, feeling the wind...that's what sailing is all about!</p>
    <a class="show-for-small-only" href="<?php echo esc_url(bloginfo('url') . '/classes')?>">
      Read More&rarr;
    </a> 
  </div>
  <div class="medium-4 large-4 columns marketing-icon">
    <a href="<?php echo esc_url(bloginfo('url') . '/sailing-vacation')?>">
      <div class="rounded">
        <i class="fa fa-ship fa-5x"></i>
      </div>
      <h3>Sailing Vacation</h3>
    </a>
    <p>Escape to a tropical destination and learn to sail at the same time. Enjoy the warm waters of the Virgin Islands!</p>
    <a class="show-for-small-only" href="<?php echo esc_url(bloginfo('url') . '/classes')?>">
      Read More&rarr;
    </a>  
  </div>
</div>
<div class="row centered-text">
  <div class="large-12 columns">
  <hr>
    <h2>WHAT PEOPLE ARE SAYING</h2>
  </div>
</div>
<div class="row">
    <div class="testimonial-wrap">
      <div class="small-1 large-1 columns testimonial">
        <div class="quote-marks">&ldquo;</div>
      </div>
      <div class="small-11 large-11 columns testimonial">
        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices, elit sed faucibus pharetra, diam mauris bibendum orci, sit amet ullamcorper purus dui sit amet augue. Donec aliquet diam ut neque mattis, eu tristique sem rutrum.
        <cite>Mr John</cite></blockquote>
      </div>
    </div>
    <div class="testimonial-wrap">
      <div class="small-10 large-10 large-offset-1 small-offset-1 columns testimonial end">
        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices, elit sed faucibus pharetra, diam mauris bibendum orci, sit amet ullamcorper purus dui sit amet augue. Donec aliquet diam ut neque mattis, eu tristique sem rutrum.
        <cite>Mr John</cite></blockquote>
      </div>
    </div>
    <div class="testimonial-wrap">
      <div class="small-9 large-9 large-offset-1 small-offset-1 columns testimonial">
        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices, elit sed faucibus pharetra, diam mauris bibendum orci, sit amet ullamcorper purus dui sit amet augue. Donec aliquet diam ut neque mattis, eu tristique sem rutrum.
        <cite>Mr John</cite></blockquote>      
      </div>
      <div class="small-2 large-2 columns testimonial">
        <div class="quote-marks">&rdquo;</div>
      </div>
    </div>
</div>
<div class="row centered-text">
  <div class="large-12 columns">
  <hr>
    <h2>IN OTHER NEWS...</h2>
  </div>
</div>
<div class="row">
  <div class="large-12 columns">
   <?php
    if ( get_query_var('paged') ) {
      $paged = get_query_var('paged');
    } 
    elseif ( get_query_var('page') ) {
      $paged = get_query_var('page');
    }
    else {
      $paged = 1;
    }
    $posts_per_page = 3;
    query_posts( array(
      'post_type' => 'post',
      'posts_per_page' => $posts_per_page,
      'paged' => $paged
      )
    );
    global $wp_query;
    if ( have_posts() ) : $count = 0; while ( have_posts() ) : the_post(); $count++;
    ?>
    <!-- Individual Post Format -->
      <article>
        <!-- Title and Meta -->  
        <h3>
          <a href="<?php echo get_permalink(); ?>">
            <?php the_title() ?>
          </a>
        </h3>
        <span class="metadata">
          <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> by 
          <?php echo the_author_posts_link(); ?>
          <?php echo $tag_str ?>
        </span>
        <p>
          <?php the_excerpt() ?>
        </p>
        <p>
          <a href="<?php echo get_permalink(); ?>">Continue Reading &raquo;</a>
        </p>
      </article>
      <hr> 
     <?php endwhile; else: ?>
      <p><?php _e('No news is good news!') ?></p>
           
    <?php endif; ?>
    <footer class="pagination">
      <div class="small-6 columns">
        <strong>Showing 
          <?php
            echo $count;
          ?>
        of 
          <?php
            echo $wp_query->found_posts;
          ?>
        </strong>
      </div>
      <div class="small-6 columns">
        <ul class="inline-list right">
        <li>
          <?php next_posts_link( __( '&laquo; Previous') ); ?>
        </li>
        <?php if($paged !== 1): ?>
          <li>
            <?php previous_posts_link( __( 'Next &raquo;') ); ?>
          </li>
        <?php endif; ?>
        </ul>
      </div>
    </footer>
     
    <?php wp_reset_query(); ?>
  </div>
</div>

<?php get_footer(); ?>
