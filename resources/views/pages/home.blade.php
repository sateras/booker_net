<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/css/base.css">
  <link href="http://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <title>Платформа для читающих | мастер-классы | литература</title>
</head>

<body>
  <section class="showcase">
    <header class="head-video">
      <h5 class="logo">LR - lovely readers</h5>
      <div class="toggle"></div>
    </header>
    <video src="/media/9568938-uhd_4096_2160_25fps.mp4" muted loop autoplay></video>
    <div class="overlay"></div>
    <div class="text">
      <div id="size1">Платформа для читающих</div>
      <p>
        Здесь вы сможете преобретать и делиться книгами, найдете своих единомышленников и примите участие в различных играх и квестах
      </p>
      <a
        href="/register">Регистрация</a>
    </div>
    <ul class="social">
      <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
      <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
      <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
    </ul>
  </section>
  <div class="menu">
    <ul>
      @if(app('auth')->check())
        <li>Привет, <a href="/profile">{{ app('auth')->user()->email }}!</a></li>
      @endif
      @if(!app('auth')->check())
        <li><a href="/login">Войти</a></li>
      @endif
      <li><a href="#catalog">Меню</a></li>
      <li><a href="/library">Библиотека</a></li>
      <li><a href="/forum">Форум</a></li>
      <li><a href="">Игры</a></li>
      <li><a href="">Магазин</a></li>
    </ul>
  </div>


  <div>
    <header id="header"
      class="d-flex align-items-center justify-content-center justify-content-md-around py-3 mb-4 border-bottom">
      <div id="catalog">Меню</div>

      <!-- <ul id="font" class="nav col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" id="link" class="nav-link px-2">Чат боты</a></li>
        <li><a href="#" id="link" class="nav-link px-2">Оффлайн встречи</a></li>
        <li><a href="#" id="link" class="nav-link px-2">Курсы</a></li>
        <li><a href="#" id="link" class="nav-link px-2">Библиотека</a></li>
        <li><a href="#" id="link" class="nav-link px-2">Магазин</a></li>
      </ul> -->

      <div class="search">
        <form role="search">
          <input type="search" class="control" placeholder="Поиск..." aria-label="Search">
        </form>
      </div>

      <button class="cta">
        <span class="hover-underline-animation"><a
            href="library" style="color: black;">Библиотека</span>
        <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
          <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
            data-name="Path 10" id="Path_10"></path>
        </svg></a>
      </button>
    </header>
  </div>

  <div class="tovar_list">
    <a href="/library">
      <div class="tovar-box" id="img1">
        <div>Библиотека</div>
      </div>
    </a>

    <a href="/forum">
      <div class="tovar-box" id="img2">
        <div>Форум</div>
      </div>
    </a>

    <a href="">
      <div class="tovar-box" id="img3">
        <div>Игры</div>
      </div>
    </a>

    <a href="">
      <div class="tovar-box" id="img4">
        <div>Магазин</div>
      </div>
    </a>

  </div>


  <div class="container">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Контакты</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Помощь</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">О нас</a></li>
      </ul>
      <p class="text-center text-muted">© 2024 Company</p>
    </footer>
  </div>




  <script>
    const menuToggle = document.querySelector('.toggle');
    const showcase = document.querySelector('.showcase');

    menuToggle.addEventListener('click', () => {
      menuToggle.classList.toggle('active');
      showcase.classList.toggle('active');
    })
  </script>

  <script src="http://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b3330d82de.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>