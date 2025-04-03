    <header>
        <div class="header-nav-content">
            <div class="header-logo">
                <h1>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-minori.svg" alt="実里・ほほえみ">
                    </a>
                </h1>
            </div>
            <nav class="header-nav-wrap">
                <div class="header-nav-inner">
                    <a class="header-nav-inner-top" href="<?php echo esc_url(home_url('/')); ?>">デイサービスほほえみ</a>
                    <ul class="header-nav">
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>">実里について</a></li>
                        <li><a href="<?php echo esc_url(home_url('/service')); ?>">サービス紹介</a></li>
                        <li><a href="<?php echo esc_url(home_url('/recruit')); ?>">採用情報</a></li>
                        <li><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
                        <li><a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
                    </ul>
                </div>
                <a class="nav-btn header-nav-contact" href="<?php echo esc_url(home_url('/contact')); ?>"><span>お問い合わせ</span></a>
            </nav>
        </div>

        <div class="hamburger-menu">
            <a href="/" class="sp-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/sp-logo.png" alt="実里のロゴ画像">
            </a>
            <a href="/contact" class="sp-contact">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/sp-contact.svg" alt="お問い合わせボタン">
            </a>
            <button class="hamburger" id="hamburger">
                <span></span><span></span><span></span>
            </button>
            <nav class="nav-menu" id="nav-menu">
                <ul>
                    <li class="accordion">
                        <button class="accordion-btn">
                            実里について <span class="icon">+</span>
                        </button>
                        <ul class="accordion-content">
                            <li><a href="/about#vision">理念・想い</a></li>
                            <li><a href="#">ヒストリー</a></li>
                            <li><a href="#">私たちの強み</a></li>
                            <li><a href="about/#feature">目指す姿</a></li>
                            <li><a href="/about#company">施設概要</a></li>
                        </ul>
                    </li>
                    <li class="accordion">
                        <button class="accordion-btn">
                            サービス <span class="icon">+</span>
                        </button>
                        <ul class="accordion-content">
                            <li><a href="/service#facility-overview">施設紹介</a></li>
                            <li><a href="/service#">支援内容</a></li>
                            <li><a href="/service#daily">1日の流れ</a></li>
                            <li><a href="/service#staff">従業員紹介</a></li>
                        </ul>
                    </li>
                    <li class="accordion">
                        <button class="accordion-btn">
                            採用情報 <span class="icon">+</span>
                        </button>
                        <ul class="accordion-content">
                            <li><a href="/recruit#desired-person">求める人物像</a></li>
                            <li><a href="/recruit#employee-benefits">福利厚生</a></li>
                            <li><a href="/recruit#staff">先輩社員紹介</a></li>
                            <li><a href="/recruit#requirements">募集要項</a></li>
                        </ul>
                    </li>

                    <li class="accordion">
                        <a href="/news" class="accordion-btn">
                            お知らせ <span class="icon"> <img src="<?php echo get_template_directory_uri(); ?>/images/common/right-arrow-red-2.svg" alt=""></span>
                        </a>
                    </li>

                    <li class="accordion">
                        <a href="/blog" class="accordion-btn">
                            ブログ <span class="icon"> <img src="<?php echo get_template_directory_uri(); ?>/images/common/right-arrow-red-2.svg" alt=""></span>
                        </a>
                    </li>

                    <li class="accordion">
                        <a href="/contact" class="accordion-btn">
                            お問い合わせ <span class="icon"> <img src="<?php echo get_template_directory_uri(); ?>/images/common/right-arrow-red-2.svg" alt=""></span>
                        </a>
                    </li>

                    <li class="accordion">
                        <a href="/contact" class="accordion-btn">
                            デイサービスほほえみ <span class="icon"> <img src="<?php echo get_template_directory_uri(); ?>/images/common/open_in_new-red.svg" alt=""></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>