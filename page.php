<?php  
/* template name: Home */

$hero_image = get_field('hero_image')['url'];
$hero_content = get_field('hero_content');

get_header(); 

?>
<div class="block-section inner-hero" style="background-image:url(<?php echo $hero_image; ?>)">
  <div class="wrapper text-center">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<?php if($post->post_content !== ''): ?>
  <div class="block-section">
    <div class="wrapper">
      <div class="content-editor">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
<?php endif; 
  echo get_template_part('templates/repeating-blocks');
?>
<?php get_footer(); ?>
