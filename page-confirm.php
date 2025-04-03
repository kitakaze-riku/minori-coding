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
      <img class="" src="<?php echo get_template_directory_uri(); ?>/images/common/page-contact-bg.png" alt="社員たちの様子">
    </div>
    <ul class="subheader-list">
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-check.svg" alt="">
        <a href="">メールでのお問い合わせ </a>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-check.svg" alt="">
        <a href="">電話でのお問い合わせ</a>
      </li>
    </ul>
  </section>

  <div class="layerbg-beige ">
    <section class="rounded-bg white-bg">
      <div class="page-contact content-width-medium">
        <h2><span>送信内容のご確認</span></h2>

        <form class="form-content beige-bg" action="confirm.php" method="post">
          <!-- お問い合わせ種類（ラジオボタン） -->
          <div class="form-group form-confirm-group">
            <label>お問い合わせ種類</label>
            <div>
              事業・サービスについて
            </div>
          </div>

          <!-- お名前 -->
          <div class="form-group form-confirm-group">
            <label>お名前</label>
            <div>
              苗字名前
            </div>
          </div>

          <!-- ふりがな -->
          <div class="form-group form-confirm-group">
            <label>ふりがな</label>
            <div>
              みょうじ　なまえ
            </div>
          </div>
          <!-- ふりがな -->
          <div class="form-group form-confirm-group">
            <label>電話番号</label>
            <div>
              012-3456-7890
            </div>
          </div>
          <!-- ふりがな -->
          <div class="form-group form-confirm-group">
            <label>メールアドレス</label>
            <div>
              example@example.com
            </div>
          </div>
          <!-- ふりがな -->
          <div class="form-group form-confirm-group">
            <label>ご住所</label>
            <div>
              東京都新宿区テスト町1丁目2-3 テストマンション101号室
            </div>
          </div>

          <!-- ふりがな -->
          <div class="form-group form-confirm-group">
            <label>お問い合わせ内容</label>
            <div>
              お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。
            </div>
          </div>

          <!-- ふりがな -->
          <div class="form-group form-confirm-group">
            <label>個人情報の取り扱い</label>
            <div>
              同意する
            </div>
          </div>

          <!-- 送信ボタン -->
          <button class="nav-btn medium-btn arrow-btn-bg-white contact-btn form-confirm-group-btn" type="submit"><span>送信する</span></button>
        </form>

      </div>
    </section>
  </div>



  <div class="page-contact content-width-medium">
    <h2><span>電話でのお問い合わせ</span></h2>
    <div class="tel-detail layerbg-beige-blend">
      <p>お急ぎの場合はお電話でお問い合わせください。</p>
      <a href="tel:+0279-26-3162"><span>Tel.</span>0279-26-3162</a>
    </div>
  </div>




</main>

<?php get_footer(); ?>