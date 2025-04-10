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
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/header/sp-recruit-top.png" media="(max-width: 820px)"> <img class="" src="<?php echo get_template_directory_uri(); ?>/images/header/recruit-top.png" alt="社員たちの様子">
      </picture>
    </div>
    <ul class="subheader-list">
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-check.svg" alt="">
        <a href="">採用メッセージ</a>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-check.svg" alt="">
        <a href="">求める人物像</a>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-check.svg" alt="">
        <a href="">先輩社員紹介</a>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-check.svg" alt="">
        <a href="">募集要項・資格</a>
      </li>
    </ul>
  </section>

  <div class="layerbg-beige">
    <section class="rounded-bg white-bg">
      <div class="page-content content-width-medium">
        <div class="page-content-left">
          <h2><span>採用メッセージ</span></h2>
        </div>
        <div class="page-content-right business-introduction">
          <h3>一緒に「心が通う介護」をつくりませんか？</h3>

          <p>
            「実里」では、入居者様やご家族様に寄り添いながら、心温まるケアを一緒に作り上げてくださる仲間を募集しています。<br>
            <br>
            私たちが大切にしているのは、「自分の家族だったらどうしてほしいか」を考えた行動です。例えば、食事やトイレのお手伝い、夜に不安を抱えた方への対応など、小さな気づきや配慮が大きな安心につながります。また、専門職や医師と連携しながら、一人ひとりに合った最善のケアを提供することも重要な役割です。<br>
            <br>
            職員同士の連携を大切にし、「お互い様」の気持ちで支え合える環境を整えています。未経験の方でも安心してスタートできるよう、しっかりサポートします。<br>
            心に寄り添う介護で、誰かの人生を豊かにするお手伝いを、私たちと一緒に始めてみませんか？
          </p>

          <img class="recruit-message" src="<?php echo get_template_directory_uri(); ?>/images/main/recruit/message.jpg" alt="">
        </div>
      </div>
    </section>
  </div>

  <section class="rounded-bg beige-bg" id="desired-person">
    <div class="page-content content-width-medium">
      <div class="page-content-left">
        <h2><span>求める人物像</span></h2>
      </div>
      <div class="page-content-right">
        <section>
          <p class="commitment-p">私たちが大切にしているのは、利用者様との関わりを楽しみ、日々の介護を心から喜びに変えられることです。以下のような想いを持つ方をお待ちしています。</p>

          <div class="desired-person">
            <div class="desired-person-item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/main/recruit/desired-person1.svg" alt="">

              <h3>介護を楽しめる方</h3>
              <p>
                利用者様との触れ合いや日々の出来事を喜びに変え、介護を心から楽しめる方を歓迎します。利用者様の笑顔や「ありがとう」の言葉が、自分自身のやりがいにつながる方にぴったりの職場です。
              </p>
            </div>
            <div class="desired-person-item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/main/recruit/desired-person2.svg" alt="">

              <h3>介護に迷いや不安を <br>感じている方</h3>
              <p>
                自分の親の介護に悩んでいる方や、介護について迷いや不安を抱えている方も大歓迎です。一緒に悩みを共有しながら解決策を探し、前向きに働ける環境があります。
              </p>
            </div>

            <div class="desired-person-item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/main/recruit/desired-person3.svg" alt="">

              <h3>子育てと <br>両立したい方</h3>
              <p>
                家庭と仕事のバランスを大切にしたい方を応援します。子育て世代の女性が多く活躍しており、家庭と両立できる柔軟な働き方が可能です。
              </p>
            </div>

            <div class="desired-person-item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/main/recruit/desired-person4.svg" alt="">

              <h3>年齢を問わず<br>挑戦したい方</h3>
              <p>
                年齢に関係なくスタッフ同士が助け合い、気兼ねなく話せる職場です。一緒に笑い合いながら、楽しく仕事に取り組めます。介護の仕事を通じて、人として成長し、自分の居場所を見つけたい方に最適です。
              </p>
            </div>

          </div>

          <section class="desired-person-vision">
            <p>
              「誰かの助けになりたい」<br>
              「利用者様の笑顔を見たい」<br>
              <span class="br-text">という気持ちがあれば、</span> <span class="br-text">私たちは全力であなたを</span>サポートします。<br>
              <span class="br-text">スタッフ同士が支え合い、</span> 笑顔が絶えない職場で一緒に働きませんか？
            </p>
            <img class="desired-person-vision-img1" src="<?php echo get_template_directory_uri(); ?>/images/main/recruit/circle1.png" alt="">
            <img class="desired-person-vision-img2" src="<?php echo get_template_directory_uri(); ?>/images/main/recruit/circle2.png" alt="">
            <img class="desired-person-vision-img3" src="<?php echo get_template_directory_uri(); ?>/images/main/recruit/circle3.png" alt="">
          </section>
        </section>
      </div>
    </div>
  </section>

  <div class="layerbg-beige-blend" id="staff">
    <section class="rounded-bg white-bg">
      <div class="page-content content-width-medium">
        <div class="page-content-left">
          <h2><span>先輩社員紹介</span></h2>
        </div>
        <div class="page-content-right">
          <div class="staff">
            <div class="staff-profile pink-bg">
              <img src="<?php echo get_template_directory_uri(); ?>/images/main/recruit/staff.png" alt="">

              <div>
                <h3> 温かい環境で利用者様に寄り添う日々 </h3>
                <p><span class="br-text">萩原さん ／</span> 看護職員（勤務年数：5年目） </p>
              </div>
            </div>
            <div class="staff-detail">
              <h3>Q. 現在のお仕事内容を教えてください</h3>
              <p>利用者様の健康状態を観察し、血圧や体温の測定、傷の処置、湿布や薬の管理などを行っています。また、介護士さんと連携して、トイレやお風呂、食事、着替えなどの介助も担当しています。月に一度の診察の際には、医師の診察補助を行い、その内容をケアマネージャーやご家族に伝えます。利用者様の便の状態や日々の様子を他のスタッフと共有するなど、チームでの連携を大切にしています。</p>
            </div>
            <div class="staff-detail">
              <h3>Q. このお仕事を選んだきっかけは何ですか？</h3>
              <p>自分の大好きだった祖父母にできなかったことを仕事にしたいという気持ちがありました。以前は病院で働いていましたが、在宅での介護がどのようなものか知りたくて、この仕事を選びました。実里を選んだ理由は、アットホームな雰囲気と、社長の介護に対する熱い志に惹かれたからです。スタッフ同士はみんな優しく、言いたいことを何でも言い合える関係で、利用者様とも気軽に話せる環境がとても心地よいです。</p>
            </div>
            <div class="staff-detail">
              <h3>Q. この仕事のやりがいは何ですか？</h3>
              <p>利用者様が笑顔を見せてくださったり、『ありがとね』と声をかけてもらえるときは本当に嬉しいです。また、病院ではできなかった、利用者様一人ひとりと寄り添い暖かい雰囲気の中で一緒に過ごせることに、在宅ならではのやりがいを感じます。<br>また、介護福祉の仕事は、看護師としての役割だけでなく、レクリエーションや体操のサポートなどもあります。まだ慣れない部分もありますが、今後はもっと積極的に関わっていきたいと思っています。</p>
            </div>

            <div class="staff-detail">
              <h3>Q. 大変なことはありますか？</h3>
              <p>利用者様の体調や機嫌が日によって違うので、その時々でどう接すればいいか悩むことがあります。特に、ご家族に利用者様の状況をどう伝えるべきか、またそれをどう受け止められるかは難しい部分です。<br>
                それでも、先輩からアドバイスをもらったり、先輩の対応を見て学びながら日々勉強しています。困ったときに助け合える環境があるので、安心して仕事ができています。</p>
            </div>
            <div class="staff-detail">
              <h3>Q. 求職者の皆さんへのメッセージ</h3>
              <p>実里は、スタッフ同士が冗談を言い合いながら助け合える、とてもアットホームな職場です。新しい方にも居心地良く感じてもらえるよう、私たち全員でサポートします。<br> 年齢の差を気にすることなくみんなで話し合いながら働けるので、不安なことがあればぜひ相談してください。温かい仲間たちと一緒に、利用者様に寄り添ったケアをしていきましょう！</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <section class="rounded-bg beige-bg requirements" id="requirements">
    <div class="page-content content-width-medium">
      <div class="page-content-left">
        <h2><span>募集要項・資格</span></h2>
      </div>
      <div class="page-content-right">

        <div>
          <div class="white-bg requirements-card">
            <div class="requirements-card-list">
              <h3>勤務地</h3>
              <div>
                <ul>
                  <li>・住宅型有料老人ホーム 実里 </li>
                  <li>・デイサービス実里</li>
                </ul>
                <p>
                  群馬県渋川市赤城町津久田266番地2
                </p><br>

                <ul>
                  <li>・デイサービスほほえみ</li>
                </ul>
                <p>
                  群馬県渋川市赤城町津久田236番地10
                </p>
              </div>
            </div>
            <div class="requirements-card-list">
              <h3>事業内容</h3>
              <div>住宅型有料老人ホームおよびデイサービス施設での介護業務</div>
            </div>
            <div class="requirements-card-list">
              <h3>勤務時間</h3>
              <div>
                <ul>
                  <li>シフト制（以下一例）</li>
                  <li>早番：07:30～16:30- </li>
                  <li>日勤：08:30～17:30-</li>
                  <li>遅番：11:00～20:00-</li>
                  <li>夜勤：17:00～翌09:00</li>
                </ul>

              </div>
            </div>

            <div class="requirements-card-list">
              <h3>応募資格</h3>
              <div>初任者研修修了者以上、または介護福祉士資格をお持ちの方（未経験者歓迎）</div>
            </div>
            <div class="requirements-card-list">
              <h3>勤務内容</h3>
              <div>
                <ul>
                  <li>- ご利用者様への日常生活支援（食事、入浴、排泄介助など）</li>
                  <li>- ご利用者様の状態把握および記録</li>
                  <li>- レクリエーションのサポート</li>
                </ul>
              </div>
            </div>
            <div class="requirements-card-list">
              <h3>給与</h3>
              <div>
                初任者研修修了者：月給180,000円～<br>
                介護福祉士：月給200,000円～<br>
                ※経験・能力に応じて決定
              </div>
            </div>
            <div class="requirements-card-list">
              <h3>手当</h3>
              <div>
                <ul>
                  <li>- 夜勤手当：8,000円/回</li>
                  <li>- 通勤手当：上限20,000円/月</li>
                  <li>- 資格手当</li>
                  <li>- 時間外手当</li>
                </ul>
              </div>
            </div>
            <div class="requirements-card-list">
              <h3>休日・休暇</h3>
              <div>
                <ul>
                  <li>- シフト制（週休2日）</li>
                  <li>- 年末年始休暇（12月30日～1月3日）</li>
                  <li>- 有給休暇（法定通り付与）</li>
                  <li>- 育児休暇・介護休暇</li>
                </ul>
              </div>
            </div>
            <div class="requirements-card-list" id="employee-benefits">
              <h3>福利厚生</h3>
              <div>
                <ul>
                  <li>・ダミーテキスト </li>
                  <li>・ダミーテキスト</li>
                  <li>・ダミーテキスト</li>
                  <li>・ダミーテキスト</li>
                </ul>
              </div>
            </div>
            <div class="requirements-card-list">
              <h3>応募方法</h3>
              <div>履歴書を下記住所まで郵送ください。<br>
                追って選考試験日程をご連絡いたします。<br>
                <br>
                〒379-1103 群馬県渋川市赤城町津久田266番地2 実里 採用担当 宛
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


</main>

<?php get_footer(); ?>