<?php if(isset($content['highlighted_event'])): ?>

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
          <?php print $content['introduction']; $content['introduction'] = ''; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

<div class="row">

<div class="<?php print $column_classes ?>">

<div class="event" data-match-height="items-event">
        <div class="bg-pom" data-match-height="items-event-title">

        <?php if($content['highlighted_event']['title'] && $content['highlighted_event']['url']): ?>
          <h2>
          <a class="white" href="<?php print $content['highlighted_event']['url'] ?>"><?php print $content['highlighted_event']['date-only'] ?></a>
          </h2>
        <?php endif; ?>

        </div>
        <div class="content" data-match-height="items-event-content">

          <p><i class="sbuicon-clock"></i>
            <?php print $content['highlighted_event']['time-only'] ?>
          </p>

          <?php if($content['highlighted_event']['room']): ?>
          <p>
          <i class="sbuicon-map-marker"></i>

            <?php 
            if($content['highlighted_event']['room']['url'])
            {
              print "<a href='" . $content['highlighted_event']['room']['url'] . "'>" . $content['highlighted_event']['room']['title'] . "</a>"; 
            }
            else if($content['highlighted_event']['room']['gmap'])
            {
             print "<a href='" . $content['highlighted_event']['room']['gmap'] . "'>" . $content['highlighted_event']['room']['title'] . "</a>";
            }
            else
            {
              print $content['highlighted_event']['room']['title'];
            }
            ?>
          <?php endif; ?>
          </p>
          
          <?php if(isset($content['highlighted_event']['audience']) && $content['highlighted_event']['audience']): ?>
          <p>
          <i class="sbuicon-user"></i>
            <?php print $content['highlighted_event']['audience'] ?>
          </p>
          <?php endif; ?>
         
         </div>
        <div class="register" data-match-height="items-event-register">
          <p>

          <?php if($content['highlighted_event']['registration-url'] || $content['highlighted_event']['add-to-cal']) { ?>

               <?php if($content['highlighted_event']['registration-url']): ?>
            <a href="<?php print $content['highlighted_event']['registration-url'] ?>"><i class="sbuicon-plus-circle"></i>Register</a>
          <?php endif; ?>
          <?php if($content['highlighted_event']['add-to-cal']): ?>
            <a href="<?php print $content['highlighted_event']['add-to-cal']?>"><i class="sbuicon-calendar"></i>Add To Calendar</a>
          <?php endif; ?>

        <?php } else { ?>

          Registration Closed

        <?php } ?>


         
          </p>
        </div>      
      </div>


</div>


</div>
</div>
</section>




<?php 

  $title = 'This Workshop is also Offered'; 
  endif; 

  
?>



<?php if($content['not_scheduled'] || count($content['items']) > 0): ?>

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


<?php if(isset($content['items']) && count($content['items']) > 0): ?>
<div class="multi-columns-row row">


<?php

// Loop through the items and extract field values
foreach ($content['items'] as $item) {


?>


<?php if($content['node']->type == 'workshop' || $content['node']->type == 'event'): ?>

<div class="<?php print $column_classes ?>">

<div class="event" data-match-height="items-event">
        <div class="bg-pom" data-match-height="items-event-title">

        <?php if($item['title'] && $item['url']): ?>
          <h2>
          <a class="white" href="<?php print $item['url'] ?>"><?php print $item['date-only'] ?></a>
          </h2>
        <?php endif; ?>

        </div>
        <div class="content" data-match-height="items-event-content" style="height: 181px;">

          <p><i class="sbuicon-clock"></i>
            <?php print $item['time-only'] ?>
          </p>

          <?php if($item['room']): ?>
          <p>
          <i class="sbuicon-map-marker"></i>
            <?php 
            if($item['room']['url'])
            {
              print "<a href='" . $item['room']['url'] . "'>" . $item['room']['title'] . "</a>"; 
            }
            else if($item['room']['gmap'])
            {
             print "<a href='" . $item['room']['gmap'] . "'>" . $item['room']['title'] . "</a>";
            }
            else
            {
              print $item['room']['title'];
            }
            ?>
          <?php endif; ?>
          </p>
          
          <?php if($item['audience']): ?>
          <p>
          <i class="sbuicon-user"></i>
            <?php print $item['audience'] ?>
          </p>
          <?php endif; ?>
          
        </div>
        <div class="register" data-match-height="items-event-register" style="height: 51px;">
          <p>
                    <?php if($item['registration-url'] || $item['add-to-cal']) { ?>

              <?php if($item['registration-url']): ?>
                <a href="<?php print $item['registration-url'] ?>"><i class="sbuicon-plus-circle"></i>Register</a>
              <?php endif; ?>
              <?php if($item['add-to-cal']): ?>
                <a href="<?php print $item['add-to-cal']?>"><i class="sbuicon-calendar"></i>Add To Calendar</a>
              <?php endif; ?>

        <?php } else { ?>

          Registration Closed

        <?php } ?>
          </p>
        </div>      
      </div>


</div>

<?php else: ?>

<div class="<?php print $column_classes ?>">

<div class="event" data-match-height="items-event">
        <div class="bg-pom" data-match-height="items-event-title">

        <?php if($item['title'] && $item['url']): ?>
          <h2>
          <a class="white" href="<?php print $item['url'] ?>"><?php print $item['title'] ?></a>
          </h2>
        <?php endif; ?>

        </div>
        <div class="content" data-match-height="items-event-content">

          <p><i class="sbuicon-clock"></i>
            <?php print $item['date'] ?>
          </p>

          <?php if($item['room']): ?>
          <p>
          <i class="sbuicon-map-marker"></i>
               <?php 
            if($item['room']['url'])
            {
              print "<a href='" . $item['room']['url'] . "'>" . $item['room']['title'] . "</a>"; 
            }
            else if($item['room']['gmap'])
            {
             print "<a href='" . $item['room']['gmap'] . "'>" . $item['room']['title'] . "</a>";
            }
            else
            {
              print $item['room']['title'];
            }
            ?>
          <?php endif; ?>
          </p>
          
          <?php if(isset($item['audience'])): ?>
          <p>
          <i class="sbuicon-user"></i>
            <?php print $item['audience'] ?>
          </p>
          <?php endif; ?>
          
        </div>
        <div class="register" data-match-height="items-event-register">
          <p>

          <?php if($item['registration-url'] || $item['add-to-cal']) { ?>

              <?php if($item['registration-url']): ?>
                <a href="<?php print $item['registration-url'] ?>"><i class="sbuicon-plus-circle"></i>Register</a>
              <?php endif; ?>
              <?php if($item['add-to-cal']): ?>
                <a href="<?php print $item['add-to-cal']?>"><i class="sbuicon-calendar"></i>Add To Calendar</a>
              <?php endif; ?>

        <?php } else { ?>

          Registration Closed

        <?php } ?>
          </p>
        </div>      
      </div>


</div>

<?php endif; ?>

<?php
}
?>


</div>



<?php elseif($content['not_scheduled']): ?>

<div class="row">
<div class="col-sm-12 centered">

<p class="introduction"><?php print $content['not_scheduled'] ?></p>

<?php if(isset($content['request_link'])): ?>
<a class="margin-top-2em rounded-flat-button" href="<?php print $content['request_link']['url'] ?>"><?php print $content['request_link']['text'] ?></a>
<?php endif; ?>
</div>
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