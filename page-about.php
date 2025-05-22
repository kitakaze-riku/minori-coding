<?php get_header(); ?>

<main>
  <section class="subheader">
    <img class="header-circle-yellow" src="<?php echo get_template_directory_uri(); ?>/images/header/circle_yellow.svg" alt="">
    <picture class="header-circle-big-green">
      <source srcset="<?php echo get_template_directory_uri(); ?>/images/header/sp-circle_green.svg" media="(max-width: 820px)"> <img class="header-circle-big-green" src="<?php echo get_template_directory_uri(); ?>/images/header/circle_green.svg" alt="">
    </picture>
    <!-- <img class="header-circle-big-green" src="<?php echo get_template_directory_uri(); ?>/images/header/circle_green.svg" alt=""> -->
    <img class="header-circle-pink" src="<?php echo get_template_directory_uri(); ?>/images/header/circle_pink.svg" alt="">

    <div class="subheader-content">
      <div class="subheader-content-title fadein-up delay-4 delay-wait-2">
        <h2><?php the_title(); ?> </h2>
        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-parts1.svg" alt="">
      </div>
      <picture class="fadein-up delay-4 delay-wait-2">
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/header/sp-about-top.png" media="(max-width: 820px)"> <img src="<?php echo get_template_directory_uri(); ?>/images/header/about-top.png" alt="実里の外観">
      </picture>

    </div>
    <ul class="subheader-list fadein-up delay-4 delay-wait-2">
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-check.svg" alt="">
        <a href="#greeting">ごあいさつ</a>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-check.svg" alt="">
        <a href="#feature">実里の特徴</a>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-check.svg" alt="">
        <a href="#company">会社概要</a>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-check.svg" alt="">
        <a href="#access">アクセス</a>
      </li>
    </ul>
  </section>

  <div class="layerbg-beige" id="greeting">
    <section class="rounded-bg white-bg fadein-up delay-4 delay-wait-3">
      <div class="page-content  content-width-medium">
        <div class="page-content-left">
          <h2><span>ごあいさつ</span></h2>
        </div>
        <div class="page-content-right greeting-content-right">
          <h3><span class="br-text">「みんながまあるく</span>いられる幸せ」を目指して</h3>

          <p>
            赤城山麓に囲まれた自然豊かな「実里」では、皆さまに穏やかで心安らぐ時間をお過ごしいただけるよう、スタッフ一同、心を込めてお手伝いしております。<br><br>

            「みんながまあるくいられることが幸せだいね」 これはあるご利用者様が、いつも私たちに伝えてくださった温かい言葉です。この思いを大切に、「実里」は入居者様、ご家族様、そして働くスタッフすべての人がまあるい心で過ごせる場所を目指しています。<br>
            <br>
            自然の中でゆったりと過ごし、皆様が「我が家」のような安心感を感じられる時間を提供できるよう、これからも努力を続けてまいります。<br>
            <br>
            <span>
              代表取締役 角田 明美
            </span>
            <img class="fadein-up delay-4 delay-wait-5" src="<?php echo get_template_directory_uri(); ?>/images/main/about-img.jpg" alt="代表取締役：角田明美">
          </p>
        </div>
      </div>
    </section>
  </div>

  <section class="rounded-bg beige-bg fadein-up delay-4 delay-wait-2" id="feature">
    <div class="page-content content-width-medium">
      <div class="page-content-left">
        <h2><span>実里の特徴</span></h2>
      </div>
      <div class="page-content-right">
        <section class="page-feature fadein-up delay-4 delay-wait-5">
          <h3>「わが家」で過ごすような安心感と喜びを提供します</h3>
          <p>
            「実里」は、入居者様にとって安心して暮らせる「わが家」のような存在でありたいと考えています。私たち職員は、ご入居者様やご家族様の思いに寄り添い、一人ひとりに合った生活をサポートすることで、「嬉しい」「楽しい」と感じられる毎日を創り出します。
          </p>
        </section>
        <section class="page-vision fadein-up delay-4 delay-wait-5" id="vision">
          <span>
            企業理念
          </span>
          <h3>
            生きていることへの喜びを感じ<br>
            幸せを感じてもらえるようお手伝いする
          </h3>
          <img class="page-vision-img1" src="<?php echo get_template_directory_uri(); ?>/images/main/about-img2.png" alt="">
          <img class="page-vision-img2" src="<?php echo get_template_directory_uri(); ?>/images/main/about-img3.png" alt="">
          <img class="page-vision-img3" src="<?php echo get_template_directory_uri(); ?>/images/main/about-img4.png" alt="">
          <ul>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/main/red-circle.svg" alt="">
              <div>保険、医療、福祉との連携を密にして地域に根ざした 介護を提供</div>
            </li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/main/red-circle.svg" alt="">
              <div>スタッフ一人ひとりが、入居者様・ご家族様を大切に思い共に幸せを感じられるようサービスの質にこだわり追求を続ける</div>
            </li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/main/red-circle.svg" alt="">
              <div>敬意をもって接し、信頼・安心して生活していただける空間の提供</div>
            </li>
          </ul>
        </section>
        <section class="care-services fadein-up delay-4 delay-wait-5">
          <h3>こだわりのケア</h3>

          <ul class="care-services-list">
            <li>
              <h4><span>01</span>「その人らしさ」を大切にした暮らし</h4>

              実里では、個室のレイアウトを自由に変更できるなど、入居者様が自分らしく過ごせる工夫をしています。心地よい「我が家」のような空間で、職員が一人ひとりに寄り添ったケアを提供します。
            </li>
            <li>
              <h4><span>02</span>ペットも家族。温もりと笑顔あふれる施設</h4>

              実里では看板犬たちが家族の一員として、入居者様や地域の方々に愛されています。犬たちとの交流が生む温かな雰囲気の中、利用者様が安心して過ごせる時間を提供します。
            </li>
            <li>
              <h4><span>03</span>食事へのこだわり</h4>
              地元からいただいた新鮮な野菜を活用し、手作りで季節感あふれる食事を提供。利用者様のリクエストにも柔軟に対応し、食事が楽しみになる時間を作ります。
            </li>
          </ul>
        </section>
      </div>
    </div>
  </section>

  <div class="layerbg-beige-blend " id="company">
    <section class="rounded-bg company fadein-up delay-4 delay-wait-2">
      <div class="page-content content-width-medium">
        <div class="page-content-left">
          <h2><span>会社概要</span></h2>
        </div>
        <div class="page-content-right">

          <section class="company-overview">

            <div class="info-item">
              <h3>施設名</h3>
              <p>住宅型有料老人ホーム 実里、デイサービス 実里</p>
            </div>

            <div class="info-item">
              <h3>理念</h3>
              <p>生きていることへの喜びを感じ、幸せを感じてもらえるようお手伝いする</p>
            </div>

            <div class="info-item">
              <h3>運営会社</h3>
              <p>株式会社 実里</p>
            </div>

            <div class="info-item">
              <h3>設立</h3>
              <p>2006年（平成18年）</p>
            </div>

            <div class="info-item">
              <h3>代表者</h3>
              <p>代表取締役 角田 明美</p>
            </div>

            <div class="info-item">
              <h3>所在地</h3>
              <p>〒379-1103 群馬県渋川市赤城町津久田266-2</p>
            </div>

            <div class="info-item">
              <h3>連絡先</h3>
              <p>Tel. 0279-26-3162<br>Fax. 0279-26-3163</p>
            </div>

            <div class="info-item">
              <h3>事業内容</h3>
              <ul>
                <li>住宅型有料老人ホーム</li>
                <li>デイサービス事業</li>
                <span>
                  <li>地域密着型通所介護</li>
                  <li>介護予防・日常生活支援総合事業</li>
                </span>
              </ul>
            </div>

            <div class="info-item">
              <h3>運営方針</h3>
              <p>入居者様やご家族様、職員全員が安心して暮らせる「我が家」のような空間を目指します。</p>
            </div>

            <div class="info-item">
              <h3>行動指針</h3>
              <ul>
                <li>入居者様がその人らしい生活を送れるよう多様なサービスを提供します。</li>
                <li>仕事に誇りと自覚を持ち、行動します。</li>
                <li>自己研鑽を続け、新しい挑戦を続けます。</li>
                <li>職員間の連携を大切にし、和を尊重します。</li>
              </ul>
            </div>
          </section>
        </div>
      </div>
    </section>
  </div>

  <section class="rounded-bg beige-bg fadein-up delay-4 delay-wait-2" id="access">
    <div class="page-content content-width-medium">
      <div class="page-content-left">
        <h2><span>アクセス</span></h2>
      </div>
      <div class="page-content-right access">
        <div class="access-content">
          <div class="access-item">
            <h3>住所</h3>
            <p>群馬県渋川市赤城町津久田266-2</p>
          </div>
          <div class="access-item">
            <h3>交通手段</h3>
            <div class="access-item-detail">
              <div>
                <span>公共交通機関でお越しの場合</span>
                <div>JR上越線「敷島駅」から徒歩約25分、タクシーで約5分。</div>
              </div>
              <div>
                <span>お車でお越しの場合</span>
                <div>関越自動車道「赤城インターチェンジ」より車で約4分。</div>
              </div>
            </div>
          </div>
          <div class="access-content-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6425.35996538536!2d139.03940080225482!3d36.54770458552172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601e5e02e39558f7%3A0x88b52bd2384da59f!2z44CSMzc5LTExMDMg576k6aas55yM5riL5bed5biC6LWk5Z-O55S65rSl5LmF55Sw77yS77yW77yW4oiS77yS!5e0!3m2!1sja!2sjp!4v1742256323971!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class=" layerbg-beige-blend fadein-up delay-4 delay-wait-2">
    <div class="rounded-bg slider">
      <div class="slider-wrap">
        <div class="slider-track">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/main/slide/slider-sp.png" media="(max-width: 820px)"> <img src="<?php echo get_template_directory_uri(); ?>/images/main/slide/slider.png" alt="サービス・施設の様子・実里の小さな家族たちのギャラリー">
          </picture>
        </div>
      </div>

    </div>
</main>

<?php get_footer(); ?>