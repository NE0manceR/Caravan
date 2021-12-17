<html lang="<?= $_SESSION['language'] ?>" prefix="og: http://ogp.me/ns#">

<head>
  <title><?= $_SESSION['alias']->title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="title" content="<?= $_SESSION['alias']->title ?>">
  <meta name="description" content="<?= $_SESSION['alias']->description ?>">
  <meta name="keywords" content="<?= $_SESSION['alias']->keywords ?>">
  <meta name="author" content="webspirit.com.ua">

  <meta property="og:locale" content="<?= $_SESSION['language'] ?>_UA" />
  <meta property="og:title" content="<?= $_SESSION['alias']->title ?>" />
  <meta property="og:description" content="<?= $_SESSION['alias']->description ?>" />
  <?php if (!empty($_SESSION['alias']->image)) { ?>
    <meta property="og:image" content="<?= IMG_PATH . $_SESSION['alias']->image ?>" />
  <?php } ?>

  <?= html_entity_decode($_SESSION['option']->global_MetaTags, ENT_QUOTES) ?>
  <?= html_entity_decode($_SESSION['alias']->meta, ENT_QUOTES) ?>

  <link rel="shortcut icon" href="<?= SERVER_URL ?>style/admin/images/whitelion-black.png">

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link href="<?= SERVER_URL ?>assets/font-awesome-5.15.1/css/all.min.css" rel="stylesheet" />
  <link href="<?= SERVER_URL ?>style/ws__main.css" rel="stylesheet" />
  <link href="<?= SERVER_URL ?>style/style.css" rel="stylesheet" />
</head>

<body>

  <?php
  include "@commons/header.php";

  echo ('<main class="">');
  if (isset($view_file)) require_once($view_file . '.php');
  echo ('</main>');

  include "@commons/footer.php";
  ?>
  <div id="colToUs" class="modal user-modal-wrap">
    <!-- <i class="fas fa-times right"></i> close modal winodw -->
    <div class="user-modal">
      <div class="user-modal__title-wrap">
        <span class="user-modal__title">Увійти / Зареєструватись</span>
        <img src="style/images/icons/user-icon-gradient.svg" alt="img">
      </div>
      <form class="user-modal__form" action="" method="post" class="ajax">
        <!-- <input type="hidden" name="from" value="Головна сторінка"> -->
        <div class="user-modal__login">
          <input class="user-modal__input input__phone masked" data-mask="+(###)-##-##-###" type="text" name="phone" value="+(380)" required="">
          <input class="user-modal__input input__email" type="email" name="email" placeholder="Ваш email*" required="">
          <input class="user-modal__input input__code" type="text" name="code" placeholder="Введить код*" required="">

          <input class="user-modal__input input__name" type="text" name="name" placeholder="Імя*" required="">
          <input class="user-modal__input input__secondName" type="text" name="secondName" placeholder="Прізвище*" required="">

          <div class="login-type">
            <button type='button' class="login-type__phone"> Надіслати SMS.</button>
            <button type='button' class="login-type__email">Надіслати Email</button>
          </div>
          <div class="again-wrap">
            <button type="button" class='login-type__again'>Відправити повторно</button>
          </div>
          <button type="button" class="user-modal__btn  btn-login btn-disable">Отримати код</button>
          <!-- <input type="text" name="phone" placeholder="Номер телефону" required="" maxlength="19"> -->
          <!-- <textarea name="comment" placeholder="Уточнююче питання" maxlength="300"></textarea> -->
          <script defer="" src="https://www.google.com/recaptcha/api.js"></script>
          <!-- <div class="g-recaptcha" data-sitekey="6LdJu7AUAAAAAPK4wiuEG6PYSVqTCrtwxxJQfUwF" data-callback="recaptchaVerifyCallback" data-expired-callback="recaptchaExpiredCallback">
          <div style="width: 304px; height: 78px;">
            <div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdJu7AUAAAAAPK4wiuEG6PYSVqTCrtwxxJQfUwF&amp;co=aHR0cHM6Ly9kaW5tYXJrLmNvbS51YTo0NDM.&amp;hl=en&amp;v=rPvs0Nyx3sANE-ZHUN-0nM85&amp;size=normal&amp;cb=cvawsy7tsxd" width="304" height="78" role="presentation" name="a-jl6s96sajvqj" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
          </div><iframe style="display: none;"></iframe>
        </div> <button disabled="" title="Заповніть &quot;Я не робот&quot;">Зателефонуйте мені</button> -->
        </div>
        <div class="user-modal__regestration">
          <span class="user-modal__title-reg regestrtion">Реєстрація</span>
          <input class="user-modal__input input__phone masked" data-mask="+(38#) ###-####" type="text" name="name" placeholder="Номер телефону*" required="">
          <input class="user-modal__input" type="text" name="name" placeholder="Введіть Ім'я*" required="">
          <input class="user-modal__input" type="text" name="name" placeholder="Призвіще*" required="">
          <input class="user-modal__input" type="email" name="name" placeholder="електронна адреса*" required="">
          <button type="button" class="user-modal__btn">Продовжити</button>
        </div>
    </div>
    </form>
  </div>
  <div id="divLoading"></div>
  <div id="modal-bg"></div>

  <script type="text/javascript" src="<?= SERVER_URL ?>assets/jquery/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="<?= SERVER_URL ?>assets/sticky.min.js"></script>

  <script src="<?= SERVER_URL ?>js/mask.js"></script>
  <script src="<?= SERVER_URL ?>js/script.js"></script>
  <script type="text/javascript">
    var SERVER_URL = '<?= SERVER_URL ?>';
    var SITE_URL = '<?= SITE_URL ?>';
    var ALIAS_URL = '<?= SITE_URL . $_SESSION['alias']->alias ?>/';

    var sticky = new Sticky('header.sticky');
    $('header i.fa-bars').click(function(event) {
      $('header').addClass('mobile');
    });
    $('header i.fa-times').click(function(event) {
      $('header').removeClass('mobile');
    });
    $('.modal .close, .modal .fa-times').click(function(event) {
      event.preventDefault;
      $(this).closest('.modal').hide()
      $('#modal-bg').hide()
    });
  </script>
  <?php
  if (!empty($_SESSION['alias']->js_load)) {
    foreach ($_SESSION['alias']->js_load as $js) {
      echo '<script type="text/javascript" src="' . SERVER_URL . $js . '"></script> ';
    }
  }
  if (!empty($_SESSION['alias']->js_init)) {
  ?>
    <script type="text/javascript">
      $(document).ready(function() {
        <?php foreach ($_SESSION['alias']->js_init as $js) {
          echo $js . '; ';
        } ?>
      });
    </script>
  <?php } ?>

</body>

</html>