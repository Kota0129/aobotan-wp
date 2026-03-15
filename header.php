<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?>
  <script>
  if (sessionStorage.getItem('isFirstLoad')) {
    document.documentElement.classList.add('is-second-load');
  }
  </script>

  <!-- Google Fonts の事前接続で高速化 使用時のみ有効化-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<!-- <body <?php body_class(['page-top','is-loading']); ?>> -->
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- <div id="loading">
    <div class="kvArea" id="loading_box">
      <div class="img_box">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-pc (1).png" alt="青牡丹工務店のロゴ画像">
      </div>
    </div>
  </div> -->
  <header class="header" role="banner">
    <div class="header__inner">
      <h1 class="header__logo">
        <a class="header__logo-link" href="index.html">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-pc (1).png" alt="青牡丹工勥店のロゴ画像">
        </a>
      </h1>
      <div class="header__nav-wrapper">
      <nav class="header__nav" aria-label="グローバルナビ">
        <ul class="header__list">
          <li class="header__item">
            <a class="header__link" href="<?php echo home_url(); ?>">トップページ</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="<?php echo home_url('/about/'); ?>">私達について</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="<?php echo home_url('/about/#philosophy'); ?>">経営理念</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="<?php echo home_url('/about/#company'); ?>">会社概要</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="<?php echo home_url('/about/#safety'); ?>">安全への取り組み</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="<?php echo home_url('/service/'); ?>">事業内容</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="<?php echo home_url('/service/#services01'); ?>">住宅建築・リフォーム</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="<?php echo home_url('/service/#services02'); ?>">法人新築・リフォーム</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="<?php echo home_url('/service/#services03'); ?>">公共工事</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="<?php echo home_url('/#news'); ?>">お知らせ</a>
          </li>
          <li class="header__item">
            <a class="header__link header__mail-link" href="<?php echo home_url('/contact/'); ?>">
              お問い合わせ
            </a>
          </li>
          </ul>
        </nav>
        <p class="header__copy">
          © AOBOTAN INC.
        </p>
      </div>
      <div class="btn-trigger" id="btn" aria-label="メニューを開く" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </header>