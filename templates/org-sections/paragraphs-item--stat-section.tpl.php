
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

<?php if(count($content['items']) > 0): ?>
<div class="row">


<?php



foreach ($content['items'] as $item) {


 
//  $text = field_get_items('field_collection_item', $item, 'field_text');
//  $text = empty($text[0]['value']) ? '' : $text[0]['value'];


?>


<div class="stat <?php print $column_classes ?>">
 

<?php if($item['stat']): ?>
<div class="count-item">
<h3 class="stat-heading section-themeable center-text"><?php print $item['prefix'] ?><span class="count-to" data-countto="<?php print $item['stat'] ?>"><?php print $item['stat'] ?></span><?php print $item['suffix'] ?></h3>
</div>
<?php endif; ?>

<?php if($item['text']): ?>
<div class="stat-text section-themeable center-text">
<?php print $item['text'] ?>
</div>
<?php endif; ?>


</div>

<?php
}
?>


</div>

<?php endif; ?>


   <?php if($content['closing']) : ?>
    <div class="row section-footer">
      <div class="col-sm-12 text-center">
        <div class="closing section-closing section-themeable"><?php print $content['closing'] ?></div>
      </div>
    </div>
    <?php endif; ?>
    
  </div>
</section>




