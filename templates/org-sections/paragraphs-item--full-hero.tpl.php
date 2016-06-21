<?php

  $bundle = str_replace('_', '-', 'section-' . $paragraphs_item->bundle);
  $sectionID = 'section-' . $paragraphs_item->item_id;

  $section_classes = field_get_items('paragraphs_item', $paragraphs_item, 'field_section_classes');
  $section_classes = empty($section_classes[0]['value']) ? '' : $section_classes[0]['value'];

  $section_classes = trim($bundle . ' ' . $sectionID . ' ' . $section_classes);
  
  if (arg(0) == 'node' && is_numeric(arg(1))) {
     // creating the node variable
     $node = node_load(arg(1), NULL, TRUE);
  }


   $title = $node->title;


   

   $introduction = field_get_items('node', $node, 'field_introduction');
   $introduction = empty($introduction[0]['value']) ? '' : $introduction[0]['value'];




  $links = field_get_items('node', $node, 'field_hero_buttons');
    


      $desktop = field_get_items('paragraphs_item', $paragraphs_item, 'field_hero_image_desktop');
      
      $desktop = empty($desktop[0]['uri']) ? '' : $desktop[0]['uri'];
      
      
      if($desktop)
      {
        $desktop = file_create_url($desktop);
      
      }

      if($desktop)
      {
        $desktop = "background-image: url('" . $desktop . "');";
      
      }

    

?>

<section id="<?php print $sectionID ?>" class="<?php print $section_classes; ?> hero-centered large overlay-gray" style="<?php print $desktop; ?>">
        <div class="texture-overlay"></div>
        <div class="container">
        
          <div class="row hero-content">
            <div class="col-sx-12 col-sm-12 col-md-12">
              <h1 class="centered animated fadeInDown white"><?php print $title; ?></h1>
              <div class="introduction centered"><?php print $introduction ?></div>
              <div class="hero-buttons centered">
                  <?php
                  foreach($links as $link)
                  {
                   

                      $options = array('query' => $link['query'], 'fragment' => $link['fragment'], 'absolute' => $link['absolute']);
                      $linkURL = url($link[0]['url'], $options);
                      //$linkURL = empty($link['url']) ? '' : $link['url'];
                      $linkTitle = empty($link['title']) ? '' : $link['title'];
                  ?>


                                  

                  <a class="outline-button button" href="<?php print $linkURL?>"><?php print $linkTitle ?></a>

                  <?php 
                    }
                  ?>
              </div>
            </div>
          </div>
        </div>
      </section>


