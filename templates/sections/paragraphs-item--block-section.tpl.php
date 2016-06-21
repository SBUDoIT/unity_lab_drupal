<section id="<?php print $css_id ?>" class="<?php print $css_classes; ?>">
<div class="container">

<?php if($title): ?>
<div class="row">
<div class="col-lg-12 text-center">
  <h2 class="section-heading section-themeable"><?php print $title ?></h2>
</div>
</div>

<?php endif; ?>


  <div class="row">
<div class="col-sm-12 col-lg-12">
<div class="section-themeable">
<?php print render($content['field_block_reference']) ?>

</div>
</div>
</div>




</div>
</section>
