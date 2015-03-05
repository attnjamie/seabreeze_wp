<?php
/*
Template Name: Classes
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
      <h4 class="subheader"><?php the_title(); ?></h4>
      </div>
    </div>
</section>
  <?php endwhile; // End the loop ?>
<div class="row">
  <div class="small-12 large-12 columns" role="main">

  <?php /* Start loop */ ?>
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>

      </div>
    </article>
  <?php endwhile; // End the loop ?>

  </div>
</div>
<div class="row">
  <div class="small-12 columns">
    <ul class="medium-block-grid-3">

  <?php
    $classes = array( 'post_type' => 'class' );
    $loop = new WP_Query( $classes );
    while ( $loop->have_posts() ) : $loop->the_post();
      $class_link = get_post_meta( get_the_ID(), 'class_link', true);
      $class_price = get_post_meta( get_the_ID(), 'class_price', true);

    ?>
      <li class="class-card">
        <div class="item-wrapper">
          <div class="img-wrapper">
            <a class="button expand add-to-cart" href="<?php echo esc_url( $class_link ); ?>">Book Now</a>
            <a href="<?php echo esc_url( $class_link ); ?>"><?php the_post_thumbnail( array( 100, 100 ) ); ?></a>
          </div>  
          <a href="#"><h3><?php the_title(); ?></h3></a>
          <h5>$ <?php echo $class_price; ?></h5>
          <?php the_content(); ?>
        </div> 
      </li> 
    <?php endwhile; ?>
    </ul>
  </div>
</div>
<?php get_footer(); ?>
