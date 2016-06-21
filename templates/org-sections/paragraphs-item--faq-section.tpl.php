
<section id="<?php print $sectionID ?>" class="<?php print $section_classes; ?>">
   <div class="container">
    <?php if($title): ?>
    <div class="row section-header">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading section-themeable"><?php print $title ?></h2>
      </div>
    </div>
    <?php endif; ?>
    <?php if($content['introduction']): ?>
    <div class="row">
      <div class="col-sm-12 col-lg-12 text-center">
        <div class="introduction section-introduction section-themeable">
          <?php print $content['introduction'] ?>
        </div>
      </div>
    </div>
    <?php endif; ?>


<div class="row">

<div class="col-sx-12 col-sm-12 col-md-12">


<div class="kb-articles drop-accordion">

<?php foreach ($content['items'] as $faq) { ?>

<?php if($faq['display'] == 'embed') : ?>
<div class="kb-article-embeded">
<h3><?php print $faq['title']; ?></h3>
<div class="kb-article-body">

<?php print $faq['body']; ?>

</div>
</div>

<?php elseif($faq['display'] == 'accordion'): ?>

  <div class="item">
      <div class="tab">
          <span class="icon sbuicon-angle-down"></span>
          <span><?php print $faq['title']; ?></span>
      </div>
      <div class="accordion-content hide-accessible" style="display: block;">
          <div class="accordion-content-wrap">
              <?php print $faq['body']; ?>
          </div>
      </div>
  </div>


<?php elseif($faq['display'] == 'expanded'): ?>

  <div class="item">
      <div class="tab active">
          <span class="icon sbuicon-angle-down"></span>
          <span><?php print $faq['title']; ?></span>
      </div>
      <div class="accordion-content" style="display: block;">
          <div class="accordion-content-wrap">
              <?php print $faq['body']; ?>
          </div>
      </div>
  </div>


<?php elseif($faq['display'] == 'link'): ?>

    <div class="item">
      <div class="link">
      <a href="<?php print $faq['url']?>">
          <span class="icon sbuicon-link"></span>
          <span><?php print $faq['title']; ?></span>
      </a>
      </div>
  </div>

<?php endif; ?>




<?php


}



?>
</div>

</div>
</div>


 <?php if($content['closing']) : ?>
    <div class="row section-footer">
      <div class="col-sm-12 text-center">
        <div class="closing section-closing section-themeable"><?php print $content['closing'] ?></div>
      </div>
    </div>
    <?php endif; ?>
    
  </div>
</section>


