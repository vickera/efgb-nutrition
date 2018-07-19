<body>
  <?php get_header(); ?>
  <br>
  <br>
  <div class="wrapper">
    <h1 class="text-center"><?php the_title(); ?></h1>
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
