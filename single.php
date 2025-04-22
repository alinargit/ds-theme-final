<?php get_header(); ?>

<div class="primary">
    <div class="main">
        <div class="container">
            <?php
            while( have_posts() ):
                the_post();
                get_template_part('parts/content', 'single');
                ?>
                
                <div class="pages new">
                <div class="wpdevs-paginations">
                                        <div class="pages next">
                                            <?php previous_post_link("&laquo, %link"); ?>
                                        </div>
                                        <div class="pages previous">
                                            <?php next_post_link("%link, &raquol"); ?>
                                        </div>
                                    </div>
            <?php
            if(comments_open() || get_comments_number()){
                comments_template();
            }
            endwhile;
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?> 