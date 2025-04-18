<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neurodots - LAEC</title>
    <link rel="icon" href="/logo_laec.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/logo_laec.ico" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f0e1; /* Color beige claro para el fondo */
            color: #604020; /* Color café oscuro para el texto */
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            border-bottom: 2px solid #b79b7f; /* Borde café claro */
        }
        
        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #604020; /* Color café para el logo */
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo-img {
            width: 36px;
            height: 36px;
            margin-right: 10px;
        }
        
        .logo-icon {
            width: 36px;
            height: 36px;
            background-color: #7d5a3c;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #f5f0e1;
            font-weight: bold;
            font-size: 20px;
        }
        
        .auth-buttons {
            display: flex;
            gap: 15px;
        }
        
        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-login {
            background-color: transparent;
            border: 2px solid #7d5a3c; /* Borde café */
            color: #7d5a3c; /* Texto café */
        }
        
        .btn-login:hover {
            background-color: #7d5a3c;
            color: #f5f0e1; /* Texto beige */
        }
        
        .btn-register {
            background-color: #7d5a3c; /* Fondo café */
            border: 2px solid #7d5a3c;
            color: #f5f0e1; /* Texto beige */
        }
        
        .btn-register:hover {
            background-color: #604020; /* Un tono café más oscuro */
            border-color: #604020;
        }
        
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 70vh;
            text-align: center;
            padding: 20px;
        }
        
        .hero h1 {
            font-size: 40px;
            margin-bottom: 20px;
            color: #604020; /* Color café oscuro */
        }
        
        .hero h2 {
            font-size: 24px;
            margin-bottom: 30px;
            color: #7d5a3c; /* Color café medio */
            font-weight: 500;
        }
        
        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
            max-width: 700px;
            color: #7d5a3c; /* Color café medio */
        }
        
        .feature-cards {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            margin-top: 50px;
        }
        
        .card {
            background-color: #f8f4ea; /* Beige más claro */
            border-radius: 10px;
            padding: 30px;
            max-width: 300px;
            box-shadow: 0 5px 15px rgba(123, 89, 59, 0.1);
            border: 1px solid #d9cbb8; /* Borde beige oscuro */
        }
        
        .card h3 {
            margin-bottom: 15px;
            color: #604020; /* Café oscuro */
        }
        
        .card p {
            color: #7d5a3c; /* Café medio */
        }
        
        .lab-info {
            text-align: left;
            background-color: #e8e0d0;
            padding: 40px 30px;
            margin-top: 50px;
            border-radius: 10px;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .lab-info h2 {
            margin-bottom: 25px;
            color: #604020;
            text-align: center;
            font-size: 28px;
        }
        
        .lab-info h3 {
            color: #7d5a3c;
            margin: 30px 0 15px 0;
            font-size: 22px;
            border-bottom: 1px solid #b79b7f;
            padding-bottom: 8px;
        }
        
        .lab-description p {
            line-height: 1.6;
            margin-bottom: 20px;
            color: #5d4d40;
            text-align: justify;
        }
        
        .lab-objectives ul, .lab-research ul {
        padding-left: 20px;
        margin-top: 10px;
        list-style: none;
        }

        
        .lab-objectives li, .lab-research li {
            margin-bottom: 10px;
            line-height: 1.5;
            color: #5d4d40;
            position: relative;
            padding-left: 15px;
            text-align: left;
        }
        
        .lab-objectives li:before, .lab-research li:before {
            content: "•";
            position: absolute;
            left: 0;
            color: #7d5a3c;
        }
        
        footer {
            text-align: center;
            padding: 30px 0;
            margin-top: 50px;
            border-top: 2px solid #b79b7f; /* Borde café claro */
            color: #7d5a3c; /* Café medio */
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
        <div class="logo">
        <img src="/logo_neurodots.ico" alt="Neurodots Logo" class="logo-img">
        NeuroDots
        </div>
            <div class="auth-buttons">
                <a href="/login" class="btn btn-login">Iniciar Sesión</a>
                <a href="/register" class="btn btn-register">Registrarse</a>
            </div>
        </header>
        
        <main>
            <section class="hero">
                <h1>Proyecto de Investigación del Laboratorio de Análisis Experimental de la Conducta</h1>
                <p>Una aplicación web para la ejecución y análisis de experimentos conductuales con interfaz intuitiva y procesamiento de datos en tiempo real.</p>
                
                <div class="feature-cards">
                    <div class="card">
                        <h3>Registro de Experimentos</h3>
                        <p>Configure y documente sus experimentos con nuestro sistema intuitivo de captura de datos y variables experimentales.</p>
                    </div>
                    <div class="card">
                        <h3>Análisis de Datos</h3>
                        <p>Visualice y analice los resultados de sus experimentos con herramientas estadísticas avanzadas integradas en la plataforma.</p>
                    </div>
                    <div class="card">
                        <h3>Colaboración</h3>
                        <p>Comparta sus experimentos y resultados con colegas del laboratorio y colaboradores externos de forma segura.</p>
                    </div>
                </div>
            </section>
            
            <section class="lab-info">
    <h2>Laboratorio de Análisis Experimental de la Conducta</h2>
    <div class="lab-description">
        <p>El Laboratorio de Análisis Experimental de la Conducta es un espacio académico y de investigación, cuyo objetivo general es la aproximación al estudio sistemático de la conducta por parte de los estudiantes de psicología mediante modelos animales.</p>
    </div>
    
    <div class="lab-objectives">
        <h3>Objetivos</h3>
        <ul>
            <li>Promover la práctica de investigación científica en psicología.</li>
            <li>Formar estudiantes competentes en el estudio paramétrico de la conducta individual.</li>
            <li>Desarrollar conocimiento relacionado con la estructuración de interacciones organismo–medio.</li>
        </ul>
    </div>
    
    <div class="lab-research">
        <h3>Líneas de investigación</h3>
        <ul>
            <li>Parámetros de reforzamiento que regulan el comportamiento.</li>
            <li>Estudio de variables que regulan la persistencia de la conducta.</li>
            <li>Parámetros temporales de control del estímulo en conducta animal.</li>
        </ul>
    </div>
</section>
        </main>
        <footer>
            &copy; 2025 Neurodots - Laboratorio de Análisis Experimental de la Conducta. Todos los derechos reservados.
        </footer>
    </div>

    <script>
        // Script básico para hacer que los botones funcionen
        document.addEventListener('DOMContentLoaded', function() {
            // Si necesitas integrar con Laravel, estas rutas deben coincidir con tus rutas de Laravel
            const loginButton = document.querySelector('.btn-login');
            const registerButton = document.querySelector('.btn-register');
            
            // Si quieres usar las rutas de Laravel específicas, puedes cambiar estos href
            // para que coincidan con tus rutas nombradas de Laravel
            loginButton.setAttribute('href', '/login');  // O usa route('login')
            registerButton.setAttribute('href', '/register');  // O usa route('register')
        });
    </script>
</body>
</html>