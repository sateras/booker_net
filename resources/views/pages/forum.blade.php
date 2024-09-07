<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/forum.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="http://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <title>Форум</title>
</head>


<body>

  <section class="showcase">
    <header class="head-video">
      <h5 class="logo">LR - lovely readers</h5>
      <div class="toggle"></div>
    </header>
    <video src="/media/5713021-uhd_3840_2160_25fps.mp4" muted loop autoplay></video>
    <div class="overlay"></div>
    <div class="text">
      <div id="size1">Форум для читающих</div>
      <p>
        Здесь вы сможете читать статьи, отавлять комментарии и делиться свои мнением
      </p>
      <a href="/register">Регистрация</a>
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

      <ul id="font" class="nav col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" id="link" class="nav-link px-2">Популярное</a></li>
        <li><a href="#" id="link" class="nav-link px-2">Избранное</a></li>
      </ul>


      <div class="search">
        <form role="search">
          <input type="search" class="control" placeholder="Поиск..." aria-label="Search">
        </form>
      </div>

      <button class="cta">
        <span class="hover-underline-animation"><a href="library.html" style="color: black;">Библиотека</span>
        <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
          <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
            data-name="Path 10" id="Path_10"></path>
        </svg></a>
      </button>
    </header>
  </div>

  <div class="conteiner">
    <h3>Обсуждение книг</h3>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="card">
            <span class="title">Comments</span>
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277"
                      d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z">
                    </path>
                  </svg>
                </button>
                <hr>
                <span>75</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                      </path>
                      <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                      </path>
                    </svg>
                  </div>
                  <div class="user-info">
                    <span>Александра</span>
                    <p>25 февраля 2013, 08:57</p>
                  </div>
                </div>
                <p class="comment-content">
                  Те, которые перечитывала миллион раз и до сих пор перечитываю:

                  Белых, Пантелеев "Республика ШКИД"

                  Стэфан Цвейг "Амок", "Письмо незнакомки"

                </p>
              </div>
            </div>

            <div class="text-box">
              <div class="box-container">
                <textarea placeholder="Reply"></textarea>
                <div>
                  <div class="formatting">
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M4 12H20">
                        </path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          r="10" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277"
                          d="M8.00897 9L8 9M16 9L15.991 9"></path>
                      </svg>
                    </button>
                    <button type="submit" class="send" title="Send">
                      <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M12 5L12 20"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <span class="title">Comments</span>
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277"
                      d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z">
                    </path>
                  </svg>
                </button>
                <hr>
                <span>83</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                      </path>
                      <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                      </path>
                    </svg>
                  </div>
                  <div class="user-info">
                    <span>AstraSamar</span>
                    <p>26 февраля 2013, 22:43</p>
                  </div>
                </div>
                <p class="comment-content">
                  Теодор Драйзер "Трилогия желания" 3 книги:"Финансист","Титан","Стоик&qu​ot;.
                </p>
              </div>
            </div>

            <div class="text-box">
              <div class="box-container">
                <textarea placeholder="Reply"></textarea>
                <div>
                  <div class="formatting">
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M4 12H20">
                        </path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          r="10" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277"
                          d="M8.00897 9L8 9M16 9L15.991 9"></path>
                      </svg>
                    </button>
                    <button type="submit" class="send" title="Send">
                      <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M12 5L12 20"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <span class="title">Comments</span>
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277"
                      d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z">
                    </path>
                  </svg>
                </button>
                <hr>
                <span>33</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                      </path>
                      <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                      </path>
                    </svg>
                  </div>
                  <div class="user-info">
                    <span>Yassine Zanina</span>
                    <p>Wednesday, March 13th at 2:45pm</p>
                  </div>
                </div>
                <p class="comment-content">
                  I've been using this product for a few days now and I'm really impressed! The interface is intuitive
                  and
                  easy to
                  use, and the features are exactly what I need to streamline my workflow.
                </p>
              </div>
            </div>

            <div class="text-box">
              <div class="box-container">
                <textarea placeholder="Reply"></textarea>
                <div>
                  <div class="formatting">
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M4 12H20">
                        </path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          r="10" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277"
                          d="M8.00897 9L8 9M16 9L15.991 9"></path>
                      </svg>
                    </button>
                    <button type="submit" class="send" title="Send">
                      <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M12 5L12 20"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <span class="title">Comments</span>
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277"
                      d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z">
                    </path>
                  </svg>
                </button>
                <hr>
                <span>49</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                      </path>
                      <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                      </path>
                    </svg>
                  </div>
                  <div class="user-info">
                    <span>Андрей</span>
                    <p>21 марта 2013, 01:02</p>
                  </div>
                </div>
                <p class="comment-content">
                  Харуки Мураками "Норвежский лес", Патрик Зюскинд "Парфюмер",
                  Орхан Памук "Снег", Януш Леон Вишневский "Одиночество в сети", Марк Леви "Похититель теней"
                </p>
              </div>
            </div>

            <div class="text-box">
              <div class="box-container">
                <textarea placeholder="Reply"></textarea>
                <div>
                  <div class="formatting">
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M4 12H20">
                        </path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          r="10" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277"
                          d="M8.00897 9L8 9M16 9L15.991 9"></path>
                      </svg>
                    </button>
                    <button type="submit" class="send" title="Send">
                      <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M12 5L12 20"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <span class="title">Comments</span>
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277"
                      d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z">
                    </path>
                  </svg>
                </button>
                <hr>
                <span>71</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                      </path>
                      <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                      </path>
                    </svg>
                  </div>
                  <div class="user-info">
                    <span>Олеся</span>
                    <p>24 марта 2013, 12:58</p>
                  </div>
                </div>
                <p class="comment-content">
                  недавно прочла Майкл Ньютон - " Путешествие души". Для общего развития стоит прочитать.
                </p>
              </div>
            </div>

            <div class="text-box">
              <div class="box-container">
                <textarea placeholder="Reply"></textarea>
                <div>
                  <div class="formatting">
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M4 12H20">
                        </path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          r="10" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277"
                          d="M8.00897 9L8 9M16 9L15.991 9"></path>
                      </svg>
                    </button>
                    <button type="submit" class="send" title="Send">
                      <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M12 5L12 20"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <span class="title">Comments</span>
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277"
                      d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z">
                    </path>
                  </svg>
                </button>
                <hr>
                <span>83</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                      </path>
                      <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                      </path>
                    </svg>
                  </div>
                  <div class="user-info">
                    <span>AstraSamar</span>
                    <p>26 февраля 2013, 22:43</p>
                  </div>
                </div>
                <p class="comment-content">
                  Теодор Драйзер "Трилогия желания" 3 книги:"Финансист","Титан","Стоик&qu​ot;.
                </p>
              </div>
            </div>

            <div class="text-box">
              <div class="box-container">
                <textarea placeholder="Reply"></textarea>
                <div>
                  <div class="formatting">
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M4 12H20">
                        </path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          r="10" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277"
                          d="M8.00897 9L8 9M16 9L15.991 9"></path>
                      </svg>
                    </button>
                    <button type="submit" class="send" title="Send">
                      <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M12 5L12 20"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <span class="title">Comments</span>
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277"
                      d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z">
                    </path>
                  </svg>
                </button>
                <hr>
                <span>75</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                      </path>
                      <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                      </path>
                    </svg>
                  </div>
                  <div class="user-info">
                    <span>Александра</span>
                    <p>25 февраля 2013, 08:57</p>
                  </div>
                </div>
                <p class="comment-content">
                  Те, которые перечитывала миллион раз и до сих пор перечитываю:

                  Белых, Пантелеев "Республика ШКИД"

                  Стэфан Цвейг "Амок", "Письмо незнакомки"

                </p>
              </div>
            </div>

            <div class="text-box">
              <div class="box-container">
                <textarea placeholder="Reply"></textarea>
                <div>
                  <div class="formatting">
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M4 12H20">
                        </path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          r="10" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277"
                          d="M8.00897 9L8 9M16 9L15.991 9"></path>
                      </svg>
                    </button>
                    <button type="submit" class="send" title="Send">
                      <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M12 5L12 20"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <span class="title">Comments</span>
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277"
                      d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z">
                    </path>
                  </svg>
                </button>
                <hr>
                <span>33</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                      </path>
                      <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                      </path>
                    </svg>
                  </div>
                  <div class="user-info">
                    <span>Yassine Zanina</span>
                    <p>Wednesday, March 13th at 2:45pm</p>
                  </div>
                </div>
                <p class="comment-content">
                  I've been using this product for a few days now and I'm really impressed! The interface is intuitive
                  and
                  easy to
                  use, and the features are exactly what I need to streamline my workflow.
                </p>
              </div>
            </div>

            <div class="text-box">
              <div class="box-container">
                <textarea placeholder="Reply"></textarea>
                <div>
                  <div class="formatting">
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M4 12H20">
                        </path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          r="10" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277"
                          d="M8.00897 9L8 9M16 9L15.991 9"></path>
                      </svg>
                    </button>
                    <button type="submit" class="send" title="Send">
                      <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M12 5L12 20"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <span class="title">Comments</span>
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277"
                      d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z">
                    </path>
                  </svg>
                </button>
                <hr>
                <span>49</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                      </path>
                      <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                      </path>
                    </svg>
                  </div>
                  <div class="user-info">
                    <span>Андрей</span>
                    <p>21 марта 2013, 01:02</p>
                  </div>
                </div>
                <p class="comment-content">
                  Харуки Мураками "Норвежский лес", Патрик Зюскинд "Парфюмер",
                  Орхан Памук "Снег", Януш Леон Вишневский "Одиночество в сети", Марк Леви "Похититель теней"
                </p>
              </div>
            </div>

            <div class="text-box">
              <div class="box-container">
                <textarea placeholder="Reply"></textarea>
                <div>
                  <div class="formatting">
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M4 12H20">
                        </path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          r="10" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277"
                          d="M8.00897 9L8 9M16 9L15.991 9"></path>
                      </svg>
                    </button>
                    <button type="submit" class="send" title="Send">
                      <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M12 5L12 20"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <div class="conteiner">
    <h3>Советы писателю и сценаристу - справочник автора</h3>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="card">
            <span class="title">Comments</span>
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277"
                      d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z">
                    </path>
                  </svg>
                </button>
                <hr>
                <span>75</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                      </path>
                      <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                      </path>
                    </svg>
                  </div>
                  <div class="user-info">
                    <span>Александра</span>
                    <p>25 февраля 2013, 08:57</p>
                  </div>
                </div>
                <p class="comment-content">
                  Те, которые перечитывала миллион раз и до сих пор перечитываю:

                  Белых, Пантелеев "Республика ШКИД"

                  Стэфан Цвейг "Амок", "Письмо незнакомки"

                </p>
              </div>
            </div>

            <div class="text-box">
              <div class="box-container">
                <textarea placeholder="Reply"></textarea>
                <div>
                  <div class="formatting">
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M4 12H20">
                        </path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          r="10" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277"
                          d="M8.00897 9L8 9M16 9L15.991 9"></path>
                      </svg>
                    </button>
                    <button type="submit" class="send" title="Send">
                      <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M12 5L12 20"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <span class="title">Comments</span>
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277"
                      d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z">
                    </path>
                  </svg>
                </button>
                <hr>
                <span>83</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                      </path>
                      <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                      </path>
                    </svg>
                  </div>
                  <div class="user-info">
                    <span>AstraSamar</span>
                    <p>26 февраля 2013, 22:43</p>
                  </div>
                </div>
                <p class="comment-content">
                  Теодор Драйзер "Трилогия желания" 3 книги:"Финансист","Титан","Стоик&qu​ot;.
                </p>
              </div>
            </div>

            <div class="text-box">
              <div class="box-container">
                <textarea placeholder="Reply"></textarea>
                <div>
                  <div class="formatting">
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M4 12H20">
                        </path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          r="10" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277"
                          d="M8.00897 9L8 9M16 9L15.991 9"></path>
                      </svg>
                    </button>
                    <button type="submit" class="send" title="Send">
                      <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M12 5L12 20"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <span class="title">Comments</span>
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277"
                      d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z">
                    </path>
                  </svg>
                </button>
                <hr>
                <span>33</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                      </path>
                      <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                      </path>
                    </svg>
                  </div>
                  <div class="user-info">
                    <span>Yassine Zanina</span>
                    <p>Wednesday, March 13th at 2:45pm</p>
                  </div>
                </div>
                <p class="comment-content">
                  I've been using this product for a few days now and I'm really impressed! The interface is intuitive
                  and
                  easy to
                  use, and the features are exactly what I need to streamline my workflow.
                </p>
              </div>
            </div>

            <div class="text-box">
              <div class="box-container">
                <textarea placeholder="Reply"></textarea>
                <div>
                  <div class="formatting">
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M4 12H20">
                        </path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          r="10" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277"
                          d="M8.00897 9L8 9M16 9L15.991 9"></path>
                      </svg>
                    </button>
                    <button type="submit" class="send" title="Send">
                      <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M12 5L12 20"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <span class="title">Comments</span>
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277"
                      d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z">
                    </path>
                  </svg>
                </button>
                <hr>
                <span>49</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                      </path>
                      <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                      </path>
                    </svg>
                  </div>
                  <div class="user-info">
                    <span>Андрей</span>
                    <p>21 марта 2013, 01:02</p>
                  </div>
                </div>
                <p class="comment-content">
                  Харуки Мураками "Норвежский лес", Патрик Зюскинд "Парфюмер",
                  Орхан Памук "Снег", Януш Леон Вишневский "Одиночество в сети", Марк Леви "Похититель теней"
                </p>
              </div>
            </div>

            <div class="text-box">
              <div class="box-container">
                <textarea placeholder="Reply"></textarea>
                <div>
                  <div class="formatting">
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M4 12H20">
                        </path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          r="10" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277"
                          d="M8.00897 9L8 9M16 9L15.991 9"></path>
                      </svg>
                    </button>
                    <button type="submit" class="send" title="Send">
                      <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M12 5L12 20"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <span class="title">Comments</span>
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277"
                      d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z">
                    </path>
                  </svg>
                </button>
                <hr>
                <span>71</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                      </path>
                      <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                      </path>
                    </svg>
                  </div>
                  <div class="user-info">
                    <span>Олеся</span>
                    <p>24 марта 2013, 12:58</p>
                  </div>
                </div>
                <p class="comment-content">
                  недавно прочла Майкл Ньютон - " Путешествие души". Для общего развития стоит прочитать.
                </p>
              </div>
            </div>

            <div class="text-box">
              <div class="box-container">
                <textarea placeholder="Reply"></textarea>
                <div>
                  <div class="formatting">
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M4 12H20">
                        </path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          r="10" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277"
                          d="M8.00897 9L8 9M16 9L15.991 9"></path>
                      </svg>
                    </button>
                    <button type="submit" class="send" title="Send">
                      <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M12 5L12 20"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <span class="title">Comments</span>
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277"
                      d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z">
                    </path>
                  </svg>
                </button>
                <hr>
                <span>83</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                      </path>
                      <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                      </path>
                    </svg>
                  </div>
                  <div class="user-info">
                    <span>AstraSamar</span>
                    <p>26 февраля 2013, 22:43</p>
                  </div>
                </div>
                <p class="comment-content">
                  Теодор Драйзер "Трилогия желания" 3 книги:"Финансист","Титан","Стоик&qu​ot;.
                </p>
              </div>
            </div>

            <div class="text-box">
              <div class="box-container">
                <textarea placeholder="Reply"></textarea>
                <div>
                  <div class="formatting">
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M4 12H20">
                        </path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          r="10" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277"
                          d="M8.00897 9L8 9M16 9L15.991 9"></path>
                      </svg>
                    </button>
                    <button type="submit" class="send" title="Send">
                      <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M12 5L12 20"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <span class="title">Comments</span>
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277"
                      d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z">
                    </path>
                  </svg>
                </button>
                <hr>
                <span>75</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                      </path>
                      <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                      </path>
                    </svg>
                  </div>
                  <div class="user-info">
                    <span>Александра</span>
                    <p>25 февраля 2013, 08:57</p>
                  </div>
                </div>
                <p class="comment-content">
                  Те, которые перечитывала миллион раз и до сих пор перечитываю:

                  Белых, Пантелеев "Республика ШКИД"

                  Стэфан Цвейг "Амок", "Письмо незнакомки"

                </p>
              </div>
            </div>

            <div class="text-box">
              <div class="box-container">
                <textarea placeholder="Reply"></textarea>
                <div>
                  <div class="formatting">
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M4 12H20">
                        </path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          r="10" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277"
                          d="M8.00897 9L8 9M16 9L15.991 9"></path>
                      </svg>
                    </button>
                    <button type="submit" class="send" title="Send">
                      <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M12 5L12 20"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <span class="title">Comments</span>
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277"
                      d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z">
                    </path>
                  </svg>
                </button>
                <hr>
                <span>33</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                      </path>
                      <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                      </path>
                    </svg>
                  </div>
                  <div class="user-info">
                    <span>Yassine Zanina</span>
                    <p>Wednesday, March 13th at 2:45pm</p>
                  </div>
                </div>
                <p class="comment-content">
                  I've been using this product for a few days now and I'm really impressed! The interface is intuitive
                  and
                  easy to
                  use, and the features are exactly what I need to streamline my workflow.
                </p>
              </div>
            </div>

            <div class="text-box">
              <div class="box-container">
                <textarea placeholder="Reply"></textarea>
                <div>
                  <div class="formatting">
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M4 12H20">
                        </path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          r="10" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277"
                          d="M8.00897 9L8 9M16 9L15.991 9"></path>
                      </svg>
                    </button>
                    <button type="submit" class="send" title="Send">
                      <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M12 5L12 20"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card">
            <span class="title">Comments</span>
            <div class="comments">
              <div class="comment-react">
                <button>
                  <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277"
                      d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z">
                    </path>
                  </svg>
                </button>
                <hr>
                <span>49</span>
              </div>
              <div class="comment-container">
                <div class="user">
                  <div class="user-pic">
                    <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                      </path>
                      <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                      </path>
                    </svg>
                  </div>
                  <div class="user-info">
                    <span>Андрей</span>
                    <p>21 марта 2013, 01:02</p>
                  </div>
                </div>
                <p class="comment-content">
                  Харуки Мураками "Норвежский лес", Патрик Зюскинд "Парфюмер",
                  Орхан Памук "Снег", Януш Леон Вишневский "Одиночество в сети", Марк Леви "Похититель теней"
                </p>
              </div>
            </div>

            <div class="text-box">
              <div class="box-container">
                <textarea placeholder="Reply"></textarea>
                <div>
                  <div class="formatting">
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M4 12H20">
                        </path>
                        <path stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12">
                        </path>
                      </svg>
                    </button>
                    <button type="button">
                      <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          r="10" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277"
                          d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277"
                          d="M8.00897 9L8 9M16 9L15.991 9"></path>
                      </svg>
                    </button>
                    <button type="submit" class="send" title="Send">
                      <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M12 5L12 20"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff"
                          d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
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
    <script src="https://kit.fontawesome.com/b3330d82de.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
</body>

</html>