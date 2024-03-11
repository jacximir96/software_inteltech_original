<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la empresa de telecomunicaciones más importante del Perú</p>

    <div class="devwebcamp__grid">
        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture>
                <!-- <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif"> -->
                <!-- <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp"> -->
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp_1.jpeg" alt="Imagen DevWebcamp">
            </picture>
        </div>

        <div  class="devwebcamp__contenido">
            <p <?php aos_animacion(); ?> class="devwebcamp__texto">Inteltech Perú S.A.C. es una empresa dedicada a la elaboración, ejecución y supervisión de proyectos especializados en los sistemas de <span style="color:#ED7F00;font-weight:900;">COMUNICACIONES, MECÁNICAS Y ELÉCTRICAS</span> en entidades públicas y privadas.</p>
            
            <p <?php aos_animacion(); ?> class="devwebcamp__texto">Trabajamos más allá de nuestras obligaciones contractuales enfocándonos en el cliente con los más altos estándares de calidad.</p>
        </div>
    </div>
</main>