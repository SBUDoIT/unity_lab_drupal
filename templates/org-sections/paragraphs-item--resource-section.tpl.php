


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
    <?php if(count($content['items']) > 0): ?>
      <div class="multi-columns-row row">


<?php

// Loop through the items and extract field values
foreach ($content['items'] as $item) {


?>


<div class="resources section-themeable <?php print $column_classes ?>">
<a href="<?php print $item['url'] ?>">


<?php if(isset($item['image'])): ?>
  <?php print render($item['image']) ?>

<?php elseif(isset($item['icon'])): ?>
  <i class="heading-icon centered section-themeable sbuicon-<?php print $item['icon'] ?>"></i>
<?php endif; ?>

<?php if($item['title'] && $item['url']): ?>
<h3 class="heading centered section-themeable"><?php print $item['title'] ?></h3>
<?php endif; ?>
  </a>


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




