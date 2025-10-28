<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курсы по видеомонтажу – AppSolution</title>

    <link rel="stylesheet" href="{{ asset('css/Projects.css') }}">
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

<section class="hero"> <div class="hero-content"> <h1>Курсы и программы обучения</h1> <p>Начни с простого и дойди до профессионального уровня. Каждый блок открывает новые навыки монтажа и креативного мышления.</p> </div> </section>
<section class="levels">
    <div class="container">

        <div class="level-box">
            <h2 class="level-title">🔹 Начальный уровень "CapCut"</h2>
            <p class="level-desc">Базовые инструменты, быстрый монтаж, текст, звук и плавные переходы. Всё для старта.</p>

            <div class="platforms">

                <div class="platform">
                    <h3>Курс 1: Основы CapCut</h3>
                    <div class="courses">

                        <p><strong>Что изучаем:</strong></p>
                        <ul>
                            <li>Открытие программы: нажимаем «Новый проект» → выбираем видео или фото.</li>
                            <li>Импорт медиа: «Импорт» → выбираем видео/фото/аудио.</li>
                            <li>Нарезка видео: кликаем на клип → «Разделить», удаляем лишнее.</li>
                            <li>Сохранение проекта: «Сохранить» → «Экспорт».</li>
                        </ul>
                        <p><strong>Итог:</strong> умеем импортировать, резать, удалять ненужное, экспортировать видео.</p>
                    </div>
                </div>

                <div class="platform">
                    <h3>Курс 2: Работа с текстом и эффектами</h3>
                    <div class="courses">

                        <p><strong>Что изучаем:</strong></p>
                        <ul>
                            <li>Добавление текста: «Текст» → «Добавить текст», редактируем шрифт, размер, цвет.</li>
                            <li>Эффекты и переходы: кликаем на клип → «Эффекты» → выбираем анимацию.</li>
                            <li>Анимация текста: «Анимация» → «Вход / Выход», выбираем стиль.</li>
                        </ul>
                        <p><strong>Итог:</strong> умение создавать видео с текстовыми вставками и базовыми эффектами.</p>
                    </div>
                </div>

                <div class="platform">
                    <h3>Курс 3: Работа со звуком и цветом</h3>
                    <div class="courses">

                        <p><strong>Что изучаем:</strong></p>
                        <ul>
                            <li>Добавление музыки: «Аудио» → «Музыка», выбираем файл.</li>
                            <li>Регулировка громкости: кликаем на аудиодорожку → «Громкость».</li>
                            <li>Цветокоррекция: кликаем на клип → «Цвет» → «Фильтры / Настройки».</li>
                            <li>Экспорт видео: «Экспорт» → «Сохранить» → выбираем разрешение.</li>
                        </ul>
                        <p><strong>Итог:</strong> умеем работать со звуком и цветом, создаём видео с готовым визуальным стилем.</p>
                    </div>
                </div>

            </div>
        </div>


        <div class="level-box">
            <h2 class="level-title">🔸 Средний уровень "Alight Motion"</h2>
            <p class="level-desc">Создание эффектов, анимация текста и ритмичные переходы. Для уверенных пользователей.</p>

            <div class="platforms">

                <div class="platform">
                    <h3>Курс 1: Основы анимации и монтаж</h3>
                    <div class="courses">

                        <p><strong>Что изучаем:</strong></p>
                        <ul>
                            <li>Создание проекта: «+» → Новый проект, выбираем формат.</li>
                            <li>Работа со слоями: «Слой» → Добавить слой (видео, текст, форма).</li>
                            <li>Ключевые кадры: выбираем объект → «Анимация» → «Ключевой кадр».</li>
                            <li>Переходы и эффекты: кликаем на слой → «Эффекты» → выбрать нужный.</li>
                        </ul>
                        <p><strong>Итог:</strong> умеем работать с несколькими слоями и ключевыми кадрами, делать простую анимацию.</p>
                    </div>
                </div>

                <div class="platform">
                    <h3>Курс 2: Продвинутые эффекты и цвет </h3>
                    <div class="courses">

                        <p><strong>Что изучаем:</strong></p>
                        <ul>
                            <li>Кинетическая типографика: текст → «Анимация текста» → Настроить движение.</li>
                            <li>Продвинутые фильтры: слой → «Эффекты» → «Цвет / LUT».</li>
                            <li>Маски и наложения: слой → «Маска» → выбрать форму.</li>
                            <li>Экспорт видео: «Экспорт» → выбрать формат и качество.</li>
                        </ul>
                        <p><strong>Итог:</strong> умение создавать анимированные видео с профессиональной цветокоррекцией и эффектами, плавный переход на AE.</p>
                    </div>
                </div>

            </div>
        </div>


        <div class="level-box">
            <h2 class="level-title">🔹 Профессиональный уровень "After Effects"</h2>
            <p class="level-desc">Монтаж в студийных программах. Работа с эффектами, цветом и полноценными проектами.</p>

            <div class="platforms">

                <div class="platform">
                    <h3>Курс 1: Профессиональная анимация</h3>
                    <div class="courses">

                        <p><strong>Что изучаем:</strong></p>
                        <ul>
                            <li>Сложные маски и трекинг: слой → «Маска / Трекинг», настраиваем движение объекта.</li>
                            <li>Продвинутые эффекты: слой → «Эффекты» → «VFX / Particles».</li>
                            <li>Анимация объектов: слой → «Анимация» → «Сложная траектория».</li>
                        </ul>
                        <p><strong>Итог:</strong> вы создаёте видео с продвинутой анимацией и спецэффектами.</p>
                    </div>
                </div>

                <div class="platform">
                    <h3>Курс 2: Профессиональная графика</h3>
                    <div class="courses">

                        <p><strong>Что изучаем:</strong></p>
                        <ul>
                            <li>Новый проект: File → New Project, композиция → New Composition.</li>
                            <li>Добавление слоев: Layer → New → Text / Shape / Solid / Null Object.</li>
                            <li>Ключевые кадры и анимация: слой → Position / Scale / Opacity → Toggle Animation.</li>
                            <li>3D-слои и камеры: слой → 3D Layer, Layer → New → Camera.</li>
                            <li>Визуальные эффекты: Effect → Simulation / Stylize / Keying.</li>
                            <li>Экспорт видео: Composition → Add to Render Queue → Output Module → Render.</li>
                        </ul>
                        <p><strong>Итог:</strong> вы способны создавать профессиональные видео с 2D и 3D-анимацией, спецэффектами и готов к коммерческим проектам.</p>
                    </div>
                </div>


                <div class="platform">
                    <h3>Курс 3: Продвинутый мастер-класс</h3>
                    <div class="courses">

                        <p><strong>Что изучаем:</strong></p>
                        <ul>
                            <li>Сложные композиции: создание многослойных композиций с использованием Pre-Compose для организации проекта.</li>
                            <li>Анимация персонажей: настройка Puppet Tool, использование IK и Rigging для плавной анимации.</li>
                            <li>3D-композиции и камеры: настройка 3D-слоев, анимация камер, использование Depth of Field для реалистичной сцены.</li>
                            <li>Эффекты частиц: Particle World, Trapcode Particular, настройка направления, скорости, взаимодействия с объектами сцены.</li>
                            <li>Motion Graphics: создание сложных графических анимаций с использованием Shape Layers, Trim Paths, Repeater и Expressions.</li>
                            <li>Свет и цвет: продвинутая цветокоррекция через Lumetri Color, работа с тенями и световыми эффектами.</li>
                            <li>Композитинг: работа с зеленым экраном (Keying), Rotoscoping, Track Matte и интеграция внешних элементов.</li>
                            <li>Expressions: автоматизация анимации с помощью выражений для повторяющихся и сложных движений.</li>
                            <li>Работа со звуком: синхронизация анимации с аудиодорожками, использование эффектов звука для динамики видео.</li>
                            <li>Экспорт и оптимизация: оптимизация рендеринга, использование Render Queue и Adobe Media Encoder для разных форматов.</li>
                        </ul>
                        <p><strong>Итог:</strong> умение создавать профессиональные сложные проекты в After Effects с 2D/3D-анимацией, визуальными эффектами, композитингом и динамическим графическим контентом, готовы к коммерческим и студийным проектам высокого уровня.</p>
                    </div>
                </div>


            </div>
        </div>

    </div>
</section>


{{--<section class="upload-section">--}}
{{--    <div class="container">--}}
{{--        <h2>Загрузка файлов</h2>--}}


{{--        <div class="upload-box">--}}
{{--            <input type="file" id="fileUpload" class="file-input" multiple>--}}
{{--            <label for="fileUpload" class="upload-label">Выбрать файлы</label>--}}
{{--        </div>--}}

{{--        <div class="uploaded-list">--}}
{{--            <div class="uploaded-item">example_video.mp4</div>--}}
{{--            <div class="uploaded-item">my_project.zip</div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<!-- В вашем Blade шаблоне -->



<footer class="footer">
    <div class="container"><p>© 2025 AppSolution. Все права защищены.</p></div>
</footer>

<script src="{{ asset('Js/Projects.js') }}"></script>

</body>
</html>
