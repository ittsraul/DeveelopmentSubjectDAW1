<?php
require_once "../autoloader.php";
$id = $_GET['id'];
//$type = $_GET['comp'];
$compo = new GestorComponentes();
$c = $compo->getOneComponent($id);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bulma/css/bulma.css">
    <link rel="stylesheet" href="../assets/bulma/css/Syle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,600;0,800;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../../Medios Audiovisuales/log_definitivo.png">
    <title>DetalleComponente</title>
</head>

<body>
    <header class="gea_header">
        <div class="gea_container gea_logo-nav-container">
            <a href="./../index.html">
                <img class="gea_logo" src="../img/logo/log_def_nonefondo.png" alt="main_logo">
            </a>
            <nav class="gea_navigation">
                <ul class="gea_menu">
                    <li><a href="../index.php">home</a></li>
                    <li><a href="formulario.php">find your pc</a></li>
                    <li><a class="gea_selected" href="./offers.php">offers</a></li>
                    <li><a href="./forum.php">forum</a></li>
                    <li><a href="login.php">login</a></li>
                    <li><a href="signin.php">register</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="gea_cuerpo gea_seccion1-detalle">
        <nav class="breadcrumb is-small gea_breadcrumb-padding" aria-label="breadcrumbs">
            <ul>
                <li><a href="offers.php">Offers</a></li>
                <li class="is-active"><a href="#" aria-current="page"><?=$c->getModelo()?></a></li>
            </ul>
        </nav>
        <div class="columns">
            <div class="column is-1"></div>
            <div class="column is-5">
                <img class='gea_image-border is-1by1 ' src="https://bulma.io/images/placeholders/480x480.png" alt="">
            </div>
            <div class="column is-5 gea_container-button-bottom">
                <div class="gea_precio-final-detalle"><?=$c->getPrecioRebajado()?> €</div>
                <div class="gea_precio-tachado-detalle"><?=$c->getPrecioOriginal()?> €</div>
                <div class="gea_titulo-detalle"><?=$c->getModelo()?></div>
                <div class="gea_descrip-comercial"><?=$c->cutDescription()?></div>
                <a class="gea_leer-mas" href="#detalle">Leer más</a>
                <hr>
                <p class='gea_btnText'>
                    <button class="gea_detalle-button">Comprar</button>
                </p>
            </div>
            <div class="column is-1"></div>
        </div>
    </div>
    <div class="gea_cuerpo gea_seccion2-detalle">
        <div class="columns">
            <div class="column is-1"></div>
            <div class="column is-7">
                <div class="gea_titulo-detalle-descripcion" id="detalle">
                    DETALLES DEL COMPONENTE
                </div>
                <div class="gea_descrip-tecnica"><?=$c->getDscripComercial()?></div>
                <div class="gea_titulo-detalle-descripcion" id="detalle">
                    MÁS DETALLES
                </div>
                <div class="gea_descrip-tecnica"><?=$c->getDscripTecnica()?></div>
            </div>
            <div class="column is-3">
                <div class="gea_titulo-detalle-descripcion" id="detalle">
                        OTROS TAMBIÉN HAN VISTO 
                </div>
                <?=$compo->drawThreeRandomCards()?>
            </div>
    <!--  
        
                <div class="gea_titulo-detalle-descripcion">
                    OTRAS OFERTAS
                </div>
               
          <div class="gea_card">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                            </figure>
                        </div>
                    </div>
                    <div class="columns gea_part-title-card">
                        <h2 class="column is-6 gea_titulo-card">
                            Streaming pro BLD
                        </h2>
                        <div class="column is-6 gea_contenedor-precio-card">
                            <div class="gea_precio-right-card">3,999.90 $</div>
                        </div>
                    </div>
                    <button class="gea_card-button">
                        ver más
                    </button>
                </div>
                <div class="gea_card">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                            </figure>
                        </div>
                    </div>
                    <div class="columns gea_part-title-card">
                        <h2 class="column is-6 gea_titulo-card">
                            Streaming pro BLD
                        </h2>
                        <div class="column is-6 gea_contenedor-precio-card">
                            <div class="gea_precio-right-card">3,999.90 $</div>
                        </div>
                    </div>
                    <button class="gea_card-button">
                        ver más
                    </button>
                </div>
                <div class="gea_card">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                            </figure>
                        </div>
                    </div>
                    <div class="columns gea_part-title-card">
                        <h2 class="column is-6 gea_titulo-card">
                            Streaming pro BLD
                        </h2>
                        <div class="column is-6 gea_contenedor-precio-card">
                            <div class="gea_precio-right-card">3,999.90 $</div>
                        </div>
                    </div>
                    <button class="gea_card-button">
                        ver más
                    </button>
                </div> 

            </div>
-->
            <div class="column is-1"></div>
        
    </div>
    <footer>
        <div class="columns">
            <div class="column is-1"></div>
            <div class="column is-2">
                <div class="gea_contenedorFooter">
                    <h2>CONTACT</h2>
                    <span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo</span>
                </div>
                <div class="gea_contenedorFooter">
                    <h2>PLACE HOLDER</h2>
                    <span>Consetetur sadipscing elitr sed diam voluptua.
                    </span>
                </div>

            </div>
            <div class="column is-2"></div>
            <div class="column is-2">
                <div class="gea_contenedorFooter">
                    <h2>REQUIRMENTS</h2>
                    <span>Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo</span>
                </div>
                <div class="gea_contenedorFooter">
                    <h2>SHOPPING SETTINGS</h2>
                    <span>Elitr onsetetur sadipscing .
                    </span>
                </div>
            </div>
            <div class="column is-2"></div>
            <div class="column is-2">
                <div class="gea_contenedorFooter">
                    <h2>FAQ</h2>
                    <div>Consetetur sadipscing
                    </div>
                    <div>Consetetur sadipscing
                    </div>
                    <div>Consetetur sadipscing
                    </div>
                    <div>Consetetur sadipscing
                    </div>
                    <div>Consetetur sadipscing
                    </div>
                    <div>Consetetur sadipscing
                    </div>
                </div>
            </div>
            <div class="column is-1"></div>
        </div>

    </footer>


</body>

</html>