<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Institucional</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
        }

        /* Navegación */
        nav {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo {
            color: white;
            font-size: 1.5em;
            font-weight: bold;
            padding: 20px 0;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 10px;
        }

        .nav-menu li a {
            color: white;
            text-decoration: none;
            padding: 20px 20px;
            display: block;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .nav-menu li a:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .btn-panel {
            background: white;
            color: #667eea;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            margin: 10px 0;
        }

        .btn-panel:hover {
            background: #f0f0f0;
            transform: scale(1.05);
        }

        /* Menú móvil */
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5em;
            cursor: pointer;
            padding: 20px 0;
        }

        /* Hero Section */
        .hero {
            margin-top: 70px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 3em;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease;
        }

        .hero p {
            font-size: 1.3em;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.95;
        }

        /* Secciones */
        section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 20px;
        }

        section h2 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }

        section p {
            font-size: 1.1em;
            color: #666;
            line-height: 1.8;
            text-align: justify;
        }

        /* Cards para servicios */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .service-card {
            background: white;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            text-align: center;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .service-card .icon {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .service-card h3 {
            color: #667eea;
            margin-bottom: 15px;
            font-size: 1.5em;
        }

        .service-card p {
            text-align: center;
        }

        /* Misión y Visión */
        .mission-vision {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .mv-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .mv-card h3 {
            color: #667eea;
            font-size: 2em;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .mv-card .icon {
            font-size: 1.5em;
        }

        /* Background alternado */
        section:nth-child(even) {
            background: white;
        }

        /* Footer */
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 30px 20px;
            margin-top: 50px;
        }

        /* Animaciones */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }

            .nav-menu {
                position: fixed;
                left: -100%;
                top: 70px;
                flex-direction: column;
                background: #667eea;
                width: 100%;
                text-align: center;
                transition: 0.3s;
                gap: 0;
            }

            .nav-menu.active {
                left: 0;
            }

            .nav-menu li a {
                padding: 20px;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .hero h1 {
                font-size: 2em;
            }

            .mission-vision {
                grid-template-columns: 1fr;
            }

            section h2 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
<!-- Navegación -->
<nav>
    <div class="nav-container">
        <div class="logo">🏢 Mi Institución</div>
        <button class="menu-toggle" onclick="toggleMenu()">☰</button>
        <ul class="nav-menu" id="navMenu">
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#nosotros">Nosotros</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="#mision-vision">Misión y Visión</a></li>
            <li><a href="{{ url('/admin/login') }}" class="btn-panel">Panel Admin</a></li>
        </ul>
    </div>
</nav>

<!-- Hero Section -->
<section id="inicio" class="hero">
    <h1>Bienvenidos a Nuestra Institución</h1>
    <p>Comprometidos con la excelencia y el servicio de calidad para toda la comunidad</p>
</section>

<!-- Nosotros -->
<section id="nosotros">
    <h2>Nosotros</h2>
    <p>
        Somos una institución comprometida con el desarrollo y bienestar de nuestra comunidad.
        Con más de 10 años de experiencia, hemos trabajado incansablemente para ofrecer servicios
        de la más alta calidad, siempre poniendo a nuestros usuarios en el centro de todo lo que hacemos.
    </p>
    <p style="margin-top: 20px;">
        Nuestro equipo está conformado por profesionales altamente calificados y apasionados por lo que hacen,
        lo que nos permite garantizar resultados excepcionales en cada proyecto que emprendemos.
    </p>
</section>

<!-- Servicios -->
<section id="servicios">
    <h2>Nuestros Servicios</h2>
    <div class="services-grid">
        <div class="service-card">
            <div class="icon">📊</div>
            <h3>Consultoría</h3>
            <p>Asesoramiento profesional personalizado para alcanzar tus objetivos institucionales.</p>
        </div>
        <div class="service-card">
            <div class="icon">💼</div>
            <h3>Gestión</h3>
            <p>Administración eficiente de recursos y procesos para optimizar resultados.</p>
        </div>
        <div class="service-card">
            <div class="icon">🎓</div>
            <h3>Capacitación</h3>
            <p>Programas de formación continua para el desarrollo de competencias.</p>
        </div>
        <div class="service-card">
            <div class="icon">🤝</div>
            <h3>Acompañamiento</h3>
            <p>Soporte constante en cada etapa de implementación de proyectos.</p>
        </div>
    </div>
</section>

<!-- Misión y Visión -->
<section id="mision-vision">
    <h2>Misión y Visión</h2>
    <div class="mission-vision">
        <div class="mv-card">
            <h3><span class="icon">🎯</span> Misión</h3>
            <p>
                Brindar servicios de excelencia que contribuyan al desarrollo integral de nuestra comunidad,
                a través de la innovación, el compromiso y la responsabilidad social, garantizando la
                satisfacción de nuestros usuarios y el crecimiento sostenible de la institución.
            </p>
        </div>
        <div class="mv-card">
            <h3><span class="icon">🔭</span> Visión</h3>
            <p>
                Ser reconocidos como la institución líder en nuestro sector, destacando por la calidad
                de nuestros servicios, la innovación constante y el impacto positivo en la sociedad,
                consolidándonos como referente nacional e internacional para el año 2030.
            </p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2025 Mi Institución. Todos los derechos reservados.</p>
</footer>

<script>
    function toggleMenu() {
        const navMenu = document.getElementById('navMenu');
        navMenu.classList.toggle('active');
    }

    // Cerrar menú al hacer clic en un enlace
    document.querySelectorAll('.nav-menu a').forEach(link => {
        link.addEventListener('click', () => {
            document.getElementById('navMenu').classList.remove('active');
        });
    });

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>
</body>
</html>
