<div class="evento  swiper-slide">
    <!-- <p class="evento__hora"><?php echo $evento->hora->hora; ?></p> -->
    <div class="evento__informacion">
        <h4 class="evento__nombre">ELABORACIÓN DE EXPEDIENTES TÉCNICOS</h4>
        <p class="evento__introduccion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque reiciendis veniam, aliquam similique, omnis est optio impedit</p>
        <div class="evento__autor-info">
            <picture>
                <source srcset="img/speakers/<?php echo $evento->ponente->imagen; ?>.webp" type="image/webp">
                <source srcset="img/speakers/<?php echo $evento->ponente->imagen; ?>.png" type="image/png">
                <img class="evento__imagen-autor" loading="lazy" width="200" height="300" src="img/speakers/<?php echo $evento->ponente->imagen; ?>.png" alt="Imagen Ponente">
            </picture>
            <p class="evento__autor-nombre">
                <?php echo $evento->ponente->nombre . " " . $evento->ponente->apellido; ?>
            </p>
        </div>
    </div>
</div>