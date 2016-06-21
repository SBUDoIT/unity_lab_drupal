
<section id="<?php print $sectionID ?>" class="<?php print $classes; ?>">
<div class="container">


<?php if($title): ?>
<div class="row">
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
<div class="row multi-columns-row">


<?php

foreach ($content['items'] as $item) {


?>


<div class="<?php print $column_classes ?>">
    <div class="classy-blurb blurb__item" data-match-height="<?php print $sectionID ?>-blurb">
          <?php if($item['icon']): ?>
          <div class="blurb__icon">
            <i class="<?php print $item['icon'] ?>"></i>
          </div>
          <?php endif; ?>
          <?php if($item['heading']): ?>
            <h3 class="blurb__title font-alt blurb-heading"><?php print $item['heading'] ?></h3>
          <?php endif; ?>

          <?php if($item['text']): ?>
            <div class="font-alt blurb-text">
              <?php print $item['text'] ?>
            </div>
          <?php endif; ?>

    </div>
   <hr class="featurette-divider" />
</div>



<?php
}
?>


</div>

<?php endif; ?>


<?php if($content['closing']) : ?>

<div class="row">

<div class="col-sm-12 text-center">

<div class="closing section-themeable section-closing"><?php print $content['closing'] ?></div>
</div>

</div>

<?php endif; ?>



 
</div>
</section>
