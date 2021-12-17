<header class="header">
  <a class="header__logo-wrap" href="/">
    <img class="header__logo" src="style/images/img/logo.svg" alt="img">
  </a>
  <div class="header__input_wrap ">
    <div class="header__select">
      <div onclick="showSelect()" class="header__select-wrap">
        <span class="header__select-model">Всі моделі</span>
        <img src="style/images/icons/dopdown-arrow.svg" alt="img">
      </div>
      <div class="select-drop-down">
        <span onclick="hideSelect(event)">Всі моделі</span>
        <?php
        for ($i = 0; $i < 170; $i++) {
          echo "<span onclick=\"hideSelect(event)\">Model $i</span>";
        }
        ?>
      </div>
    </div>
    <div onclick="searchActive()" class="header__search-wrap">
      <input class="header__search" placeholder="Пошук..." type="text">
      <img class="header__search-icon" src="style/images/icons/search.svg" alt="img">
    </div>
  </div>
  <div class="header__phone-wrap">
    <img class="header__phone-icon" src="style/images/icons/header-phone-icon.svg" alt="img">
    <div class="header__phone"><a href="tel:+38 096 256-48-24 ">+38 096 256-48-24 </a><img class="phone-icon" src="style/images/icons/drop-down-black-arrow-icon.svg" alt="img"></div>
    <div class="header__phone-drop-down header__phone-desctop">
      <div class="drop-down-wrap">
        <div class="item">
          <img src="style/images/icons/viber-icon.svg" alt="icon">
          <span>Viber</span>
        </div>
        <div class="item">
          <img src="style/images/icons/telegram-icon.svg" alt="icon">
          <span>Telegram</span>
        </div>
        <div class="item">
          <img src="style/images/icons/whatsapp-icon.svg" alt="icon">
          <span>Whatsapp</span>
        </div>
        <div class="item">
          <a href="tel:+38 096 256-48-24">
            <img src="style/images/icons/header-phone-icon.svg" alt="icon">
            +38 096 256-48-24</a>
        </div>
        <div class="item">
          <a href="tel:+38 096 256-48-24">
            <img src="style/images/icons/header-phone-icon.svg" alt="icon">
            +38 096 256-48-24</a>
        </div>
        <div class="work-time">
          <span>Графік роботи:</span>
          <span>Пн-пт: 10:00 — 19:00</span>
          <span>Сб: 10:00 — 15:00</span>
        </div>
      </div>
    </div>
  </div>
  <div class="header__user">
    <div class="header__language-wrap">
      <span onclick="changeLang(event)" class="header__language-ua header__language_active">Укр</span>
      <span class="header__language-line"></span>
      <span onclick="changeLang(event)" class="header__language-ru">Рус</span>
    </div>
    <div class="header__user-menu">
      <img src="style/images/icons/user-icon-black.svg" class="to-modal" data-modal="#colToUs" alt="img">
      <img src="style/images/icons/backet.svg" alt="img">
      <div class="header__call">
        <img class="mobile-phone-icon" src="style/images/icons/header-phone-icon.svg" alt="img">
        <div class="header__phone-drop-down phone-drop-down-mobile">
          <div class="drop-down-wrap">
            <div class="item">
              <img src="style/images/icons/viber-icon.svg" alt="icon">
              <span>Viber</span>
            </div>
            <div class="item-mobile">
              <img src="style/images/icons/telegram-icon.svg" alt="icon">
              <span>Telegram</span>
            </div>
            <div class="item-mobile">
              <img src="style/images/icons/whatsapp-icon.svg" alt="icon">
              <span>Whatsapp</span>
            </div>
            <div class="item-mobile">
              <a href="tel:+38 096 256-48-24">
                <img src="style/images/icons/header-phone-icon.svg" alt="icon">
                +38 096 256-48-24</a>
            </div>
            <div class="item-mobile">
              <a href="tel:+38 096 256-48-24">
                <img src="style/images/icons/header-phone-icon.svg" alt="icon">
                +38 096 256-48-24</a>
            </div>
            <div class="work-time">
              <span>Графік роботи:</span>
              <span>Пн-пт: 10:00 — 19:00</span>
              <span>Сб: 10:00 — 15:00</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>