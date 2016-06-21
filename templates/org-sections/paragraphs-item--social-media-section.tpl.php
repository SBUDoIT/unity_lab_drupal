<?php


  $bundle = str_replace('_', '-', $paragraphs_item->bundle);
  $sectionID = 'section-' . $paragraphs_item->item_id;

  $section_classes = field_get_items('paragraphs_item', $paragraphs_item, 'field_section_classes');
  $section_classes = empty($section_classes[0]['value']) ? '' : $section_classes[0]['value'];

  $section_classes = trim($bundle . ' ' . $sectionID . ' ' . $section_classes);
  
      
   $section_title = field_get_items('paragraphs_item', $paragraphs_item, 'field_section_title');
   $section_title = empty($section_title[0]['value']) ? '' : $section_title[0]['value'];

   $introduction = field_get_items('paragraphs_item', $paragraphs_item, 'field_introduction');
   $introduction = empty($introduction[0]['value']) ? '' : $introduction[0]['value'];

    $items = field_get_items('paragraphs_item', $paragraphs_item, 'field_social_media_post');
    
    $item_ids = array();
    foreach ($items as $item) {
      $item_ids[] = $item['value'];
   }


    $count = count($items);
    
    $col_class = '';
    
    if($count == 1)
      $col_class = "col-md-12";
    else if($count == 2)
      $col_class = "col-md-6";
    else if($count == 3)
      $col_class = "col-md-4";
    else
      $col_class = "col-md-3";

   $closing = field_get_items('paragraphs_item', $paragraphs_item, 'field_closing');
   $closing = empty($closing[0]['value']) ? '' : $closing[0]['value'];

?>

<section id="<?php print $sectionID ?>" class="<?php print $section_classes; ?>">
<div class="container">


<?php if($section_title): ?>
<div class="row">
<div class="col-lg-12 text-center">
  <h2><?php print $section_title ?></h2>
</div>
</div>

<?php endif; ?>

<?php if($introduction): ?>
  <div class="row">
<div class="col-sm-12 col-lg-12 text-center">
<div class="introduction">
  <?php print $introduction ?>
</div>
</div>
</div>
<?php endif; ?>

<?php if(count($item_ids) > 0): ?>
<div class="row">


<?php


// Load up the field collection items
$items = field_collection_item_load_multiple($item_ids);

$index =0;
$position='';
// Loop through the items and extract field values
foreach ($items as $item) {

	
 $image = field_get_items('field_collection_item', $item, 'field_image');
 $image_renderable = field_view_value('field_collection_item', $item, 'field_image', $image[0], array('settings' => array('image_style' => 'medium'), 'attributes' => array('attributes' => array('class'=>'circle-image'))));
  
  

  $platform = field_get_items('field_collection_item', $item, 'field_platform');
  $platform = empty($platform[0]['value']) ? '' : $platform[0]['value'];

  $username = field_get_items('field_collection_item', $item, 'field_username');
  $username = empty($username[0]['value']) ? '' : $username[0]['value'];

  $text = field_get_items('field_collection_item', $item, 'field_text');
  $text = empty($text[0]['value']) ? '' : $text[0]['value'];


?>


<div class="social-media-post <?php print $col_class ?>">

<?php if($image): ?>
<div class="social-media-image"><?php print render($image_renderable); ?></div>
<?php endif; ?>

<?php if($username): ?>
<h3 class="social-media-username"><?php print $username ?></h3>
<?php endif; ?>

<?php if($text): ?>
<div class="blurb-text">
<?php print $text ?>
</div>
<?php endif; ?>


</div>

<?php
}
?>


</div>

<?php endif; ?>


<?php if($closing) : ?>

<div class="row">

<div class="col-sm-12 text-center">

<div class="closing"><?php print $closing ?></div>
</div>

</div>

<?php endif; ?>



 
</div>
</section>
