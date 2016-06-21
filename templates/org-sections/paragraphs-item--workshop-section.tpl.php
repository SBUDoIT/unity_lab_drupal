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



  
  if (arg(0) == 'node' && is_numeric(arg(1))) {
     // creating the node variable
     $node = node_load(arg(1), NULL, TRUE);
   }



 $display = field_get_items('paragraphs_item', $paragraphs_item, 'field_resource_display');
    
    $items = array();
    
        $query = new EntityFieldQuery();
        $query->entityCondition('entity_type', 'node')
          ->entityCondition('bundle', 'workshop')
          ->propertyCondition('status', 1) // published? yes
          ->fieldCondition('field_related_nodes', 'target_id', $node->nid)
          ->propertyOrderBy('title', 'ASC')
          ->range(0, 30); //do not forget the semicolon at the end of the query conditions
        $result = $query->execute();

        

        if (isset($result['node'])) {
          $nids = array_keys($result['node']);
          $workshops = entity_load('node', $nids);
        }

        foreach($workshops as $workshop)
        {

          $resource['url'] = url('node/'. $workshop->nid);
          $resource['title'] = $workshop->title;

          $items[] = $resource;
        }
      
   

     $count = count($items);
    
    $col_class = '';
    
    if($count == 1)
      $col_class = "col-sm-12 col-md-12 col-lg-3";
    else if($count == 2)
      $col_class = "col-sm-12 col-md-6 col-lg-3";
    else if($count == 3)
      $col_class = "col-sm-12 col-md-4 col-lg-3";
    else
      $col_class = "col-sm-12 col-md-3 col-lg-3";


   $closing = field_get_items('paragraphs_item', $paragraphs_item, 'field_closing');
   $closing = empty($closing[0]['value']) ? '' : $closing[0]['value'];

?>


<section id="<?php print $sectionID ?>" class="<?php print $section_classes; ?>">
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


<?php if(count($count) > 0): ?>
<div class="multi-columns-row row">


<?php

// Loop through the items and extract field values
foreach ($items as $item) {


?>


<div class="resources section-themeable simple-blurb <?php print $col_class ?>">
<a href="<?php print $item['url'] ?>">

<?php if($item['title'] && $item['url']): ?>
<h3 class="heading centered section-themeable"><?php print $item['title'] ?></h3>
<?php endif; ?>
  </a>


</div>

<?php
}
?>


</div>

<?php endif; ?>





<?php if($closing) : ?>

<div class="row">

<div class="col-sm-12 text-center">

<div class="closing section-closing section-themeable"><?php print $closing ?></div>
</div>

</div>

<?php endif; ?>



 
</div>
</section>
