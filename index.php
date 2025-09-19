<?php
// index.php - Landing page para Sanación Genética de Mandatos Familiares
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>Sanación Genética de Mandatos Familiares</title>
    <link rel="icon" href="favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="style.css?v=5.8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <h1>Sanación Genética de Mandatos Familiares <span>- Transforma tu
                ADN emocional</span></h1>
    </header>
    <main>
        <section class="intro">
            <h2>Activa tu poder interior y sana tu linaje familiar</h2>
            <p><i class="bi bi-dna"></i> <strong>Sanación Genética de Mandatos Familiares</strong> <i
                    class="bi bi-dna"></i></p>
            <p>Vive una experiencia transformadora y profunda, diseñada para mujeres líderes que buscan sanar su
                historia y manifestar abundancia desde la raíz genética y emocional.</p>
            <p>Descubre cómo liberar patrones heredados, reprogramar tu mente y convertirte en la creadora consciente de
                tu destino.</p>
            <p>¡Reserva tu lugar y comienza tu proceso de sanación genética hoy!</p>
        </section>
        <section class="benefits">
            <h3>¿Qué recibirás en este taller?</h3>
            <ul>
                <li><i class="bi bi-geo-alt"></i> <strong>Programa presencial en vivo</strong></li>
                <li><i class="bi bi-people"></i> <strong>Taller de conductas parentales</strong></li>
                <li><i class="bi bi-book"></i> <strong>Manual de apoyo para desarrollar las conductas
                        parentales</strong></li>
                <li><i class="bi bi-magic"></i> <strong>Carta astrológica de tránsitos</strong></li>
                <li><i class="bi bi-scroll"></i> <strong>Documento de como interpretar la carta de tránsitos</strong>
                </li>
                <li><i class="bi bi-key"></i> <strong>Códigos sagrados</strong></li>
                <li><i class="bi bi-yin-yang"></i> <strong>Meditación para los 21 días de sanación</strong></li>
                <li><i class="bi bi-people-fill"></i> <strong>Sesión virtual en grupos de 5 para desarrollar las
                        conductas parentales posterior al entrenamiento. Duración 1 hora</strong></li>
            </ul>
        </section>
        <section class="details">
            <h3>¿Qué aprenderás y experimentarás?</h3>
            <ul>
                <li><i class="bi bi-search"></i> <strong>Identificar y liberar creencias familiares que limitan tu
                        potencial</strong></li>
                <li><i class="bi bi-heart"></i> <strong>Sanar heridas emocionales y transformar tu historia
                        personal</strong></li>
                <li><i class="bi bi-flower1"></i> <strong>Activar procesos de regeneración y bienestar en tu
                        linaje</strong></li>
            </ul>
            <h3><i class="bi bi-calendar-event"></i> Detalles del evento:</h3>
            <ul>
                <li><strong>Fecha:</strong> 25 de Octubre 2025</li>
                <li><strong>Horarios:</strong> 3 pm a 5 pm / 7 pm a 9 pm</li>
                <li><strong>Plataforma:</strong> Zoom (en vivo)</li>
            </ul>
            <p class="contact-info"><i class="bi bi-link"></i> <strong>Reserva tu cupo:</strong> <a
                    href="tel:+573169222256">+57 3169222256</a>
            </p>
            <p class="contact-info"><i class="bi bi-telephone"></i> <strong>Síguenos en Instagram:</strong> <a
                    href="https://www.instagram.com/Sandrasantamariacoach" target="_blank">@Sandrasantamariacoach</a>
            </p>
        </section>

        <section class="playlist">
            <h3><i class="bi bi-film"></i> Playlist de Videos Relacionados</h3>
            <iframe width="560" height="315"
                src="https://www.youtube.com/embed/videoseries?list=PL_ig3DN3fzBXaWuXPqfu6t1GFOlzHU3DI"
                title="Playlist de YouTube" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </section>
        <section class="discount">
            <h3><i class="bi bi-cash"></i> ¡Promoción exclusiva para nuevas líderes!</h3>
            <p>Accede a tu transformación con un precio especial por tiempo limitado.</p>
            <p><strong>Valor regular: $134 USD</strong></p>
        </section>
        <section class="cta">
            <h3><i class="bi bi-rocket"></i> ¡Reserva tu lugar y comienza tu sanación genética!</h3>
            <p>Tu mente y tu linaje pueden ser tu mayor fuente de poder y bienestar.</p>
            <a href="https://buymeacoffee.com/Sandrasantamaria/e/457191" target="_blank" class="btn">Pagar y Reservar
                Cupo</a>
        </section>
        <section class="hashtags">
            <p><i class="bi bi-tag"></i> #SanaciónGenética #CoachingDeSanación #LiderazgoFemenino #TransformaTuADN
                #BienestarEmocional #SanaciónFamiliar #Empoderamiento</p>
        </section>
    </main>
    <footer>
        <p><i class="bi bi-star"></i> &copy; 2025 Sandra Santamaría Coach | Sanación Genética y Coaching
            Transformacional.
            Todos los derechos reservados.</p>
    </footer>
    <button id="scrollToTopBtn" class="scroll-to-top"><i class="bi bi-arrow-up-circle-fill"></i></button>
    <script>
    // Scroll to top button
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollToTopBtn.style.display = 'block';
        } else {
            scrollToTopBtn.style.display = 'none';
        }
    });
    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Fade in on scroll
    const sections = document.querySelectorAll('section');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animation = 'fadeIn 1s ease-in-out';
            }
        });
    });
    sections.forEach(section => observer.observe(section));
    </script>
</body>

</html>