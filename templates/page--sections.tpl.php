<?php include "includes/header.inc"; ?>

<?php include "includes/main-nav.inc"; ?>

<div class="main-content-wrap">

<?php if ($page['banner']): ?>
  <?php print render($page['banner']); ?>
<?php else: ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h1><?php print $title ?></h1>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>


 <?php if (render($tabs) || $messages || $page['main_content_header']): ?>
<section class="messages-section tight">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <?php if ($tabs): ?>
          <div class="tabs">
            <?php print render($tabs); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <?php print render($messages); ?>
        <?php print render($page['main_content_header']); ?>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>

<?php print render($page['content']); ?>






</div>





<?php include "includes/footer.inc"; ?>
