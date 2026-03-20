<?php get_header(); ?>

<div class="container">
    <aside class="sidebar fw-700">
      <div class="sidebar__inner">
        <div class="sidebar__logo">
          <a class="sidebar__logo-link" href="<?php echo home_url(); ?>">
            <img src="<?php echo esc_url( get_theme_file_uri( '/img/logo-pc (1).png' ) ); ?>" alt="青牡丹工勥店のロゴ画像">
          </a>
        </div>
        <nav class="sidebar__nav">
          <ul class="sidebar__menu">
            <li class="sidebar__item">
              <button class="sidebar__link">私達について</button>
              <ul class="sidebar__submenu">
                <li class="sidebar__subitem">
                  <a class="sidebar__sublink" href="<?php echo home_url('/about/#philosophy'); ?>">経営理念</a>
                </li>
                <li class="sidebar__subitem">
                  <a class="sidebar__sublink" href="<?php echo home_url('/about/#company'); ?>">会社概要</a>
                </li>
                <li class="sidebar__subitem">
                  <a class="sidebar__sublink" href="<?php echo home_url('/about/#safety'); ?>">安全への取り組み</a>
                </li>
              </ul>
            </li>
            <li class="sidebar__item">
              <button class="sidebar__link">事業内容</button>
              <ul class="sidebar__submenu">
                <li class="sidebar__subitem">
                  <a class="sidebar__sublink" href="<?php echo home_url('/service/#services01'); ?>">住宅建築・リフォーム</a>
                </li>
                <li class="sidebar__subitem">
                  <a class="sidebar__sublink" href="<?php echo home_url('/service/#services02'); ?>">法人新築・リフォーム</a>
                </li>
                <li class="sidebar__subitem">
                  <a class="sidebar__sublink" href="<?php echo home_url('/service/#services03'); ?>">公共工事</a>
                </li>
              </ul>
            </li>
            <li class="sidebar__item">
              <a class="sidebar__link no-before-after" href="<?php echo home_url('/#news'); ?>">お知らせ</a>
            </li>
            <li class="sidebar__item">
              <a class="sidebar__link no-before-after sidebar__mail" href="<?php echo home_url('/contact/'); ?>">
                  <img src="<?php echo esc_url( get_theme_file_uri( '/img/mail-icon.png' ) ); ?>" alt="メールアイコン">
                  <span>
                      お問い合わせ
                  </span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <main id="main" class="main-content" role="main">
        <div class="fv fv-about">
            <div class="fv__blue fv__blue-about"></div>
            <div class="fv__inner">
                <div class="fv__image">
                    <img src="<?php echo esc_url( get_theme_file_uri( '/img/about-us 1.png' ) ); ?>" alt="私達についてのフロントビジュアル画像">
                </div>
            </div>
        </div>
        <section class="description">
          <div class="description__inner">
            <div class="description__image">
              <img src="<?php echo esc_url( get_theme_file_uri( '/img/offline-hearing_01 1.png' ) ); ?>" alt="私達についてのフロントビジュアル画像">
            </div>
            <h2 class="main__title">私達について</h2>
            <p class="main__text">
              「丁寧な家造りで、理想を現実に」<br>
              これを実現するために、わたしたちが行っていることを
              一部ご紹介します。
            </p>
            <div class="description__body">
              <a href="<?php echo home_url('/about/#philosophy'); ?>" class="description__link">
                経営理念
                <div class="description__arrow">
                  <img src="<?php echo esc_url( get_theme_file_uri( '/img/矢印アイコン　下4 (2) 1.png' ) ); ?>" alt="下矢印画像">
                </div>
              </a>
              <a href="<?php echo home_url('/about/#company'); ?>" class="description__link">
                会社概要
                <div class="description__arrow">
                  <img src="<?php echo esc_url( get_theme_file_uri( '/img/矢印アイコン　下4 (2) 1.png' ) ); ?>" alt="下矢印画像">
                </div>
              </a>
              <a href="<?php echo home_url('/about/#safety'); ?>" class="description__link">
                安全への取り組み
                <div class="description__arrow">
                  <img src="<?php echo esc_url( get_theme_file_uri( '/img/矢印アイコン　下4 (2) 1.png' ) ); ?>" alt="下矢印画像">
                </div>
              </a>
            </div>
          </div>
        </section>
        <section id="philosophy" class="philosophy mb-42 scroll-margin-heading">
          <div class="philosophy__inner">
            <h2 class="sub__title">経営理念</h2>
            <div class="philosophy__image">
              <img src="<?php echo esc_url( get_theme_file_uri( '/img/vision.png' ) ); ?>" alt="経営理念の画像">
            </div>
          </div>
        </section>
        <section id="company" class="company scroll-margin-heading">
          <div class="company__inner">
            <h2 class="sub__title">会社概要</h2>
            <div class="company__body">
              <div class="company__item">
                <p class="company__text">
                  青牡丹工務店は、1965年に創業しました。当初は小さな地域の工務店として始まりましたが、顧客志向の高いサービスと品質へのこだわりが徐々に評判を高め、地域の信頼を得ることとなりました。<br>
                  創業以来、私たちの経営理念は変わることなく、品質第一と顧客満足を常に追求することを掲げています。私たちは、建物を単なる建築物としてではなく、人々の生活や夢の実現の場として捉え、お客様の要望に応えるために最善の努力を惜しまず取り組んできました。<br>
                  その結果、地域社会だけでなく、広く多くのお客様からの信頼を得て、業績を着実に拡大させてまいりました。途中で直面した困難や挑戦もありましたが、常に創造性と革新を重視し、チーム全体で協力し合いながら、克服してまいりました。<br>
                  私たちの理念は、常に社会に貢献し、持続可能な未来を築くことにあります。地域社会や環境への配慮を大切にし、誠実な姿勢で仕事に取り組むことで、より良い社会を築いていくことを目指しています。<br>
                  今後も、お客様の声に耳を傾けながら、さらなる成長と発展を目指し、青牡丹工務店は邁進してまいります。
                </p>
              </div>
              <div class="company__item-ceo">
              <div class="company__image">
                <img src="<?php echo esc_url( get_theme_file_uri( '/img/ceo 1.png' ) ); ?>" alt="代表取締役谷垣周平の画像">
                </div>
                <div class="company__name">
                  <p class="company__name-title">代表取締役</p>
                  <p class="company__name-text fc-blue fw-700">谷垣周平</p>
                </div>
              </div>
            </div>
            <dl class="company__desc">
              <div class="company__desc-item">
                <dt class="company__desc-title fw-700">商号</dt>
                <dd class="company__desc-text">株式会社　青牡丹工務店</dd>
              </div>
              <div class="company__desc-item">
                <dt class="company__desc-title fw-700">創業</dt>
                <dd class="company__desc-text">昭和40年5月3日</dd>
              </div>
              <div class="company__desc-item">
                <dt class="company__desc-title fw-700">資本金</dt>
                <dd class="company__desc-text">2000万円</dd>
              </div>
              <div class="company__desc-item">
                <dt class="company__desc-title fw-700">従業員数</dt>
                <dd class="company__desc-text">24人</dd>
              </div>
              <div class="company__desc-item">
                <dt class="company__desc-title fw-700">営業種目</dt>
                <dd class="company__desc-text">総合建設設計施工・不動産業・倉庫業・リフォーム工事</dd>
              </div>
              <div class="company__desc-item">
                <dt class="company__desc-title fw-700">本社所在地</dt>
                <dd class="company__desc-text">〒000-0000　大阪府大阪市中央区北区南町5-6-7</dd>
              </div>
              <div class="company__desc-item">
                <dt class="company__desc-title fw-700">代表取締役</dt>
                <dd class="company__desc-text">谷垣周平</dd>
              </div>
            </dl>
          </div>
        </section>
        <section id="safety" class="safety scroll-margin-heading">
          <div class="safety__inner">
            <h2 class="sub__title">安全への取り組み</h2>
            <div class="safety__content">
              <div class="safety__item">
                <h3 class="heading__title fw-700 mb-32">経営層による安全衛生巡視</h3>
                <div class="safety__item-content">
                    <p class="safety__item-text">
                      経営層による安全衛生巡視は、当社の安全管理体制の中核を担う活動の一つです。この巡視では、経営者や上級管理職が定期的に現場を訪問し、安全な作業環境の確保や安全基準の遵守を徹底することが主な目的です。<br>
    具体的には、巡視の際には安全規則や法令の遵守状況を点検し、作業現場における危険な箇所や潜在的なリスクを特定します。また、機械や設備の安全装置が正しく機能しているかどうかも確認します。さらに、作業員に対して安全教育や指導を行い、安全意識の向上を図ります。
                  </p>
                  <div class="safety__image">
                    <img src="<?php echo esc_url( get_theme_file_uri( '/img/safety01 1.png' ) ); ?>" alt="安全への取り組みの画像">
                  </div>
                </div>
              </div>
              <div class="safety__item">
                <h3 class="heading__title fw-700 mb-32">労働災害防止への取り組み・教育体制</h3>
                <div class="safety__item-content">
                  <p class="safety__item-text">
                    労働災害の防止に向けた従業員への教育・訓練も欠かせません。新入社員や新規作業員には、安全教育プログラムを実施し、作業時の安全ルールや手順、危険な状況の認識方法などを徹底的に指導しています。さらに、定期的な安全講習会や研修を通じて、従業員の安全意識を高める取り組みを行っています。<br>
  労働災害が発生した場合には、速やかに原因究明を行い、再発防止策を迅速に実施します。また、従業員からの安全に関する意見や提案を積極的に受け付け、改善に向けた取り組みを推進しています。
                  </p>
                  <div class="safety__image">
                    <img src="<?php echo esc_url( get_theme_file_uri( '/img/safety02 1.png' ) ); ?>" alt="労働災害防止への取り組み・教育体制の画像">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php get_template_part('template-parts/section-contact'); ?>
    </main>
  </div>

<?php get_footer(); ?>