<footer class="footer <?php echo($_SERVER['REQUEST_URI'] === "/finalizar-registro") ? 'footer--top' : '' ?>">
    <div class="footer__grid">
        <div class="footer__contenido">
            <h3 class="footer__logo">&#60;DevWebCamp/></h3>

            <p class="footer__texto">
                DevWebCamp es una conferencia para desarrolladores de todos los niveles,
                se lleva a cabo de forma de forma presencial y en linea.
            </p>
        </div>

        <nav class="menu-redes">
            <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/">
                <span class="menu-redes__ocultar">Facebook</span>
            </a>
            <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://twitter.com/?lang=es">
                <span class="menu-redes__ocultar">Twitter</span>
            </a>
            <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/">
                <span class="menu-redes__ocultar">YouTube</span>
            </a>
            <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/">
                <span class="menu-redes__ocultar">Instagram</span>
            </a>
            <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://www.tiktok.com/es/">
                <span class="menu-redes__ocultar">Tiktok</span>
            </a>
            <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://github.com/ErickEZM">
                <span class="menu-redes__ocultar">Github</span>
            </a>
        </nav>
    </div>

    <p class="footer__copyright">
        DevWebCamp
        <span class="footer__copyright--regular">
            - Todos los derechos reservados <?php echo date('Y'); ?>
        </span>
    </p>
</footer>