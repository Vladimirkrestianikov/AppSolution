<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Регистрация - AppSolution</title>

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
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
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
        }

        .card-hover {
            transition: all 0.3s ease;
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
            width: 100%;
            font-size: 1rem;
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
            width: 100%;
            text-align: center;
            font-size: 1rem;
        }

        .btn-secondary:hover {
            border-color: #666666;
            background: rgba(255, 255, 255, 0.05);
        }

        /* Форма */
        .form-container {
            background: #0a0a0a;
            border: 1px solid #333333;
            border-radius: 16px;
            padding: 40px;
            max-width: 480px;
            width: 100%;
            margin: 0 auto;
        }

        .form-header {
            text-align: center;
            margin-bottom: 32px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.5rem;
            font-weight: 600;
            justify-content: center;
            margin-bottom: 16px;
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

        h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .form-subtitle {
            color: #cccccc;
            font-size: 1rem;
        }

        /* Поля формы */
        .form-group {
            margin-bottom: 24px;
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

        .text-input::placeholder {
            color: #666666;
        }

        .input-error {
            color: #ff4444;
            font-size: 0.875rem;
            margin-top: 4px;
        }

        /* Дополнительные элементы */
        .form-footer {
            margin-top: 32px;
            text-align: center;
        }

        .login-link {
            color: #cccccc;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        .login-link:hover {
            color: #ffffff;
        }

        .divider {
            height: 1px;
            background: #333333;
            margin: 24px 0;
            position: relative;
        }

        .divider-text {
            background: #0a0a0a;
            padding: 0 16px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #666666;
            font-size: 0.875rem;
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
        @media (max-width: 480px) {
            .form-container {
                padding: 24px;
            }

            h1 {
                font-size: 1.75rem;
            }
        }
    </style>
</head>

<body>
<div class="container">
    <div class="form-container card-hover fade-in">
        <!-- Заголовок формы -->
        <div class="form-header">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-film" style="color: black; font-size: 16px;"></i>
                </div>
                <span>AppSolution</span>
            </div>
            <h1>Создать аккаунт</h1>
            <p class="form-subtitle">Начните бесплатное обучение видеомонтажу</p>
        </div>

        <!-- Форма регистрации -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Имя -->
            <div class="form-group">
                <label class="input-label" for="name">Имя</label>
                <input
                    id="name"
                    class="text-input"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autofocus
                    autocomplete="name"
                    placeholder="Введите ваше имя"
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
                    value="{{ old('email') }}"
                    required
                    autocomplete="email"
                    placeholder="your@email.com"
                />
                @if ($errors->has('email'))
                    <div class="input-error">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>

            <!-- Пароль -->
            <div class="form-group">
                <label class="input-label" for="password">Пароль</label>
                <input
                    id="password"
                    class="text-input"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    placeholder="Минимум 8 символов"
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
                    required
                    autocomplete="new-password"
                    placeholder="Повторите ваш пароль"
                />
                @if ($errors->has('password_confirmation'))
                    <div class="input-error">
                        {{ $errors->first('password_confirmation') }}
                    </div>
                @endif
            </div>

            <!-- Кнопка регистрации -->
            <button type="submit" class="btn-primary">
                Создать аккаунт
            </button>

            <!-- Разделитель -->
            <div class="divider">
                <span class="divider-text">или</span>
            </div>

            <!-- Ссылка на вход -->
            <div class="form-footer">
                <a class="login-link" href="{{ route('login') }}">
                    Уже есть аккаунт? Войти
                </a>
            </div>
        </form>
    </div>
</div>

<script>
    // Простая валидация формы
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('password_confirmation');

        form.addEventListener('submit', function(e) {
            // Проверка совпадения паролей
            if (password.value !== confirmPassword.value) {
                e.preventDefault();
                alert('Пароли не совпадают');
                return false;
            }

            // Проверка минимальной длины пароля
            if (password.value.length < 8) {
                e.preventDefault();
                alert('Пароль должен содержать минимум 8 символов');
                return false;
            }
        });

        // Динамическая проверка паролей
        confirmPassword.addEventListener('input', function() {
            if (password.value !== confirmPassword.value) {
                confirmPassword.style.borderColor = '#ff4444';
            } else {
                confirmPassword.style.borderColor = '#333333';
            }
        });
    });
</script>
</body>
</html>
