
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="build/css/bootstrap.css">
<script src="build/js/bootstrap.min.js"></script>
<script src="build/js/bootstrap.js"></script>
<style>
    .circulo{
        height: 90px;
        width: 90px;
        background-color: #1d4264;
        border-radius: 50%;
        background: linear-gradient(135deg, #f48424, #1d4264);
       
        display: flex; /* Utiliza un modelo de caja flexible */
        justify-content: center; /* Centra el contenido horizontalmente */
        align-items: center;

    }
    .text{
        
        color: white;
        font-size: 40px;
    }
    .line {
        margin-top: 20px;
        width: 80%; /* Ancho de la línea */
        height: 1px; /* Grosor de la línea */
        background-color: #f48424; /* Color de la línea */
}

</style>
<div class="container">
    <div class="row"> 
        <div class="col-md-6">
            
            <h2 style="color:  #f48424;padding-top:50px ;">UBÍCANOS</h2>
            <?php 
                require_once __DIR__ . '/../templates/alertas.php';
            ?>
                <div class="row" style="padding-top: 20px;"> 
                    <div class="col-md-2 circulo">
                        <span class="text"><i class="fa-solid fa-map-location-dot"></i></span>
                    </div>
                    <div class="col-md-6" style="padding-top: 10px; display: flex; flex-direction: column;">
                        <span style="margin-bottom: 10px;color: #1d4264 ;">Dirección</span>
                        <span style="font-size: 15px;">Av. Brasil 836, Of. 2706, Breña</span>
                    </div>
                    
                </div> 
                <div class="line"></div>
                <div class="row" style="padding-top: 20px;"> 
                    <div class="col-md-2 circulo">
                        <span class="text"><i class="fa-solid fa-phone"></i></span>
                    </div>
                    <div class="col-md-6" style="padding-top: 10px; display: flex; flex-direction: column;">
                        <span style="margin-bottom: 10px;color: #1d4264 ;">Telefonos</span>
                        <span style="font-size: 15px;">955564403 / 933270708</span>
                    </div>
                    
                </div> 
                <div class="line"></div>

                <div class="row" style="padding-top: 20px;"> 
                    <div class="col-md-2 circulo">
                        <span class="text"><i class="fa-regular fa-envelope-open"></i></span>
                    </div>
                    <div class="col-md-6" style="padding-top: 10px; display: flex; flex-direction: column;">
                        <span style="margin-bottom: 5px;color: #1d4264 ;">Correo</span>
                        <span style="font-size: 15px;">ventas@inteltechperu.com</span>
                        <span style="font-size: 15px;">yantezana@inteltechperu.com </span>
                    </div>
                    
                </div> 
        </div>  
        <div class="col-md-6">
                <h2 style="color:#f48424;padding-top: 50px;">CONTACTANOS</h2>
                <!-- <p class="auth__texto">Regístrate en DevWebcamp</p>  -->

                <?php 
                    require_once __DIR__ . '/../templates/alertas.php';
                ?>

                <form method="POST" action="/registro" class="formulario">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="formulario__campo">
                                <!-- <label for="nombre" class="formulario__label"><strong>Nombre</strong></label> -->
                                <input
                                    type="text"
                                    class="formulario__input"
                                    placeholder="Nombre"
                                    id="nombre"
                                    name="nombre"
                                    value="<?php echo $usuario->nombre; ?>"
                                >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formulario__campo">
                                <!-- <label for="apellido" class="formulario__label"><strong>Apellido</strong></label> -->
                                <input
                                    type="text"
                                    class="formulario__input"
                                    placeholder="Apellido"
                                    id="apellido"
                                    name="apellido"
                                    value="<?php echo $usuario->apellido; ?>"
                                >
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="formulario__campo">
                                <!-- <label for="email" class="formulario__label"><strong>Email</strong></label> -->
                                <input
                                    type="email"
                                    class="formulario__input"
                                    placeholder="Compañia"
                                    id="email"
                                    name="email"
                                    value="<?php echo $usuario->email; ?>"
                                >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formulario__campo">
                                <!-- <label for="password" class="formulario__label"><strong>Password</strong></label> -->
                                <input
                                    type="password"
                                    class="formulario__input"
                                    placeholder="Asunto"
                                    id="password"
                                    name="password"
                                >
                            </div>
                        </div>
                        

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="formulario__campo">
                                <!-- <label for="password2" class="formulario__label"><strong>Repetir Password</strong></label> -->

                                <textarea class="formulario__input" name="mensaje" id="mensaje" cols="40" rows="10" placeholder="Mensaje"
                                style="padding-top: 18px;"
                                ></textarea>
                                <!-- <input
                                    type="password"
                                    class="formulario__input"
                                    placeholder="Mensaje"
                                    id="password2"
                                    name="password2"
                                > -->
                            </div>
                        </div>
                        
                    </div>
                    

                    <input type="submit" class="formulario__submit" style="background-color:#1d4264;"  value="Crear Cuenta">
                </form>
        </div>
    </div>     
</div>
<div id="mapa" class="mapa"></div>