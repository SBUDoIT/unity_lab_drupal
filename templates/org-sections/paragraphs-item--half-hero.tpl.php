<?php


  $bundle = str_replace('_', '-', $paragraphs_item->bundle);
  $sectionID = 'section-' . $paragraphs_item->item_id;

 $section_classes = field_get_items('paragraphs_item', $paragraphs_item, 'field_section_classes');
  $section_classes = empty($section_classes[0]['value']) ? '' : $section_classes[0]['value'];

  $section_classes .= $bundle;
  

    $links = field_get_items('paragraphs_item', $paragraphs_item, 'field_link');
    
    $item_ids = array();
    foreach ($items as $item) {
      $item_ids[] = $item['value'];
   }

    $image = field_get_items('paragraphs_item', $paragraphs_item, 'field_image');
   
   
      
      $image = empty($image[0]['uri']) ? '' : $image[0]['uri'];
      
      

      if($image)
      {
        $image = file_create_url($image);
        
      }
   
  
  
  if (arg(0) == 'node' && is_numeric(arg(1))) {
     // creating the node variable
     $node = node_load(arg(1), NULL, TRUE);
   }

   


   $title = $node->title;

   $introduction = field_get_items('node', $node, 'field_introduction');
   $introduction = empty($introduction[0]['value']) ? '' : $introduction[0]['value'];

    

?>

<section class="<?php print $section_classes; ?> background-image-section">

<div class="container-fluid">

    <div class="row position-relative">


<?php if($alignment == "center"): ?>
<div class="hidden-xs col-md-12 side-image" data-background="<?php print render($image) ?>"></div>

<div class="col-md-6 col-md-offset-3 centered side-image__text">

<?php if($title): ?>
  <h2><?php print $title ?></h2>
<?php endif; ?>

<?php if($introduction): ?>
  <h2><?php print $introduction ?></h2>
<?php endif; ?>


  <?php
                  foreach($links as $link)
                  {
                   
                      
                    $options = array('query' => $link['query'], 'fragment' => $link['fragment'], 'absolute' => $link['absolute']);
                    $linkURL = url($link['url'], $options);

                      $linkTitle = empty($link['title']) ? '' : $link['title'];
                  ?>
                  

                  <a class="outline-button button" href="<?php print $linkURL?>"><?php print $linkTitle ?></a>

                  <?php 
                    }
                  ?>

</div>

<?php elseif($alignment == "left"): ?>
  <div class="hidden-xs col-md-6 side-image" data-background="<?php print render($image) ?>"></div>

<div class="col-md-6 col-md-offset-6 side-image__text">

<?php if($title): ?>
  <h2><?php print $title ?></h2>
<?php endif; ?>

<?php if($introduction): ?>
  <h2><?php print $introduction ?></h2>
<?php endif; ?>


  <?php
                  foreach($links as $link)
                  {
                   
                       $options = array('query' => $link['query'], 'fragment' => $link['fragment'], 'absolute' => $link['absolute']);
                    $linkURL = url($link['url'], $options);
                      $linkTitle = empty($link['title']) ? '' : $link['title'];
                  ?>
                  

                  <a class="outline-button button" href="<?php print $linkURL?>"><?php print $linkTitle ?></a>

                  <?php 
                    }
                  ?>

</div>


<?php else: ?>

<div class="col-md-6 side-image__text">


<?php if($title): ?>
  <h2><?php print $title ?></h2>
<?php endif; ?>

<?php if($introduction): ?>
  <div class="introduction"><?php print $introduction ?></div>
<?php endif; ?>

  <?php
                  foreach($links as $link)
                  {
                   
                       $options = array('query' => $link['query'], 'fragment' => $link['fragment'], 'absolute' => $link['absolute']);
                    $linkURL = url($link['url'], $options);
                      $linkTitle = empty($link['title']) ? '' : $link['title'];
                  ?>
                  

                  <a class="outline-button button" href="<?php print $linkURL?>"><?php print $linkTitle ?></a>

                  <?php 
                    }
                  ?>


</div>

<div class="hidden-xs col-md-6 col-md-offset-6 side-image" data-background="<?php print render($image) ?>"></div>



<?php endif; ?>

</div></div>
</section>

