<?php


  $alignment = field_get_items('paragraphs_item', $paragraphs_item, 'field_alignment');
  $alignment = empty($alignment[0]['value']) ? 'center' : $alignment[0]['value'];


   $heading = field_get_items('paragraphs_item', $paragraphs_item, 'field_heading');
   $heading = empty($heading[0]['value']) ? '' : $heading[0]['value'];

      $subheading = field_get_items('paragraphs_item', $paragraphs_item, 'field_subheading');
   $subheading = empty($subheading[0]['value']) ? '' : $subheading[0]['value'];

   $text = field_get_items('paragraphs_item', $paragraphs_item, 'field_text');
   $text = empty($text[0]['value']) ? '' : $text[0]['value'];


   $image = field_get_items('paragraphs_item', $paragraphs_item, 'field_image');
   $image_renderable = field_view_value('paragraphs_item', $paragraphs_item, 'field_image', $image[0]);


?>

<?php if($alignment == "center"): ?>
<div class="row">
<div class="col-sm-12 center-text">
<?php print render($image_renderable) ?>
</div>
</div>

<div class="row">
<div class="col-sm-12 center-text">


<?php if($heading): ?>
<h3 class="media-heading section-themeable"><?php print $heading ?></h3>
<?php endif; ?>

<?php if($subheading): ?>
<h4 class="media-heading section-themeable"><?php print $subheading ?></h4>
<?php endif; ?>

<?php if($text): ?>
<div class="media-text section-themeable">
<?php print $text ?>
</div>
<?php endif; ?>

</div>
</div>


<?php endif; ?>


<?php if($alignment == "left"): ?>
<div class="row">
<div class="col-sm-12 col-md-6">

<?php print render($image_renderable) ?>

</div>

<div class="col-sm-12 col-md-6">


<?php if($heading): ?>
<h3 class="media-heading section-themeable"><?php print $heading ?></h3>
<?php endif; ?>

<?php if($subheading): ?>
<h4 class="media-heading section-themeable"><?php print $subheading ?></h4>
<?php endif; ?>

<?php if($text): ?>
<div class="media-text section-themeable">
<?php print $text ?>
</div>
<?php endif; ?>

</div>

</div>



<?php endif; ?>



<?php if($alignment == "right"): ?>
<div class="row">

<div class="col-sm-12 col-md-6">


<?php if($heading): ?>
<h3 class="media-heading section-themeable"><?php print $heading ?></h3>
<?php endif; ?>

<?php if($subheading): ?>
<h4 class="media-heading section-themeable"><?php print $subheading ?></h4>
<?php endif; ?>

<?php if($text): ?>
<div class="media-text section-themeable">
<?php print $text ?>
</div>
<?php endif; ?>

</div>


<div class="col-sm-12 col-md-6">
<?php print render($image_renderable) ?>

</div>


</div>



<?php endif; ?>