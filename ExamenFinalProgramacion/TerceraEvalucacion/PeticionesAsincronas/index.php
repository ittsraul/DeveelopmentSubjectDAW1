
<head>
    <title>Florida Oberta: Iniciar sesión en el sitio</title>
    <link rel="shortcut icon" href="//www.floridaoberta.com/pluginfile.php/1/theme_adaptable/favicon/1651591179/flor-miniatura.png" />
    <link href='//fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <script src="https://www.floridaoberta.com/login/lib/js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://www.floridaoberta.com/login/lib/css/bootstrap.min.css">
    <script src="https://www.floridaoberta.com/login/lib/js/bootstrap.min.js"></script>
</head>

<div class="background-panel onecolumn">
    <!--<ul class="nav">
        <li class="dropdown langmenu">
            <p class="welcome_florida">Bienvenido al campus de Florida formación</p>
        </li>
    </ul>
-->
    <div class="container">
        <div class="row" style="">
            <style>
                .welcometext{
                    font-weight: 400;
                    padding: 20px;
                    background-color: rgba(0, 0, 0, 0.48);
                    font-size: 17px;
                    line-height: 25px;
                    color:#FFF;
                    margin-top: 14px;
                }
                .welcometext a{
                    color:#c4e3f3;
                }
                .welcome_florida{
                    margin-top: 10px;
                    margin-left: 10px;
                    font-weight: 500;
                }
                .text_welcome_down_logo{
                    font-size: 17px;
                    margin-bottom: 20px;
                }
                .rememberpassword {
                    margin-top: 10px;
                    margin-bottom: 10px;
                }
                .loginformbtnremember {
                    display: block;
                    text-align: center;
                }
            </style>
            <div style="" class="loginpanel center-block col-md-5">
                <div class="text-center">
                    <img  class="imglogo" src="img/logo.png">
                    <p class="text_welcome_down_logo">Bienvenido/a al Campus Virtual</p>

                </div>

                                <div class="subcontent loginsub">
                    <div class="loginerrors"><a id="loginerrormessage" class="accesshide" href="#">Su sesión ha excedido el tiempo límite. Por favor, entre de nuevo.</a></div><br/>                    <form action="https://www.floridaoberta.com/login/index.php" method="post" id="login"  >
                        <input id="anchor" type="hidden" name="anchor" value="" />
                        <script>document.getElementById('anchor').value = location.hash;</script>
                        <input type="hidden" name="logintoken" value="AaDcPGfGGrLNo1UfTVfPapcz4n2McyJ0">
                        <div class="loginform">
                            <div class="form-input">
                                <input placeholder="Nombre de usuario" type="text" name="username" id="username" size="15" value="" />
                            </div>
                            <div class="clearer"><!-- --></div>
                            <div class="form-input">
                                <input style="" placeholder="Contraseña" type="password" name="password" id="password" size="15" value=""  />
                            </div>
                        </div>
                                                <input type="checkbox" name="rememberusername" id="rememberusername" value="1"  />
                               <label class="rememberusername" for="rememberusername">Recordar nombre de usuario</label>
                        
                        <input class="loginformbtn" type="submit" id="loginbtn" value="Acceder" />
                        
                        <div class="desc">
                            Las 'Cookies' deben estar habilitadas en su navegador<a class="btn btn-link p-0" role="button"
    data-container="body" data-toggle="popover"
    data-placement="right" data-content="&lt;div class=&quot;no-overflow&quot;&gt;&lt;p&gt;Este sitio utiliza dos &quot;cookies&quot;:&lt;/p&gt;

&lt;p&gt;La cookie esencial es la de sesión, normalmente llamada MoodleSession.
Debe permitir que su navegador la acepte para poder mantener el servicio
funcionando mientras navega el sitio. Cuando sale de la plataforma o cierra su navegador la &#039;cookie&#039; se destruye (en su navegador y en el servidor).&lt;/p&gt;

&lt;p&gt;La otra &#039;cookie&#039;, normalmente llamada MOODLEID o similar, es para su comodidad. Se limita a recordar su nombre de usuario dentro del navegador. Esto significa que cuando regresa al sitio, se escribirá automáticamente su nombre en el campo nombre de usuario
Si desea mayor seguridad no utilice esta opción: sólo tendrá que escribir su nombre manualmente cada vez que quiera iniciar sesión.&lt;/p&gt;
&lt;/div&gt; "
    data-html="true" tabindex="0" data-trigger="focus">
  <i class="icon fa fa-question-circle text-info fa-fw "  title="Ayuda con Las &#039;Cookies&#039; deben estar habilitadas en su navegador" aria-label="Ayuda con Las &#039;Cookies&#039; deben estar habilitadas en su navegador"></i>
</a>                            <a href="https://www.floridaoberta.com/contact/contact.php" class="btn btn-info loginformbtn" role="button">Contacto</a>

                        </div>
                        <div class="rememberpassword">
                            <a class="loginformbtn loginformbtnremember" href="https://www.floridaoberta.com/contact/forget.php">Recuperar contraseña</a>
                        </div>
                    </form>
                </div>

                                <div class="subcontent guestsub">

                    <form action="index.php" method="post" id="guestlogin">
                        <div class="guestform">
                            <input type="hidden" name="username" value="guest" />
                            <input type="hidden" name="password" value="guest" />
                        </div>
                    </form>
                </div>
                            </div>
                        
    <div class="flofooter">
        <div class="row-fluid">
            <div class="col-md-4">
                <ul class="fooinfo">
                    <li><b>FLORIDA - Florida Centre de Formació</b>
                    <li>C/ Rei en Jaume I, nº 2. 46470 CATARROJA (Valencia) 
                    <li>Teléfono: +34 96 122 03 80

                </ul>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-2">
                <ul class="fooinfo">

                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row-fluid center">
            <a target="blank_" href="http://www.floridauniversitaria.es/es-ES/Paginas/avisolegal.aspx">
                Aviso legal</a> - 
            <a  target="blank_" href="http://www.floridauniversitaria.es/es-ES/Paginas/politicaprivacidad.aspx">
                Política de privacidad</a>
        </div>
    </div>
