<?php get_header(); ?>

<div class="container">
    <aside class="sidebar fw-700">
      <div class="sidebar__inner">
        <div class="sidebar__logo">
          <a class="sidebar__logo-link" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-pc (1).png" alt="青牡丹工勥店のロゴ画像">
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
                  <img src="<?php echo get_template_directory_uri(); ?>/img/mail-icon.png" alt="メールアイコン">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Firefly 木製の家の模型が机の上にある 60602 1.png" alt="事業内容のフロントビジュアル画像">
                </div>
            </div>
        </div>
        <section class="description description__c description__thanks">
          <div class="description__c-inner">
            <div class="description__left">
                <h2 class="main__title">送信完了</h2>
                <p class="main__text">
                    お問い合わせありがとうございました。<br>
                    後日担当者より返信させていただきますので、お待ち下さいませ。
                </p>
                <div class="desc__body">
                  <div class="contact__desc fc-blue">
                    <span class="contact__desc-num">
                      01
                    </span>
                    <p class="contact__desc-text">
                      入力
                    </p>
                  </div>
                  <div class="contact__desc-line"></div>
                  <div class="contact__desc bg-blue fc-white">
                    <span class="contact__desc-num">
                      02
                    </span>
                    <p class="contact__desc-text">
                      送信完了
                  </div>
                </div>
             </div>
            <div class="description__right">
              <div class="description__r-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact_01 1.png" alt="お問い合わせのフロントビジュアル画像">
              </div>
              <div class="contact__tel">
                  <p class="contact__tel-text">
                      お電話も受け付けています。
                  </p>
                  <p class="contact__tel-num heading-en">
                      0000-000-0000
                  </p>
                  <p class="contact__tel-time">
                      営業時間10:00-20:00
                  </p>
              </div>
            </div>
          </div>
        </section>
        <div class="return-top-wrapper">
          <a href="<?php echo home_url(); ?>" class="submit-link readmore bg-blue return-top submit-btn fc-white submit-btn fc-white">
            トップページに戻る
          </a>
        </div>
        <section class="contact bg-gray">
          <div class="contact__inner">
            <div class="contact__content">
              <div class="sec__title">
                <p class="sec__sub-title fw-700">お問い合わせ</p>
                <h2 class="sec__main-title heading-en">CONTACT</h2>
              </div>
              <div class="contact__body">
                <ul class="contact__list">
                  <li class="contact__item">
                    <p class="contact__big heading-en ">
                      Tel
                    </p>
                    <p class="contact__small">
                      お電話
                    </p>
                  </li>
                  <li class="contact__item">
                    <p class="contact__big heading-en ">
                      0000-000-0000
                    </p>
                    <p class="contact__small">
                      営業時間10:00-20:00
                    </p>
                  </li>
                </ul>
                <a class="contact__mail-link readmore bg-white" href="#">
                  <div class="contact__mail-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mail-icon.png" alt="メールアイコン">
                  </div>
                  メールフォームはこちら
                </a>
              </div>
            </div>
            <div class="contact__image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/financing_01.png" alt="青牡丹工勥店のお問い合わせ画像">
            </div>
          </div>
        </section>
    </main>
  </div>

<?php get_footer(); ?>