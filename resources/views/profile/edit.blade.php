<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Профиль - AppSolution</title>

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
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .header {
            background: #0a0a0a;
            border-bottom: 1px solid #333333;
            padding: 20px 0;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .logo-icon {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .nav-link {
            color: #cccccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #ffffff;
        }

        /* Main Content */
        .main-content {
            padding: 40px 0;
            min-height: calc(100vh - 80px);
        }

        .profile-section {
            max-width: 800px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        /* Карточки */
        .card {
            background: #0a0a0a;
            border: 1px solid #333333;
            border-radius: 12px;
            padding: 32px;
        }

        .card-header {
            margin-bottom: 24px;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: #ffffff;
        }

        .card-description {
            color: #cccccc;
            font-size: 0.9rem;
        }

        /* Формы */
        .form-group {
            margin-bottom: 20px;
        }

        .input-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #ffffff;
        }

        .text-input {
            width: 100%;
            padding: 12px 16px;
            background: #000000;
            border: 1px solid #333333;
            border-radius: 8px;
            color: #ffffff;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .text-input:focus {
            outline: none;
            border-color: #666666;
            box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.1);
        }

        .input-error {
            color: #ff4444;
            font-size: 0.875rem;
            margin-top: 4px;
        }

        .input-help {
            color: #666666;
            font-size: 0.875rem;
            margin-top: 4px;
        }

        /* Кнопки */
        .btn-primary {
            background: #ffffff;
            color: #000000;
            padding: 12px 24px;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .btn-primary:hover {
            background: #e6e6e6;
            transform: translateY(-1px);
        }

        .btn-danger {
            background: #ff4444;
            color: #ffffff;
            padding: 12px 24px;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .btn-danger:hover {
            background: #ff3333;
            transform: translateY(-1px);
        }

        .btn-secondary {
            background: transparent;
            color: #cccccc;
            padding: 12px 24px;
            border-radius: 8px;
            border: 1px solid #333333;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .btn-secondary:hover {
            border-color: #666666;
            color: #ffffff;
        }

        /* Сообщения */
        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid;
        }

        .alert-success {
            background: rgba(0, 255, 0, 0.1);
            border-color: #00ff00;
            color: #00ff00;
        }

        .alert-error {
            background: rgba(255, 0, 0, 0.1);
            border-color: #ff4444;
            color: #ff4444;
        }

        /* Модальное окно */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.8);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        .modal-content {
            background: #0a0a0a;
            border: 1px solid #333333;
            border-radius: 12px;
            padding: 32px;
            max-width: 500px;
            width: 90%;
        }

        .modal-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 16px;
            color: #ffffff;
        }

        .modal-text {
            color: #cccccc;
            margin-bottom: 24px;
        }

        .modal-actions {
            display: flex;
            gap: 12px;
            justify-content: flex-end;
        }

        /* Анимации */
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Адаптивность */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 16px;
            }

            .nav {
                flex-wrap: wrap;
                justify-content: center;
            }

            .card {
                padding: 24px;
            }

            .modal-actions {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
<!-- Header -->
<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-film" style="color: black; font-size: 16px;"></i>
                </div>
                <span>AppSolution</span>
            </div>

            <nav class="nav">
                <a href="/AppSolution" class="nav-link">Main</a>


                <a href="/" class="nav-link">Welcome</a>
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn-secondary" style="padding: 8px 16px; font-size: 0.9rem;">
                        Exit the Profile
                    </button>
                </form>
            </nav>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="main-content">
    <div class="container">
        <div class="profile-section">
            <!-- Обновление информации профиля -->
            <div class="card fade-in">
                <div class="card-header">
                    <h2 class="card-title">Информация профиля</h2>
                    <p class="card-description">Обновите информацию вашего профиля и email адрес</p>
                </div>

                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('patch')

                    <!-- Сообщения -->
                    @if (session('status') === 'profile-updated')
                        <div class="alert alert-success">
                            Профиль успешно обновлен
                        </div>
                    @endif

                    <!-- Имя -->
                    <div class="form-group">
                        <label class="input-label" for="name">Имя</label>
                        <input
                            id="name"
                            class="text-input"
                            type="text"
                            name="name"
                            value="{{ old('name', $user->name) }}"
                            required
                            autofocus
                            autocomplete="name"
                        />
                        @if ($errors->has('name'))
                            <div class="input-error">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label class="input-label" for="email">Email</label>
                        <input
                            id="email"
                            class="text-input"
                            type="email"
                            name="email"
                            value="{{ old('email', $user->email) }}"
                            required
                            autocomplete="email"
                        />
                        @if ($errors->has('email'))
                            <div class="input-error">
                                {{ $errors->first('email') }}
                            </div>
                        @endif

                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                            <div class="input-help">
                                Ваш email не подтвержден.
                                <a href="{{ route('verification.send') }}" style="color: #ffffff;">
                                    Нажмите здесь, чтобы отправить подтверждение повторно
                                </a>
                            </div>
                        @endif
                    </div>

                    <button type="submit" class="btn-primary">
                        Сохранить изменения
                    </button>
                </form>
            </div>

            <!-- Обновление пароля -->
            <div class="card fade-in">
                <div class="card-header">
                    <h2 class="card-title">Обновление пароля</h2>
                    <p class="card-description">Убедитесь, что ваш аккаунт использует длинный случайный пароль для безопасности</p>
                </div>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    @method('put')

                    <!-- Сообщения -->
                    @if (session('status') === 'password-updated')
                        <div class="alert alert-success">
                            Пароль успешно обновлен
                        </div>
                    @endif

                    <!-- Текущий пароль -->
                    <div class="form-group">
                        <label class="input-label" for="current_password">Текущий пароль</label>
                        <input
                            id="current_password"
                            class="text-input"
                            type="password"
                            name="current_password"
                            autocomplete="current-password"
                        />
                        @if ($errors->has('current_password'))
                            <div class="input-error">
                                {{ $errors->first('current_password') }}
                            </div>
                        @endif
                    </div>

                    <!-- Новый пароль -->
                    <div class="form-group">
                        <label class="input-label" for="password">Новый пароль</label>
                        <input
                            id="password"
                            class="text-input"
                            type="password"
                            name="password"
                            autocomplete="new-password"
                        />
                        @if ($errors->has('password'))
                            <div class="input-error">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <!-- Подтверждение пароля -->
                    <div class="form-group">
                        <label class="input-label" for="password_confirmation">Подтвердите пароль</label>
                        <input
                            id="password_confirmation"
                            class="text-input"
                            type="password"
                            name="password_confirmation"
                            autocomplete="new-password"
                        />
                        @if ($errors->has('password_confirmation'))
                            <div class="input-error">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        @endif
                    </div>

                    <button type="submit" class="btn-primary">
                        Обновить пароль
                    </button>
                </form>
            </div>

            <!-- Удаление аккаунта -->
            <div class="card fade-in">
                <div class="card-header">
                    <h2 class="card-title">Удаление аккаунта</h2>
                    <p class="card-description">После удаления аккаунта все ваши данные будут безвозвратно удалены</p>
                </div>

                <button type="button" class="btn-danger" onclick="openDeleteModal()">
                    Удалить аккаунт
                </button>
            </div>
        </div>
    </div>
</main>

<!-- Модальное окно подтверждения удаления -->
<div class="modal-overlay" id="deleteModal">
    <div class="modal-content">
        <h3 class="modal-title">Вы уверены, что хотите удалить аккаунт?</h3>
        <p class="modal-text">
            После удаления аккаунта все ваши данные будут безвозвратно удалены.
            Пожалуйста, введите ваш пароль для подтверждения удаления.
        </p>

        <form method="POST" action="{{ route('profile.destroy') }}">
            @csrf
            @method('delete')

            <div class="form-group">
                <label class="input-label" for="password">Пароль</label>
                <input
                    id="delete_password"
                    class="text-input"
                    type="password"
                    name="password"
                    placeholder="Введите ваш пароль"
                />
                @if ($errors->has('password'))
                    <div class="input-error">
                        {{ $errors->first('password') }}
                    </div>
                @endif
            </div>

            <div class="modal-actions">
                <button type="button" class="btn-secondary" onclick="closeDeleteModal()">
                    Отмена
                </button>
                <button type="submit" class="btn-danger">
                    Удалить аккаунт
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function openDeleteModal() {
        document.getElementById('deleteModal').style.display = 'flex';
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').style.display = 'none';
    }

    // Закрытие модального окна при клике вне его
    document.getElementById('deleteModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeDeleteModal();
        }
    });

    // Закрытие модального окна при нажатии Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeDeleteModal();
        }
    });
</script>
</body>
</html>
