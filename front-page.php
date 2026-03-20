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
        <div class="fv">
            <div class="fv__blue"></div>
            <div class="fv__inner">
                <div class="fv__image">
                    <img class="pc-only" src="<?php echo esc_url( get_theme_file_uri( '/img/first-view 1.png' ) ); ?>" alt="青牡丹工勥店のトップ画像">
                    <img class="sp-only" src="<?php echo esc_url( get_theme_file_uri( '/img/first-view-sp 1.png' ) ); ?>" alt="青牡丹工勥店のトップ画像">
                    <div class="fv__content fw-700">
                        <h2 class="fv__title">理想を、カタチに</h2>
                        <p class="fv__subtitle">
                            住宅購入は一生に一度あるかないかの、大きな買い物です。<br>
                            青牡丹工務店は、最高の家造りを行うスペシャリスト集団です。
                        </p>
                    </div>
                    <div class="fv__scroll">
                        <span class="fv__scrolldown fc-blue">
                            scroll down
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <section class="about">
            <div class="about__inner">
                <div class="wrapper">
                    <div class="inner bg-gray">
                      <div class="slick-slider">
                        <div class="slick-item"><img src="<?php echo esc_url( get_theme_file_uri( '/img/slide01.png' ) ); ?>" alt=""></div>
                        <div class="slick-item"><img src="<?php echo esc_url( get_theme_file_uri( '/img/slide02.png' ) ); ?>" alt=""></div>
                        <div class="slick-item"><img src="<?php echo esc_url( get_theme_file_uri( '/img/Firefly 設計図を書いてる老齢作業員 87150 1.png' ) ); ?>" alt=""></div>
                        <div class="slick-item"><img src="<?php echo esc_url( get_theme_file_uri( '/img/slide01.png' ) ); ?>" alt=""></div>
                        <div class="slick-item"><img src="<?php echo esc_url( get_theme_file_uri( '/img/slide02.png' ) ); ?>" alt=""></div>
                        <div class="slick-item"><img src="<?php echo esc_url( get_theme_file_uri( '/img/Firefly 設計図を書いてる老齢作業員 87150 1.png' ) ); ?>" alt=""></div>
                      </div>
                      <div class="about__catch">
                        <h2 class="about__catch-title bg-gray fw-700">
                          <span class="about__catch-title-blue fc-blue">丁寧な家造り</span>で<br>理想を現実に
                        </h2>
                      </div>
                      <div class="about__catch-image">
                        <img src="<?php echo esc_url( get_theme_file_uri( '/img/interview_01 1.png' ) ); ?>" alt="青牡丹工勥店の社員インタビュー画像">
                      </div>
                    </div>
                  </div>
                  <div class="about__body">
                    <div class="sec__title">
                      <p class="sec__sub-title fw-700">私達について</p>
                      <h2 class="sec__main-title heading-en">ABOUT</h2>
                    </div>
                    <p class="sec__text">
                      「丁寧な家造りで、理想を現実に」。これは私たちの約束です。青牡丹工務店が手がける家は、ただの建物ではありません。それは、お客様の暮らしや夢を支える、信頼と品質に満ちた温かな空間です。
                    </p>
                    <a class="readmore" href="<?php echo home_url('/about/'); ?>">
                      Read More
                    </a>
                  </div>
            </div>
        </section>
        <section class="service">
          <div class="service__bg bg-gray"></div>
          <div class="service__inner">
              <div class="service__header">
              <div class="sec__title service__title">
                <p class="sec__sub-title fw-700">事業内容</p>
                <h2 class="sec__main-title heading-en">SERVICE</h2>
              </div>
              <div class="service__header-image">
                <img src="<?php echo esc_url( get_theme_file_uri( '/img/contract_02 1.png' ) ); ?>" alt="青牡丹工勥店の事業内容画像">
              </div>
            </div>
            <div class="service__body">
              <div class="service__body-item">
                <div class="service__body-item-image">
                  <img src="<?php echo esc_url( get_theme_file_uri( '/img/house01 1.png' ) ); ?>" alt="住宅建築・リフォーム画像">
                </div>
                <div class="service__body-item-content">
                  <div class="service__item-header fw-700">
                    <span class="service__body-item-num heading-en fc-light-blue ml-minus-18">01</span>
                    <h3 class="service__body-item-title bg-white">住宅建築・リフォーム</h3>
                  </div>
                  <p class="service__body-item-text">
                    注文住宅では、お客様のニーズや希望に合わせて、オーダーメイドの家を提供します。私たちは、建物の設計から完成までのプロセスで、お客様と緊密に連携し、理想の暮らしを実現するための最適な解決策を提案します。
                  </p>
                  <a class="readmore" href="<?php echo home_url('/service/#services01'); ?>">
                    Read More
                  </a>
                </div>
              </div>
              <div class="service__body-item reverse">
                <div class="service__body-item-content">
                  <div class="service__item-header fw-700">
                    <span class="service__body-item-num heading-en fc-light-blue ml-minus-70">02</span>
                    <h3 class="service__body-item-title bg-white">法人新築・リフォーム</h3>
                  </div>
                  <p class="service__body-item-text">
                    法人新築では、商業施設やオフィスビル、工場など、さまざまなニーズに応じた建物の新築を手がけています。お客様のビジネスの要件やイメージに合わせて、効率的で機能的な建物を設計・施工します。
                  </p>
                  <a class="readmore" href="<?php echo home_url('/service/#services02'); ?>">
                    Read More
                  </a>
                </div>
                <div class="service__body-item-image">
                  <img src="<?php echo esc_url( get_theme_file_uri( '/img/house02 1.png' ) ); ?>" alt="法人新築・リフォーム画像">
                </div>
              </div>
              <div class="service__body-item">
                <div class="service__body-item-image">
                  <img src="<?php echo esc_url( get_theme_file_uri( '/img/house03 1.png' ) ); ?>" alt="公共工事画像">
                </div>
                <div class="service__body-item-content">
                  <div class="service__item-header fw-700">
                    <span class="service__body-item-num heading-en fc-light-blue ml-minus-18">03</span>
                    <h3 class="service__body-item-title bg-white">公共工事</h3>
                  </div>
                  <p class="service__body-item-text">
                    公共工事では、道路や橋梁、公共施設など、地域社会に欠かせないインフラや施設の建設・改修を行います。私たちは、公共の福祉と安全を考慮しながら、厳格な規制や基準に適合した施工を行います。
                  </p>
                  <a class="readmore" href="<?php echo home_url('/service/#services03'); ?>">
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section> 
        <section id="news" class="news scroll-margin-heading">
        <div class="news__inner">
          <div class="sec__title sec__news-title">
            <p class="sec__sub-title fw-700">お知らせ</p>
            <h2 class="sec__main-title heading-en">NEWS</h2>
          </div>

          <ul class="news__list">
            <?php
            $news_query = new WP_Query([
              'post_type'      => 'news',
              'posts_per_page' => 3,
              'post_status'    => 'publish',
              'orderby'        => 'date',
              'order'          => 'DESC',
            ]);
            ?>

            <?php if ($news_query->have_posts()) : ?>
              <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                <?php
                $post_id = get_the_ID();
                $terms   = get_the_terms($post_id, 'news-cat');
                $term_name = '';

                if (!empty($terms) && !is_wp_error($terms)) {
                  $term_name = $terms[0]->name;
                }
                ?>

                <li class="news__item">
                  <button
                    type="button"
                    class="news__link js-open"
                    data-target="modal-<?php echo esc_attr($post_id); ?>"
                    aria-expanded="false"
                    aria-controls="modal-<?php echo esc_attr($post_id); ?>"
                  >
                  <div class="news__header fc-blue">
                    <?php if ($term_name) : ?>
                      <span class="news__badge">
                        <?php echo esc_html($term_name); ?>
                      </span>
                    <?php endif; ?>

                    <span class="news__date">
                      <?php echo esc_html(get_the_date('Y.m.d')); ?>
                    </span>
                  </div>

                    <h3 class="news__title lh-18">
                      <?php the_title(); ?>
                    </h3>

                    <div class="news__arrow">
                      <img
                        src="<?php echo esc_url( get_theme_file_uri( '/img/arrow-icon-right.png' ) ); ?>"
                        alt="右矢印画像"
                      >
                    </div>
                  </button>

                  <!-- モーダル -->
                  <div
                    id="modal-<?php echo esc_attr($post_id); ?>"
                    class="modal hidden js-modal"
                    aria-hidden="true"
                  >
                    <div class="modal__overlay js-close"></div>

                    <div
                      class="modal__content"
                      role="dialog"
                      aria-modal="true"
                      aria-labelledby="modal-title-<?php echo esc_attr($post_id); ?>"
                    >
                      <button type="button" class="modal__batsu js-close" aria-label="閉じる">
                        <img
                          src="<?php echo esc_url( get_theme_file_uri( '/img/細いバツのアイコン (1) 1.png' ) ); ?>"
                          alt="閉じる"
                        >
                      </button>

                      <div class="modal__scroll">
                        <div class="modal__header fc-blue">
                          <?php if ($term_name) : ?>
                            <span class="news__badge">
                              <?php echo esc_html($term_name); ?>
                            </span>
                          <?php endif; ?>

                          <span class="news__date">
                            <?php echo esc_html(get_the_date('Y.m.d')); ?>
                          </span>
                        </div>

                        <h3
                          id="modal-title-<?php echo esc_attr($post_id); ?>"
                          class="modal__title"
                        >
                          <?php the_title(); ?>
                        </h3>

                        <div class="modal__body">
                          <?php if (has_post_thumbnail()) : ?>
                            <div class="modal__image">
                              <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
                            </div>
                          <?php endif; ?>

                          <div class="modal__text">
                            <?php the_content(); ?>
                          </div>
                        </div>
                         <button type="button" class="readmore modal__close js-close">
                          閉じる
                        </button>
                      </div>

          
                    </div>
                  </div>
                </li>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php else : ?>
              <li class="news__item">
                <p>現在、お知らせはありません。</p>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </section>
        
      <?php get_template_part('template-parts/section-contact'); ?>
    </main>
  </div>

<?php get_footer(); ?>