<section id="<?php print $css_id ?>" class="hero-classic <?php print $css_classes ?> <?php print $content['size']?>">
  <div class="container">
  <div class="row">
  <div class="col-xs-12">

       <?php if($content['heading']): ?>
          <h1><?php print $content['heading'] ?></h1>
       <?php endif; ?>

       <?php if($content['subheading']): ?>
          <h2><?php print $content['subheading'] ?></h2>
       <?php endif; ?>

              <?php if($content['introduction']): ?>
          <div class="white introduction"><?php print $content['introduction'] ?></div>
       <?php endif; ?>
  </div>
  </div>
  <div class="row">
  <div class="col-xs-12">


      <?php

      if(array_key_exists('links', $content) && is_array($content['links']))
      {
        foreach($content['links'] as $link)
        {
          print "<a data-match-height='hero-buttons' class='hero-button' href='" . $link['url'] . "'>" . $link['text'] . "</a>";
        }
      }

      ?>

    </div>

    </div>
  </div>
</section>
