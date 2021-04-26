<?php get_header(); ?>

<div class="header__background"></div>
<article>
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>
            <div class="post">

                <div class="post__title">
                    <!-- タイトル -->
                    <?php the_title(); ?>
                </div>
                <div class="post__date">
                    <?php echo get_the_date('Y.m.d'); ?>
                </div>
                <div class="post__headerbottom"></div>
                <div class="post__thumbnail">
                    <!-- アイキャッチ画像 -->
                    <?php the_post_thumbnail('full'); ?>
                </div>
                <div class="post__content">
                    <!-- 本文 -->
                    <?php the_content(); ?>
                </div>

            </div>
    <?php
        endwhile;
    endif;

    // 指定したカテゴリーの ID を取得
    $category_id = get_cat_ID('NEWS');
    // このカテゴリーの URL を取得(ニュース一覧はこちら用のリンク)
    $category_link = get_category_link($category_id);
    ?>

    <div class="top__seemore__btn">NEWS一覧に戻る<a href="<?php echo esc_url($category_link); ?>" class="a__btn"></a></div>


</article>
<?php get_footer(); ?>