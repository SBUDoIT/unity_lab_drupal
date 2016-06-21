


	<div class="<?php print $grid_classes ?>">
        <div class="<?php print $css_classes; ?>">

        <?php if($content['icon']): ?>
          <span class="simple-blurb-card--icon <?php print $content['icon'] ?>"></span>
        <?php endif; ?>

          <?php if(isset($content['field_image'])): ?>
          <div class="card--image centered"><?php print render($content['field_image']); ?></div>
          <?php endif; ?>
          <div class="card--headings">
            <?php if($content['heading']): ?>
            <h3 class="card-heading"><?php print $content['heading'] ?></h3>
            <?php endif; ?>
            <?php if($content['subheading']): ?>
            <h4 class="card-subheading"><?php print $content['subheading'] ?></h4>
            <?php endif; ?>
          </div>
          <div class="borderline"></div>
          <?php if($content['text']): ?>
          <div class="card-details">
            <?php print $content['text'] ?>
          </div>
          <?php endif; ?>
          <?php if(isset($content['field_links']) && is_array($content['field_links'])): ?>
          <div class="card--links">
            <?php print render($content['field_links']); ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
