<style>
    .header{
        width: 100%;
        height: 60vh;
        animation: animate 16s infinite;
        background-size: cover;

    }
    .outer{
        position: absolute;
        left: 0;
        top: 0;
        height: 60vh;
    }
    @keyframes animate{
        0%,100%{
            background-image: url(../build/img/prueba.jpg);
        }
        25%{
            background-image: url(../build/img/1.jpg);
        }
        50%{
            background-image: url(../build/img/2.jpg);
        }
        75%{
            background-image: url(../build/img/3.jpg);
        }
    }
    @keyframes glow {
            0% {
                text-shadow: 0 0 5px white;
            }
            100% {
                color: #1d4264;
                text-shadow: 0 0 20px #1d4264;
            }
        }
.image{
    width: 220px; 
    padding: 50px;
   
}
@media (max-width: 1024px){
    .image {
        margin-left: 110px;
    }
}

</style>
    <link rel="preload" href="../build/img/prueba.jpg" as="image">
    <link rel="preload" href="../build/img/1.jpg" as="image">
    <link rel="preload" href="../build/img/2.jpg" as="image">
    <link rel="preload" href="../build/img/3.jpg" as="image">
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
                <a href="/login" class="header__enlace" style="color: white;">Iniciar Sesión</a>
            <?php } ?>
        </nav>

        <div class="header__contenido">
        <div class="outer">
            </div>
            <a href="/">
                <h1 class="header__logo" style="color: white;animation: glow 2s ease-in-out infinite alternate;">
                    Inteltech Perú
                </h1>
            </a>
        </div>
    </div>
</header>
<div class="barra">
    <div class="barra__contenido">
        <a class="image" href="/">
            <img  src="/build/img/LOGO_ITP-SVG.svg" type="image/svg" >    
        </a>
        <nav class="navegacion">
            <a href="/devwebcamp"  style="text-decoration:none" class="navegacion__enlace <?php echo pagina_actual('/devwebcamp') ? 'navegacion__enlace--actual' : ''; ?>">Nosotros</a>
            <a href="/paquetes" style="text-decoration:none" class="navegacion__enlace <?php echo pagina_actual('/paquetes') ? 'navegacion__enlace--actual' : ''; ?>">Proyectos</a>
            <a href="/workshops-conferencias" style="text-decoration:none" class="navegacion__enlace <?php echo pagina_actual('/workshops-conferencias') ? 'navegacion__enlace--actual' : ''; ?>">Servicios</a>
            <a href="/registro" style="text-decoration:none" class="navegacion__enlace <?php echo pagina_actual('/registro') ? 'navegacion__enlace--actual' : ''; ?>">Contactanos</a>
        </nav>
    </div>
</div>
