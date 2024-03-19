
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="build/css/bootstrap.css">
<script src="build/js/bootstrap.min.js"></script>
<script src="build/js/bootstrap.js"></script>
<div class="container">
    <div class="row"> 
        <div class="col-md-6" style="margin-top: 20%;">
        <h2 class="auth__heading" style="font-size: 30px;">Ubícanos</h2>
            <?php 
                require_once __DIR__ . '/../templates/alertas.php';
            ?>
        <div style="height: 20%; display: flex; align-items: center;">
                <div style="display: flex; align-items: center; width: 15%;">
                    <img src="/build/img/contactenos/celular.png" alt="" style="width: 50px; margin-right: 10px;">
                </div>
                <div style="display: flex; flex-direction: column; width: 85%;">
                    <span style="margin-bottom: 5px;"><strong>Teléfonos</strong></span>
                    <span>955564403</span>
                    <span>933270708</span>
                </div>
            </div>

            <div style="height: 20%; display: flex; align-items: center;">
                <div style="display: flex; align-items: center; width: 15%;">
                    <img src="/build/img/contactenos/correo.png" alt="" style="width: 50px; margin-right: 10px;">
                </div>
                <div style="display: flex; flex-direction: column; width: 85%;">
                    <span style="margin-bottom: 5px;"><strong>Correo</strong></span>
                    <span>ventas@inteltechperu.com</span>
                    <span>yantezana@inteltechperu.com </span>
                </div> 
            </div>

            <div style="height: 20%; display: flex; align-items: center;">
                <div style="display: flex; align-items: center; width: 15%;">
                    <img src="/build/img/contactenos/direccion.jpg" alt="" style="width: 50px; margin-right: 10px;">
                </div>
                <div style="display: flex; flex-direction: column; width: 85%;">
                    <span style="margin-bottom: 5px;"><strong>Dirección</strong></span>
                    <span>Av. Brasil 836, Of. 2706, Breña</span>
                </div> 
            </div>

            <div style="height: 20%; display: flex; align-items: center;">
                <div style="display: flex; align-items: center; width: 15%;">
                    <img src="/build/img/contactenos/web.jpg" alt="" style="width: 50px; margin-right: 10px;">
                </div>
                <div style="display: flex; flex-direction: column; width: 85%;">
                    <span style="margin-bottom: 5px;"><strong>Web</strong></span>
                    <span>www.inteltechperu.com</span>
                </div> 
            </div>
        </div>  
        <div class="col-md-6">
            <main class="auth">

                <h2 class="auth__heading"><?php echo $titulo; ?></h2>
                <p class="auth__texto">Regístrate en DevWebcamp</p> 

                <?php 
                    require_once __DIR__ . '/../templates/alertas.php';
                ?>

                <form method="POST" action="/registro" class="formulario">
                    <div class="formulario__campo">
                        <label for="nombre" class="formulario__label"><strong>Nombre</strong></label>
                        <input
                            type="text"
                            class="formulario__input"
                            placeholder="Tu Nombre"
                            id="nombre"
                            name="nombre"
                            value="<?php echo $usuario->nombre; ?>"
                        >
                    </div>

                    <div class="formulario__campo">
                        <label for="apellido" class="formulario__label"><strong>Apellido</strong></label>
                        <input
                            type="text"
                            class="formulario__input"
                            placeholder="Tu Apellido"
                            id="apellido"
                            name="apellido"
                            value="<?php echo $usuario->apellido; ?>"
                        >
                    </div>

                    <div class="formulario__campo">
                        <label for="email" class="formulario__label"><strong>Email</strong></label>
                        <input
                            type="email"
                            class="formulario__input"
                            placeholder="Tu Email"
                            id="email"
                            name="email"
                            value="<?php echo $usuario->email; ?>"
                        >
                    </div>

                    <div class="formulario__campo">
                        <label for="password" class="formulario__label"><strong>Password</strong></label>
                        <input
                            type="password"
                            class="formulario__input"
                            placeholder="Tu Password"
                            id="password"
                            name="password"
                        >
                    </div>

                    <div class="formulario__campo">
                        <label for="password2" class="formulario__label"><strong>Repetir Password</strong></label>
                        <input
                            type="password"
                            class="formulario__input"
                            placeholder="Repetir Password"
                            id="password2"
                            name="password2"
                        >
                    </div>

                    <input type="submit" class="formulario__submit" value="Crear Cuenta">
                </form>

                <div class="acciones">
                    <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Iniciar sesión</a>
                    <a href="/olvide" class="acciones__enlace">¿Olvidaste tu Password?</a>
                </div>
            </main>
        </div>
    </div>     
</div>
<div id="mapa" class="mapa"></div>