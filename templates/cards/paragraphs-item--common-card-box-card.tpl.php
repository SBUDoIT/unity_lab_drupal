
<div class="<?php print $grid_classes ?>">


  <div class="box-card" data-match-height="box-card">

    <?php if(isset($content['field_image'])): ?>
    <div class="card--image" data-match-height="box-card--image"><?php print render($content['field_image']); ?></div>
    <?php endif; ?>




      <h3 class="box-card--heading">
        <?php if($content['icon']): ?>
            <span class="<?php print $content['icon'] ?>"></span>
          <?php endif; ?>
        <?php print $content['heading'] ?></h3>
      <h4 class="box-card--subheading"><?php print $content['subheading'] ?></h4>
      <div class="box-card--content" data-match-height="box-card--content">
            <?php print $content['text'] ?>
      </div>

      <div class="box-card--cta"><?php print render($content['field_links']); ?></div>
  </div>
</div>
