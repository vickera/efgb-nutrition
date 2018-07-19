<?php
  $blocks = get_field('repeating_blocks');
  if(!empty($blocks)):
?>
<div class="repeating-blocks">
  <?php foreach($blocks as $b): ?>
    <div class="block">
      <div class="block-info">
        <div class="image-container">
          <img class="block-icon" src="<?php echo $b['icon']['url']; ?>">
        </div>        
        <div class="wrapper">
          <h2 class="block-title"><?php echo $b['title']; ?></h2>
        </div>
      </div>
      <div class="block-content">
        <div class="wrapper">
          <?php echo apply_filters('the_content', $b['content']); ?>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
<?php endif; ?>