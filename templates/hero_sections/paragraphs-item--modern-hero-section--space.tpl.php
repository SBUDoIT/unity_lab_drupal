
<section id="<?php print $css_id ?>" class="hero-modern overlay-dark-gray <?php print implode(' ', $css_classes_array); ?>">
  <div class="container">
    <div class="row">
      <div class="col-sx-12 col-sm-12 col-md-12">
        <div class="hero-modern--content">

          <?php if($content['heading']): ?>
          <h1 class="hero-modern--heading animated fadeInDown white"><?php print $content['heading'] ?></h1>
          <?php endif; ?>

          <?php if($content['subheading']): ?>
          <h2 class="hero-modern--subheading animated fadeInDown white"><?php print $content['subheading'] ?></h2>
          <?php endif; ?>

          <?php if($content['introduction']): ?>
              <p class="introduction"><?php print $content['introduction'] ?> </p>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="row">

      <div class="col-xs-12">


      <?php foreach($content['links'] as $link)
      {
        print "<a data-match-height='hero-buttons' class='hero-button' href='" . $link['url'] . "'>" . $link['text'] . "</a>";
      }

      ?>

    </div>




    </div>
  </div>
</section>
