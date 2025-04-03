<?php get_header(); ?>

<main>
  <section class="subheader">
    <img class="header-circle-yellow" src="<?php echo get_template_directory_uri(); ?>/images/header/circle_yellow.svg" alt="">
    <img class="header-circle-big-green" src="<?php echo get_template_directory_uri(); ?>/images/header/circle_green.svg" alt="">
    <img class="header-circle-pink" src="<?php echo get_template_directory_uri(); ?>/images/header/circle_pink.svg" alt="">

    <div class="subheader-content">
      <div class="subheader-content-title">
        <h2><?php the_title(); ?> </h2>
        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-parts1.svg" alt="実里の外観画像">
      </div>
      <img class="" src="<?php echo get_template_directory_uri(); ?>/images/header/page-service1.jpg" alt="実里のサービス風景">
    </div>
    <ul class="subheader-list service-list">
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-check.svg" alt="">
        <a href="#business">事業紹介</a>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-check.svg" alt="">
        <a href="">実里のこだわり</a>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-check.svg" alt="">
        <a href="">施設紹介</a>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-check.svg" alt="">
        <a href="">1日の流れ</a>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-check.svg" alt="">
        <a href="">スタッフ紹介</a>
      </li>
    </ul>
  </section>

  <div class="layerbg-beige" id="business">
    <section class="rounded-bg white-bg">
      <div class="page-content content-width-medium">
        <div class="page-content-left">
          <h2><span>事業紹介</span></h2>
        </div>
        <div class="page-content-right business-introduction">
          <h3>「実里」は、以下の2つの事業を運営しています</h3>

          <p>
            「実里」は、入居者様にとって安心して暮らせる「わが家」のような存在でありたいと考えています。私たち職員は、ご入居者様やご家族様の思いに寄り添い、一人ひとりに合った生活をサポートすることで、「嬉しい」「楽しい」と感じられる毎日を創り出します。
          </p>

          <div class="business-introduction-content">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/top-commitment1.jpg" alt="">
              <h4>住宅型有料老人ホーム 実里 </h4>
              <p>高齢者の自立と尊厳を大切にし、安心できる「わが家」のような暮らしを提供します。</p>
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/daily3.jpg" alt="">
              <h4>デイサービス 実里 </h4>
              <p>ご自宅での生活を続けたい高齢者をサポートするための在宅支援サービスです</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <section class="rounded-bg beige-bg">
    <div class="page-content content-width-medium">
      <div class="page-content-left">
        <h2><span>実里のこだわり</span></h2>
      </div>
      <div class="page-content-right">
        <section>
          <p class="commitment-p">「実里」のサービスは、ご利用者様の心と体に寄り添い、安心して過ごせる環境を提供します。</p>

          <div class="commitment">
            <div class="commitment-item">
              <div class="commitment-item-left">
                <h3>その人らしさを尊重したケア</h3>
                <p>
                  「実里では、入居者様一人ひとりのニーズや生活スタイルを大切にし、自分らしく過ごせる環境を整えています。個室のレイアウトは自由に変更可能で、ご本人の希望に応じた空間作りをサポートします。きめ細やかなケアで、「我が家」のような安心感を提供します。
                </p>
              </div>
              <div class="commitment-item-right">
                <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/commitment1.jpg" alt="">
              </div>
            </div>
            <div class="commitment-item">
              <div class="commitment-item-left">
                <h3>季節を感じる食事へのこだわり</h3>
                <p>
                  季節感を大切にした手作りの食事をご提供しています。栄養バランスに配慮しながら、利用者様のリクエストにも柔軟に対応しています。また、地元の方から新鮮な野菜をいただくこともあり、心を込めた料理で毎日の食事が楽しみになるよう工夫しています
                </p>
              </div>
              <div class="commitment-item-right">
                <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/commitment2.jpg" alt="">
              </div>
            </div>
            <div class="commitment-item">
              <div class="commitment-item-left">
                <h3>多彩なレクリエーション</h3>
                <p>
                  季節ごとのイベントや体操を中心に、利用者様の希望に応じた活動を提供しています。一人ひとりが楽しく過ごせる時間を大切にし、日々の生活にメリハリを加える工夫をしています。
                </p>
              </div>
              <div class="commitment-item-right">
                <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/commitment3.jpg" alt="">
              </div>
            </div>
            <div class="commitment-item">
              <div class="commitment-item-left">
                <h3>地域に愛される施設</h3>
                <p>
                  実里の看板犬たちは、入居者様だけでなく地域の方々にも親しまれる存在です。近所の方が訪れ、犬たちと触れ合う姿が見られるなど、地域との温かな交流が日常に溶け込んでいます。施設全体が、地域社会から信頼される温かい場所を目指しています。
                </p>
              </div>
              <div class="commitment-item-right">
                <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/commitment4.jpg" alt="">
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>

  <div class="layerbg-beige-blend" id="facility-overview">
    <section class="rounded-bg white-bg">
      <div class="page-content content-width-medium">
        <div class="page-content-left">
          <h2><span>施設紹介</span></h2>
        </div>
        <div class="page-content-right">


          <section class="">

            <p>「実里」では、安心して快適にお過ごしいただけるよう、以下の施設をご用意しています。</p>

            <div class="facility-overview">

              <div class="facility-overview-item">
                <div class="">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/service-detail1.jpg" alt="">
                  <h3>リビングルーム</h3>
                  <p>中庭からの陽当たりがよく、広々とした空間でお食事や休憩などのんびりと過ごせます。</p>
                </div>
                <div class="">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/service-detail2.jpg" alt="">
                  <h3>ドッグラン</h3>
                  <p>広々としたドッグランに４匹のワンちゃんが遊んでいます。地域の人々や子供達も遊びに来ます。</p>
                </div>
              </div>

              <div class="facility-overview-item">
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/service-detail3.jpg" alt="">
                  <h3>個室</h3>
                  <p>お好きな家具家電、カーテンなど持ち込み可能です！おウチと同じように過ごしていただけます。</p>
                </div>
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/service-detail4.jpg" alt="">
                  <h3>中庭</h3>
                  <p>全部屋から陽が当たるように施設の中央に位置しているリゾート感がある中庭です。</p>
                </div>
              </div>

              <div class="facility-overview-item">

                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/service-detail5.jpg" alt="">
                  <h3>浴室</h3>
                  <p>衛生面、安全面に配慮した設計で、なるべく自分でできるように手すりを配置しています。</p>
                </div>
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/service-detail6.jpg" alt="">
                  <h3>廊下</h3>
                  <p>広々とした開放感のある廊下。高い天井を斜めにデザインされていてホテルのような廊下です。</p>
                </div>
              </div>

              <div class="facility-overview-item">
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/service-detail7.jpg" alt="">
                  <h3>脱衣所</h3>
                  <p>プライバシーに配慮した、カーテンの配置で安心してご入浴できます。</p>
                </div>
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/service-detail8.jpg" alt="">
                  <h3>トイレ</h3>
                  <p>広い入口でゆったりとしたトイレ。常に綺麗に清潔に保たれています。</p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
  </div>

  <section class="rounded-bg beige-bg" id="daily">
    <div class="page-content content-width-medium">
      <div class="page-content-left">
        <h2><span>1日の流れ</span></h2>
      </div>
      <div class="page-content-right">

        <div class="daily">
          <div class="white-bg daily-schedule">
            <h3>入居者様</h3>
            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span1" class="daily-schedule-detail-span1">5：30～7：00</span>
              <p>起床</p>
            </div>
            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span1">6：30～7：30</span>
              <p>朝食</p>
            </div>
            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span1">10：00～</span>
              <p>おやつ、お茶</p>
            </div>

            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span1">11：30～12：30</span>
              <p>昼食</p>
            </div>

            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span1">13：00～</span>
              <p>静養</p>
            </div>
            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span1">14：00～</span>
              <p>集団体操</p>
            </div>
            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span1">15：00～</span>
              <p>おやつ、お茶</p>
            </div>
            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span1">17：30～18：30</span>
              <p>夕食</p>
            </div>
            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span1">21：00</span>
              <p>就寝</p>
            </div>
          </div>
          <div class="white-bg daily-schedule">
            <h3>デイサービス</h3>
            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span2">8：00～</span>
              <p>お迎え</p>
            </div>
            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span2">8：45～</span>
              <p>健康チェック</p>
            </div>
            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span2">9：30～</span>
              <p>お風呂</p>
            </div>

            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span2">10：30～</span>
              <p>個別機能訓練</p>
            </div>
            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span2">11：30～</span>
              <p>昼食</p>
            </div>
            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span2">13：00～</span>
              <p>静養</p>
            </div>
            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span2">14：00～</span>
              <p>健康チェック</p>
            </div>
            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span2">14：15～</span>
              <p>集団活動</p>
            </div>
            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span2">15：30～</span>
              <p>おやつ、お茶</p>
            </div>
            <div class="daily-schedule-detail">
              <span class="daily-schedule-detail-span2">15：50～</span>
              <p>終了</p>
            </div>
          </div>
        </div>
        <div class="daily-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/daily1.jpg" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/daily2.jpg" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/daily3.jpg" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/daily4.jpg" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/daily5.jpg" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/daily6.jpg" alt="">
        </div>
      </div>
    </div>
  </section>

  <div class="layerbg-beige-blend" id="staff">
    <section class="rounded-bg white-bg">
      <div class="page-content content-width-medium">
        <div class="page-content-left">
          <h2><span>従業員紹介</span></h2>
        </div>
        <div class="page-content-right">
          <div class="staff">
            <div class="staff-profile pink-bg">
              <img src="<?php echo get_template_directory_uri(); ?>/images/main/service/staff.png" alt="">

              <div>
                <h3> 利用者様とご家族に寄り添い続けて11年 </h3>
                <p>狩野さん／相談員（勤務年数：11年目） </p>
              </div>
            </div>
            <div class="staff-detail">
              <h3>お仕事内容とやりがいについて</h3>
              <p>ケアマネージャーさんへの利用者様の状態報告や、入居希望の方への施設案内、見学対応を主に行っています。また、担当者会議に参加し利用者様のケアプランについて話し合ったり、デイサービスのお手伝いをすることもあります。<br>
                この施設で11年働いていますが、利用者様やスタッフとの信頼関係の中で仕事を続けられるのが、私にとってのやりがいです。特に、利用者様が家族の前では見せない表情や本音を私たちに見せてくださったり、ご家族から『ここにお願いしてよかった』と言われると、この仕事を選んで良かったと心から感じます。</p>
            </div>
            <div class="staff-detail">
              <h3>施設の特徴や大切にしていること</h3>
              <p>実里の特徴はスタッフ同士の仲が良く、助け合いながら働ける職場です。また、利用者様同士もお互いに声をかけたり、励まし合ったりと、思いやりのある関係が築かれています。この温かい雰囲気が、私たちの施設の一番の魅力だと思います。<br>
                利用者様やご家族に寄り添い、一人ひとりに合ったケアを心がけながら、安心して過ごせる場所を提供し続けていきたいです。</p>
            </div>
            <div class="staff-detail">
              <h3>メッセージ</h3>
              <p>介護の悩みは、一人で抱え込んでしまいがちですが、まずはお気軽にご相談ください。見学やお話だけでも大歓迎です。私たちが少しでもお役に立てれば嬉しいです。これからも利用者様とそのご家族に寄り添いながら、信頼される施設であり続けたいと思っています。</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>