<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" href="/images/favicon.ico">
  <title>Чат</title>
  <style>
    @import "compass/css3";

    body {
      font-size: 100%;
      background-image: linear-gradient(top left, #333, black);
      background-attachment: fixed;
    }

    *,
    *:before,
    *:after {
      box-sizing: border-box;
    }

    ul,
    li {
      list-style-type: none;
    }

    .cont {
      display: flex;
    }

    .wrapper {
      margin-top: 30px;
      margin-left: 250px;
    }

    .wrapper ul {
      display: flex;
      flex-direction: column;
      width: 700x;
      margin: 0 auto;
      overflow-x: hidden;
      overflow-y: scroll;
      padding-right: 30px;
      margin: 0;
      padding: 0;
      height: 87vh;
    }

    .wrapper ul .task-li{
      align-self: flex-end;
    }

    .wrapper ul li {
      min-width: 200px;
      width: 300px;
      margin-bottom: 20px;
      padding: 10px 20px;
      background-color: rgba(255, 255, 255, 0.65);
      position: relative;
      border-radius: 10px;
      font: 1em/1.6 "arial";
      clear: both;
      text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.35);

      float: left;
      margin-left: 80px;
      background-color: rgba(83, 83, 83, 0.6);
      text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.75);
      color: rgba(255, 255, 255, 0.9);
    }

    .task-li2{
      float: left;
      margin-left: 80px;
      background-color: rgba(83, 83, 83, 0.6);
      text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.75);
      color: rgba(255, 255, 255, 0.9);
    }

    .task-li {
      float: right;
      margin-right: 80px;
      color: rgba(255, 255, 255, 0.9);
      text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.75);
      background-color: #496bd99b;
    }

    .wrapper ul li:before,
    .wrapper ul li:after {
      position: absolute;
      content: "";
    }

    .wrapper ul li:before {
      width: 45px;
      height: 45px;
      top: 0;
      border-radius: 50%;
      background-position: 50% 50%;
      background-repeat: no-repeat;
    }

    .task-li2::before{
      left: -80px;
      background-image: url("data:image/jpeg;base64,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");
    }

    .task-li::before {
      right: -80px;
      background-image: url("data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/4QBoRXhpZgAATU0AKgAAAAgABAEaAAUAAAABAAAAPgEbAAUAAAABAAAARgEoAAMAAAABAAIAAAExAAIAAAASAAAATgAAAAAAAABgAAAAAQAAAGAAAAABUGFpbnQuTkVUIHYzLjUuMTAA/9sAQwAHBQUGBQQHBgUGCAcHCAoRCwoJCQoVDxAMERgVGhkYFRgXGx4nIRsdJR0XGCIuIiUoKSssKxogLzMvKjInKisq/9sAQwEHCAgKCQoUCwsUKhwYHCoqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioq/8AAEQgAMgAyAwEiAAIRAQMRAf/EAB8AAAEFAQEBAQEBAAAAAAAAAAABAgMEBQYHCAkKC//EALUQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+v/EAB8BAAMBAQEBAQEBAQEAAAAAAAABAgMEBQYHCAkKC//EALURAAIBAgQEAwQHBQQEAAECdwABAgMRBAUhMQYSQVEHYXETIjKBCBRCkaGxwQkjM1LwFWJy0QoWJDThJfEXGBkaJicoKSo1Njc4OTpDREVGR0hJSlNUVVZXWFlaY2RlZmdoaWpzdHV2d3h5eoKDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uLj5OXm5+jp6vLz9PX29/j5+v/aAAwDAQACEQMRAD8A8wre0/w55qLLqM62ysMrEWAdh+PSl8M6fFLMbu5K7YziNT3b1/CqniRLq98UA2SlhHGobnA55FdbajHmZwxTnLlRtm78NabDGhs/tEwchmVfMGD0znvn0pqahoN3fCH+z0RcHcWiKY4745/KuUVtTtdSFtJCvmxHmN+317Gp5dTthGZXUSXPJJVsh1PUH1rP2rZt7GKOi1LwxHIv2jRg20jPks4b64b+h/OuZZWRyrqVZTggjBBrZ0PWftFwkA8xImTpu7gVJr1kpX7UhzJ0cZ5I9a0umtDJxcWYVFFFBJ1WlKkOmQASYyoYjZnk81aukuLHTP7YFtDeW6zJEFmyu4555H8PQemaz9NmR9PhO45C7T+HFa1rrk9iwSZ3vLJU+WyaVUCsDncMjJI64H41riYRVHmS7E4KbliOWT7nPePtPvbm8j1trWSyF3GpkgkYEbl4BBHTjHBrn49GkfRLnUpn2tBgtFj76k4GD/e749K63xb4gtdTtp4LeRismGVyOmDnpWBq2pXd74ZsdPjG2GCTdHDEnzSN/ebHLH+VeXBuyR7E4wu35EXhKKObVCRnMKMwY+hwAPz5rrJ7bzYXTfu3Ag5yKwfC+nNZvcPPJHvdQDGnJjOehPTPsOlb0zLFA8m/hVJ/SvXo0oundnhV6slU5UcjRRRXPY3Luk3giYwSHCscqfetfULXOlR3TXIhZ2ZYfLILHHDkjsO3PJPSuXqeC5aPzd5ZjIQdxOcEDFa+0fJyEKmvac5myyQWJlRZnkkTHytjoeuPepLaa9vi4ib7LbOMyFG5KjtnrVMabPd30gcrCjMSZGPQf1NbF0i29pHBAUlbABVT8pPqSOwrljDW53c+lrl/RWxvymyDAWPjsPSpdVnVF8iNsk8tz0HpVFLloowEYvJjBkIwB7AdhUGSxJJyT1JrpU2o8py1IwlJS6hRS0VAiKiiikUKKUUUUxC0ooooAKKKKQH/2Q==");
    }

    .wrapper ul li:after {
      width: 0;
      height: 0;
      top: 15px;
      border-top: 15px solid rgba(255, 255, 255, 0.65);
    }

    .task-li2::after{
      left: -15px;
      border-left: 15px solid transparent;
    }

    .task-li::after {
      right: -15px;
      border-top-color: rgba(255, 255, 255, 0.3);
      border-right: 15px solid transparent;
    }




    @media only screen and (min-width:768px) {
      .wrapper ul {
        width: 700px;
        display: flex;
        flex-direction: column;

      }
    }

    @media only screen and (max-width:767px) {
      .wrapper ul {
        width: 700px;
        display: flex;
        flex-direction: column;
      }
    }




    .search-label {
      display: flex;
      align-items: center;
      box-sizing: border-box;
      position: relative;
      border: 1px solid transparent;
      border-radius: 12px;
      overflow: hidden;
      background: #e6e6e6;
      padding: 9px;
      cursor: text;
      width: 590px;
    }

    .search-label:hover {
      border-color: gray;
    }

    .search-label:focus-within {
      background: #e6e6e6;
      border-color: gray;
    }

    .search-label input {
      outline: none;
      width: 100%;
      border: none;
      background: none;
      color: rgb(162, 162, 162);
    }



    .search-label input:valid~.search-icon {
      display: block;
    }

    .search-label input:valid {
      width: calc(100% - 22px);
      transform: translateX(20px);
    }

    .search-label svg {
      position: absolute;
      color: #7e7e7e;
    }

    .search-icon {
      display: none;
      width: 12px;
      height: auto;
    }

    .nav-link:hover {
      background-color: #496bd9;
      color: white;
    }

    #task::-webkit-scrollbar {
      width: 10px;
      background-color: #f9f9fd;
    }

    #task::-webkit-scrollbar-thumb {
      border-radius: 10px;
      background-color: #d9d9d9;
    }

    #task::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.2);
      border-radius: 10px;
      background-color: #f9f9fd;
    }

    .conf-for-input-button {
      display: flex;
      justify-content: space-between;
      width: 700px;
    }

    /* button */

    button {
      font-family: inherit;
      font-size: 20px;
      background: royalblue;
      color: white;
      padding: 8px 9px;
      padding-left: 0.9em;
      display: flex;
      align-items: center;
      border: none;
      border-radius: 16px;
      overflow: hidden;
      transition: all 0.2s;
    }

    button span {
      display: block;
      margin-left: 0.3em;
      transition: all 0.3s ease-in-out;
    }

    button svg {
      display: block;
      transform-origin: center center;
      transition: transform 0.3s ease-in-out;
    }

    button:hover .svg-wrapper {
      animation: fly-1 0.6s ease-in-out infinite alternate;
    }

    button:hover svg {
      transform: translateX(1.2em) rotate(45deg) scale(1.1);
    }

    button:hover span {
      transform: translateX(5em);
    }

    button:active {
      transform: scale(0.95);
    }

    @keyframes fly-1 {
      from {
        transform: translateY(0.1em);
      }

      to {
        transform: translateY(-0.1em);
      }
    }
  </style>
