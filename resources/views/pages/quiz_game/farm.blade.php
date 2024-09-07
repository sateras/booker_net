<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Game</title>
    <style>
        .question-block {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #f0f0f0;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-size: 24px;
        }
        .question-content {
            margin-bottom: 20px;
        }
        .answer {
            margin: 10px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }
        .volume-control {
            z-index: 2;
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
    <audio id="clickSound" src="/media/plop-click_GkTp-HVO_NWM.mp3" preload="auto"></audio>
    <audio id="backgroundMusic" src="/media/inspiring-cinematic-ambient-116199.mp3" preload="auto" loop></audio>

    <div class="volume-control">
        <button id="volumeButton" class="volume-button">🔊</button>
        <input type="range" id="volumeSlider" class="volume-slider" min="0" max="1" step="0.01" value="0.5">
    </div>

    <!-- Блоки с вопросами -->
    <div id="q1" class="question-block">
        <div class="question-content">Какое самое большое животное на Земле?</div>
        <div class="answer" data-next="q2">Синий кит</div>
        <div class="answer" data-next="q2">Африканский слон</div>
        <div class="answer" data-next="q2">Белый медведь</div>
        <div class="answer" data-next="q2">Жираф</div>
    </div>
    <div id="q2" class="question-block">
        <div class="question-content">Какой самый высокий водопад в мире?</div>
        <div class="answer" data-next="q3">Ниагарский водопад</div>
        <div class="answer" data-next="q3">Виктория</div>
        <div class="answer" data-next="q3">Анхель</div>
        <div class="answer" data-next="q3">Игуасу</div>
    </div>
    <!-- Остальные блоки аналогично -->

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const blocks = document.querySelectorAll('.question-block');
            const clickSound = document.getElementById('clickSound');
            const backgroundMusic = document.getElementById('backgroundMusic');
            const volumeSlider = document.getElementById('volumeSlider');
            const volumeButton = document.getElementById('volumeButton');

            // Показываем первый вопрос сразу
            const firstQuestion = document.getElementById('q1');
            firstQuestion.style.display = 'flex';

            // Воспроизведение фоновой музыки при старте игры
            backgroundMusic.volume = 0.5;  // начальная громкость
            backgroundMusic.play();

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
</body>
</html>