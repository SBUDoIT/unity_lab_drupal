<section class="fluffy section-border" id="services">
<div class="container">
  <div class="row">
    
    <?php foreach($content['items'] as $item) { ?>
    <div class="col-xs-12 col-sm-6 col-md-3">
      <div class="link-card" data-match-height="hsc">
        <icon class="link-card-icon <?php print $item['icon'] ?>"></icon>
        <h2 class="link-card-heading"><?php print $item['title'] ?></h2>
        <p>
          </p>
          <ul class="link-card link-card-item">
            <?php foreach($item['links'] as $link) { ?>
            <li><a class="dashed-link" href="<?php print $link['url']?>"><?php print $link['title'] ?></a></li>
            <?php } ?>
            
            <li><a class="view-all" href="<?php print $item['target']['url']?>">View All »</a></li>
          </ul>
        <p></p>
      </div>
      </div>
    <?php } ?>
    
    
  </div>
</div>
</section>