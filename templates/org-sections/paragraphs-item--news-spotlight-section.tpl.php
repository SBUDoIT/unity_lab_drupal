<section class="hp-news cozy" id="news">
  <div class="container">
    <div class="row">
      <div class="media-highlight">
        <div class="col-xs-12 col-md-7">
        <div class="media-object">
          <a href="<?php print $content['item']['url']?>"><?php print $content['item']['image'] ?></a>
          </div>
        </div>
        <div class="col-xs-12 col-md-5">
          
          <div class="media-info">
            <h2 class="media-info-title"><a href="<?php print $content['item']['url'] ?>"><?php print $content['item']['title'] ?></a></h2>
            <time class="media-info-time"><?php print $content['item']['created'] ?></time>
            
            <div class="media-info-item">
              <?php print $content['item']['introduction'] ?>
            </div>
            <p class="media-info-read-more"><a class="read-more" href="<?php print $content['item']['url'] ?>">Read More »</a></p>
          </div>
        </div>
      </div>
    </div>
       
  </div>
</section>

 