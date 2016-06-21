
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
<div class="col-sm-12">

<ul class="vertical-timeline">

<?php


$index =0;
$position='';
// Loop through the items and extract field values
foreach ($content['items'] as $item) {

  if($index % 2 == 0)
    $position = 'vertical-timeline-left';
  else
    $position = 'vertical-timeline-right';

$index++;
?>

<li class="<?php print $position?>">
<div class="vertical-timeline-badge"><?php if($item['icon']): ?><i class="<?php print $item['icon'] ?>"></i><?php endif; ?></div>
<div class="vertical-timeline-panel">
<h3 class="vertical-timeline-title"><?php print $item['heading'] ?></h3>
<?php if($item['subheading']): ?><h4 class="vertical-timeline-subtitle"><?php print $item['subheading'] ?></h4><?php endif ?>
<div class="vertical-timeline-body">

<?php print $item['text'] ?> 
</div>

</div></li>

<?php
}
?>

</ul>
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




