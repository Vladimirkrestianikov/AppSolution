// Инициализация при загрузке страницы
document.addEventListener('DOMContentLoaded', function() {
    initializeAccordion();
});

function initializeAccordion() {
    // Закрываем все блоки изначально
    document.querySelectorAll('.platforms').forEach(p => {
        p.style.maxHeight = null;
        p.setAttribute('data-state', 'closed');
    });

    document.querySelectorAll('.courses').forEach(c => {
        c.style.maxHeight = null;
        c.setAttribute('data-state', 'closed');
    });

    // Обработчики для уровней (только по заголовку)
    document.querySelectorAll('.level-title, .level-desc').forEach(element => {
        element.addEventListener('click', function(e) {
            e.stopPropagation();
            const levelBox = this.closest('.level-box');
            const platforms = levelBox.querySelector('.platforms');

            if (platforms.getAttribute('data-state') === 'open') {
                // Закрываем уровень и все внутренние блоки
                platforms.style.maxHeight = null;
                platforms.setAttribute('data-state', 'closed');
                levelBox.querySelectorAll('.courses').forEach(c => {
                    c.style.maxHeight = null;
                    c.setAttribute('data-state', 'closed');
                });
            } else {
                // Открываем только уровень
                platforms.style.maxHeight = platforms.scrollHeight + 'px';
                platforms.setAttribute('data-state', 'open');
            }
        });
    });

    // Обработчики для платформ
    document.querySelectorAll('.platform').forEach(platform => {
        platform.addEventListener('click', function(e) {
            e.stopPropagation();

            const courses = this.querySelector('.courses');
            const levelBox = this.closest('.level-box');
            const platforms = levelBox.querySelector('.platforms');

            // ОБЯЗАТЕЛЬНО открываем родительский уровень
            if (platforms.getAttribute('data-state') === 'closed') {
                platforms.style.maxHeight = platforms.scrollHeight + 'px';
                platforms.setAttribute('data-state', 'open');
            }

            // Переключаем курсы
            if (courses.getAttribute('data-state') === 'open') {
                courses.style.maxHeight = null;
                courses.setAttribute('data-state', 'closed');
            } else {
                // Даем время на открытие родительского блока
                setTimeout(() => {
                    courses.style.maxHeight = courses.scrollHeight + 'px';
                    courses.setAttribute('data-state', 'open');

                    // Обновляем высоту родительского блока
                    platforms.style.maxHeight = platforms.scrollHeight + 'px';
                }, 50);
            }
        });
    });

    // Обработчики для всего содержимого курсов
    document.querySelectorAll('.courses, .courses h3, .courses p, .courses li, .courses ul, .courses strong').forEach(element => {
        element.addEventListener('click', function(e) {
            e.stopPropagation();

            const courses = this.closest('.courses');
            const platform = this.closest('.platform');
            const levelBox = platform.closest('.level-box');
            const platforms = levelBox.querySelector('.platforms');

            // ОБЯЗАТЕЛЬНО открываем родительский уровень
            if (platforms.getAttribute('data-state') === 'closed') {
                platforms.style.maxHeight = platforms.scrollHeight + 'px';
                platforms.setAttribute('data-state', 'open');
            }

            // ОБЯЗАТЕЛЬНО открываем курсы
            if (courses.getAttribute('data-state') === 'closed') {
                // Даем время на открытие родительского блока
                setTimeout(() => {
                    courses.style.maxHeight = courses.scrollHeight + 'px';
                    courses.setAttribute('data-state', 'open');

                    // Обновляем высоту родительского блока
                    platforms.style.maxHeight = platforms.scrollHeight + 'px';
                }, 50);
            }
        });
    });

    // Обновляем высоту при изменении размера окна
    window.addEventListener('resize', function() {
        document.querySelectorAll('.platforms[data-state="open"]').forEach(platforms => {
            platforms.style.maxHeight = platforms.scrollHeight + 'px';
        });
        document.querySelectorAll('.courses[data-state="open"]').forEach(courses => {
            courses.style.maxHeight = courses.scrollHeight + 'px';
        });
    });
}

// Обработчик для загрузки файлов
document.getElementById('fileUpload')?.addEventListener('change', function(e) {
    const files = e.target.files;
    const uploadedList = document.querySelector('.uploaded-list');

    if (files.length > 0 && uploadedList) {
        uploadedList.innerHTML = '';

        Array.from(files).forEach(file => {
            const fileItem = document.createElement('div');
            fileItem.className = 'uploaded-item';
            fileItem.textContent = file.name;
            uploadedList.appendChild(fileItem);
        });
    }
});
