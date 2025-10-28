<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас – AppSolution</title>

    <link rel="stylesheet" href="{{ asset('css/About.css') }}">

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
        <h1>О платформе - AppSolution </h1>
        <p>Мы создаем пространство, где каждый может научиться видеомонтажу — просто, вдохновляюще и без лишних сложностей.</p>
    </div>
</section>

<section class="missions">
    <div class="container">
        <h2>Наша миссия</h2>
        <div class="mission-grid">
            <div class="mission-item">
                <div class="mission-text">
                    <h3>Обучение без барьеров</h3>
                    <p>Курсы адаптированы под новичков и продвинутых пользователей. Всё с практикой и примерами.</p>
                </div>
            </div>
            <div class="mission-item">
                <div class="mission-text">
                    <h3>Творчество и вдохновение</h3>
                    <p>Мы помогаем превратить идеи в видео, которые цепляют. Каждый курс — это путь от идеи до финального кадра.</p>
                </div>
            </div>
            <div class="mission-item">
                <div class="mission-text">
                    <h3>Сообщество</h3>
                    <p>Ты не один — с тобой редакторы, дизайнеры и авторы, которые делятся опытом и поддерживают твой рост.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container"><p>© 2025 AppSolution. Все права защищены.</p></div>
</footer>


<script src="script.js"></script>

</body>
</html>
