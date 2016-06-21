<section id="<?php print $sectionID ?>" class="<?php print $section_classes; ?>">

<div class="container-fluid">

    <div class="row position-relative">


<?php if($content['alignment'] == "center"): ?>

 <div class="col-md-12">
    <div class="Flexible-container">
      <iframe src="<?php print $content['target_link']['url'] ?>"></iframe>
    </div>

  </div>


<div class="col-md-6 col-md-offset-3 centered side-image__text">

<?php if($title): ?>
  <h2 class="section-heading section-themeable"><?php print $title ?></h2>
<?php endif; ?>

<?php if($content['introduction']): ?>
  <div class="introduction section-introduction section-themeable"><?php print $content['introduction'] ?> </div>
<?php endif; ?>

<?php if($content['heading']): ?>
<h3 class="heading section-themeable"><?php print $content['heading'] ?></h3>
<?php endif; ?>

<?php if($content['subheading']): ?>
<h4 class="subheading section-themeable"><?php print $content['subheading'] ?></h4>
<?php endif; ?>

 <?php if($content['closing']) : ?>
    <div class="row section-footer">
      <div class="col-sm-12 text-center">
        <div class="closing section-closing section-themeable"><?php print $content['closing'] ?></div>
      </div>
    </div>
    <?php endif; ?>
   

</div>

<?php endif; ?>



<?php if($content['alignment'] == "left"): ?>
  <div class="col-md-6">
    <div class="Flexible-container">
      <iframe src="<?php print $content['target']['url'] ?>"></iframe>
    </div>

  </div>

<div class="col-md-6">

<?php if($title): ?>
  <h2 class="section-heading section-themeable"><?php print $title ?></h2>
<?php endif; ?>

<?php if($content['introduction']): ?>
  <div class="section-introduction introduction section-themeable"><?php print $content['introduction'] ?></div>
<?php endif; ?>


<?php if($content['closing']): ?>
<div class="section-closing section-themeable closing">
<?php print $content['closing'] ?>
</div>
<?php endif; ?>

</div>


<?php endif; ?>


<?php if($alignment == "right"): ?>



<div class="col-md-6">

<?php if($title): ?>
  <h2 class="section-heading section-themeable"><?php print $title ?></h2>
<?php endif; ?>

<?php if($content['introduction']): ?>
  <div class="section-introduction introduction section-themeable"><?php print $content['introduction'] ?></div>
<?php endif; ?>


<?php if($content['closing']): ?>
<div class="section-closing section-themeable closing">
<?php print $content['closing'] ?>
</div>
<?php endif; ?>

</div>

 <div class="col-md-6">
    <div class="Flexible-container">
      <iframe src="<?php print $content['target_link']['url'] ?>"></iframe>
    </div>

  </div>

<?php endif; ?>

</div></div>
</section>