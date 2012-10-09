<?php
/**
 *
 *
 */
?>
        <footer>
            <!-- <div id="share_bar">

            </div> -->
            <div id="links" role="navigation">
                <?php 
                    wp_nav_menu(array(
                        'container'         => false,
                        'theme_location'    => 'primary'
                    )); 
                ?>
                <div id="copyright">
                    Copyright © 2012 Emory University - All Rights Reserved | 201 Dowman Drive, Atlanta, Georgia 30322 USA 404.727.6123
                </div>
            </div>
        </footer>
    </div><!-- /#page_wrapper -->
<?php wp_footer(); ?>
</body>
</html>
