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
 
 $closing = field_get_items('paragraphs_item', $paragraphs_item, 'field_closing');
   $closing = empty($closing[0]['value']) ? '' : $closing[0]['value'];


   
    $items = field_get_items('paragraphs_item', $paragraphs_item, 'field_people');
    
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
 if($image)
  $image_renderable = field_view_value('field_collection_item', $item, 'field_image', $image[0], array('settings' => array('image_style' => 'medium'), 'attributes' => array('attributes' => array('class'=>'circle-image'))));
 else
 {
  $image_renderable = "<img class='circle-image' src='/sites/all/libraries/unity/assets/images/unknown-profile.png' />";
 }
  
  

  $first = field_get_items('field_collection_item', $item, 'field_first_name');
  $first = empty($first[0]['value']) ? '' : $first[0]['value'];

  $last = field_get_items('field_collection_item', $item, 'field_last_name');
  $last = empty($last[0]['value']) ? '' : $last[0]['value'];

  $org = field_get_items('field_collection_item', $item, 'field_organization');
  $org = empty($org[0]['value']) ? '' : $org[0]['value'];

  $email = field_get_items('field_collection_item', $item, 'field_e_mail');
  $email = empty($email[0]['email']) ? '' : $email[0]['email'];

  $jobtitle = field_get_items('field_collection_item', $item, 'field_job_title');
  $jobtitle = empty($jobtitle[0]['value']) ? '' : $jobtitle[0]['value'];

  $phone = field_get_items('field_collection_item', $item, 'field_phone_number');
  $phone = empty($phone[0]['value']) ? '' : $phone[0]['value'];

  $link = field_get_items('field_collection_item', $item, 'field_link');
  $linkText = empty($link[0]['title']) ? '' : $link[0]['title'];
  $options = array('query' => $link[0]['query'], 'fragment' => $link[0]['fragment'], 'absolute' => $link[0]['absolute']);
  $linkURL = url($link[0]['url'], $options);

  $yammer = field_get_items('field_collection_item', $item, 'field_yammer_profile');
  $yammerText = 'View My Yammer Profile';
  $yammerURL = empty($yammer[0]['url']) ? '' : $yammer[0]['url'];

  $twitter = field_get_items('field_collection_item', $item, 'field_twitter_account');
  $twitterText = empty($twitter[0]['value']) ? '' : $twitter[0]['value'];
  $twitterURL='';
  if($twitterText)
    $twitterURL = str_replace('@', '', 'http://twitter.com/' . $twitterText);

  $text = field_get_items('field_collection_item', $item, 'field_text');
  $text = empty($text[0]['value']) ? '' : $text[0]['value'];


?>


<div class="people <?php print $col_class ?>">

<?php if($image_renderable): ?>
<div class="centered image"><?php print render($image_renderable); ?></div>
<?php endif; ?>

<?php if($first || $last): ?>
<h3 class="name"><?php print $first ?> <?php print $last ?></h3>
<?php endif; ?>

<?php if($jobtitle): ?>
<h4 class="job-title"><?php print $jobtitle ?></h4>
<?php endif; ?>

<?php if($org): ?>
<h5 class="organization"><?php print $org ?></h4>
<?php endif; ?>

<?php if($yammer): ?>
<a class="sbuicon-yammer" href="<?php print $yammerURL ?>"><?php print $yammerText ?></a><br />
<?php endif; ?>

<?php if($twitter): ?>
<a class="sbuicon-twitter" href="<?php print $twitterURL ?>"><?php print $twitterText ?></a><br />
<?php endif; ?>

<?php if($link): ?>
<a class="sbuicon-link" href="<?php print $linkURL ?>"><?php print $linkText ?></a><br />
<?php endif; ?>

<?php if($email): ?>
<a class="sbuicon-envelope" href="mailto:<?php print $email ?>"><?php print $email ?></a><br />
<?php endif; ?>

<?php if($phone): ?>
<span class="sbuicon-phone"><?php print $phone ?><br />
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
