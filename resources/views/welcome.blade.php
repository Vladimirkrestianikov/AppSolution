<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AppSolution - Бесплатное обучение видеомонтажу</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Базовые стили */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Instrument Sans', sans-serif;
            background: #000000;
            color: #ffffff;
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Специальные классы */
        .gradient-text {
            background: linear-gradient(135deg, #ffffff 0%, #cccccc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
            z-index: 2;
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(255, 255, 255, 0.1);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            font-size: 1.5rem;
            border: 1px solid #333333;
        }

        .btn-primary {
            background: #ffffff;
            color: #000000;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            position: relative;
            z-index: 2;
        }

        .btn-primary:hover {
            background: #e6e6e6;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 255, 255, 0.2);
        }

        .btn-secondary {
            background: transparent;
            color: #ffffff;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 1px solid #333333;
            position: relative;
            z-index: 2;
        }

        .btn-secondary:hover {
            border-color: #666666;
            background: rgba(255, 255, 255, 0.05);
            transform: translateY(-2px);
        }

        .btn-logout {
            background: transparent;
            color: #ff6b6b;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 1px solid #ff6b6b;
            position: relative;
            z-index: 2;
        }

        .btn-logout:hover {
            background: rgba(255, 107, 107, 0.1);
            transform: translateY(-2px);
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        /* Секции */
        header {
            padding: 20px 0;
            border-bottom: 1px solid #333333;
            position: relative;
            z-index: 10;
        }

        .hero {
            padding: 100px 0;
            text-align: center;
            background: linear-gradient(135deg, #000000 0%, #1a1a1a 100%);
            position: relative;
            overflow: hidden;
            min-height: 80vh;
            display: flex;
            align-items: center;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.03)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .features {
            padding: 80px 0;
            background: #0a0a0a;
            position: relative;
            z-index: 2;
        }

        .software {
            padding: 80px 0;
            background: #000000;
            position: relative;
            z-index: 2;
        }

        .stats {
            padding: 60px 0;
            background: #000000;
            position: relative;
            z-index: 2;
        }

        .cta-section {
            padding: 80px 0;
            background: #000000;
            text-align: center;
            border-top: 1px solid #333333;
            border-bottom: 1px solid #333333;
            position: relative;
            z-index: 2;
        }

        footer {
            padding: 40px 0;
            background: #0a0a0a;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        /* Сетка */
        .grid {
            display: grid;
            gap: 30px;
        }

        .grid-cols-1 {
            grid-template-columns: 1fr;
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, 1fr);
        }

        .grid-cols-3 {
            grid-template-columns: repeat(3, 1fr);
        }

        .grid-cols-4 {
            grid-template-columns: repeat(4, 1fr);
        }

        @media (max-width: 768px) {
            .grid-cols-2,
            .grid-cols-3,
            .grid-cols-4 {
                grid-template-columns: 1fr;
            }
        }

        /* Текст */
        h1 {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        p {
            margin-bottom: 15px;
            color: #cccccc;
        }

        .text-center {
            text-align: center;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .mb-6 {
            margin-bottom: 1.5rem;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        /* Карточки */
        .card {
            background: #0a0a0a;
            border: 1px solid #333333;
            border-radius: 12px;
            padding: 30px;
            height: 100%;
        }

        /* Навигация */
        nav {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.5rem;
            font-weight: 600;
        }

        /* Иконка */
        .logo-icon {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Статистика */
        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: #ffffff;
        }

        .stat-label {
            color: #cccccc;
            font-size: 0.9rem;
        }

        /* Анимации */
        .fade-in {
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Бесплатный значок */
        .free-badge {
            background: #ffffff;
            color: #000000;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            display: inline-block;
            margin-left: 10px;
        }

        /* Программное обеспечение */
        .software-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .software-item {
            background: #1a1a1a;
            border: 1px solid #333;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .software-item:hover {
            transform: translateY(-3px);
            border-color: #666;
        }

        .software-icon {
            font-size: 3rem;
            margin-bottom: 15px;
            color: #ffffff;
        }

        .software-name {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .software-desc {
            color: #cccccc;
            font-size: 0.9rem;
        }

        /* Анимированный фон для текста */
        .hero-title-container {
            position: relative;
            display: inline-block;
        }

        .hero-title-bg {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120%;
            height: 120%;
            background: linear-gradient(45deg,
            rgba(255,255,255,0.1) 0%,
            rgba(255,255,255,0.05) 25%,
            rgba(255,255,255,0.1) 50%,
            rgba(255,255,255,0.05) 75%,
            rgba(255,255,255,0.1) 100%);
            filter: blur(20px);
            z-index: 1;
            border-radius: 20px;
            animation: bgPulse 4s ease-in-out infinite;
        }

        @keyframes bgPulse {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 0.6; }
        }

        /* Стили для авторизованного пользователя */
        .user-menu {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-welcome {
            color: #cccccc;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
<!-- Header -->
<header>
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-film" style="color: black; font-size: 16px;"></i>
                </div>
                <span>AppSolution</span>
            </div>

            <nav>
                <a href="#features" class="btn-secondary">Преимущества</a>
                <a href="#software" class="btn-secondary">Программы</a>
                @if (Route::has('login'))
                    @auth
                        <div class="user-menu">

                            <a href="{{ url('/AppSolution') }}" class="btn-primary">Студия</a>
                            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn-logout">
                                    <i class="fas fa-sign-out-alt"></i> Выйти
                                </button>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="btn-secondary">Вход</a>
                        <a href="{{ route('register') }}" class="btn-primary">Начать бесплатно</a>
                    @endauth
                @endif
            </nav>
        </div>
    </div>
</header>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content fade-in">
            <div class="hero-title-container">
                <div class="hero-title-bg"></div>
                <h1>Стань <span class="gradient-text">профессионалом</span> видеомонтажа</h1>
            </div>
            <p class="mb-6" style="font-size: 1.25rem; max-width: 600px; margin: 0 auto;">
                Бесплатное обучение видеомонтажу с нуля до продвинутого уровня. Освойте Alight Motion, CapCut, After Effects и другие программы.
            </p>
            <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                @auth
                    <a href="{{ url('/AppSolution') }}" class="btn-primary" style="padding: 15px 30px; font-size: 1.1rem;">
                        Перейти в студию
                    </a>
                @else
                    <a href="{{ route('register') }}" class="btn-primary" style="padding: 15px 30px; font-size: 1.1rem;">
                        Начать обучение
                    </a>
                @endauth
                <a href="#software" class="btn-secondary" style="padding: 15px 30px; font-size: 1.1rem;">
                    Выбрать программу
                </a>
            </div>
            <p class="mt-4" style="color: #cccccc;">
                <i class="fas fa-check" style="margin-right: 8px;"></i>
                Все курсы полностью бесплатны • Проекты для портфолио • Поддержка сообщества
            </p>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats">
    <div class="container">
        <div class="grid grid-cols-4">
            <div class="stat-item">
                <div class="stat-number">8,500+</div>
                <div class="stat-label">Студентов</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">100%</div>
                <div class="stat-label">Бесплатно</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">3</div>
                <div class="stat-label">Программы</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">24/7</div>
                <div class="stat-label">Доступ</div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features" id="features">
    <div class="container">
        <h2 class="text-center">Почему AppSolution для видеомонтажа?</h2>
        <p class="text-center mb-6" style="max-width: 700px; margin: 0 auto 3rem;">
            Мы создали идеальную платформу для обучения видеомонтажу с акцентом на практику и реальные проекты
        </p>

        <div class="grid grid-cols-3">
            <div class="card card-hover">
                <div class="feature-icon mb-4">
                    <i class="fas fa-play-circle"></i>
                </div>
                <h3>Практические уроки</h3>
                <p>Пошаговые видеоуроки с реальными проектами. От простых роликов до сложных видеопроизводств.</p>
            </div>

            <div class="card card-hover">
                <div class="feature-icon mb-4">
                    <i class="fas fa-video"></i>
                </div>
                <h3>Три лучшие программы</h3>
                <p>Изучайте Alight Motion, CapCut и After Effects - самые популярные программы для мобильного и профессионального монтажа.</p>
            </div>

            <div class="card card-hover">
                <div class="feature-icon mb-4">
                    <i class="fas fa-project-diagram"></i>
                </div>
                <h3>Реальные проекты</h3>
                <p>Создавайте портфолио с коммерческими проектами: реклама, YouTube, соцсети, клипы.</p>
            </div>
        </div>
    </div>
</section>

<!-- Software Section -->
<section class="software" id="software">
    <div class="container">
        <h2 class="text-center">Выберите программу для обучения</h2>
        <p class="text-center mb-6" style="max-width: 700px; margin: 0 auto;">
            @auth
                У вас есть доступ ко всем курсам по выбранной программе
            @else
                После регистрации вы получите полный доступ ко всем курсам по выбранной программе
            @endauth
        </p>

        <div class="software-grid">
            <div class="software-item card-hover">
                <div class="software-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="software-name">Alight Motion</div>
                <div class="software-desc">Профессиональный мобильный видеомонтаж и моушн-дизайн</div>
            </div>

            <div class="software-item card-hover">
                <div class="software-icon">
                    <i class="fas fa-cut"></i>
                </div>
                <div class="software-name">CapCut</div>
                <div class="software-desc">Бесплатный редактор для быстрого и качественного монтажа</div>
            </div>

            <div class="software-item card-hover">
                <div class="software-icon">
                    <i class="fab fa-adobe"></i>
                </div>
                <div class="software-name">After Effects</div>
                <div class="software-desc">Индустриальный стандарт для визуальных эффектов и анимации</div>
            </div>
        </div>

        @guest
            <div class="text-center mt-8">
                <a href="{{ route('register') }}" class="btn-primary" style="padding: 15px 40px; font-size: 1.1rem;">
                    Зарегистрироваться и начать обучение
                </a>
            </div>
        @endguest
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Готовы создавать профессиональные видео?</h2>
        <p class="mb-6" style="max-width: 600px; margin: 0 auto;">
            Присоединяйтесь к тысячам студентов, которые уже освоили видеомонтаж с AppSolution
        </p>

        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
            @auth
                <a href="{{ url('/AppSolution') }}" class="btn-primary" style="padding: 15px 30px; font-size: 1.1rem;">
                    Перейти в студию
                </a>
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn-logout" style="padding: 15px 30px; font-size: 1.1rem;">
                        <i class="fas fa-sign-out-alt"></i> Выйти
                    </button>
                </form>
            @else
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-primary" style="padding: 15px 30px; font-size: 1.1rem;">
                        Начать бесплатно
                    </a>
                @endif

                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="btn-secondary" style="padding: 15px 30px; font-size: 1.1rem;">
                        Войти в аккаунт
                    </a>
                @endif
            @endauth
        </div>

        <p class="mt-4" style="font-size: 0.9rem; color: #cccccc;">
            <i class="fas fa-gift" style="margin-right: 8px;"></i>
            Бесплатные проекты для портфолио • Поддержка преподавателей • Доступ навсегда
        </p>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="logo" style="justify-content: center; margin-bottom: 20px;">
            <div class="logo-icon">
                <i class="fas fa-film" style="color: black; font-size: 16px;"></i>
            </div>
            <span>AppSolution</span>
        </div>

        <p style="color: #cccccc; margin-bottom: 20px;">
            Бесплатная платформа обучения видеомонтажу
        </p>

        <div style="display: flex; justify-content: center; gap: 20px; margin-bottom: 20px; flex-wrap: wrap;">
            <a href="#features" style="color: #cccccc; text-decoration: none;">Преимущества</a>
            <a href="#software" style="color: #cccccc; text-decoration: none;">Программы</a>
            <a href="#" style="color: #cccccc; text-decoration: none;">Сообщество</a>
            <a href="#" style="color: #cccccc; text-decoration: none;">Контакты</a>
        </div>

        <p style="color: #666666; font-size: 0.9rem;">
            &copy; 2023 AppSolution. Видеомонтаж должен быть доступным для всех.
        </p>
    </div>
</footer>

<script>
    // Анимация для текста "Стань профессионалом"
    document.addEventListener('DOMContentLoaded', function() {
        const heroTitle = document.querySelector('.gradient-text');
        let isVisible = true;

        // Функция для проверки видимости элемента
        function isElementInViewport(el) {
            const rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Проверяем видимость при скролле
        window.addEventListener('scroll', function() {
            if (isElementInViewport(heroTitle)) {
                if (!isVisible) {
                    heroTitle.style.opacity = '1';
                    isVisible = true;
                }
            } else {
                if (isVisible) {
                    heroTitle.style.opacity = '0';
                    isVisible = false;
                }
            }
        });

        // Изначальная проверка
        if (!isElementInViewport(heroTitle)) {
            heroTitle.style.opacity = '0';
            isVisible = false;
        }
    });
</script>
</body>
</html>
