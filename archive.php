<?php get_header('btm_pg'); ?>

<div class="top-banner">
    <div class="top-banner-txt">
        <div>News</div>
        <h1>お知らせ一覧</h1>
    </div>
</div>


<main class="news-archive">

    <section class="flow btm-pg-cnt btm-page">

        <ol class="breadcrumb ">
            <li itemprop="itemListElement">
                <a itemprop="item" href="/">
                    <span itemprop="name">ホーム</span>
                </a>
                <meta itemprop="position" content="1" />
            </li>

            <li itemprop="itemListElement">
                <a itemprop="item" href="">
                    <span itemprop="name">お知らせ一覧1</span>
                </a>
                <meta itemprop="position" content="2" />
            </li>
        </ol>


        <section class="blog-cont">


            <article class="news-cnt-btm">
                <?php include("template/conf.php"); ?>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php $cat = get_the_category(); ?>
                        <?php $cat = $cat[0]; ?>
                        <!-- カテゴリー情報の取得 start -->
                        <?php
                        $category_state = 0;
                        $cat = get_the_category();
                        $cat = $cat[0];
                        // print_r($cat->cat_name);
                        $cat_name = $cat->cat_name;
                        // カテゴリーid 取得 start
                        // カテゴリーidによってcssを切り替えるために使用
                        $cat_ID = $cat->cat_ID;
                        // カテゴリーid 取得 end
                        if ($cat_ID === $campaign || $cat_ID === $eigyoujikan) {
                            if ($cat_ID === 1) {
                                $cat_Category_cssname = "campaign";
                            }
                            if ($cat_ID === $eigyoujikan) {
                                $cat_Category_cssname = "emergency-category";
                            }
                            $category_state = 1;
                        } else {
                            $cat_Category_cssname = "";
                        }
                        ?>


                        <a class="news-link" href="<?php the_permalink(); ?>">
                            <div class="news-all-cnt">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="post_thumbnail">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                <?php else : ?>
                                    <div class="post_thumbnail">
                                        <img src="<?php echo esc_url(get_theme_file_uri('img/thumbnail/minatoseikotuinn.jpg')) ?>" alt="">
                                    </div>
                                <?php endif; ?>

                                <dl class="news-date-list">
                                    <dt> <span class="dt-ttl"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></span><span class="<?php echo $cat_Category_cssname; ?>"><?php if ($category_state === 1) {
                                                                                                                                                                                                            echo $cat_name;
                                                                                                                                                                                                        } ?></span></dt>
                                    <dd class=""><?php the_title(); ?></dd>
                                </dl>

                            </div>
                        </a>


                    <?php endwhile; ?>
                <?php else : ?>
                    <div class="error">
                        <p>準備中です。</p>
                    </div>
                <?php endif; ?>
            </article>

            <!-- //ページネーション -->
            <div class="pagination">
                <!-- //ここは任意で当ててるだけなのでクラスなどは自由にカスタマイズ -->
                <?php echo paginate_links(array(
                    'type' => 'list',
                    'prev_text' => '«',
                    'next_text' => '»'
                )); ?>
            </div>


        </section>


    </section>

</main>


<?php get_footer(); ?>