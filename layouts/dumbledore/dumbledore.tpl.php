<?php
/**
 * @file
 * Template for a Dumbledore a front page layout with a banner row followed by 2 rows of 3 even columns
 * 
 *
 * Variables:
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:

 */
?>


	<section id="banner">
	<div class="container">
	<div class="row">
	<div class="col-lg-12">
	<?php print $content['banner']; ?>
	</div>
	</div>
	</div>
	</section>


       	<section class="main-content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
     						<div id="section-a" class="unity-region"><?php print $content['section-a']; ?></div>
     					</div>
						<div class="col-xs-12 col-md-4">
							<div id="section-b" class="unity-region"><?php print $content['section-b']; ?></div>
						</div>
						<div class="col-xs-12 col-md-4">						
							<div id="section-c" class="unity-region"><?php print $content['section-c']; ?></div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-4">
							<div id="section-d" class="unity-region"><?php print $content['section-d']; ?></div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div id="section-e" class="unity-region"><?php print $content['section-e']; ?></div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div id="section-f" class="unity-region"><?php print $content['section-f']; ?></div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<div id="section-g" class="unity-region"><?php print $content['section-g']; ?></div>
						</div>
					</div>
				</div>
			</section>