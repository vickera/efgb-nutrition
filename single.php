<body>
  <?php get_header(); ?>
  <div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="hero-content">
      <div class="wrapper">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
  
  <div class="wrapper wrapper-small">
    <br><br>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="content-editor"><?php the_content(); ?></div>
      <?php endwhile; endif; ?>
    <br><br>
    <?php pagination_bar(); ?>
  </div>
  <?php get_footer(); ?>
</body>
