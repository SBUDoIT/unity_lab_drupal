<section  class="small-media-highlights section-border padding-bottom-4em">
  <div class="container">
        <?php $index=0; foreach($content['items'] as $item) { ?>

        <?php if($index % 2 == 0): ?>

        
    <div class="row">
      <div class="small-media-highlights">
        
        <?php endif; ?>

        <div class="col-md-6">
      <div class="media-card">
        <div class="col-md-4">
          <a href="<?php print $item['url'] ?>"><?php print $item['image'] ?></a>
        </div>
        <div class="col-md-8">
        <h2 class="media-card-title"><a href="<?php print $item['url']?>"><?php print $item['title'] ?></a></h2>
          <time class="media-card-time"><?php print $item['created'] ?></time>
         <div class="media-card-item">
              <?php print $item['introduction'] ?>
            </div>
          <p><a class="read-more" href="<?php print $item['url'] ?>">Read The Whole Story »</a></p>
        </div>
      </div>
    </div>
    <?php if($index % 2  == 1): ?>
            </div>
    </div>
  
<?php endif; ?>
        <?php $index++; } ?>
        
        

         <div class="row cozy">
      <div class="col-xs-12 col-sm-12 col-md-12 centered">
        <div>
          <a class="read-more" href="/events">View News Archive »</a>
        </div>
      </div>
    </div>
    </div>

</section>


