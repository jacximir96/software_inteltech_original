<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="build/css/bootstrap.css">
<script src="build/js/bootstrap.min.js"></script>
<script src="build/js/bootstrap.js"></script>
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
    <div class="devwebcamp__grid" style="margin-bottom: 100px;">
        <div  class="devwebcamp__contenido">
                <p <?php aos_animacion(); ?> class="devwebcamp__texto">Inteltech Perú S.A.C. es una empresa dedicada a la elaboración, ejecución y supervisión de proyectos especializados en los sistemas de <span style="color:#ED7F00;font-weight:900;">COMUNICACIONES, MECÁNICAS Y ELÉCTRICAS</span> en entidades públicas y privadas.</p>
                
                <p <?php aos_animacion(); ?> class="devwebcamp__texto">Trabajamos más allá de nuestras obligaciones contractuales enfocándonos en el cliente con los más altos estándares de calidad.</p>
        </div>
        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture >
                <!-- <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif"> -->
                <!-- <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp"> -->
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp_1.jpeg" alt="Imagen DevWebcamp">
            </picture>
        </div>
    </div>
</main>