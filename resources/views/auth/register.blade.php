<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
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

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #e0d5c8;
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus {
            outline: none;
            border-color: #a9746e;
            box-shadow: 0 0 0 3px rgba(169, 116, 110, 0.1);
        }

        .error-message {
            color: #e74c3c;
            font-size: 0.85rem;
            margin-top: 0.5rem;
        }

        .action-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1.5rem;
        }

        .login-link {
            font-size: 0.9rem;
            text-decoration: none;
            color: #a9746e;
        }

        .login-link:hover {
            text-decoration: underline;
        }

        .register-btn {
            background-color: #a9746e;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 0.5rem;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .register-btn:hover {
            background-color: #8f6159;
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
        <h1 class="title">Crear cuenta</h1>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <!-- Nombre -->
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                @if($errors->get('name'))
                    <div class="error-message">{{ $errors->get('name')[0] }}</div>
                @endif
            </div>
            
            <!-- Correo electrónico -->
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                @if($errors->get('email'))
                    <div class="error-message">{{ $errors->get('email')[0] }}</div>
                @endif
            </div>
            
            <!-- Contraseña -->
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required autocomplete="new-password">
                @if($errors->get('password'))
                    <div class="error-message">{{ $errors->get('password')[0] }}</div>
                @endif
            </div>
            
            <!-- Confirmar contraseña -->
            <div class="form-group">
                <label for="password_confirmation">Confirmar contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                @if($errors->get('password_confirmation'))
                    <div class="error-message">{{ $errors->get('password_confirmation')[0] }}</div>
                @endif
            </div>
            
            <div class="action-row">
                <a href="{{ route('login') }}" class="login-link">¿Ya tienes cuenta? Inicia sesión</a>
                <button type="submit" class="register-btn">Registrarse</button>
            </div>
        </form>
        
        <div class="divider">
            <span>O</span>
        </div>
        
        <a href="{{ url('register/google') }}" class="google-btn">
            <svg class="google-icon" viewBox="0 0 24 24">
                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
            </svg>
            Registrarse con Google
        </a>
    </div>
</body>
</html>