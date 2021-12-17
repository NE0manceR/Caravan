<section class="filter">
  <div class="filter-line"></div>
  <div class="filter__item-wrap">
    <div class="filter__item active"><span class="filter__item-text">Виберіть авто</span></div>
    <div onclick="setActive(event, 1)" class="filter__item"><span class="filter__item-text">Adi</span></div>
    <div onclick="setActive(event, 2)" class="filter__item"><span class="filter__item-text">Модель</span></div>
    <div onclick="setActive(event, 3)" class="filter__item"><span class="filter__item-text">модифікація</span></div>
    <div onclick="setActive(event, 4)" class="filter__item"><span class="filter__item-text">група</span></div>
    <div onclick="setActive(event, 5)" class="filter__item"><span class="filter__item-text">підгрупа</span></div>

    <div class="filter__drop-down">
      <div class="filter__content-wrap">
        <img src="" alt="">
        <div class="filter__content">
          <?php
          for ($i = 0; $i < 70; $i++) {
            echo "
            <div onclick=\"setItem(event)\" class=\"filter__content-item\">
              <span class=\"filter__text\">Охлаждение Охлаждение $i<span/>
            </div>
            ";
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="parts">
  <h1 class="parts__title">Автозапчастини з Польщі</h1>
  <p class="parts__count">32 000 000</p>
  <p class="parts__text">одиниць</p>
  <button class="parts__btn parts__btn_position">Категорії</button>
</section>

<section class="category">
  <div class="crumbs">
    <div class="crumbs-arrow">Вибір</div>
    <span class="crumbs-text">категорії</span>
  </div>
  <section class="video">
    <div class="video__cover">
      <img class="video__play-icon" src="style/images/home-page/video-play.svg" alt="img">
    </div>
    <iframe id="home-video" controls="0" width="100%" src="https://www.youtube.com/embed/FdoJIPY86QY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </section>
</section>

<section class="how-work">
  <div class="crumbs">
    <div class="crumbs-arrow">Як ми</div>
    <span class="crumbs-text">працюємо</span>
  </div>
  <div class="blocks-wrap">
    <div class="block">
      <div class="block-title">
        <span class="block-title-text">Оформлення замовлення</span>
        <div class="title-icon"></div>
      </div>
      <div class="block-text">
        <span class="block-number">
          01
        </span>
        <span class="block-info">
          Виберіть товар
          на сайті і зробіть замовлення
        </span>
      </div>
    </div>
    <div class="block">
      <div class="block-title">
        <span class="block-title-text">Зворотній зв’язок</span>
        <div class="title-icon phone-icon"></div>
      </div>
      <div class="block-text">
        <span class="block-number">
          02
        </span>
        <span class="block-info">
        Протягом 20 хвилин наш менеджер зв'яжеться з Вами
        </span>
      </div>
    </div>
    <div class="block">
      <div class="block-title">
        <span class="block-title-text">Замовлення товару</span>
        <div class="title-icon home-icon"></div>
      </div>
      <div class="block-text">
        <span class="block-number">
        03
        </span>
        <span class="block-info">
          Проводиться замовлення товару
          в Польщі на базі
        </span>
      </div>
    </div>
    <div class="block">
      <div class="block-title">
        <span class="block-title-text">Доставка товару</span>
        <div class="title-icon box-icon"></div>
      </div>
      <div class="block-text">
        <span class="block-number">
          04
        </span>
        <span class="block-info">
          Виберіть товар
          на сайті і зробіть замовлення
        </span>
      </div>
    </div>
  </div>
</section>

<section class="benefits">
  <div class="dot-line"></div>
  <div class="dot">
    <img src="style/images/home-page/benefits-icons/dot.svg" alt="img">
  </div>
  <div class="info-block">
    <img src="style/images/home-page/benefits-icons/1.svg" alt="img">
    <span class="info-block-text">
    Простий спосіб <span>оплати</span>
    </span>
  </div>
  <div class="dot">
    <img src="style/images/home-page/benefits-icons/dot.svg" alt="img">
  </div>
  <div class="info-block">
    <img src="style/images/home-page/benefits-icons/2.svg" alt="img">
    <span class="info-block-text">
    Простий спосіб <span>оплати</span>
    </span>
  </div>
  <div class="dot">
    <img src="style/images/home-page/benefits-icons/dot.svg" alt="img">
  </div>
  <div class="info-block">
    <img src="style/images/home-page/benefits-icons/3.svg" alt="img">
    <span class="info-block-text">
      <span>Швидка</span> доставка з <span>Польщі</span>
    </span>
  </div>
  <div class="dot">
    <img src="style/images/home-page/benefits-icons/dot.svg" alt="img">
  </div>

</section>

<section class="articles">
  <div class="crumbs">
    <div class="crumbs-arrow">Новини</div>
    <span class="crumbs-text"> та статті</span>
  </div>
  <div class="article-wrap">
    <a href="" class="article">
      <img class="article-img" src="style/images/home-page/article-imgs/1.png" alt="img">
      <span class="article-title">Запчастини до ходової</span>
      <div class="line"></div>
    </a>

    <a href="" class="article">
      <img class="article-img" src="style/images/home-page/article-imgs/2.png" alt="img">
      <span class="article-title">Огляд нової Тойотки</span>
      <div class="line"></div>
    </a>

    <a href="" class="article">
      <img class="article-img" src="style/images/home-page/article-imgs/1.png" alt="img">
      <span class="article-title">Нова крута Ауді</span>
      <div class="line"></div>
    </a>

    <a href="" class="article">
      <img class="article-img" src="style/images/home-page/article-imgs/2.png" alt="img">
      <span class="article-title">Огляд нової Тойотки</span>
      <div class="line"></div>
    </a>

    <a href="" class="article">
      <img class="article-img" src="style/images/home-page/article-imgs/1.png" alt="img">
      <span class="article-title">Нова крута Ауді</span>
      <div class="line"></div>
    </a>

    <a href="" class="article">
      <img class="article-img" src="style/images/home-page/article-imgs/2.png" alt="img">
      <span class="article-title">Новий подих твого мотору</span>
      <div class="line"></div>
    </a>
  </div>
</section>


