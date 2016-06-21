<section class="hp-events section-border fluffy" id="events">
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4">
      <div class="event-media-highlight-card">

        <?php print $content['spotlight']['image'] ?>
        <h2 class="event-media-highlight-title"><a href="<?php print $content['spotlight']['url'] ?>"><?php print $content['spotlight']['title'] ?></a></h2>
        <div class="event-media-hightlight-item">
          <?php print $content['spotlight']['introduction'] ?>

          
          
        </div>
        <a class="view-all" href="<?php print $content['spotlight']['url']?>">Learn More About This Event »</a>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8">
    <?php foreach($content['flashlights'] as $item) { ?>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="event-date-desc-card">
        <time class="event-date-desc-time">
        <ul>
          <li><?php print $item['date-only'] ?></li>
          <li><?php print $item['time-only'] ?></li>
        </ul>
        </time>
        
        <h2 class="event-date-desc-time-title"><a href="<?php print $item['url']?>"><?php print $item['title'] ?></a></h2>
        <p class="event-date-desc-item"><?php print $item['introduction'] ?></p>
        
        <div class="event-date-desc-share">
          <a href="<?php print $item['add-to-cal']?>"><span class="event-date-desc-share-icon sbuicon-calendar" alt="Add to Calendar"></span></a>
          <a href="<?php print $item['facebook_share'] ?>"><span class="event-date-desc-share-icon sbuicon-facebook" alt="Share on Facebook"></span></a>
          <a href="<?php print $item['twitter_share'] ?>"><span class="event-date-desc-share-icon sbuicon-twitter" alt="Share on Twitter"></span></a>
          <a href="<?php print $item['yammer_share'] ?>"><span class="event-date-desc-share-icon sbuicon-yammer" alt="Share on Yammer"></span></a>
          
        </div>
      </div>
    </div>
    
    <?php } ?>
      <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="read-more" href="/events">View All Upcoming Events & Trainings »</a>
        
      </div>
      </div>
     
      
      </div>
      
    </div>
</section>

