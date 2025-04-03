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
        <h2><span>メールでのお問い合わせ</span></h2>

        <form class="form-content beige-bg" action="send.php" method="post">
          <!-- お問い合わせ種類（ラジオボタン） -->
          <div class="form-group">
            <label class="required form-label">お問い合わせ種類</label>
            <div class="radio-group">
              <div>
                <input type="radio" id="service" name="inquiry_type" value="事業・サービスについて" required>
                <label for="service">事業・サービスについて</label>
              </div>

              <div>
                <input type="radio" id="recruit" name="inquiry_type" value="採用について" required>
                <label for="recruit">採用について</label>
              </div>
              <div>
                <input type="radio" id="other" name="inquiry_type" value="その他" required>
                <label for="other">その他</label>
              </div>

            </div>
          </div>

          <!-- お名前 -->
          <div class="form-group">
            <label class="required form-label" for="name">お名前</label>
            <input type="text" id="name" name="name" required>
          </div>

          <!-- ふりがな -->
          <div class="form-group">
            <label class="required form-label" for="furigana">ふりがな</label>
            <input type="text" id="furigana" name="furigana" required>
          </div>

          <!-- 電話番号 -->
          <div class="form-group">
            <label class="required form-label" for="phone">電話番号</label>
            <input type="tel" id="phone" name="phone" required>
          </div>

          <!-- メールアドレス -->
          <div class="form-group">
            <label class="required form-label" for="email">メールアドレス</label>
            <input type="email" id="email" name="email" required>
          </div>

          <!-- ご住所（任意） -->
          <div class="form-group">
            <label class="form-label optional" for="address">ご住所</label>
            <input type="text" id="address" name="address">
          </div>

          <!-- お問い合わせ内容 -->
          <div class="form-group">
            <label class="required form-label" for="message">お問い合わせ内容</label>
            <textarea id="message" name="message" rows="5" required></textarea>
          </div>
          <div class="privacy-policy">
            <p class="privacy-policy-text">下記「ウェブサイトにおける個⼈情報の取扱いについて」をご確認いただき、<br>
              よろしければ「個⼈情報の取扱いについて「同意する」にチェックをして、内容を送信してください。</p>
            <div class="privacy-policy-container gray-bg">
              <h3>個⼈情報の取扱いについて</h3>
              <div class="privacy-policy-container-text">
                <p>株式会社XXXXXXXXX（以下「当社」といいます）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。</p>
                <h4>1. プライバシーポリシーの適用範囲</h4>
                <p>プライバシーポリシーは、このウェブサイト（以下、当サイトを含むサイト）のみに適用されます。</p>
                <h4>2. 個人情報の管理</h4>
                <p>当社は、お客様の個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。</p>
                <h4>3. 個人情報の利用目的</h4>
                <p>お客様からお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
                <h4>4. 個人情報の第三者への開示・提供の禁止</h4>
                <p>当社は、お客様よりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。</p>
                <ul>
                  <li>お客様の同意がある場合</li>
                  <li>お客様が希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合</li>
                  <li>法令に基づき開示することが必要である場合</li>
                </ul>
                <h4>5. 個人情報の安全対策</h4>
                <p>当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。</p>
                <h4>6. ご本人の照会</h4>
                <p>お客様がご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。</p>
                <h4>7. 法令、規範の遵守と見直し</h4>
                <p>当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</p>
                <p>代表取締役社長　丸々　丸々</p>
                <h4>お問い合わせ</h4>
                <p>当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。</p>
                <p>株式会社〇〇</p>
                <p>〒012-3456　丸々県丸々市丸々町012-345（本社）</p>
                <p>TEL：0123-456-7890　FAX : 0123-456-7890</p>
                <p>E-mail：XXX@aaa.bb</p>
              </div>
            </div>

          </div>

          <!-- 個人情報取り扱い同意チェック -->
          <div class="form-group checkbox-group">
            <input type="checkbox" id="privacy" name="privacy" required>
            <label for="privacy">個人情報の取り扱いについて同意いたします。</label>
          </div>



          <!-- 送信ボタン -->
          <button class="nav-btn medium-btn arrow-btn-bg-white contact-btn" type="submit"><span>送信確認画面へ</span></button>


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