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
        <div class="fv fv-service">
            <div class="fv__blue fv__blue-about"></div>
            <div class="fv__inner">
                <div class="fv__image">
                    <img src="<?php echo esc_url( get_theme_file_uri( '/img/Firefly 木製の家の模型が机の上にある 60602 1.png' ) ); ?>" alt="事業内容のフロントビジュアル画像">
                </div>
            </div>
        </div>
        <section class="description description-service">
          <div class="description__inner">
            <div class="description__image">
              <img src="<?php echo esc_url( get_theme_file_uri( '/img/paperless_01 1.png' ) ); ?>" alt="事業内容のフロントビジュアル画像">
            </div>
            <h2 class="main__title">事業内容</h2>
            <p class="main__text">
              青牡丹工務店は、「住宅建築・リフォーム」「方針新築・リフォーム」「公共工事」の3つを事業の柱としています。ここではそれぞれご紹介します。
            </p>
            <div class="description__body">
              <a href="<?php echo home_url('/service/#services01'); ?>" class="description__link">
                住宅建築・リフォーム
                <div class="description__arrow">
                  <img src="<?php echo esc_url( get_theme_file_uri( '/img/矢印アイコン　下4 (2) 1.png' ) ); ?>" alt="下矢印画像">
                </div>
              </a>
              <a href="<?php echo home_url('/service/#services02'); ?>" class="description__link">
                法人新築・リフォーム
                <div class="description__arrow">
                  <img src="<?php echo esc_url( get_theme_file_uri( '/img/矢印アイコン　下4 (2) 1.png' ) ); ?>" alt="下矢印画像">
                </div>
              </a>
              <a href="<?php echo home_url('/service/#services03'); ?>" class="description__link">
                公共工事
                <div class="description__arrow">
                  <img src="<?php echo esc_url( get_theme_file_uri( '/img/矢印アイコン　下4 (2) 1.png' ) ); ?>" alt="下矢印画像">
                </div>
              </a>
            </div>
          </div>
        </section>
        <section class="services">
          <div class="services__inner">
            <section id="services01" class="services__block mb-70 scroll-margin-heading">
              <div class="services__image">
                <img src="<?php echo esc_url( get_theme_file_uri( '/img/works01 1.png' ) ); ?>" alt="住宅建築・リフォーム画像">
              </div>
              <div class="services__content">
                <h3 class="heading__title fw-700 mb-26">住宅建築・リフォーム</h3>
                <div class="services__desc">
                  <p class="services__title fw-700">
                    当社の住宅建築・リフォーム事業では、お客様の夢や理想を具現化するための
                    <br>サービスを提供しています。
                  </p>
                  <p class="services__text">
                    新しい家を建てる際には、お客様のニーズや希望を理解し、オーダーメイドの住宅を設計・施工します。<br>
  また、古くなったり、機能性が低下したりした建物を、新しい価値ある空間へと再生するリフォームサービスを提供しています。お客様のライフスタイルやニーズに合わせて、効率的かつリーズナブルなリフォームプランをご提案し、品質に妥協することなく施工いたします。
                  </p>
                </div>
                <div class="services__body">
                  <div class="services__item">
                    <p class="services__item-title fw-700 mb-12">
                      芦屋（兵庫県）のコテージ付き住宅
                    </p>
                    <div class="services__item-image mb-17">
                      <img src="<?php echo esc_url( get_theme_file_uri( '/img/jirei01 1.png' ) ); ?>" alt="芦屋（兵庫県）のコテージ付き住宅画像">
                    </div>
                    <p class="services__item-text">
                      施工年月：R2年2月 構造：S造
                    </p>
                  </div>
                  <div class="services__item">
                    <p class="services__item-title fw-700 mb-12">
                      鷹峯（京都府京都市）のモダン和風住宅
                    </p>
                    <div class="services__item-image mb-17">
                      <img src="<?php echo esc_url( get_theme_file_uri( '/img/jirei02 1.png' ) ); ?>" alt="鷹峯（京都府京都市）のモダン和風住宅画像">
                    </div>
                    <p class="services__item-text">
                      施工年月：R4年4月 構造：木造
                    </p>
                  </div>
                </div>
              </div>
            </section>
            <section id="services02" class="services__block mb-70 scroll-margin-heading">
              <div class="services__image">
                <img src="<?php echo esc_url( get_theme_file_uri( '/img/works02 1.png' ) ); ?>" alt="法人新築・リフォーム画像">
              </div>
              <div class="services__content">
                <h3 class="heading__title fw-700 mb-26">法人新築・リフォーム</h3>
                <div class="services__desc mb">
                  <p class="services__title fw-700">
                    当社の法人新築・リフォームサービスでは、商業施設やオフィスビル、工場など、法人向けの建物の新築や改修を手がけています。
                  </p>
                  <p class="services__text">
                    既存の商業施設やオフィス、工場などの建物を改修し、最新のビジネスニーズに適した空間へと生まれ変わらせます。設備の更新やレイアウトの見直し、外装や内装のリニューアルなど、お客様の要望に応じたリフォームプランを提案し、スムーズな工事を実施します。
                  </p>
                </div>
                <div class="services__body">
                  <div class="services__item">
                    <p class="services__item-title fw-700 mb-12">
                      株式会社kaminari station
                    </p>
                    <div class="services__item-image mb-17">
                      <img src="<?php echo esc_url( get_theme_file_uri( '/img/jirei03 1.png' ) ); ?>" alt="株式会社kaminari station画像">
                    </div>
                    <p class="services__item-text">
                      施工年月：H25年4月 構造：S造
                    </p>
                  </div>
                  <div class="services__item">
                    <p class="services__item-title fw-700 mb-12">
                      鯉登陸運(株)
                    </p>
                    <div class="services__item-image mb-17">
                      <img src="<?php echo esc_url( get_theme_file_uri( '/img/jirei04 1.png' ) ); ?>" alt="鯉登陸運(株)画像">
                    </div>
                    <p class="services__item-text">
                      施工年月：R4年3月 構造：S造
                    </p>
                  </div>
                </div>
              </div>
            </section>
            <section id="services03" class="services__block mb-72 scroll-margin-heading">
              <div class="services__image">
                <img src="<?php echo esc_url( get_theme_file_uri( '/img/works03 1.png' ) ); ?>" alt="公共工事画像">
              </div>
              <div class="services__content">
                <h3 class="heading__title fw-700 mb-26">公共工事</h3>
                <div class="services__desc mb">
                  <p class="services__title fw-700">
                    公共工事事業は、道路や橋梁、公共施設などの建設・改修を行う事業です。
                  </p>
                  <p class="services__text">
                    公共工事事業は、地域社会の発展や住民の生活に密接に関わる重要な事業です。政府や自治体からの発注が多く、厳しい品質基準や工期管理が求められます。当社では、経験豊富な専門家がチームを組み、最新の技術とノウハウを駆使して、安全で信頼性の高い公共施設の建設に貢献しています。
                  </p>
                </div>
                <div class="services__body">
                  <div class="services__item">
                    <p class="services__item-title fw-700 mb-12">
                      神戸市立真島小学校　内装工事
                    </p>
                    <div class="services__item-image mb-17">
                      <img src="<?php echo esc_url( get_theme_file_uri( '/img/jirei05 1.png' ) ); ?>" alt="神戸市立真島小学校　内装工事画像">
                    </div>
                    <p class="services__item-text">
                      施工年月：R1年3月 構造：S造
                    </p>
                  </div>
                  <div class="services__item">
                    <p class="services__item-title fw-700 mb-12">
                      枚方市立暮方郵便局
                    </p>
                    <div class="services__item-image mb-17">
                      <img src="<?php echo esc_url( get_theme_file_uri( '/img/jirei06 1.png' ) ); ?>" alt="枚方市立暮方郵便局画像">
                    </div>
                    <p class="services__item-text">
                      施工年月：R4年4月 構造：木造
                    </p>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </section>
        <?php get_template_part('template-parts/section-contact'); ?>
    </main>
  </div>

<?php get_footer(); ?>