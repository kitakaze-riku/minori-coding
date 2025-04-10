<?php get_header(); ?>

<main>
  <section class="subheader">
    <img class="header-circle-yellow" src="<?php echo get_template_directory_uri(); ?>/images/header/circle_yellow.svg" alt="">
    <img class="header-circle-big-green" src="<?php echo get_template_directory_uri(); ?>/images/header/circle_green.svg" alt="">
    <img class="header-circle-pink" src="<?php echo get_template_directory_uri(); ?>/images/header/circle_pink.svg" alt="">

    <div class="subheader-content contact-page-top">
      <div class="subheader-content-title">
        <h2><?php the_title(); ?> </h2>
        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-parts1.svg" alt="実里の外観画像">
      </div>
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/sp-contact.png" media="(max-width: 820px)"> <img class="" src="<?php echo get_template_directory_uri(); ?>/images/common/page-contact-bg.png" alt="社員たちの様子">
      </picture>
    </div>
  </section>

  <div class="layerbg-beige ">
    <section class="rounded-bg white-bg">
      <div class="page-contact content-width-medium">
        <h2 class="display-pc"><span>お問い合わせありがとうございます。</span></h2>

        <div class="content-width-medium sp-tel-detail display-sp contact-sp-title-top">
          <div class="tel-detail-border">
            <h2 class="tel-title"><span>お問い合わせ <br>ありがとうございます</span></h2>
          </div>
        </div>

        <div class="beige-bg thanks-content">
          <p class="thanks-text">
            内容を確認のうえ、担当者より改めてご連絡いたします。<br>
            恐れ入りますが、今しばらくお待ちください。<br>
            <br>
            ご入力いただいたメールアドレス宛に、自動返信メールをお送りしております。<br>
            届いていない場合は、迷惑メールフォルダのご確認、または再度お問い合わせください。<br>
            <br>
            なお、ご返答までお時間をいただく場合がございます。<br>
            お急ぎの方は、下記までお電話にてご連絡ください。

          </p>
        </div>

      </div>
    </section>
  </div>



  <div class="page-contact content-width-medium display-pc flex-direction">
    <h2><span>電話でのお問い合わせ</span></h2>
    <div class="tel-detail layerbg-beige-blend">
      <p>お急ぎの場合はお電話でお問い合わせください。</p>
      <a href="tel:+0279-26-3162"><span>Tel.</span>0279-26-3162</a>
    </div>
  </div>

  <div class="content-width-medium sp-tel-detail display-sp sp-tel-top">
    <div class="tel-detail-border">
      <h2 class="tel-title"><span>電話での <br>お問い合わせ</span></h2>
    </div>
    <div class="tel-detail layerbg-beige-blend">
      <p>お問い合わせ・ご質問は<br>お電話またはメールフォームから</p>
      <a href="tel:+0279-26-3162"><span>Tel.</span>0279-26-3162</a>
    </div>
  </div>



</main>

<?php get_footer(); ?>