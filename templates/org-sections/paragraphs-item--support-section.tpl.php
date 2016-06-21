
<section id="<?php print $sectionID ?>" class="<?php print $section_classes; ?> background-image-section">

<div class="container-fluid">

    <div class="row position-relative">

        <div class="hidden-xs col-md-6 side-image" data-background="<?php print $content['image'] ?>"></div>

        <div class="col-xs-12 col-md-6 col-md-offset-6 side-image__text">

            <?php if($title): ?>
              <h2 class="font-alt section-themeable align-left no-padding"><?php print $title ?></h2>
            <?php endif; ?>

          <?php if($content['introduction']): ?>
            <div class="section-introduction introduction section-themeable"><?php print $content['introduction'] ?></div>
          <?php endif; ?>

          <hr class="featurette-divider">
        
        
          <?php foreach($content['items'] as $contact) {  ?>

          <div class="row">

            <div class="col-xs-12">

                <div class="panel-group">

                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title font-alt">           
                           <?php print $contact['title'] ?>
                        </h4>
                      </div>
                      <div class="panel-collapse collapse in">
                        <div class="panel-body">

                        <?php if(isset($contact['intro'])): ?>
                          <p><?php print $contact['intro'] ?></p>
                        <?php endif; ?>
                          
                          <ul>

                              <?php if(isset($contact['email']) && $contact['email']): ?>
                              <li><a class="sbuicon-envelope" href="mailto:<?php print $contact['email'] ?>"><?php print $contact['email'] ?></a></li>
                              <?php endif; ?>

                              <?php if(isset($contact['phone']) && $contact['phone']): ?>
                              <li><span class="sbuicon-phone"><?php print $contact['phone'] ?></span></li>
                              <?php endif; ?>

                              <?php if(isset($contact['yammerURL']) && $contact['yammerURL']): ?>
                              <li><a class="sbuicon-yammer" href="<?php print $contact['yammerURL'] ?>">Yammer Us!</a></li>
                              <?php endif; ?>

                              <?php if(isset($contact['twitterURL']) && $contact['twitterURL'] && isset($contact['twitterText']) && $contact['twitterText']): ?>
                              <li><a class="sbuicon-twitter" href="<?php print $contact['twitterURL'] ?>"><?php print $contact['twitterText'] ?></a></li>
                              <?php endif; ?>

                              <?php if(isset($contact['linkURL']) && $contact['linkURL'] && isset($contact['linkText']) && $contact['linkText']): ?>
                              <li><a class="sbuicon-link" href="<?php print $contact['linkURL'] ?>"><?php print $contact['linkText'] ?></a></li>
                              <?php endif; ?>

                              
                          </ul>
                          <?php if(isset($content['reportProbURL']) && $content['reportProbURL']): ?>
                              <br /><a class="sbu-button" href="<?php print $content['reportProbURL']?>">Report a Problem</a>
                              <?php endif; ?>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>  
      </div>

</section>