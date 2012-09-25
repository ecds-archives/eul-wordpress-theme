<?php
/**
 * Template Name: Achives
 */
?>
<?php get_header(); ?>
        <div id="content">
            <div id="main" role="main">
                <article id="archives-page" class="post" role="article">
                    <header>
                        <h1><?php the_title(); ?></h1>
                    </header>
                    <div><?php the_content() ?></div>
                    <div id="category-archives">
                        <h3>By Category</h3>
                        <ul>
                            <?php wp_list_categories('optioncount=1&title_li=&show_count=1') ?>
                        </ul>
                    </div>
                    <div id="monthly-archives">
                        <h3>By Month</h3>
                        <ul>
                            <?php wp_get_archives('type=monthly&show_post_count=1') ?>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </article>
            </div><!-- /#main -->
            <?php get_sidebar(); ?>
            <div class="clearfix"></div>
        </div><!-- /#content -->
<?php get_footer(); ?>
