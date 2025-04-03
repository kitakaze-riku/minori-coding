<?php get_header('btm_pg'); ?>

<div class="top-banner">
    <div class="top-banner-txt">
        <div>News</div>
        <h1>お知らせ</h1>
    </div>
</div>


<main>
    <!-- トップページバナー -->
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
                    <span itemprop="name">お知らせ</span>
                </a>
                <meta itemprop="position" content="2" />
            </li>
        </ol>


        <section class="blog-cont">
            <div class="blog">
                <h2 class="blog-title">
                    <?php the_title(); ?>
                </h2>
                <div class="blog-cnt">
                    <?php the_content(); ?>
                </div>
            </div>

            <div class="single-pg-btn-cnt">
                <div href="" class="btn btn--custom btn--cubic btn--shadow">
                    <?php previous_post_link('%link', '前の記事へ'); ?>
                </div>
                <div class="btn btn--custom btn--cubic btn--shadow">
                    <?php next_post_link('%link', '次の記事へ'); ?>
                </div>
                <div class="btn btn--custom btn--cubic btn--shadow">
                    <a href="<?php echo esc_url(home_url('/')); ?> ">
                        ホームに戻る
                    </a>
                </div>
                <div class="btn btn--custom btn--cubic btn--shadow">
                    <a href="<?php echo esc_url(home_url('/blog')); ?> ">
                        お知らせ一覧へ
                    </a>
                </div>
            </div>
        </section>


    </section>


</main>

<?php get_footer(); ?>