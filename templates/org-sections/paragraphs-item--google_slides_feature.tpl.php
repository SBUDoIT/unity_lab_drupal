<?php


  $alignment = field_get_items('paragraphs_item', $paragraphs_item, 'field_alignment');
  $alignment = empty($alignment[0]['value']) ? 'center' : $alignment[0]['value'];


   $heading = field_get_items('paragraphs_item', $paragraphs_item, 'field_heading');
   $heading = empty($heading[0]['value']) ? '' : $heading[0]['value'];

      $subheading = field_get_items('paragraphs_item', $paragraphs_item, 'field_subheading');
   $subheading = empty($subheading[0]['value']) ? '' : $subheading[0]['value'];

   $text = field_get_items('paragraphs_item', $paragraphs_item, 'field_text');
   $text = empty($text[0]['value']) ? '' : $text[0]['value'];

  $link = field_get_items('paragraphs_item', $paragraphs_item, 'field_link');
  $options = array('query' => $link[0]['query'], 'fragment' => $link[0]['fragment'], 'absolute' => $link[0]['absolute']);
  $linkURL = url($link[0]['url'], $options);


  $linkText = empty($link[0]['title']) ? '' : $link[0]['title'];

   $embed = field_get_items('paragraphs_item', $paragraphs_item, 'field_embed_code');
  $embed = empty($embed[0]['value']) ? '' : $embed[0]['value'];   


?>

<?php if($embed): ?>

<?php if($alignment == "center"): ?>
<div class="row">
<div class="col-sm-12 center-text">
<div class="video-wrapper">
<?php print render($embed) ?>
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

<?php if($text || $link): ?>
<div class="media-text">
<?php if($text): ?>
  <div class="section-themeable">
<?php print $text ?>
  </div>
<?php endif; ?>

<?php if($link): ?>
  <a class="rounded-flat-button" href="<?php print $linkURL?>"><?php print $linkText ?></a>
<?php endif; ?>
</div>
<?php endif; ?>

</div>
</div>


<?php endif; ?>


<?php if($alignment == "left"): ?>
<div class="row">
<div class="col-sm-12 col-md-6">

<div class="video-wrapper">
<?php print render($embed) ?>
</div>

</div>

<div class="col-sm-12 col-md-6">


<?php if($heading): ?>
<h3 class="media-heading section-themeable"><?php print $heading ?></h3>
<?php endif; ?>

<?php if($subheading): ?>
<h4 class="media-heading section-themeable"><?php print $subheading ?></h4>
<?php endif; ?>

<?php if($text || $link): ?>
<div class="media-text">
<?php if($text): ?>
  <div class="section-themeable">
<?php print $text ?>
  </div>
<?php endif; ?>

<?php if($link): ?>
  <a class="rounded-flat-button" href="<?php print $linkURL?>"><?php print $linkText ?></a>
<?php endif; ?>
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

<?php if($text || $link): ?>
<div class="media-text">
<?php if($text): ?>
  <div class="section-themeable">
<?php print $text ?>
  </div>
<?php endif; ?>

<?php if($link): ?>
  <a class="rounded-flat-button" href="<?php print $linkURL?>"><?php print $linkText ?></a>
<?php endif; ?>
</div>
<?php endif; ?>

</div>


<div class="col-sm-12 col-md-6">
<div class="video-wrapper">
<?php print render($embed) ?>
</div>

</div>


</div>



<?php endif; ?>

<?php endif; ?>