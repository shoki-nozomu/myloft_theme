<?php get_header(); ?>

<div class="header__background"></div>

<article>
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>
            <div class="page">
                <!-- タイトル -->
                <div class="page__title">
                    <?php the_title(); ?>
                </div>
                <!-- 本文 -->
                <div class="page__content">
                    <?php the_content(); ?>
                </div>
            </div>
    <?php
        endwhile;
    endif;
    ?>
</article>

<?php get_footer(); ?>