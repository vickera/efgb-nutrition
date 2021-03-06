<body>
  <?php get_header(); ?>
  <div class="wrapper">
    <br><br>
    <h2>Recent Articles</h2>
    <hr>
    <br>
    <div class="posts-container row">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php echo get_template_part('templates/post-thumbnail'); ?>
      <?php endwhile; endif; ?>
    </div>
    <br><br>
    <?php pagination_bar(); ?>
  </div>
  <?php get_footer(); ?>
</body>
