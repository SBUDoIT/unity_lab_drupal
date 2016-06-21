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
      <?php foreach($content['items'] as $item) {  ?>


        <div class="call-to-action col-sm-12 center-text">
          <?php if(!empty($item['heading'])): ?>
            <h3 class="section-themeable"><?php print $item['heading'] ?></h3>
          <?php endif; ?>

          <?php if(!empty($item['subheading'])): ?>
          <h4 class="section-themeable"><?php print $item['subheading'] ?></h4>
          <?php endif; ?>

          <?php if(!empty($item['text'])): ?>
          <div class="section-themeable">
          <?php print $item['text'] ?>
          </div>
          <?php endif; ?>


          <?php if(!empty($item['link'])): ?>
            <?php print l($item['link']['text'], $item['link']['url'], array('attributes' => array('class' => ['simple-btn', 'section-themeable']))); ?>
          <?php endif; ?>
        </div>
    <?php } ?>
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

