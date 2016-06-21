
<?php if($content['type'] == 'large'): ?>

<section id="<?php print $sectionID ?>" class="hp-social-icons <?php print $section_classes; ?>">
<div class="container">


<?php if($title): ?>
<div class="row">
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
<?php 

foreach($content['items'] as $item) {

 ?>
      <div class="col-xs-4 col-sm-2 col-md-2">
        <a href="<?php print $item['link']['url'] ?>"><span class="<?php print $item['icon'] ?> social-icon"></span><?php if($item['heading']): ?>
  <span class="element-invisible heading section-themeable"><?php print $item['heading'] ?> </span>
<?php endif; ?>
</a>
      </div>
    
<?php } ?>
    </div>
  </div>
</section>


<?php else: ?>

<section id="<?php print $sectionID ?>" class="<?php print $section_classes; ?>">
<div class="container">


<?php if($title): ?>
<div class="row">
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

<ul class="inline-list">

<?php foreach ($content['items'] as $item)  { ?>

<li class="margin-2em max-width-100 valign-top">
<?php if($item['link']['url']): ?>
  <a class="section-themeable" href="<?php print $item['link']['url'] ?>">
<?php endif; ?>

<?php if($item['icon']): ?>
<i class="<?php print $item['icon'] ?> section-themeable"></i><br />
<?php endif; ?>

<?php if($item['heading']): ?>
  <span class="heading section-themeable"><?php print $item['heading'] ?> </span>
<?php endif; ?>


<?php if($item['link']['url']): ?>
</a>
<?php endif; ?>

</li>

<?php
}
?>

</ul>

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






<?php endif; ?>
