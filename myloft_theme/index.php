<?php get_header(); ?>

<div class="header__background"></div>

<div class="index">
    <div class="index__inner">
        <!-- カテゴリ名 -->
        <div class="index__categoryname"><?php the_category(); ?></div>

        <div class="index__posts">

            <!-- 記事ループ -->
            <?php

            if (have_posts()) :
                while (have_posts()) :
                    the_post(); ?>
                    <div class="index__post">
                        <!-- 投稿日 -->
                        <?php echo get_the_date('Y.m.d'); ?>
                        <!-- タイトル -->
                        <p>
                            <?php the_title(); ?>
                        </p>
                        <!-- 記事のリンク -->
                        <a href="<?php the_permalink(); ?>" class="a__btn">
                        </a>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>

        <div class="index__pagination">
            <?php
            $paginate_args = array(
                'mid_size'  => 3,
                'current' => max(1, get_query_var('paged')),
                'prev_text' => '<',
                'next_text' => '>',
                'type' => 'array', //配列で取得
            );
            $paginate_links = paginate_links($paginate_args);
            $current = $paginate_args['current'];
            $allowed = [ //URL書式のパターン入力
                '/ current/u', //現在のページ
                '/prev /u', //前へ
                '/next /u', //次へ
                sprintf('/>%d</u', 1),
                sprintf('/\/page\/%d(\/|")/u', $current - 3),
                sprintf('/\/page\/%d(\/|")/u', $current - 2),
                sprintf('/\/page\/%d(\/|")/u', $current - 1),
                sprintf('/\/page\/%d(\/|")/u', $current + 1),
                sprintf('/\/page\/%d(\/|")/u', $current + 2),
                sprintf('/\/page\/%d(\/|")/u', $current + 3),
            ];
            if (!empty($paginate_links)) {
                $paginate_links = array_filter( // $allowedにマッチしない要素を破棄する
                    $paginate_links,
                    function ($value) use ($allowed) {
                        foreach ((array)$allowed as $tag) {
                            console_log("value：" . $value . "\r\n\r\n　tag：" . $tag);
                            if (preg_match($tag, $value)) {
                                return true;
                            }
                        }
                        return false;
                    }
                );
            }
            if (!empty($paginate_links)) {
                foreach ($paginate_links as $paginate_link) {
                    echo $paginate_link;
                }
            }
            function console_log($data)
            {
                echo '<script>';
                echo 'console.log(' . json_encode($data) . ')';
                echo '</script>';
            }
            ?>
        </div>


    </div>
</div>

<?php get_footer(); ?>