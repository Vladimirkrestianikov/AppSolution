<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вход - AppSolution</title>

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

        /* Чекбокс "Запомнить меня" */
        .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 24px;
        }

        .checkbox-input {
            width: 18px;
            height: 18px;
            border: 1px solid #333333;
            border-radius: 4px;
            background: #000000;
            margin-right: 10px;
            cursor: pointer;
            position: relative;
            transition: all 0.3s ease;
        }

        .checkbox-input:checked {
            background: #ffffff;
            border-color: #ffffff;
        }

        .checkbox-input:checked::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #000000;
            font-size: 12px;
            font-weight: bold;
        }

        .checkbox-label {
            color: #cccccc;
            font-size: 0.9rem;
            cursor: pointer;
        }

        /* Статус сессии */
        .session-status {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid #333333;
            border-radius: 8px;
            padding: 12px 16px;
            margin-bottom: 24px;
            color: #cccccc;
            font-size: 0.9rem;
        }

        .session-status.success {
            border-color: #00ff00;
            color: #00ff00;
        }

        /* Дополнительные элементы */
        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 24px;
            flex-wrap: wrap;
            gap: 16px;
        }

        .forgot-password {
            color: #cccccc;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: #ffffff;
        }

        .register-link {
            color: #cccccc;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
            text-align: center;
            width: 100%;
            margin-top: 16px;
        }

        .register-link:hover {
            color: #ffffff;
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

            .form-footer {
                flex-direction: column;
                align-items: stretch;
            }

            .forgot-password {
                text-align: center;
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
            <h1>Вход в аккаунт</h1>
            <p class="form-subtitle">Продолжите обучение видеомонтажу</p>
        </div>

        <!-- Статус сессии -->
        @if (session('status'))
            <div class="session-status success">
                {{ session('status') }}
            </div>
        @endif

        <!-- Форма входа -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

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
                    autofocus
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
                    autocomplete="current-password"
                    placeholder="Введите ваш пароль"
                />
                @if ($errors->has('password'))
                    <div class="input-error">
                        {{ $errors->first('password') }}
                    </div>
                @endif
            </div>

            <!-- Запомнить меня -->
            <div class="checkbox-container">
                <input
                    id="remember_me"
                    type="checkbox"
                    class="checkbox-input"
                    name="remember"
                />
                <label for="remember_me" class="checkbox-label">
                    Запомнить меня
                </label>
            </div>

            <!-- Кнопка входа и дополнительные ссылки -->
            <button type="submit" class="btn-primary">
                Войти в аккаунт
            </button>

            <div class="form-footer">
                @if (Route::has('password.request'))
                    <a class="forgot-password" href="{{ route('password.request') }}">
                        Забыли пароль?
                    </a>
                @endif
            </div>

            <!-- Ссылка на регистрацию -->
            <a class="register-link" href="{{ route('register') }}">
                Нет аккаунта? Зарегистрироваться
            </a>
        </form>
    </div>
</div>

<script>
    // Простая валидация формы
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        const email = document.getElementById('email');
        const password = document.getElementById('password');

        // Валидация email при вводе
        email.addEventListener('blur', function() {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email.value)) {
                email.style.borderColor = '#ff4444';
            } else {
                email.style.borderColor = '#333333';
            }
        });

        // Валидация пароля при вводе
        password.addEventListener('blur', function() {
            if (password.value.length < 1) {
                password.style.borderColor = '#ff4444';
            } else {
                password.style.borderColor = '#333333';
            }
        });
    });
</script>
</body>
</html>
