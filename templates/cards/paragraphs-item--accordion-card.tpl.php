<?php if(!$grid_classes)
{ 
  $grid_classes ='col-sm-12 col-md-12 col-lg-12';
} ?>

<div class="<?php print $grid_classes ?>">
  <div class="accordion-card-container">
        
        <?php if($content['heading']): ?>
          <h2 class="accordion-card-container--heading"><?php print $content['heading'] ?></h2>
        <?php endif; ?>

        <?php if($content['subheading']): ?>
          <h3 class="accordion-card-container--subheading"><?php print $content['subheading'] ?></h3>
        <?php endif; ?>
        

        <?php if(isset($content['field_accordion_cards'])): ?>
          <div class="accordion-card-container--cards">
            <?php print render($content['field_accordion_cards']); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>

