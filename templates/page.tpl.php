<?php include "includes/header.inc"; ?>

<?php include "includes/main-nav.inc"; ?>

<?php include "includes/banner.inc"; ?>



<div class="main-content-wrap">
	<div class="container">
		<div class="row">

			<div class="main-content" id="main-content">
				<div class="main-content-header" id="main-content-header">
					<?php print render($title_prefix); ?>
						<?php if ($title && !$page['banner']): ?>
							<h1 class="title" id="page-title">
					  			<?php print $title; ?>
							</h1>
				  		<?php endif; ?>
				  	<?php print render($title_suffix); ?>

					<?php if ($tabs): ?>
						<div class="tabs">
							<?php print render($tabs); ?>
						</div>
				  	<?php endif; ?>

					<?php print render($messages); ?>
					<?php print render($page['main_content_header']); ?>
				</div>


				<?php print render($page['content']); ?>
			</div>

		<?php if ($page['main_prefix']): ?>
			<div class="main-prefix" id="main-prefix"><?php print render($page['main_prefix']); ?></div>
		<?php endif; ?>

		<?php if ($page['main_suffix']): ?>
			<div class="main-suffix" id="main-suffix"><?php print render($page['main_suffix']); ?></div>
		<?php endif; ?>

		</div>
	</div>
</div>



<?php include "includes/footer.inc"; ?>
