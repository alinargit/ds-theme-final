<?php
/* 
Template Name: General Template
*/?>


<?php get_header();?>
        <img src="<?php header_image();?>" height="<?php echo get_custom_header()->height?>"
        width="<?php echo get_custom_header()->width?>>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="home-blog">
                        <div class="container">
                            <div class="general-template">
                                <?php
                                if(have_posts()):
                                    while( have_posts() ): the_post();                             
                                ?>
                                <article><h1><?php the_title();?></h1>
                            <?php the_content();?>
                            </article>
                            <?php
                            endwhile;
                        else:?>
                        <p>Nothing to be displayed!</p>
                        <?php endif;                                 
                            ?>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
<?php get_footer();?>
        