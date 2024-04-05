<header class="header">
    <div class="header__contenedor">
        <nav class="header__navegacion">

            <?php if(is_auth()) { ?>
                <a href="<?php echo is_admin() ? '/admin/dashboard' : '/finalizar-registro'; ?>" class="header__enlace">Administrar</a>
                <form method="POST" action="/logout" class="header__form">
                    <input type="submit" value="Cerrar Sesión" class="header__submit">
                </form>
            <?php } else { ?>
                <!-- <a href="/registro" class="header__enlace">Registro</a> -->
                <a href="/login" class="header__enlace">Iniciar Sesión</a>
            <?php } ?>
        </nav>

        <div class="header__contenido">
            <a href="/">
                <h1 class="header__logo">
                    Inteltech Perú
                </h1>
            </a>

            <!-- <p class="header__texto">Octubre 5-6 - 2023</p> -->
            <!-- <p class="header__texto header__texto--modalidad">En Línea - Presencial</p> -->

            <!-- <a href="/registro" class="header__boton">Comprar Pase</a> -->
        </div>
    </div>
</header>
<div class="barra">
    <div class="barra__contenido">
        <a href="/">
            <img src="/build/img/LOGO_ITP-SVG.svg" type="image/svg" style="width: 250px; padding: 50px;">    
        </a>
        <nav class="navegacion">
            <a href="/devwebcamp"  style="text-decoration:none" class="navegacion__enlace <?php echo pagina_actual('/devwebcamp') ? 'navegacion__enlace--actual' : ''; ?>">Nosotros</a>
            <a href="/paquetes" style="text-decoration:none" class="navegacion__enlace <?php echo pagina_actual('/paquetes') ? 'navegacion__enlace--actual' : ''; ?>">Proyectos</a>
            <a href="/workshops-conferencias" style="text-decoration:none" class="navegacion__enlace <?php echo pagina_actual('/workshops-conferencias') ? 'navegacion__enlace--actual' : ''; ?>">Servicios</a>
            <a href="/registro" style="text-decoration:none" class="navegacion__enlace <?php echo pagina_actual('/registro') ? 'navegacion__enlace--actual' : ''; ?>">Contactanos</a>
        </nav>
    </div>
</div>