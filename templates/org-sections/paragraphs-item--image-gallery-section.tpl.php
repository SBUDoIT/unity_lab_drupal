<section id="<?php print $sectionID ?>" class="image-gallery-section <?php print $section_classes; ?>">
<div class="container">


<?php if($section_title): ?>
<div class="row">
<div class="col-lg-12 text-center">
  <h2 class="section-heading section-themeable"><?php print $section_title ?></h2>
</div>
</div>

<?php endif; ?>

<?php if($introduction): ?>
  <div class="row">
<div class="col-sm-12 col-lg-12 text-center">
<div class="introduction section-introduction section-themeable">
  <?php print $introduction ?>
</div>
</div>
</div>
<?php endif; ?>


<div class="row multi-columns-row">


<?php foreach($content['items'] as $item) { ?>

<div class="<?php print $column_classes ?>">
          <a class="nivo-lightbox" href="<?php print $item['image']['url'] ?>" data-lightbox-gallery="gallery1" title="<?php print $item['heading'] ?>"><?php print render($item['image']['renderable']) ?></a>

</div>



<?php } ?>


</div>




<?php if($closing) : ?>

<div class="row">

<div class="col-sm-12 text-center">

<div class="closing section-themeable section-closing"><?php print $closing ?></div>
</div>

</div>

<?php endif; ?>



 
</div>
</section>
