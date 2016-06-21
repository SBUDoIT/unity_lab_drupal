


<section id="article-body" class="cozy">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="well well-lg">
                    <?php if($content['author']): ?>
                      By: <?php print $content['author'] ?><br />
                    <?php endif; ?>
                    Last Updated: <?php print format_date($node->changed, 'doit_dt_month_year'); ?>
                </div>
            </div>
        </div>
    </div>
 </section>


 <?php


     print render ($content['field_sections']);
      ?>

<?php



if($has_hero) {
    hide($content['field_hero_section']);
    hide($content['field_introduction']);
}


?>
