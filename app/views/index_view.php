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
  <div class="category__crumbs">
    <div class="category__arrow">Вибір</div>
    <span class="category__text">категорії</span>
  </div>
  <div class="category__cards-wrap">
    <?php
    for ($i = 0; $i < 30; $i++) {
      echo '
      <a href="/" class="category__card popular">
        <img class="category__card-img" src="style/images/img/item.png" alt="img">
        <span class="category__card-text">
          Кузовные
          запчасти
        </span>
      </a>';
    }
    ?>
  </div>
  <section class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/FdoJIPY86QY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </section>
</section>