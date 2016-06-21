


<?php if($content['alignment'] == "center"): ?>

<section id="<?php print $sectionID ?>" class="background-image-section-center <?php print $section_classes; ?>" style="background-image: url(<?php print $content['image']['uri']; ?>);">

<div class="container-fluid">

    <div class="row position-relative">


<div class="col-md-6 col-md-offset-3 centered side-image__text">

<?php if(isset($content['heading'])): ?>
<h2 class="heading section-themeable"><?php print $content['heading'] ?></h2>
<?php endif; ?>

<?php if(isset($content['subheading'])): ?>
<h3 class="subheading section-themeable"><?php print $content['subheading'] ?></h3>
<?php endif; ?>

<?php if(isset($content['text'])): ?>
<div class="introduction section-themeable"><?php print $content['text'] ?></div>
<?php endif; ?>

</div>
</div>
</div>
</section>

<?php else: 

$imageSection = '<div class="hidden-xs col-md-6 background-image-section-image match-height" style="background-image: url(' . $content['image']['uri'] . ')";></div>';

?>

<section id="<?php print $sectionID ?>" class="<?php print $section_classes; ?>">

<div class="container-fluid">

    <div class="row">

    <?php if($content['alignment'] == 'left'): 
        print $imageSection;      
    endif; ?>
<div class="col-md-6 background-image-section-content match-height">

<?php if(isset($content['heading'])): ?>
<h2 class="heading section-themeable"><?php print $content['heading'] ?></h2>
<?php endif; ?>

<?php if(isset($content['subheading'])): ?>
<h3 class="subheading section-themeable"><?php print $content['subheading'] ?></h3>
<?php endif; ?>



<?php if(isset($content['text'])): ?>
<div class="introduction section-themeable"><?php print $content['text'] ?></div>
<?php endif; ?>


</div>

<?php if($content['alignment'] == 'right'): 
        print $imageSection;      
    endif; ?>

</div>
</div>
</section>

<script type="text/javascript">
(function($){
$(function() { // apply matchHeight to each item container's items

$('.<?php print $sectionID ?> .match-height').matchHeight();
});
})(jQuery);
</script>

<?php endif; ?>