</head>

<body>
  <div class="cont">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px; height: 100vh;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32">
          <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">Меню</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="/" class="nav-link link-body-emphasis" aria-current="page">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#home"></use>
            </svg>
            Главная
          </a>
        </li>
        <li>
          <a href="/profile" class="nav-link link-body-emphasis">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#speedometer2"></use>
            </svg>
            Профиль
          </a>
        </li>
        <li>
          <a href="vakansii.html" class="nav-link link-body-emphasis">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#table"></use>
            </svg>
            Вакансии
          </a>
        </li>
        <li>
          <a href="kursi.html" class="nav-link link-body-emphasis">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#grid"></use>
            </svg>
            Курсы
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-body-emphasis">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#people-circle"></use>
            </svg>
            Выполненные заказы
          </a>
        </li>
      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
          data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong>{{app('auth')->user()->name}}</strong>
        </a>
        <ul class="dropdown-menu text-small shadow">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
      </div>
    </div>



    <div class="wrapper">

      <div class="tasks" id="tasks">
        <ul class="task" id="task">

        </ul>
      </div>

      <div class="conf-for-input-button">

        <label class="search-label">
          <input type="text" name="text" id="text" class="input" required="" placeholder="Type here...">
          <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" version="1.1"
            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 56.966 56.966"
            style="enable-background:new 0 0 512 512" xml:space="preserve">
            <g>
              <path
                d="M55.146 51.887 41.588 37.786A22.926 22.926 0 0 0 46.984 23c0-12.682-10.318-23-23-23s-23 10.318-23 23 10.318 23 23 23c4.761 0 9.298-1.436 13.177-4.162l13.661 14.208c.571.593 1.339.92 2.162.92.779 0 1.518-.297 2.079-.837a3.004 3.004 0 0 0 .083-4.242zM23.984 6c9.374 0 17 7.626 17 17s-7.626 17-17 17-17-7.626-17-17 7.626-17 17-17z"
                fill="currentColor" data-original="#000000" class=""></path>
            </g>
          </svg>
        </label>

        <button type="submit" onclick="addTaskMessage()">
          <div class="svg-wrapper-1">
            <div class="svg-wrapper">
              <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path
                  d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
                  fill="currentColor"></path>
              </svg>
            </div>
          </div>
          <span>Send</span>
        </button>
      </div>

    </div>
  </div>

  <script src="/js/chat_gornich.js"></script>

  <script>
    // localStorage.clear()
    function addTask() {
      for (let i = 0; i < sessionStorage.length; i++) {
        // let text = document.createTextNode(localStorage.getItem(localStorage.key(i)))
        // text.className = 'task-text';

        let id = document.createTextNode(localStorage.getItem(localStorage.key(i)))
        id.className = 'task-li';

        let newTask = document.createElement('li');
        newTask.className = 'task-li'

        newTask.appendChild(id);

        document
          .getElementById('task')
          .appendChild(newTask)
      }
    }

    addTask()


    // function addTaskSession() {
    //   for (let i = 0; i < localStorage.length; i++) {
    //     // let text = document.createTextNode(localStorage.getItem(localStorage.key(i)))
    //     // text.className = 'task-text';

    //     let id = document.createTextNode(localStorage.getItem(localStorage.key(i)))
    //     id.className = 'task-li2';

    //     let newTask = document.createElement('li');
    //     newTask.className = 'task-li2'

    //     newTask.appendChild(id);

    //     document
    //       .getElementById('task')
    //       .appendChild(newTask)
    //   }
    // }

    function addTaskSession() {
        for (let i = 0; i < localStorage.length; i++) {
            let bookData = JSON.parse(localStorage.getItem(localStorage.key(i)));

            // Создаем элементы для отображения данных книги
            let newTask = document.createElement('li');
            newTask.className = 'task-li2';

            // Создаем ссылку, которая будет оборачивать заголовок книги
            let linkElement = document.createElement('a');
            linkElement.href = 'http://books.google.com/books/content?id=OmQawwEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api'; // Добавляем URL-адрес книги
            linkElement.target = '_blank'; // Открываем ссылку в новой вкладке
            linkElement.textContent = bookData.title;
            linkElement.style.textDecoration = 'none'; // Убираем подчеркивание ссылки
            linkElement.style.color = '#007bff'; // Цвет ссылки

            // Создаем элемент подзаголовка
            let subtitleElement = document.createElement('p');
            subtitleElement.textContent = bookData.subtitle;

            // Создаем элемент изображения
            let imageElement = document.createElement('img');
            imageElement.src = bookData.image;
            imageElement.alt = bookData.title;
            imageElement.style.width = '100px'; // Устанавливаем ширину изображения

            // Добавляем элементы в новый элемент списка
            newTask.appendChild(linkElement);
            newTask.appendChild(subtitleElement);
            newTask.appendChild(imageElement);

            // Добавляем новый элемент списка в DOM
            document.getElementById('task').appendChild(newTask);
        }
    }

    addTaskSession()

  </script>


  <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>