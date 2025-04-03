<?php get_header('btm_pg'); ?>


<div class="top-banner">
    <div class="top-banner-txt">
        <div>Menu and Prices</div>
        <h1>メニューと料金</h1>
    </div>
</div>

</header>
<main class="">
    <!-- パンクズLIST -->
    <!-- トップページバナー -->
    <section class="btm-page btm-pg-cnt">
        <ol class="breadcrumb">
            <li itemprop="itemListElement">
                <a itemprop="item" href="/">
                    <span itemprop="name">ホーム</span>
                </a>
                <meta itemprop="position" content="1" />
            </li>

            <li itemprop="itemListElement">
                <a itemprop="item" href="">
                    <span itemprop="name">メニューと料金</span>
                </a>
                <meta itemprop="position" content="2" />
            </li>
        </ol>

        <div class="menu-list-all">
            <div class="menu-list-ttl">
                <div>Menu List</div>
                <h2>施術一覧</h2>
            </div>
            <p>下ボタンクリックで各施術を確認できます。</p>

            <ul>
                <li><a href="#treatment">施術</a></li>
                <li><a href="#personal">パーソナルトレーニング</a></li>
                <li><a href="#ox-capsule">酸素カプセル</a></li>
                <li><a href="#myofascialrelease">筋膜リリース</a></li>
                <li><a href="#cupping">カッピング</a></li>
            </ul>
        </div>
    </section>




    <section class="menu-cnt" id="treatment">
        <div class="menu-cnt-ttl-fl">
            <div class="menu-num-cnt">01</div>
            <div class="menu-cnt-ttl2-fl">
                <div>Treatment</div>
                <h2 class="btm-pg-ttl"><mark>施術</mark></h2>
            </div>
        </div>

        <div class="swiper">
            <!-- スライドを囲む div 要素（必須） -->
            <div class="swiper-wrapper">
                <!-- それぞれのスライドの div 要素（必須） -->
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/sejyutu/sejyutu-menu1.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/sejyutu/sejyutu-menu2.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/sejyutu/sejyutu-menu5.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/sejyutu/sejyutu-menu6.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
            </div>

            <!-- ナビゲーションボタンの div 要素（省略可能） -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>

        </div>



        <article class="menu-dtl-fl">
            <div class="menu-dtl-cnt1">
                <div class="menu-dtl">
                    当院では腰が痛いから腰だけを診るではなく、なぜ痛くなってしまうのかの原因をしっかり見極めることを大事にしています。
                    治療機器や手技で、基本的には全身調整をメインに個々の状態に適切な施術ができるよう努めています。 少しの痛みが後々ひどくなってしまうこともあります。
                    気になることがあれば早めのご来院をおすすめします。
                    首、肩、腰、膝、足痛、スポーツ障害や骨折、脱臼、捻挫、打撲、筋挫傷などの施術、一度ご相談ください。
                </div>

                <div class="disp-pcimg">
                    <small>※1 福祉医療費受給者では18歳以上の受給者は施術内容によって保険外の料金をいただくことがございます。予めご了承ください。</small>
                    <small>※2 交通事故、労災では早期回復を目的として、酸素カプセル30分を無料にてご利用いただけます。</small>
                </div>
            </div>

            <div class="menu-list menu-dtl-cnt2">
                <h3>料金目安</h3>
                <picture class="">
                    <source srcset="<?php echo $upload_dir['baseurl']; ?>/img/compression_img/pc-menu-list1.svg" media="(min-width: 767px)">
                    <img src="<?php echo $upload_dir['baseurl']; ?>/img/compression_img/menu-list1.svg">
                </picture>

            </div>

            <div class="disp-spimg disp-sp-menu">
                <small>※1 福祉医療費受給者では18歳以上の受給者は施術内容によって保険外の料金をいただくことがございます。予めご了承ください。</small>
                <small>※2 交通事故、労災では早期回復を目的として、酸素カプセル30分を無料にてご利用いただけます。</small>
            </div>

            <!-- <div class="menu-list menu-dtl-cnt2">
                        <img src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/menu-list1.svg')) ?>" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/pc-menu-list1.svg')) ?>" alt="">
                    </div> -->
        </article>
    </section>

    <section class="menu-cnt" id="personal">
        <div class="menu-cnt-ttl-fl">
            <div class="menu-num-cnt">02</div>
            <div class="menu-cnt-ttl2-fl">
                <div>Personal Training</div>
                <h2 class="btm-pg-ttl"><mark>パーソナルトレーニング</mark></h2>
            </div>
        </div>

        <div class="swiper">
            <!-- スライドを囲む div 要素（必須） -->
            <div class="swiper-wrapper">
                <!-- それぞれのスライドの div 要素（必須） -->
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/personal-training/personal-menu1.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/personal-training/personal-menu2.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/personal-training/personal-menu3.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/personal-training/personal-menu11.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/personal-training/personal-menu4.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/personal-training/personal-menu5.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
            </div>

            <!-- ナビゲーションボタンの div 要素（省略可能） -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>

        </div>




        <div class="menu-dtl-fl">
            <div class="menu-dtl-cnt1">
                <div class="menu-dtl">
                    肩こり、慢性腰痛でお困りの方、自分でカラダを変えてみませんか？ 繰り返すカラダの不調は筋肉のバランスが崩れているからかもしれません。
                    国家資格者が個々の能力に合わせ、トレーニングメニューを組んでいきます。 筋肉を鍛えて無駄になることはありません。
                    トレーニングなので辛いメニューもあるかと思いますが、将来のご自身のために、『楽しく』をモットーに一緒に痛みの出にくい、いつまでも元気に動けるカラダづくりを目指しませんか。
                </div>

            </div>

            <div class="menu-list menu-dtl-cnt2">
                <h3>料金目安</h3>
                <picture class="">
                    <source srcset="<?php echo $upload_dir['baseurl']; ?>/img/compression_img/personal-menu-pc.svg" media="(min-width: 767px)">
                    <img src="<?php echo $upload_dir['baseurl']; ?>/img/compression_img/personal-menu-sp.svg">
                </picture>
            </div>
        </div>
    </section>



    <section class="menu-cnt" id="ox-capsule">
        <div class="menu-cnt-ttl-fl">
            <div class="menu-num-cnt">03</div>
            <div class="menu-cnt-ttl2-fl">
                <div>Oxygen Capsule</div>
                <h2 class="btm-pg-ttl"><mark>酸素カプセル</mark></h2>
            </div>
        </div>
        <div class="swiper">
            <!-- スライドを囲む div 要素（必須） -->
            <div class="swiper-wrapper">
                <!-- それぞれのスライドの div 要素（必須） -->
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/ox-cupsule/ox-capsule1.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/ox-cupsule/ox-capsule9.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/ox-cupsule/ox-capsule10.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/ox-cupsule/ox-capsule11.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
            </div>

            <!-- ナビゲーションボタンの div 要素（省略可能） -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>


        </div>



        <div class="menu-dtl-fl">
            <div class="menu-dtl-cnt1">
                <div class="menu-dtl">
                    人にとって最適な酸素濃度は約30%と言われていますが、現代では大気中の酸素濃度は約21%というデータがあります。 ましてコロナ禍でのマスク生活でさらに酸素が足りていないのです。
                    なんとなく疲れが取れなかったり、すっきりしない毎日を過ごされている方はぜひお試しください。
                    また、お怪我(骨折、脱臼、捻挫、打撲)等で早期回復を目指したい方はオステオトロンVと併用でカプセルに入っていただくと早期回復が期待できます。
                </div>

            </div>
            <div class="menu-list menu-dtl-cnt2">
                <h3>料金目安</h3>
                <picture class="">
                    <source srcset="<?php echo $upload_dir['baseurl']; ?>/img/compression_img/ox-capsule-menu-pc.svg" media="(min-width: 767px)">
                    <img src="<?php echo $upload_dir['baseurl']; ?>/img/compression_img/ox-capsule-menu-sp.svg">
                </picture>
            </div>
        </div>
    </section>


    <section class="menu-cnt" id="cupping">
        <div class="menu-cnt-ttl-fl">
            <div class="menu-num-cnt">04</div>
            <div class="menu-cnt-ttl2-fl">
                <div>Cupping</div>
                <h2 class="btm-pg-ttl"><mark>カッピング</mark></h2>
            </div>
        </div>

        <div class="swiper">
            <!-- スライドを囲む div 要素（必須） -->
            <div class="swiper-wrapper">
                <!-- それぞれのスライドの div 要素（必須） -->
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/cupping/cupping01.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/cupping/cupping02.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/cupping/cupping1.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
            </div>

            <!-- ナビゲーションボタンの div 要素（省略可能） -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>


        </div>


        <div class="menu-dtl-fl">
            <div class="menu-dtl-cnt1">
                <div class="menu-dtl">
                    吸い玉療法とも言われ、悪い血、汚れた酸素、気の流れの滞りの改善を目的とした中国の伝統的な民間療法の1つとなります。 専用のカップを直接皮膚に吸い付かせ、血液の通り道を広げます。
                    血の巡りが良くなり筋肉のコリ、ハリが取れすっきり感をご体感いただけます。
                    慢性的な肩コリ、腰痛、むくみ、冷え性、筋膜リリースによる関節可動域改善、ダイエットで代謝を上げたいなどでお悩みの方はオススメです。
                    カッピングの痕は、濃さや個人差もありますが1週間から10日くらいで消えるので、施術のタイミングは十分ご注意ください。
                </div>
            </div>

            <div class="menu-list menu-dtl-cnt2">
                <h3>料金目安</h3>
                <picture class="">
                    <source srcset="<?php echo $upload_dir['baseurl']; ?>/img/compression_img/cupping-menu-pc.svg" media="(min-width: 767px)">
                    <img src="<?php echo $upload_dir['baseurl']; ?>/img/compression_img/cupping-menu-sp.svg">
                </picture>
            </div>
        </div>
    </section>

    <section class="menu-cnt" id="myofascialrelease">
        <div class="menu-cnt-ttl-fl">
            <div class="menu-num-cnt">05</div>
            <div class="menu-cnt-ttl2-fl">
                <div>Myofascial Release</div>
                <h2 class="btm-pg-ttl"><mark>IASTM(筋膜リリース)</mark></h2>
            </div>
        </div>

        <div class="swiper">
            <!-- スライドを囲む div 要素（必須） -->
            <div class="swiper-wrapper">
                <!-- それぞれのスライドの div 要素（必須） -->
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/Myofascial-Release/Myofascial-Release01.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/Myofascial-Release/Myofascial-Release02.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
                <div class="swiper-slide"><img class="swiper-lazy" data-src="<?php echo esc_url(get_theme_file_uri('/img/compression_img/Myofascial-Release/Myofascial-Release03.jpg')) ?>" alt="">
                    <div class="swiper-lazy-preloader"></div><!-- プリローダースピナー（オプション）-->
                </div>
            </div>

            <!-- ナビゲーションボタンの div 要素（省略可能） -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>

        </div>


        <div class="menu-dtl-fl">
            <div class="menu-dtl-cnt1">
                <div class="menu-dtl">
                    Instrument Assisted Soft Tissue
                    Mobilizationの略で、グラストンテクニックを代表として近年欧米にて軟部組織治療の主流テクニックの1つとして行われている金属器具を使用した治療テクニックになります。
                    当院では【スマートツール】という医療用ステンレスで作られた器具を使い、直接皮膚を擦ることで筋膜の癒着(筋膜リリース)を改善します。
                    手や治療機器では出せない刺激が入ることで水分量が増し、筋肉の滑走性が良くなるため、軽くなる感覚が得られます。
                    首の痛み、野球肘、ゴルフ肘、足底筋膜炎、腸脛靭帯炎、アキレス腱炎、シンスプリントなど、これまでなかなか改善出来なかった症状などありましたらぜひご相談ください。
                </div>

            </div>
            <div class="menu-list menu-dtl-cnt2">
                <h3>料金目安</h3>
                <picture class="">
                    <source srcset="<?php echo $upload_dir['baseurl']; ?>/img/compression_img/myofascial-release-menu-pc.svg" media="(min-width: 767px)">
                    <img src="<?php echo $upload_dir['baseurl']; ?>/img/compression_img/myofascial-release-menu-sp.svg">
                </picture>
            </div>
        </div>
    </section>



    <?php get_template_part('/template/page', 'info'); ?>
</main>




<?php get_footer(); ?>