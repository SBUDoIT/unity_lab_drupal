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

<?php foreach($content['items'] as $item) { ?>
<div class="<?php print $column_classes ?>">

    <div class="simple-blurb">
      <?php if(isset($item['image'])): ?>
      <div class="blurb-image"><?php print render($item['image']); ?></div>
      <?php endif; ?>

      <?php if($item['icon']): ?>
        <i style="display: block; font-size: 3em;" class="<?php print $item['icon'] ?>"></i><br />
      <?php endif; ?>

      <?php if($item['heading']): ?>
      <h3 class="simple-blurb-title red"><?php print $item['heading'] ?></h3>
      <?php endif; ?>

      <?php if($item['subheading']): ?>
      <h4 class="simple-blurb-subtitle red"><?php print $item['subheading'] ?></h4>
      <?php endif; ?>

      <?php if($item['text']): ?>
        <div class="simple-blurb-item">
        <?php print $item['text'] ?>
        </div>
      <?php endif; ?>

    </div>
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




