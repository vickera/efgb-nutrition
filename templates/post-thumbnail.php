<div class="post-thumbnail col col-lg-4 col-md-4 col-sm-6 col-xs-12">
  <a href="<?php echo the_permalink(); ?>">
    <div class="image-container" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
    <div class="content">
      <div class="title"><?php echo the_title(); ?></div>
      <div class="excerpt"><?php echo strip_tags(substr($post->post_content, 0, 150)); ?>...</div>
      <span class="button">Read More</span>
    </div>
  </a>
</div>