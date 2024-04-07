<style>
ul{
    list-style-type: none;
}

.footer_content {
        display: flex;
        align-items: 100px;
    }
    
.footer_image {
  
    width: 70%;
}
a{
    font-size: 30px;
}
.redes i{
   
    color: white;
     margin-right: 10px;
}

.info {
    text-align: end;
}
.footer_image img {
    align-items: center;
    max-width: 100%; /* Asegura que la imagen no exceda el ancho del contenedor */
}

.redes {
    display: flex;
    justify-content: end; /* Centra los íconos horizontalmente */
}
@media (max-width:1000px) {
    .info{
        text-align: center;
    }
    .redes{
        justify-content: center;
    }
    .footer_image {
           
            justify-content: center; /* Centra el texto y la imagen horizontalmente */
            width: 30%;
        }
        .footer_image img {
            display: none; /* Oculta la imagen en dispositivos con un ancho máximo de 1000px */
        }
}
</style>
<link rel="stylesheet" href="build/css/bootstrap.css">
<script src="build/js/bootstrap.min.js"></script>
<script src="build/js/bootstrap.js"></script>
<footer class="footer">
    <div class="footer__grid">
        <div class="footer__contenido">
        <nav>
  					<h3 style="margin-left: 40px;">Acerca de nosotros</h3>
  					<ul >
                       
  						<li>Contamos con un amplio portafolio de soluciones</li>
  						<li>tecnológicas, el cual nos permite posicionarnos como</li>
  						<li>uno de los líderes en el sector de infraestructura y</li>
  						<li>servicios, especialmente en los sectores de salud, </li>    <li>educación y medio ambiente.</li>
  					</ul>
  				</nav>
            
        </div>
        <div class="row">
            <div class="col-md-6 ">
                <div class="info">
                    <h3>Contáctanos</h3>
                    <p>Av. Brasil 836, Of. 2706, Breña</p>
                    <p>Central: 955564403 <br> Correo:ventas@inteltechperu.com</p>
                    <ul class="redes">
                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-google"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="footer_image">
                    <img src="build/img/logo_blanco.jpg">
                </div>
            </div>
        </div>
    </div>

    <p class="footer__copyright">
        Inteltech Perú S.A.C.
        <span class="footer__copyright--regular">
            - Todos los derechos reservados <?php echo date('Y'); ?>
        </span>
    </p>
</footer>