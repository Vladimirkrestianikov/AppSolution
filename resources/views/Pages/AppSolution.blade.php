<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppSolution - Твой Монтаж</title>
    <link rel="stylesheet" href="{{ asset('css/AppSolution.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar">
    <div class="nav-container">
        <div class="nav-logo">
            <a href="{{ route('AppSolution') }}">AppSolution</a>
        </div>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="{{ route('AppSolution') }}">Main</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('Projects') }}">Projects</a>

            </li>
            <li class="nav-item">

                <a href="{{ route('About') }}">About us</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('Downloads') }}">Downloads</a>

            </li>
            <li class="nav-item">
                <a href="{{ route('profile.edit') }}">Profile</a>
            </li>
        </ul>
    </div>
</nav>



<section class="hero">
    <div class="hero-content">
        <h1>ТВОЙ ПУТЬ В МОНТАЖ</h1>
        <p>Изучи видео-монтаж с нуля и создавай профессиональные ролики в CapCut, Alight Motion и After Effects</p>
        <a href="{{ route('Projects') }}" class="cta-button">Узнать больше</a>
    </div>
</section>


<section class="missions">
    <div class="container">
        <h2>ИНСТРУМЕНТЫ</h2>
        <div class="mission-grid">

            <div class="mission-item">
                <div class="mission-image">
                    <img src="{{ asset('images/ggg.jpg') }}" alt="LUTs">

                </div>
                <div class="mission-text">
                    <h3>LUTS</h3>
                    <p>Готовые цветовые профили, которые придают видео кинематографичный стиль. Преобразуют один цвет в другой в процессе видеомонтажа. Подходят для всех платформ.</p>
                    <a href="https://luts.iwltbap.com/" target="_blank" rel="noopener noreferrer" class="mission-link">Подробнее →</a>
                </div>
            </div>

            <div class="mission-item">
                <div class="mission-image">
                    <img src="{{ asset('images/fff.jpg') }}" alt="HandBrake">
                </div>
                <div class="mission-text">
                    <h3>HANDBRAKE</h3>
                    <p>Универсальный конвертер видеофайлов. Помогает оптимизировать вес видео без потери качества перед загрузкой на YouTube или TikTok.</p>
                    <a href="https://handbrake.fr/" target="_blank" rel="noopener noreferrer" class="mission-link">Подробнее →</a>
                </div>
            </div>

            <div class="mission-item">
                <div class="mission-image">
                    <img src="{{ asset('images/montage.jpg') }}" alt="Audacity">

                </div>
                <div class="mission-text">
                    <h3>AUDACITY</h3>
                    <p>Бесплатный инструмент для улучшения звука и записи. Позволяет удалять шум, выравнивать громкость и добавлять эффекты в ваши видеопроекты.</p>
                    <a href="https://www.audacityteam.org/" target="_blank" rel="noopener noreferrer" class="mission-link">Подробнее →</a>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="full-image-section">
    <div class="full-image-content">
        <h2>СОЗДАЙ СВОЙ ПРОЕКТ</h2>
        <p>Применяй полученные знания на практике — от идеи до готового ролика</p>
    </div>
</section>


<section class="technology">
    <div class="container">
        <h2>ЧТО ТЫ ОСВОИШЬ</h2>
        <div class="tech-grid">
            <div class="tech-item">
                <div class="tech-icon"></div>
                <h3>МОНТАЖ И ЭФФЕКТЫ</h3>
                <p>Работа с переходами, цветокоррекцией, скоростью и профессиональными эффектами.</p>
            </div>
            <div class="tech-item">
                <div class="tech-icon"></div>
                <h3>МОУШН-ДИЗАЙН</h3>
                <p>Создавай анимации, титры и элементы интерфейса, которые делают видео живым и профессиональным.</p>
            </div>
            <div class="tech-item">
                <div class="tech-icon"></div>
                <h3>КРЕАТИВ И СТИЛЬ</h3>
                <p>Развивай собственный стиль и создавай ролики, которые привлекают внимание зрителей.</p>
            </div>
        </div>
    </div>
</section>


<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <h3>AppSolution</h3>
                <p>© 2025 AppSolution. Все права защищены.</p>
            </div>
            <div class="footer-links">
                <div class="footer-column">
                    <h4>КОМПАНИЯ</h4>
                    <ul>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Карьера</a></li>
                        <li><a href="#">Пресса</a></li>
                        <li><a href="#">Блог</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>ПРОДУКТЫ</h4>
                    <ul>
                        <li><a href="#">Falcon 9</a></li>
                        <li><a href="#">Falcon Heavy</a></li>
                        <li><a href="#">Dragon</a></li>
                        <li><a href="#">Starship</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>КОНТАКТЫ</h4>
                    <ul>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">YouTube</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


</body>
</html>
