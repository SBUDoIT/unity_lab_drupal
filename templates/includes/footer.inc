
               <footer class="site-footer clearfix">


               <div class="top-footer shield-footer">
                <div class="container">

                    <div class="row">

                        <?php if ($page['menu_footer_one']): ?>
                            <div class="col-md-3">
                                <?php print render($page['menu_footer_one']); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($page['menu_footer_two']): ?>
                            <div class="col-md-3">
                                <?php print render($page['menu_footer_two']); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($page['menu_footer_three']): ?>
                            <div class="col-md-3">
                                <?php print render($page['menu_footer_three']); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($page['menu_footer_four']): ?>
                            <div class="col-md-3">
                                <?php print render($page['menu_footer_four']); ?>
                            </div>
                        <?php endif; ?>


                        <?php if ($page['menu_footer_five']): ?>
                            <div class="col-md-3">
                                <?php print render($page['menu_footer_five']); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($page['menu_footer_six']): ?>
                            <div class="col-md-3">
                                <?php print render($page['menu_footer_six']); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($page['menu_footer_seven']): ?>
                            <div class="col-md-3">
                                <?php print render($page['menu_footer_seven']); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($page['menu_footer_eight']): ?>
                            <div class="col-md-3">
                                <?php print render($page['menu_footer_eight']); ?>
                            </div>
                        <?php endif; ?>


    </div>



                    <div class="row">

<?php if ($page['left_menu_footer']): ?>
        <div class="col col-md-3 sub-footer first odd">
          <?php print render($page['left_menu_footer']); ?>
        </div>
    <?php endif; ?>

    <?php if ($page['middle_menu_footer']): ?>
        <div class="col col-md-3  sub-footer even">
            <?php print render($page['middle_menu_footer']); ?>
        </div>
    <?php endif; ?>

    <?php if ($page['right_menu_footer']): ?>
        <div class="col col-md-3 sub-footer last odd">
                      <?php print render($page['right_menu_footer']); ?>
        </div>
    <?php endif; ?>

    <?php if ($page['social_footer']): ?>
        <div class="col col-md-3 social-footer">
              <?php print render($page['social_footer']); ?>
        </div>
    <?php endif; ?>
    </div>
    </div>
    </div>


    <div class="bottom-footer">
    <div class="container"><div class="row">
     <?php if ($page['bottom_footer_social']): ?>
       <div class="col-sm-12 centered">
              <?php print render($page['bottom_footer_social']); ?>
        </div>
    <?php endif; ?>


    <div class="col-sm-12">


        <div id="bottom-footer">

        	<p class="white text-center">

        	<?php
        	global $user;
    		if ($user->uid == 0){
        	print 'Copyright © 2015 Stony Brook University ' . l('(Login)', 'cas', array('query'=>drupal_get_destination()));
        	}
        	else
        	{
        		print 'Copyright © 2015 Stony Brook University ' . l('(Logout)', 'user/logout');
        	}
        	?>
        	</p>

    <?php if ($page['bottom_footer']): ?>
              <?php print render($page['bottom_footer']); ?>
    <?php endif; ?>

        </div>




                    </div>
                </div>
                </div>
                </div>
            </footer>
            <!-- jQuery -->
            <script src="/sites/all/libraries/unity/js/footer/footer.dev.js"></script>
