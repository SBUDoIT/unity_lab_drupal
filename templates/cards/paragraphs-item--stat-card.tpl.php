
	<div class="<?php print $grid_classes ?>">
        <div class="stat-card <?php print $css_classes; ?>">
        <?php if($content['icon']): ?>
        	<span class="stat-card--icon <?php print $content['icon'] ?>"></span>
        <?php endif; ?>

          <?php if(isset($content['image'])): ?>
          <div class="card-image centered"><?php print render($content['image']); ?></div>
          <?php endif; ?>
          <div class="card-headings">
            <?php if($content['count-to']): ?>           
            	<h3 class="stat-card--heading"><?php print $content['prefix'] ?><span class="count-to" data-countto="<?php print $content['count-to'] ?>"><?php print $content['count-to'] ?></span><?php print $content['postfix'] ?></h3>
            <?php endif; ?>
            <?php if($content['subheading']): ?>
            	<h4 class="stat-card--subheading"><?php print $content['subheading'] ?></h4>
            <?php endif; ?>
          </div>
          <div class="borderline"></div>
          <?php if($content['text']): ?>
          <div class="stat-card--details">
            <?php print $content['text'] ?>
          </div>
          <?php endif; ?>
          
        </div>
      </div>