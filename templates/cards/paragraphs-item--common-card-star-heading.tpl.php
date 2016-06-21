


	<div class="<?php print $grid_classes ?>">
        <div class="star-heading-card <?php print $css_classes; ?>">


          <?php if($content['heading']): ?>
          <div class="star-heading-card--heading-wrap">
              <h3 class="star-heading-card--heading">  <span class="<?php print $content['icon'] ?>"></span><?php print $content['heading'] ?></h3>
          </div>

          <div class="star-heading-card--heading-red-bar"></div>
          <div class="star-heading-card--red-triangle"></div>
          <?php endif; ?>


        <?php if($content['icon']): ?>

        <?php endif; ?>

          <?php if(isset($content['field_image'])): ?>
          <div class="star-heading-card--image"><?php print render($content['field_image']); ?></div>
          <?php endif; ?>
            <?php if($content['subheading']): ?>
            <h4 class="card-subheading"><?php print $content['subheading'] ?></h4>
            <?php endif; ?>
          </div>
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
