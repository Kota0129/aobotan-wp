<footer class="footer" role="contentinfo">
    <div class="footer__wrapper">
      <div class="footer__bg"></div>
      <div class="footer__inner">
        <div class="footer__content">
          <div class="footer__heading">
            <div class="footer__logo">
              <img src="<?php echo esc_url( get_theme_file_uri( '/img/logo-pc (1).png' ) ); ?>" alt="青牡丹工勥店のロゴ画像">
            </div>
            <address class="footer__address">
              <p class="footer__address-text pc-only">〒000-0000　大阪府大阪市中央区北区南町5-6-7</p>
              <p class="footer__address-text sp-only">〒000-0000</p>
              <p class="footer__address-text sp-only">大阪府大阪市中央区北区南町5-6-7</p>
              <p class="footer__address-text">営業時間　10:00~20:00</p>
              <p class="footer__address-text">定休日　日曜日、祝日、年末年始（12月31日から1月3日まで）</p>
            </address>
          </div>
          <nav class="footer__body">
            <ul class="footer__list">
              <li class="footer__item">
                <a class="footer__link" href="<?php echo home_url(); ?>">
                  トップページ
                </a>
              </li>
              <li class="footer__item">
                <a class="footer__link" href="<?php echo home_url('/about/'); ?>">
                  私達について
                </a>
              </li>
              <li class="footer__item">
                <a class="footer__link" href="<?php echo home_url('/about/#philosophy'); ?>">
                  経営理念
                </a>
              </li>
            </ul>
            <ul class="footer__list">
              <li class="footer__item">
                <a class="footer__link" href="<?php echo home_url('/about/#company'); ?>">
                  会社概要
                </a>
              </li>
              <li class="footer__item">
                <a class="footer__link" href="<?php echo home_url('/about/#safety'); ?>">
                  安全への取り組み
                </a>
              </li>
                <li class="footer__item">
                  <a class="footer__link" href="<?php echo home_url('/service/'); ?>">
                    事業内容
                  </a>
                </li>
                <li class="footer__item">
                  <a class="footer__link" href="<?php echo home_url('/service/#services01'); ?>">
                    住宅建築・リフォーム
                  </a>
                </li>
            </ul>
            <ul class="footer__list">
              <li class="footer__item">
                <a class="footer__link" href="<?php echo home_url('/service/#services02'); ?>">
                  法人新築・リフォーム
                </a>
              </li>
              <li class="footer__item">
                <a class="footer__link" href="<?php echo home_url('/service/#services03'); ?>">
                  公共工事
                </a>
              </li>
              <li class="footer__item">
                <a class="footer__link" href="<?php echo home_url('/#news'); ?>">
                  お知らせ
                </a>
              </li>
              <li class="footer__item footer__mail-item">
                <a class="footer__link footer__mail-link" href="<?php echo home_url('/contact/'); ?>">
                  お問い合わせ
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <p class="footer__copy">© AOBOTAN INC.</p>
  </footer>

<?php wp_footer(); ?>
</body>
</html>