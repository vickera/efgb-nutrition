<!DOCTYPE html>
<html <?php language_attributes(); ?>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no"><!-- Removes auto phone number detection on iOS -->
    <title><?php wp_title(); ?></title>
    <?php 
      wp_head();
      the_post();
    ?>
  </head>
  <header>
    <div class='wrapper'>
      <a href="<?php echo home_url(); ?>">
        <img class="site-logo" title="<?php echo bloginfo()['name']; ?>" src="<?php echo get_template_directory_uri(); ?>/images/logo-efgbnutrition.png">
      </a>
      <div class="utility-bar">
        <button class="main-menu-open"><span class='fa fa-bars'></span><span class="sr-only">MENU</span></button>
        <a href="/cart"><button class="cart">
          <span class='fa fa-shopping-cart'></span><span class="sr-only">CART</span>
        </button></a>
        <?php echo do_shortcode('[gtranslate]'); ?>
      </div>
      
      <!--<div class="search-container">
        <?php get_search_form(); ?>
      </div>-->

      <div class="main-menu-container">
        <div class="main-menu-close">&times;</div>
        <h1>MENU</h1>
        <div class="search">
          <form>
            <input type="text" name="s" placeholder="Search...">
            <input type="submit" value="S">
            <span class="fa fa-search"></span>
          </form>
        </div>
        <?php wp_nav_menu(['menu' => 'main', 'menu_class' => 'main-menu']); ?>
      </div>
    </div>
  </header>