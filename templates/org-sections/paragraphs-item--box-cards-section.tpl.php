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
    <div class="row multi-columns-row">
      <?php foreach($content['items'] as $item) { ?>
      <div class="<?php print $column_classes ?>">
        <div class="<?php print implode(' ', $item['item_classes']) ?>">
          <?php if(isset($item['image'])): ?>
          <div class="card-image centered"><?php print render($item['image']); ?></div>
          <?php endif; ?>
          <div class="card-headings">
            <?php if($item['heading']): ?>
            <h3 class="card-heading"><?php print $item['heading'] ?></h3>
            <?php endif; ?>
            <?php if($item['subheading']): ?>
            <h4 class="card-subheading small"><?php print $item['subheading'] ?></h4>
            <?php endif; ?>
          </div>
          <div class="borderline"></div>
          <?php if($item['text']): ?>
          <div class="card-details">
            <?php print $item['text'] ?>
          </div>
          <?php endif; ?>
          <?php if(isset($item['links']) && is_array($item['links'])): ?>
          <div class="card-links">

            <?php foreach($item['links'] as $link) { print l($link['text'], $link['url'], $link['options']); } ?>
          </div>
          <?php endif; ?>
        </div>
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
<script type="text/javascript">
(function($){
$(function() { // apply matchHeight to each item container's items

$('.<?php print $sectionID ?> .card .card-headings').matchHeight();
$('.<?php print $sectionID ?> .card .card-details').matchHeight();
$('.<?php print $sectionID ?> .card .card-links').matchHeight();
$('.<?php print $sectionID ?> .card').matchHeight();


});
})(jQuery);
</script>