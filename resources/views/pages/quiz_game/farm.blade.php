<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Game</title>
    <link rel="stylesheet" type="text/css" href="/css/library.css">
    <style>
        .toggle {
            position: absolute;
            z-index: 100;
            top: 20px;
            right: 20px;
        }
        .showcase {
            padding: 0;
            position: relative;
            transition: transform 0.5s ease-in-out;
        }

        .showcase.active {
            transform: translateX(-22%);
            right: 0;
        }
        .question-block, .main-page {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover; /* Фоновое изображение покрывает весь блок */
            background-position: center;
            background-color: #f0f0f0;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-size: 24px;
        }
        .main-page {
            display: flex;
            background-image: url('/quiz/gamebg.jpeg');
        }
        .bottom-image {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            object-fit: cover;
            z-index: 2;
        }
        .top-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            object-fit: cover;
            z-index: 2;
        }
        #startButton {
            z-index: 1000;
            cursor: pointer;
            width: 240px;
            height: 80px;
            background-image: url('/quiz/gametable.png');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* #q1 {
            background-image: url('/quiz/gamebg.jpeg');
        }

        #q2 {
            background-image: url('/quiz/gamebg.jpeg');
        } */
        .question-block {
            background-image: url('/quiz/gamebg.jpeg');
        }


        .question-content {
            background-image: url('/quiz/gameques.png');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            position: absolute;
            padding: 100px;
            top: 40px;
            margin-bottom: 20px;
        }
        .start-button {

        }
        .answer {
            z-index: 100;
            cursor: pointer;
            margin: 10px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }
        .volume-control {
            z-index: 1000;
            position: fixed;
            bottom: 20px;
            left: 20px;
            display: flex;
            align-items: center;
        }
        .volume-button {
            width: 50px;
            height: 50px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
        }
        .volume-slider {
            display: none;
            margin-left: 10px;
        }
        .volume-control:hover .volume-slider {
            display: block;
        }
    </style>
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="/">Главная</a></li>
            @if(app('auth')->check())
                <li>Привет, <a href="/profile">{{ app('auth')->user()->email }}!</a></li>
            @endif
            @if(!app('auth')->check())
                <li><a href="/login">Войти</a></li>
            @endif          
            <li><a href="/forum">Форум</a></li>
            <li><a href="">Игры</a></li>
            <li><a href="">Магазин</a></li>
        </ul>
    </div>
    <div class="showcase">
        <div class="toggle"></div>
        

        <audio id="clickSound" src="/media/plop-click_GkTp-HVO_NWM.mp3" preload="auto"></audio>
        <audio id="backgroundMusic" src="/media/inspiring-cinematic-ambient-116199.mp3" preload="auto" loop></audio>

        <div class="volume-control">
            <button id="volumeButton" class="volume-button">🔊</button>
            <input type="range" id="volumeSlider" class="volume-slider" min="0" max="1" step="0.01" value="0.5">
        </div>

        <!-- Главная страница -->
        <div class="main-page">
            <img src="/quiz/gameclouds.png" alt="Top Image" class="top-image">
            <div id="startButton">
                <div style="padding: 26px;">
                    Начать
                </div>
            </div>
            <img src="/quiz/gameground.png" alt="Bottom Image" class="bottom-image">
        </div>


        <!-- Блоки с вопросами -->
        <div id="q1" class="question-block">
            <img src="/quiz/gameclouds.png" alt="Top Image" class="top-image">
            <div class="question-content">Какое самое большое животное на Земле?</div>
            <div class="answer" data-next="q2" data-question-id="1" data-answer-id="1">Синий кит</div>
            <div class="answer" data-next="q2" data-question-id="1" data-answer-id="2">Африканский слон</div>
            <div class="answer" data-next="q2" data-question-id="1" data-answer-id="3">Белый медведь</div>
            <div class="answer" data-next="q2" data-question-id="1" data-answer-id="4">Жираф</div>
            <img src="/quiz/gameground.png" alt="Bottom Image" class="bottom-image">
        </div>
        <div id="q2" class="question-block">
            <img src="/quiz/gameclouds.png" alt="Top Image" class="top-image">
            <div class="question-content">Какой самый высокий водопад в мире?</div>
            <div class="answer" data-next="q3" data-question-id="2" data-answer-id="5">Ниагарский водопад</div>
            <div class="answer" data-next="q3" data-question-id="2" data-answer-id="6">Виктория</div>
            <div class="answer" data-next="q3" data-question-id="2" data-answer-id="7">Анхель</div>
            <div class="answer" data-next="q3" data-question-id="2" data-answer-id="8">Игуасу</div>
            <img src="/quiz/gameground.png" alt="Bottom Image" class="bottom-image">
        </div>

        <div class="question-block" id="resultForm">
            <img src="/quiz/gameclouds.png" alt="Top Image" class="top-image">
            <div class="answer" id="submitResult">Завершить</div>
            <img src="/quiz/gameground.png" alt="Bottom Image" class="bottom-image">
        </div>
        {{-- <div id="q3" class="question-block">
            <img src="/quiz/gameclouds.png" alt="Top Image" class="top-image">
            <div class="answer" id="submitResult">Завершить</div>
            <img src="/quiz/gameground.png" alt="Bottom Image" class="bottom-image">
        </div> --}}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const blocks = document.querySelectorAll('.question-block');
            const mainPage = document.querySelector('.main-page');
            const startButton = document.getElementById('startButton');
            const clickSound = document.getElementById('clickSound');
            const backgroundMusic = document.getElementById('backgroundMusic');
            const volumeSlider = document.getElementById('volumeSlider');
            const volumeButton = document.getElementById('volumeButton');

            // Запуск фоновой музыки
            backgroundMusic.volume = 0.2;
            backgroundMusic.play();

            // Логика для кнопки "Начать"
            startButton.addEventListener('click', () => {
                mainPage.style.display = 'none';
                document.getElementById('q1').style.display = 'flex';
            });

            // Добавляем обработку кликов по ответам
            const answers = document.querySelectorAll('.answer');
            answers.forEach(answer => {
                answer.addEventListener('click', () => {
                    // Воспроизведение звука
                    clickSound.play();

                    // Скрываем текущий блок
                    const currentBlock = answer.closest('.question-block');
                    currentBlock.style.display = 'none';

                    // Показать следующий блок
                    const nextQuestionId = answer.getAttribute('data-next');
                    if (nextQuestionId) {
                        document.getElementById(nextQuestionId).style.display = 'flex';
                    }
                });
            });

            // Управление громкостью фоновой музыки
            volumeSlider.addEventListener('input', (event) => {
                backgroundMusic.volume = event.target.value;
            });

            // Отключение/включение звука при нажатии на кнопку
            let isMuted = false;
            volumeButton.addEventListener('click', () => {
                isMuted = !isMuted;
                backgroundMusic.muted = isMuted;
                volumeButton.textContent = isMuted ? '🔇' : '🔊';
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const startButton = document.getElementById('startButton');
            const resultForm = document.getElementById('resultForm');
            let userAnswers = []; // Массив для хранения ответов пользователя

            // Логика для кнопки "Начать"
            // startButton.addEventListener('click', () => {
            //     document.querySelector('.main-page').style.display = 'none';  // скрываем главную страницу
            //     document.getElementById('q1').style.display = 'flex';  // показываем первый вопрос
            // });

            // Логика для обработки кликов по ответам
            const answers = document.querySelectorAll('.answer');
            answers.forEach(answer => {
                answer.addEventListener('click', () => {
                    const questionId = answer.getAttribute('data-question-id');
                    const answerId = answer.getAttribute('data-answer-id');

                    // Сохраняем ответ пользователя
                    userAnswers.push({
                        question_id: questionId,
                        answer_id: answerId
                    });

                    const currentBlock = answer.closest('.question-block');
                    currentBlock.style.display = 'none';

                    const nextQuestionId = answer.getAttribute('data-next');
                    if (nextQuestionId) {
                        document.getElementById(nextQuestionId).style.display = 'flex';
                    } else {
                        // Показываем форму для отправки результатов после последнего вопроса
                        resultForm.style.display = 'flex';
                    }
                });
            });

            // Логика для отправки результатов
            document.getElementById('submitResult').addEventListener('click', () => {
                saveResult(userAnswers);
            });

            function saveResult(answers) {
                fetch('/save-result', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        answers: answers
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.message === 'Result saved successfully') {
                        alert('Результат успешно сохранен!');
                        resultForm.style.display = 'none';
                    }
                })
                .catch(error => console.error('Ошибка:', error));
            }
        });
    </script>
    <script>
        const menuToggle = document.querySelector('.toggle');
        const showcase = document.querySelector('.showcase');

        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            showcase.classList.toggle('active');
        })
    </script>
</body>
</html>