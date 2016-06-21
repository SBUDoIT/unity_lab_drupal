
<div class="<?php print $grid_classes ?>">
  <div class="classic-blurb-card">

      <?php if($content['icon']): ?>
          <span class="classic-blurb-card--icon <?php print $content['icon'] ?>"></span>
        <?php endif; ?>



      <div class="classic-blurb-card--content">

        <?php if(isset($content['field_image'])): ?>
        <div class="card--image"><?php print render($content['field_image']); ?></div>
        <?php endif; ?>

        <?php if($content['heading']): ?>
          <h2 class="classic-blurb-card--heading"><?php print $content['heading'] ?></h2>
        <?php endif; ?>

        <?php if($content['subheading']): ?>
          <h3 class="classic-blurb-card--subheading "><?php print $content['subheading'] ?></h3>
        <?php endif; ?>


        <?php if($content['text']): ?>
          <div class="classic-blurb-card--text">
            <?php print $content['text'] ?>
          </div>
        <?php endif; ?>

        <div class="classic-blurb-card--cta">
          <?php if(isset($content['links']) && is_array($content['links'])): ?>
            <div class="card-links">
              <?php print render($content['field_links']); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
  </div>
</div>
