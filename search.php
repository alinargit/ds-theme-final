<?php get_header(); ?>

<div class="primary">
    <div class="main">
        <div class="container">
            <?php
            while( have_posts() ):
                the_post();
                ?>
                <article>
                    <header>
                    <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                        <h2><?php the_title(); ?></h2>
                        <div class="meta-info">
                            <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link();?></p>
                            <p>Catgeries: <?php the_category( ' ' ); ?> </p>
                            <p> <?php the_tags('', ', '); ?></p>
                        </div>
                    </header>
                    <div class="content">
                        <?php the_exerpt(); ?>
                    </div>
                </article>
            <?php
            endwhile;
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?> 