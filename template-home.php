<?php  
/* template name: Home */

$hero_image = get_field('hero_image')['url'];
$hero_content = get_field('hero_content');

get_header(); 

?>

 
<div class="hero" style="background-image:url(<?php echo $hero_image; ?>)">
  <div class="hero-content">
    <?php echo apply_filters('the_content', $hero_content); ?>
  </div>
</div>

<div class="wrapper">
  <?php the_content(); ?>
</div>
<?php get_footer(); ?>
