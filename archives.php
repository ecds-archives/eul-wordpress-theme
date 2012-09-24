<?php
/**
 * Template Name: Achives
 */
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
        <div id="content">
            <div id="main" role="main">
                <?php the_content() ?>
                <ul id="archives-page" class="xoxo">
                    <li id="category-archives">
                        <h2>Archives by Category</h2>
                        <ul>
                            <?php wp_list_categories('optioncount=1&title_li=&show_count=1') ?>
                        </ul>
                    </li>
                    <li id="monthly-archives">
                        <h2>Archives by Month</h2>
                        <ul>
                            <?php wp_get_archives('type=monthly&show_post_count=1') ?>
                        </ul>
                    </li>
                </ul>
            </div><!-- /#main -->
            <?php get_sidebar(); ?>
            <div class="clearfix"></div>
        </div><!-- /#content -->
<?php get_footer(); ?>
