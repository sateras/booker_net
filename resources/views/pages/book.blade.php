<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Северный лес - Книга</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            font-family: Arial, sans-serif;
            font-size: 18px;
        }

        .product-page {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .product-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }

        .product-header h1 {
            font-size: 2rem;
            margin: 0;
        }

        .product-info {
            display: flex;
            margin-top: 20px;
        }

        .product-image {
            max-width: 350px;
            margin-right: 20px;
        }

        .product-image img {
            width: 100%;
            height: auto;
        }

        .product-details {
            flex-grow: 1;
        }

        .rating {
            color: #f39c12;
            font-size: 1.2rem;
        }

        .rating span {
            margin-right: 5px;
        }

        .product-description {
            margin-top: 10px;
            font-size: 1.2rem;
            color: #555;
        }

        .product-specs {
            margin-top: 20px;
            font-size: 1rem;
            color: #333;
        }

        .product-specs ul {
            padding: 0;
            list-style: none;
        }

        .product-specs ul li {
            margin-bottom: 10px;
        }

        .product-specs ul li strong {
            width: 150px;
            display: inline-block;
            color: #555;
        }

        .product-buy {
            width: 300px;
            padding: 20px;
            border: 1px solid #eee;
            border-radius: 5px;
            background-color: #f9f9f9;
            position: sticky;
            top: 20px;
        }

        .btn-primary {
            width: 100%;
            background-color: #007bff;
            border: none;
            padding: 15px 0;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        .btn-outline-secondary {
            width: 100%;
            padding: 15px 0;
            border: 1px solid #6c757d;
            color: #6c757d;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        .btn-outline-secondary:hover {
            background-color: #6c757d;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
            width: 48%;
            padding: 10px;
            font-size: 1.1rem;
            border: none;
            margin-bottom: 10px;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .review-section {
            margin-top: 40px;
        }

        .review-title {
            font-size: 1.75rem;
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        .review-block {
            margin-bottom: 30px;
            border-radius: 10px;
            padding: 20px;
            background-color: #f5ffeb;
        }

        .review-author {
            font-weight: bold;
            font-size: 1.2rem;
        }

        .review-date {
            color: #777;
            font-size: 0.9rem;
            float: right;
        }

        .review-rating {
            color: #f39c12;
            font-size: 1.2rem;
        }

        .review-text {
            font-size: 1.1rem;
            color: #555;
            margin-top: 10px;
        }

        .review-pros-cons {
            margin-top: 20px;
        }

        .review-pros-cons strong {
            font-size: 1.1rem;
            display: block;
            margin-bottom: 5px;
        }

        .review-likes {
            margin-top: 15px;
            font-size: 0.9rem;
            color: #555;
        }

        .review-likes .like,
        .review-likes .dislike {
            margin-right: 15px;
        }

        .review-likes i {
            margin-right: 5px;
        }
        .btn-submit {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            font-size: 1.2rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }



        .review-form {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #eee;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .review-form h2 {
            font-size: 1.75rem;
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
        }

        .rating-input {
            display: flex;
            gap: 10px;
            font-size: 1.5rem;
            direction: rtl; /* Делаем звёзды слева направо */
        }

        .rating-input input[type="radio"] {
            display: none;
        }

        .rating-input label {
            cursor: pointer;
            color: #ccc; /* Цвет неактивных звёзд */
        }

        .rating-input label:hover,
        .rating-input label:hover ~ label,
        .rating-input input[type="radio"]:checked ~ label {
            color: #f39c12; /* Цвет активных звёзд */
        }
    </style>
</head>

<body>

    <div class="product-page">
        <div class="product-header">
            <h1>{{$book->title}}</h1>
            <div class="rating">
                ⭐️⭐️⭐️⭐️ <span>(22 оценки)</span>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-8">
                <div class="product-info">
                    <div class="product-image">
                        <img style="min-width: 260px" src="{{$book->thumbnail}}" alt="Северный лес">
                    </div>
                    <div class="product-details">
                        <div class="product-description">
                            Новый роман автора «Зимнего солдата» и «Настройщика».<br>
                            Лучшая книга года по версиям: New York Times Book Review, Washington Post, Time, The Boston Globe, NPR, Chicago Public Library, The Star Tribune, The Economist, The Christian Science Monitor.
                        </div>
                        <div class="product-specs">
                            <ul>
                                <li><strong>ID товара:</strong> 3034090</li>
                                <li><strong>Издательство:</strong> Фантом Пресс</li>
                                <li><strong>Год издания:</strong> 2024</li>
                                <li><strong>ISBN:</strong> 978-5-86471-957-2</li>
                                <li><strong>Количество страниц:</strong> 448</li>
                                <li><strong>Размер:</strong> 2.6×13.2×20.5 см</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="review-section">
                    <h2 class="review-title">Отзывы</h2>

                    <div class="review-block">
                        <div class="review-author">Ирина</div>
                        <div class="review-date">24.08.2024</div>
                        <div class="review-rating">⭐️⭐️⭐️⭐️⭐️</div>
                        <div class="review-text">
                            Редкий случай, когда мне понравилась книга, в которой почти нет диалогов. Очень сильное обаяние имеет трехсотлетняя история, преподнесенная таким домашним образом. Настроение книги – как будто сидишь у камина (того самого, из книги), пьешь сидр из тех самых яблок и слушаешь, как дедушка рассказывает о тех, кто жил в этом старом доме. Короткие истории о людях из разных поколений вбирают в себя очень много информации, а уж когда они начинают связываться и переплетаться между собой, становится совсем интересно. Персонажи очень жизненные и убедительные. Концовка впечатлила, не сразу поняла, о чем идет речь, но потом понравилось.
                        </div>
                        <div class="review-pros-cons">
                            <strong>Плюсы</strong>
                            Отличный сюжет из множества маленьких историй, которые сложились в одну. Необычные призраки. История яблоневого сада (захотелось попробовать это яблоко). Хороший слог.
                            <strong>Минусы</strong>
                            Читать надо медленно, динамики здесь не то чтобы нет, но она скрытая.
                        </div>
                        <div class="review-likes">
                            <span class="like"><i class="bi bi-hand-thumbs-up"></i> 0</span>
                            <span class="dislike"><i class="bi bi-hand-thumbs-down"></i> 0</span>
                        </div>
                    </div>

                    <!-- Добавьте больше отзывов по аналогии -->
                </div>

                <div class="review-form">
                  <h2>Оставить отзыв</h2>
                  {{-- <form action="{{ route('submit.review') }}" method="POST"> --}}
                  <form action="" method="POST">
                      @csrf
                      <div class="form-group">
                          <label for="reviewer-name">Ваше имя:</label>
                          <input type="text" class="form-control" id="reviewer-name" name="name" placeholder="Введите ваше имя" required>
                      </div>
                      <div class="form-group">
                          <label for="review-text">Ваш отзыв:</label>
                          <textarea class="form-control" id="review-text" name="review_text" rows="5" placeholder="Напишите ваш отзыв" required></textarea>
                      </div>
                      <div class="form-group">
                          <label for="review-pros">Плюсы:</label>
                          <textarea class="form-control" id="review-pros" name="pros" rows="2" placeholder="Напишите, что вам понравилось" required></textarea>
                      </div>
                      <div class="form-group">
                          <label for="review-cons">Минусы:</label>
                          <textarea class="form-control" id="review-cons" name="cons" rows="2" placeholder="Напишите, что вам не понравилось" required></textarea>
                      </div>
                      <div class="form-group">
                          <label>Оценка:</label>
                          <div class="rating-input">
                            <input type="radio" id="star5" name="rating" value="5">
                            <label for="star5" class="fas fa-star" data-filled="fas fa-star" data-empty="far fa-star"></label>
        
                            <input type="radio" id="star4" name="rating" value="4">
                            <label for="star4" class="fas fa-star" data-filled="fas fa-star" data-empty="far fa-star"></label>
        
                            <input type="radio" id="star3" name="rating" value="3">
                            <label for="star3" class="fas fa-star" data-filled="fas fa-star" data-empty="far fa-star"></label>
        
                            <input type="radio" id="star2" name="rating" value="2">
                            <label for="star2" class="fas fa-star" data-filled="fas fa-star" data-empty="far fa-star"></label>
        
                            <input type="radio" id="star1" name="rating" value="1">
                            <label for="star1" class="fas fa-star" data-filled="fas fa-star" data-empty="far fa-star"></label>
                        </div>
                      </div>
                      <button type="submit" class="btn-submit btn btn-primary">Отправить отзыв</button>
                  </form>
              </div>
            </div>

            <div class="col-md-4">
                <div class="product-buy">
                    <button class="btn btn-primary" onclick="shareBook()">Поделиться</button>
                    <button class="btn btn-outline-secondary">Добавить в избранное</button>
                </div>
            </div>
          
          <script>
              function shareBook() {
                  // Данные книги
                  let bookTitle = "{{$book->title}}";
                  let bookSubtitle = "{{$book->title}}";
                  let bookImage = "{{$book->thumbnail}}";
                  let bookUrl = "{{'/library/' . $book->slug}}";
          
                  // Создаем объект книги
                  let bookData = {
                      title: bookTitle,
                      subtitle: bookSubtitle,
                      image: bookImage,
                      url: bookUrl
                  };
          
                  localStorage.setItem(localStorage.length + 1, JSON.stringify(bookData));
          
                  document.location.reload(true);
              }
          </script>
        </div>
    </div>


    <script>
      document.querySelectorAll('.rating-input label').forEach(label => {
          label.addEventListener('click', function() {
              const labels = this.parentNode.querySelectorAll('label');
              labels.forEach(lbl => {
                  lbl.classList.remove('full-star');
                  lbl.classList.replace('fas', 'far');
              });

              this.classList.add('full-star');
              this.classList.replace('far', 'fas');

              let previousSibling = this.previousElementSibling;
              while (previousSibling) {
                  previousSibling.classList.add('full-star');
                  previousSibling.classList.replace('far', 'fas');
                  previousSibling = previousSibling.previousElementSibling;
              }
          });
      });
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>