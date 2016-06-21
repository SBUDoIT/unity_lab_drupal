
	<?php 
	
	$navCols = 'col-sm-12 main-site-nav-cols';
	$searchCols='main-site-nav-cols';
	
	if ($page['search'])
	{
		$navCols = 'col-md-9 col-xs-11 col-xs-push-1 col-md-push-0 main-site-nav-cols';
		$searchCols='col-md-3 col-xs-1 col-xs-pull-11 col-md-pull-0 main-site-nav-cols';
	} 

	?>


<div class="main-site-nav-wrap">
<div class="container">
<div class="row">
<div class="<?php print $navCols ?>">
                    <!-- Brand and toggle get grouped for better mobile display -->
                   

                            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu'))); ?>

</div>

<?php if ($page['search']): ?>	
<div class="<?php print $searchCols ?>">

	<a href="/search/site" class="main-nav-search-trigger" role="button" aria-label="Search" tabindex="1"><em class="sbuicon-search"></em></a>
			
			<div id="sb-search" class="hide-accessible-mobile-960 sb-search">
				<?php print render($page['search']); ?>
			</div>
</div>	
		 <?php endif; ?>

                          
</div>
                          
</div>

      
    </div>