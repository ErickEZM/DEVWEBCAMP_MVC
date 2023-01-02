<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia más importante de Latinoamérica</p>

    <div class="devwebcamp__grid">
        <div class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen Devwebcamp">
            </picture>
        </div>

        <div class="devwebcamp__contenido">
            <p <?php aos_animacion(); ?> data-aos-offset="0" class="devwebcamp__texto">Fusce molestie arcu sit amet nunc placerat iaculis in ut elit. Nam ac sagittis ex. 
            Nullam eget nibh ut massa dictum eleifend quis sed lacus. Sed malesuada 
            faucibus suscipit. Nam ac facilisis dui, id auctor nibh. Mauris ullamcorper ante tellus.
            Proin tristique dui non lacus aliquam cursus. Duis sodales fermentum ipsum, ac mollis nulla 
            lacinia id.</p>

            <p <?php aos_animacion(); ?> data-aos-offset="0" class="devwebcamp__texto">Fusce molestie arcu sit amet nunc placerat iaculis in ut elit. Nam ac sagittis ex. 
            Nullam eget nibh ut massa dictum eleifend quis sed lacus. Sed malesuada 
            faucibus suscipit. Nam ac facilisis dui, id auctor nibh. Mauris ullamcorper ante tellus.
            Mauris ullamcorper ante tellus, at condimentum lacus faucibus nec. Vestibulum ullamcorper ullamcorper nunc vel feugiat. Aliquam tristique ultricies diam. 
            Nunc ultrices justo felis, eget auctor risus pulvinar non. Duis placerat neque porta lobortis vestibulum.</p>
        </div>
    </div>
</main>