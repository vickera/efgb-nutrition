<?php  
/* template name: Home */

$hero_image = get_field('hero_image')['url'];
$hero_content = get_field('hero_content');

$science_content = get_field('science_content');
$science_callouts = get_field('science_callouts');

$section_1_image = get_field('section_1_image');
$section_1_content = get_field('section_1_content');

$products = get_field('featured_product');

$section_2_image = get_field('section_2_image');
$section_2_content = get_field('section_2_content');

get_header(); 

?>

 
<div class="hero" style="background-image:url(<?php echo $hero_image; ?>)">
  <div class="hero-content">
    <div class="wrapper">
      <?php echo apply_filters('the_content', $hero_content); ?>
    </div>
  </div>
</div>

<div class="block-section block-section-callouts" id="science">
  <div class="wrapper text-center">
    <?php echo apply_filters('the_content', $science_content); ?>
    <div class="row">
      <?php
        foreach($science_callouts as $c){
          echo '<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xxs-12">';
            echo '<div class="col-content">';
              echo '<div class="image-container"><img src="'.$c['image']['url'].'"></div><br>';
              echo '<a href="'.$c['link']['url'].'" class="button">'.$c['link']['title'].'</a>';
            echo '</div>';
          echo '</div>';
        }
      ?>
    </div>
  </div>
</div>

<div class="block-section block-section-image-content image-left">
  <div class="image-container" style="background-image:url(<?php echo $section_1_image['url']; ?>)"></div>
  <div class="wrapper">
    <?php echo apply_filters('the_content', $section_1_content); ?>
  </div>
</div>

<div class="block-section" id="products">
  <div class="wrapper">
    <?php
      foreach($products as $p){
        echo '<div class="featured-product">';
          echo '<h1 class="title">'.$p->post_title.'</h1>';
          echo '<img class="product-image" src="'.get_the_post_thumbnail_url($p).'">';
          echo '<a href="'.get_the_permalink($p).'" class="button">Buy Now</a>';
        echo '</div>';
      }
    ?>
  </div>
</div>

<div class="block-section block-section-image-content image-right">
  <div class="image-container" style="background-image:url(<?php echo $section_2_image['url']; ?>)"></div>
  <div class="wrapper">
    <?php echo apply_filters('the_content', $section_2_content); ?>
  </div>
</div>

<div class="wrapper">
  <?php the_content(); ?>
</div>
<?php get_footer(); ?>
