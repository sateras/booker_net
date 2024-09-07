<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/library.css">
    <link href="http://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Библиотека | мастер-классы | литература</title>
</head>

    <script src="https://kit.fontawesome.com/b3330d82de.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<body>
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
      <li><a href="">Магазин</a></li>
    </ul>
  </div>
    
  
  <div>
    <header id="header" class="d-flex align-items-center justify-content-center justify-content-md-around py-3 mb-4 border-bottom">
      <div id="catalog">Каталог</div>

      <ul id="font" class="nav col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" id="link" class="nav-link px-2">Художественная</a></li>
        <li><a href="#" id="link" class="nav-link px-2">Статьи</a></li>
        <li><a href="#" id="link" class="nav-link px-2">Научная</a></li>
        <li><a href="#" id="link" class="nav-link px-2">Психология</a></li>
        <li><a href="#" id="link" class="nav-link px-2">Полезная</a></li>
      </ul>

      <div class="search">
        <form role="search">
          <input type="search" class="control" placeholder="Поиск..." aria-label="Search">
        </form>
      </div>
    </header>
  </div>


  

  <div class="tovar_list">
    {{-- @foreach ($books as $book)
      <div class="tovar-box">
        <img src="https://www.ukazka.ru/img/g/uk612723.jpg" class="img" alt="{{ $book->name }}">
        <div>«{{ $book->name }}»,<br><br> {{ $book->age_limit }} <br><br><br><br>
          <a class="a" href="https://www.chitai-gorod.ru/product/severnyy-les-3034090?productShelf=&shelfIndex=0&productIndex=0">Читать</a>
        </div>
        <div>«Северный лес»,<br><br> 18+ <br><br><br><br>
            <a class="a" href="https://www.chitai-gorod.ru/product/severnyy-les-3034090?productShelf=&shelfIndex=0&productIndex=0">Читать</a>
        </div>
      </div>
    @endforeach --}}
    
      
    <div class="tovar-box">
        <img src="https://static.insales-cdn.com/images/products/1/5487/890402159/large_1.00x-thumb.png" class="img" alt="не найдена">
        <div>«Наследники с Пайнэппл-стрит», <br><br> 12+ <br><br><br><br>
            <a class="a" href="https://www.chitai-gorod.ru/product/nasledniki-s-payneppl-strit-2976179">Читать</a>
        </div>
    </div>
      
    <div class="tovar-box">
        <img src="https://content.img-gorod.ru/pim/products/images/41/dc/018fcce9-8b83-7a91-94dd-be92887541dc.jpg?width=608&height=867&fit=bounds" class="img" alt="не найдена">
        <div>«Город Победы»,<br><br> 16+ <br><br><br><br>
            <a class="a" href="https://www.chitai-gorod.ru/product/gorod-pobedy-roman-3028259?productShelf=&shelfIndex=0&productIndex=0">Читать</a>
        </div>
    </div>
    
    <div class="tovar-box">
        <img src="https://cdn1.ozone.ru/s3/multimedia-3/6640545783.jpg" class="img" alt="не найдена">
        <div>«Море спокойствия»<br><br> 12+ <br><br><br><br>
            <a class="a" href="https://www.chitai-gorod.ru/product/more-spokoystviya-2920977?productShelf=&shelfIndex=0&productIndex=0">Читать</a>
        </div>
    </div>
    
    <div class="tovar-box">
        <img src="https://cdn.respublica.ru/uploads/01/00/00/mb/x3/b586f29cfc003121.jpg?1704708464" class="img" alt="не найдена">
        <div>«Случай из практики»<br><br> 16+ <br><br><br><br>
            <a class="a" href="https://www.chitai-gorod.ru/product/sluchay-iz-praktiki-2981564?productShelf=&shelfIndex=0&productIndex=0">Читать</a>
        </div>
    </div>
   
    <div class="tovar-box">
        <img src="https://cdn.litres.ru/pub/c/cover_200/69601468.webp" class="img" alt="не найдена">
        <div>«Пропавшие наши сердца»,<br><br> 16+ <br><br><br><br>
            <a class="a" href="https://www.chitai-gorod.ru/product/propavshie-nashi-serdca-3026594?productShelf=&shelfIndex=0&productIndex=0">Читать</a>
        </div>
    </div>

    <div class="tovar-box">
        <img src="https://avatars.mds.yandex.net/get-mpic/6214739/img_id6177717096377643764.jpeg/orig" class="img" alt="не найдена">
        <div>«Перекрестки»,<br><br> 18+ <br><br><br><br>
            <a class="a" href="https://www.chitai-gorod.ru/product/perekrestki-2905587?productShelf=&shelfIndex=0&productIndex=0">Читать</a>
        </div>
    </div>

    <div class="tovar-box">
        <img src="https://content.img-gorod.ru/pim/products/images/12/e0/018eed39-6d35-76c0-90a1-c686c06312e0.jpg?width=608&height=867&fit=bounds" class="img" alt="не найдена">
        <div>«Когда мы перестали понимать мир»,<br><br> 16+ <br><br><br><br>
            <a class="a" href="https://www.chitai-gorod.ru/product/kogda-my-perestali-ponimat-mir-3004960?productShelf=&shelfIndex=0&productIndex=0">Читать</a>
        </div>
    </div>


    <div class="tovar-box">
        <img src="https://content.img-gorod.ru/pim/products/images/73/1c/018fbd89-611c-79e3-b537-56c68d6c731c.jpg?width=608&height=867&fit=bounds" class="img" alt="не найдена">
        <div>«Детство»,<br><br> 12+ <br><br><br><br>
            <a class="a" href="https://www.chitai-gorod.ru/product/detstvo-v-lyudyah-moi-universitety-3043339?productShelf&shelfIndex=0&productIndex=5">Читать</a>
        </div>
    </div>

    <div class="tovar-box">
        <img src="https://content.img-gorod.ru/pim/products/images/a8/83/018ee978-c4a2-74ff-9ba3-5561dfc2a883.jpg?width=608&height=867&fit=bounds" class="img" alt="не найдена">
        <div>«Прекрасный мир, где же ты»,<br><br> 18+ <br><br><br><br>
            <a class="a" href="https://www.chitai-gorod.ru/product/prekrasnyy-mir-gde-zhe-ty-2955276?productShelf=&shelfIndex=0&productIndex=0">Читать</a>
        </div>
    </div>

    <div class="tovar-box">
        <img src="https://content.img-gorod.ru/pim/products/images/c4/3d/018eea94-2f86-7fb7-8979-4b1e754ec43d.jpg?width=608&height=867&fit=bounds" class="img" alt="не найдена">
        <div>«Последнее лето»,<br><br> 16+ <br><br><br><br>
            <a class="a" href="https://www.chitai-gorod.ru/product/poslednee-leto-2976176?productShelf=&shelfIndex=0&productIndex=0">Читать</a>
        </div>
    </div>

    <div class="tovar-box">
        <img src="https://content.img-gorod.ru/pim/products/images/e7/af/018f5f31-6ef2-712c-ae83-c3c92ab1e7af.jpg?width=608&height=867&fit=bounds" class="img" alt="не найдена">
        <div>«Хамнет»,<br><br> 16+ <br><br><br><br>
            <a class="a" href="https://www.chitai-gorod.ru/product/hamnet-2846475?productShelf=&shelfIndex=0&productIndex=0">Читать</a>
        </div>
    </div>
  
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