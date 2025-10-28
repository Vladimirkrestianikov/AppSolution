<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppSolution – Загрузки</title>

    <link rel="stylesheet" href="{{ asset('css/Downloads.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar">
    <div class="nav-container">
        <div class="nav-logo">
            <a href="{{ route('AppSolution') }}">AppSolution</a>
        </div>
        <ul class="nav-menu">
            <li> <a href="{{ route('AppSolution') }}">Main</a></li>
            <li>  <a href="{{ route('Projects') }}">Projects</a></li>
            <li> <a href="{{ route('About') }}">About us</a></li>
            <li><a href="{{ route('Downloads') }}">Downloads</a></li>
            <li> <a href="{{ route('profile.edit') }}">Profile</a></li>
        </ul>
    </div>
</nav>

<section class="downloads-section">
    <div class="slider-container">
        <button class="slider-btn left-btn">‹</button>

        <div class="slider">
            <div class="slide">
                <div class="slide-inner">
                    <div class="app-icon glass">
                        <img src="images/capcut.jpg" alt="CapCut">
                    </div>
                    <h2>CapCut</h2>
                    <p>Мощный и простой видеоредактор для создания клипов, эффектов и контента для соцсетей. Подходит как новичкам, так и профи.</p>
                    <a href="https://www.capcut.com" target="_blank" rel="noopener" class="download-btn">Скачать</a>
                </div>
            </div>

            <div class="slide">
                <div class="slide-inner">
                    <div class="app-icon glass">
                        <img src="images/alight.jpg" alt="Alight Motion">
                    </div>
                    <h2>Alight Motion</h2>
                    <p>Интуитивно понятный инструмент для анимации и монтажа с эффектами, ключевыми кадрами и цветокоррекцией.</p>
                    <a href="https://alightcreative.com" target="_blank" rel="noopener" class="download-btn">Скачать</a>
                </div>
            </div>

            <div class="slide">
                <div class="slide-inner">
                    <div class="app-icon glass">
                        <img src="images/AE.jpg" alt="After Effects">
                    </div>
                    <h2>Adobe After Effects</h2>
                    <p>Промышленный стандарт для визуальных эффектов, анимации и постобработки. Используется создателями контента по всему миру.</p>
                    <a href="https://www.adobe.com/products/aftereffects.html" target="_blank" rel="noopener" class="download-btn">Скачать</a>
                </div>
            </div>
        </div>

        <button class="slider-btn right-btn">›</button>
    </div>
</section>

<footer class="footer">
    <div class="container"><p>© 2025 AppSolution. Все права защищены.</p></div>
</footer>




<script src="{{ asset('Js/Downloads.js') }}"></script>
</body>
</html>
