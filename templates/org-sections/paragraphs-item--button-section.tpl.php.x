<section id="<?php print $sectionID ?>" class="<?php print $section_classes; ?>">
  <div class="container">
    <?php if($title): ?>
    <div class="row section-header">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading section-themeable"><?php print $title ?></h2>
      </div>
    </div>
    <?php endif; ?>
    <?php if($content['introduction']): ?>
    <div class="row">
      <div class="col-sm-12 col-lg-12 text-center">
        <div class="introduction section-introduction section-themeable">
          <?php print $content['introduction'] ?>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <?php if(count($content['links']) > 0): ?>
    <div class="row multi-columns-row">
      <?php foreach($content['links'] as $link) { ?>
      <div class="<?php print $column_classes ?>">


        <?php print l($link['text'], $link['url'], array('attributes' => array('class' => 'simple-btn'))); ?>



      </div>




     <?php
      }
      ?>
    </div>
    <?php endif; ?>
    <?php if($content['closing']) : ?>
    <div class="row section-footer">
      <div class="col-sm-12 text-center">
        <div class="closing section-closing section-themeable"><?php print $content['closing'] ?></div>
      </div>
    </div>
    <?php endif; ?>
    
  </div>
</section>

