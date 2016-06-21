
<section id="<?php print $sectionID ?>" class="<?php print $section_classes; ?> fluffy">
<div class="container">

<div class="row">
<div class="col-lg-12 text-center">
  <h2 class="section-heading section-themeable">Lab Details</h2>
</div>
</div>


<div class="row">



<div class="col-sm-12 col-md-4">

<div class="classy-blurb blurb__item" data-match-height="<?php print $sectionID?>-intro-card">
                    <div class="blurb__icon">
        <i class="sbuicon-address-book"></i>
          </div>
    <h3 class="blurb__title font-alt blurb-heading">Contact</h3>
    <div class="blurb__text">
<?php if($content['sitemanager']): ?><strong>Site Manager:</strong> <?php print $content['sitemanager'] ?><br /><?php endif; ?>
<?php if($content['email']): ?><strong>E-mail:</strong> <a href="mailto:<?php print $content['email'] ?>"><?php print $content['email'] ?></a><br /><?php endif; ?>
<?php if($content['phone']): ?><strong>Phone:</strong> <?php print $content['phone'] ?><br /><?php endif; ?>
<?php if($content['location']): ?><strong>Location:</strong> <?php print $content['location'] ?><br /><?php endif; ?>

    </div>
          
    </div>

</div>
      
      
              
<div class="col-sm-12 col-md-4">

<div class="classy-blurb blurb__item" data-match-height="<?php print $sectionID?>-intro-card">
                    <div class="blurb__icon">
        <i class="sbuicon-clock-o"></i>
          </div>
    <h3 class="blurb__title font-alt blurb-heading">Hours</h3>
    <div class="blurb__text">
<?php $hours = render($content['hours']); if(!empty($hours)): print $hours; else: print "Hours Not Available"; endif; ?>

<br />
<?php if($content['type'] == 230 || $content['type'] == 229): ?>
<a href="/sites/it.stonybrook.edu/files/shared/sincschedule.pdf">SINC Site General Hours</a><br />
<a href="/sites/it.stonybrook.edu/files/shared/specialhours.pdf">SINC Site Holday/Break Hours</a>
<?php endif; ?>
    </div>
          
    </div>

</div>



<div class="col-sm-12 col-md-4">

<div class="classy-blurb blurb__item" data-match-height="<?php print $sectionID?>-intro-card">
                    <div class="blurb__icon">
        <i class="sbuicon-plug"></i>
          </div>
    <h3 class="blurb__title font-alt blurb-heading">Amenities</h3>
    <div class="blurb__text">
    <p><?php print $content['amenities'] ?></p>    
    </div>
          
    </div>

</div>
</div>

</div>


</section>
