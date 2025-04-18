<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f5f0e6;
            font-family: 'Segoe UI', sans-serif;
            color: #5c4033;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 1rem;
        }

        .card {
            background-color: white;
            padding: 2.5rem;
            border-radius: 1.5rem;
            box-shadow: 0 8px 30px rgba(92, 64, 51, 0.15);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .title {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: #5c4033;
        }

        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #e0d5c8;
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        input[type="email"]:focus, input[type="password"]:focus {
            outline: none;
            border-color: #a9746e;
            box-shadow: 0 0 0 3px rgba(169, 116, 110, 0.1);
        }

        .remember-group {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .remember-group input {
            margin-right: 0.5rem;
        }

        .submit-btn {
            background-color: #a9746e;
            color: white;
            padding: 0.75rem;
            border: none;
            border-radius: 0.5rem;
            width: 100%;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #8f6159;
        }

        .forgot-password {
            display: block;
            text-align: right;
            margin-top: 1rem;
            font-size: 0.9rem;
            text-decoration: none;
            color: #a9746e;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 2rem 0;
            color: #a9a9a9;
        }

        .divider::before, .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #e0d5c8;
        }

        .divider span {
            padding: 0 10px;
        }

        .google-btn {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            background: white;
            color: #5c4033;
            padding: 0.75rem;
            border: 1px solid #e0d5c8;
            border-radius: 0.5rem;
            text-align: center;
            font-weight: 500;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .google-btn:hover {
            background-color: #f8f8f8;
        }

        .google-icon {
            margin-right: 10px;
            display: inline-block;
            width: 18px;
            height: 18px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1 class="title">Iniciar sesión</h1>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" name="email" id="email" required autofocus>
            </div>
            
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" required>
            </div>
            
            <div class="remember-group">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Recordarme</label>
            </div>
            
            <button type="submit" class="submit-btn">Iniciar sesión</button>
            
            <a href="{{ route('password.request') }}" class="forgot-password">¿Olvidaste tu contraseña?</a>
        </form>
        
        <div class="divider">
            <span>O</span>
        </div>
        
        <a href="{{ url('login/google') }}" class="google-btn">
            <svg class="google-icon" viewBox="0 0 24 24">
                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
            </svg>
            Continuar con Google
        </a>
    </div>
</body>
</html>