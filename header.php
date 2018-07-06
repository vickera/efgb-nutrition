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
      <img class="site-logo" title="<?php echo bloginfo()['name']; ?>" src="<?php echo get_template_directory_uri(); ?>/images/logo-efgbnutrition.png">
      <div class="utility-bar">
        <button class="main-menu-open"><span class='fa fa-bars'></span><span class="sr-only">MENU</span></button>
        <button class="cart"><span class='fa fa-shopping-cart'></span><span class="sr-only">CART</span></button>
      </div>
      
      <!--<div class="search-container">
        <?php get_search_form(); ?>
      </div>-->

      <div class="main-menu-container">
        <div class="menu-item main-menu-close">&times;</div>
        <div class="menu-item search">
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