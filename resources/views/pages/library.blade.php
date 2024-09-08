<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/library.css">
    <link href="http://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Библиотека | мастер-классы | литература</title>
</head>

    <script src="https://kit.fontawesome.com/b3330d82de.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<body>
  @if(!app('auth')->check())
    <section class="showcase">
      <header class="head-video">
        <h5 class="logo">Library</h5>
        <div class="toggle"></div>
      </header>
      <video src="/media/4860897-uhd_4096_2160_25fps.mp4" muted loop autoplay></video>
      <div class="overlay"></div>
      <div class="text">
        <div id="size1">Библиотека</div> 
        <div id="size2">собранная с заботой</div>
        <p>Мы собрали для вас всю самую необходимую и интересную литературу<br><br>
          Не выходя из дома вы можете узнать полезную информацию для вас
      </p>
      </div>
      <ul class="social">
        <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
        <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
        <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
      </ul>
    </section>
    <div class="menu">
      <ul>
        <li><a href="/">Главная</a></li>
        @if(app('auth')->check())
          <li>Привет, <a href="/profile">{{ app('auth')->user()->email }}!</a></li>
        @endif
        @if(!app('auth')->check())
          <li><a href="/login">Войти</a></li>
        @endif
        <li><a href="#catalog">Меню</a></li>
        
        <li><a href="/forum">Форум</a></li>
        <li><a href="">Игры</a></li>
        <li><a href="/library">Магазин</a></li>
      </ul>
    </div>
  @endif
  
  <div>
    <div>
      @if(app('auth')->check())
        <ul style="display: flex; justify-content: space-between;" id="font">
          <div class="nav col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" id="link" class="nav-link px-2">Главная</a></li>
            <li><a href="/quiz/farm" id="link" class="nav-link px-2">Игры</a></li>
            <li><a href="/forum" id="link" class="nav-link px-2">Форум</a></li>
            <li><a href="/library" id="link" class="nav-link px-2">Магазин</a></li>
          </div>
          <div class="">
            <li id="link" class="nav-link px-2">Привет, <a href="/profile">{{ app('auth')->user()->email }}</a>!</li>
          </div>
        </ul>
      @endif
    </div>
    <header id="header" class="d-flex align-items-center justify-content-center justify-content-md-around py-3 mb-4 border-bottom">
      <div id="catalog">Каталог</div>

      {{-- @foreach ($categories as $c)
      <li><a href="/library?category=fiction" id="link" class="nav-link px-2">Художественная</a></li>
      @endforeach --}}

      <ul id="font" class="nav col-md-auto mb-2 justify-content-center mb-md-0">
        {{-- @foreach ($categories as $c)
          <li><a href="/library?category={{$c->id}}" id="link" class="nav-link px-2">{{$c->name}}</a></li>
        @endforeach --}}
        <li><a href="/library?category=fiction" id="link" class="nav-link px-2">Художественная</a></li>
        <li><a href="/library?category=education" id="link" class="nav-link px-2">Статьи</a></li>
        <li><a href="/library?category=science" id="link" class="nav-link px-2">Научная</a></li>
        <li><a href="/library?category=psychology" id="link" class="nav-link px-2">Психология</a></li>
        <li><a href="/library?category=fantasy" id="link" class="nav-link px-2">Фантастика</a></li>
      </ul>

      <div class="search">
        <form style="display: flex" action="/library" method="GET" role="search">
          <input type="search" class="control" name="search" placeholder="Поиск..." aria-label="Search">
          <button type="submit" class="btn btn-primary btn-sm">Поиск</button>
        </form>
      </div>
    </header>
  </div>

  @if($search || $category)
    <div style="padding-bottom: 30px" class="alert alert-info">
        @if($search)
            <strong>Поиск:</strong> {{ $search }}
        @endif
        @if($category)
            <br>
            <strong>Категория:</strong> {{ $category }}
        @endif
            <br>
            <br>
            <strong>Найдено книг:</strong> {{ $books->total() }}
    </div>
  @endif
  

  <div class="tovar_list">
    @foreach ($books as $book)
      <div class="tovar-box">
        <img src="{{ $book->thumbnail }}" class="img" alt="{{ $book->name }}">
        <div>«{{ $book->title }}»,<br><br> {{ $book->categories }}<br><br> {{ $book->age_limit }} <br><br><br>
          <a class="a" href="{{route('pages.book_show',$book->slug)}}">Читать</a>
        </div>
      </div>
    @endforeach
  
  </div>
    <div style="padding: 0 40px">
      {{ $books->links('pagination::bootstrap-5') }}
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>