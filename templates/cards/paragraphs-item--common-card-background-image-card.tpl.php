
  <div class="<?php print $grid_classes ?>">
        <div class="<?php print $css_classes; ?> match-height" style="background-image: url(<?php print $content['image']['uri']; ?>);">

        <?php if($content['icon']): ?>
          <span class="simple-blurb-card--icon <?php print $content['icon'] ?>"></span>
        <?php endif; ?>

          <?php if(isset($content['image'])): ?>
          <div class="card-image centered"><?php print render($content['image']); ?></div>
          <?php endif; ?>
          <div class="card-headings">
            <?php if($content['heading']): ?>
            <h3 class="card-heading"><?php print $content['heading'] ?></h3>
            <?php endif; ?>
            <?php if($content['subheading']): ?>
            <h4 class="card-subheading small"><?php print $content['subheading'] ?></h4>
            <?php endif; ?>
          </div>
          <div class="borderline"></div>
          <?php if($content['text']): ?>
          <div class="card-details">
            <?php print $content['text'] ?>
          </div>
          <?php endif; ?>
          <?php if(isset($content['links']) && is_array($content['links'])): ?>
          <div class="card-links">

            <?php //foreach($content['links'] as $link) { print l($link['text'], $link['url'], $link['options']); } ?>
          </div>
          <?php endif; ?>
        </div>
      </div>