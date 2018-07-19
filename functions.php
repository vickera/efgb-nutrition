<?php

add_action('wp_enqueue_scripts', function(){
  // add any CSS we need
  wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css');
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('flexboxgrid', 'https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css');
  wp_enqueue_style('main', get_template_directory_uri().'/dist/main.css', [], 1.1);
  
  // add any JS we need
  wp_enqueue_script('main', get_template_directory_uri().'/dist/main.js', ['jquery'], 1.1, true);
});

//add our the menus to wordpress
register_nav_menus([
  'main-menu' => __( 'Main Menu' )
]);

//button shortcode
add_shortcode('button', function($a, $c){
  try {
  	$link = new SimpleXMLElement($c);
  	$link = !empty($link) ? $link['href'] : '#';
  	$text = strip_tags($c);

  	return '<a class="button" href="'.$link.'" '.$data.'>'.$text.'</a>';
  } catch (Exception $e) {
    return '';
  }
});

function pagination_bar() {
  global $wp_query;

  $total_pages = $wp_query->max_num_pages;

  if ($total_pages > 1){
    $current_page = max(1, get_query_var('paged'));
    
    echo '<div class="pagination">';
      echo paginate_links(array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => '/page/%#%',
        'current' => $current_page,
        'total' => $total_pages,
      ));
    echo '</div>';
  }
}
