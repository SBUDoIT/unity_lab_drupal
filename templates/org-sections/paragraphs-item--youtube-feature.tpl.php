<?php


  $alignment = field_get_items('paragraphs_item', $paragraphs_item, 'field_alignment');
  $alignment = empty($alignment[0]['value']) ? 'center' : $alignment[0]['value'];


   $heading = field_get_items('paragraphs_item', $paragraphs_item, 'field_heading');
   $heading = empty($heading[0]['value']) ? '' : $heading[0]['value'];

      $subheading = field_get_items('paragraphs_item', $paragraphs_item, 'field_subheading');
   $subheading = empty($subheading[0]['value']) ? '' : $subheading[0]['value'];

   $text = field_get_items('paragraphs_item', $paragraphs_item, 'field_text');
   $text = empty($text[0]['value']) ? '' : $text[0]['value'];



$media = field_get_items('paragraphs_item', $paragraphs_item, 'field_link');

$options = array('query' => $media[0]['query'], 'fragment' => $media[0]['fragment'], 'absolute' => $media[0]['absolute']);
$mediaURL = url($media[0]['url'], $options);





?>

<?php if($alignment == "center"): ?>
<div class="row">
<div class="col-sm-12">
<div class="video-wrapper">
    <!-- Copy & Pasted from YouTube -->
    <iframe src="<?php print $mediaURL ?>" frameborder="0" allowfullscreen></iframe>
    
</div>

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
<div class="video-wrapper">
    <!-- Copy & Pasted from YouTube -->
    <iframe src="<?php print $mediaURL ?>" frameborder="0" allowfullscreen></iframe>
    
</div>

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
<div class="video-wrapper">
    <!-- Copy & Pasted from YouTube -->
    <iframe src="<?php print $mediaURL ?>" frameborder="0" allowfullscreen></iframe>
    
</div>

</div>


</div>



<?php endif; ?>