<!DOCTYPE html>



<html lang="en">



  <head>



    <meta charset="utf-8">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->



    <title>(1) Bring Old Batteries To Life Again</title>







    <link rel="stylesheet" href="css/bootstrap.min.css">



    <!-- Custom styles -->



    <link href="styles.css" rel="stylesheet" type="text/css">











    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->



    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->



    <!--[if lt IE 9]>



      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>



      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



    <![endif]-->



  </head>



<body>



     







     <header id="header">



     	<div class="container">



     		<div class="row">



     			<div class="col-md-4">



     				<div id="logo">



     					<img src="./images/logo.png">



     				</div>



     			</div>



     			<div class="col-md-8">



     				 <nav class="navbar navbar-expand-lg navbar-light navbar-right">



				 



						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">



						    <span class="navbar-toggler-icon"></span>



						  </button>







						  <div class="collapse navbar-collapse" id="navbarSupportedContent">



						    <ul class="navbar-nav mr-auto">



						       



						      <li class="nav-item dropdown">



						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">



						          Menu



						        </a>



						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">



						          <a class="dropdown-item" href="privacy.php">Privacidad</a>



						          <a class="dropdown-item" href="disclaimer.php">Descargo de responsabilidad</a>



						          <a class="dropdown-item" href="contact.php">Contacto</a>







						        </div>



						      </li>



						 



						    </ul>



						 



						  </div>



						</nav>



     			</div>







     			 



     		</div>



     	</div>



     </header><!-- End of Header -->







<?php







$afflink = file_get_contents("./files/afflink.txt");



$affid = file_get_contents("./files/clickbankid.txt");



$tid = file_get_contents("./files/tid.txt");



$exitaff = file_get_contents("./files/exitaff.txt");







//echo $exitaff;







?>





<?php if ($exitaff=="exitaff1") { ?>





<?php if(empty($tid)) { ?>







<?php if ($afflink=="aff1") { ?>



<?php $src ="https://hop.clickbank.net/?affiliate=".$affid."&vendor=rebaterias&x=d"; ?>



 





<?php } elseif ($afflink=="aff2") { ?>



<?php $src ="https://hop.clickbank.net/?affiliate=".$affid."&vendor=rebaterias&x=p"; ?> 



 





<?php } elseif ($afflink=="aff3") { ?>



<?php $src ="https://hop.clickbank.net/?affiliate=".$affid."&vendor=rebaterias&x=e"; ?> 







 



<?php } ?>







<?php } else { ?>







<?php if ($afflink=="aff1") { ?>



<?php $src ="https://hop.clickbank.net/?affiliate=".$affid."&vendor=rebaterias&x=d&tid=".$tid.""; ?>



 





<?php } elseif ($afflink=="aff2") { ?>



<?php $src ="https://hop.clickbank.net/?affiliate=".$affid."&vendor=rebaterias&x=p&tid=".$tid.""; ?> 







<?php } elseif ($afflink=="aff3") { ?>



<?php $src ="https://hop.clickbank.net/?affiliate=".$affid."&vendor=rebaterias&x=e&tid=".$tid.""; ?> 



 







<?php } ?>



<?php } ?>







<?php } ?> <!--Exit Aff 1 -->





<?php if ($exitaff=="exitaff2") { ?>





<?php if(empty($tid)) { ?>







<?php if ($afflink=="aff1") { ?>



<?php $src ="https://hop.clickbank.net/?affiliate=".$affid."&vendor=rebaterias&x=d2"; ?>



 





<?php } elseif ($afflink=="aff2") { ?>



<?php $src ="https://hop.clickbank.net/?affiliate=".$affid."&vendor=rebaterias&x=p2"; ?> 



 





<?php } elseif ($afflink=="aff3") { ?>



<?php $src ="https://hop.clickbank.net/?affiliate=".$affid."&vendor=rebaterias&x=e2"; ?> 







 



<?php } ?>







<?php } else { ?>







<?php if ($afflink=="aff1") { ?>



<?php $src ="https://hop.clickbank.net/?affiliate=".$affid."&vendor=rebaterias&x=d2&tid=".$tid.""; ?>



 

 



<?php } elseif ($afflink=="aff2") { ?>



<?php $src ="https://hop.clickbank.net/?affiliate=".$affid."&vendor=rebaterias&x=p2&tid=".$tid.""; ?> 







<?php } elseif ($afflink=="aff3") { ?>



<?php $src ="https://hop.clickbank.net/?affiliate=".$affid."&vendor=rebaterias&x=e2&tid=".$tid.""; ?> 



 







<?php } ?>



<?php } ?>







<?php } ?> <!--Exit Aff 2 -->



















     <section id="main">



        <div class="row" style="background: #FAFAFB; border-bottom: 1px solid #E8E8E8;">



         	<div class="container">



                <h2 class="text-center">Traiga de Vuelta a la Vida sus Baterías Viejas...</h2>



                <p class="text-center" style="font-size: 18px;">El Programa de Restauración de Baterías™ es la nueva forma de re-acondicionar sus <br />baterías y traerlas de vuelta a la vida.</p>



                <p class="text-center"><a href="<?php echo $src; ?>"><img src="./images/Recondition-Battery-play.jpg" style="display: inline-block;" /></a></p>



         	</div>



        </div>



        <div class="row" style="padding: 40px 0;">



            <div class="container">



                <h3>[Video] Con el Programa de Restauración de Baterías™, traer de vuelta a la vida Baterías Muertas es muy Fácil</h3>



                <p>Todos sabemos que las baterías son muy costosas y que sus precios seguirán subiendo cada vez más.</p>



                <p>Conocemos que una familia promedio gasta cada día más y más dinero, que tanto les ha costado ganar, en todo tipo de baterías...</p>



                <p>Sin embargo esto no tiene por que continuar de esta manera, ¡porque existe un método mejor!</p>



                <p>Se llama <strong><a href="<?php echo $src; ?>"><em>Programa de Restauración de Baterías</em></a></strong> y ¡le enseña a las personas como restaurar baterías viejas y traerlas de vuelta a la vida!*</p>



                <p>Es un método rápido y sencillo... ¡y puede ser usado en muchos tipos de baterías!</p>



                <p>A la fecha, <strong>¡más de 115,000 personas han probado nuestro programa!</strong></p>



                <p>&nbsp;</p>



                <p class="text-center" style="margin-bottom: 5px;">Como lo ha visto en:</p>



                <p><img src="./images/EZ-battery-as-seen-on.jpg" class="align-center" /></p>







                <div class="greenbox-middle">



                    <h4 class="title">¡Realmente increíble!...</h4>



                    <p>"La batería de mi coche se descargó la semana pasada e iba a comprar una nueva. Antes de hacerlo, mi amigo me recomendó el programa, así que decidí probarlo.</p>



                    <p>En 30 minutos de usar el programa, pude hacer que la batería descargada de mi coche volviera a funcionar de nuevo. ¡Desde entonces, la batería ha estado trabajando como nueva otra vez! ¡Realmente increíble!"*</p>



                    <p class="author">Cecilia Castellanos</p>



                </div>







                <p>Sólo piénselo...</p>



                <p>¿Cuánto del dinero que tanto le costo ganar, gasta usted en cambiar la batería de su coche, de su computadora portátil, del teléfono celular y otros dispositivos electrónicos?</p>



                <p>Una persona en promedio, ¡gasta en su vida más de $15,000!</p>



                <p>¿Pero que pasaría si en lugar de eso, pudiera restaurar y volver a la vida sus baterías viejas y reutilizarlas nuevamente?</p>



                <p>Esto podría ahorrarle dinero, ¡porque compraría cada vez menos baterías nuevas!</p>



                <p>Y aquí está lo increíble...</p>



                <p>¡Es <u>fácil</u> y <u>simple</u> de hacer con el <a href="<?php echo $src; ?>">Programa de Restauración de Baterías</a>!*</p>



                <p>Y si miras <a href="<?php echo $src; ?>">este video</a>, puedes conocer más sobre el Programas de Restauración de Baterías™ y sobre cómo usarlo ¡para traer de vuelta a la vida esas baterías viejas!</p>



            </div>



        </div>



        <div class="row">



            <div class="container">



                <p><a href="<?php echo $src; ?>"><img src="./images/Ver-el-video.png" class="align-center" /></a></p>



                <h4 class="text-center"><a href="<?php echo $src; ?>"><strong>>> Selecciona aquí para ver la presentación gratuita <<</strong></a></h4>



            </div>



        </div>



        <div class="row">



            <div class="container">



                <div class="row">



                    <div class="col-md-9">







                        <div class="space"></div>



                        <div class="space"></div>





                        <p>Si su batería esta muerta, <strong>¡no la tire a la basura!</strong></p>



                        <p>Si tiene una caja con baterías viejas, <strong>¡guárdelas!</strong></p>



                        <p>¡Puede restaurarlas y usarlas de nuevo!*</p>



                        <p>¡El <a href="<?php echo $src; ?>">Programa de Restauración de Baterías</a> es simple y fácil de usar y además muy efectivo!*</p>



                        <p>¡Y puede ser usado desde la comodidad de su casa para restaurar sus baterías viejas!</p>



                        <p>Y si usted no es un técnico o no conoce lo básico sobre baterías, de igual manera puede usar el programa...</p>



                        <p>Por que el <a href="<?php echo $src; ?>">Programa de Restauración de Baterías™</a> esta elaborado para que cualquier persona lo pueda utilizar.</p>







                    </div>



                    <div class="col-md-3">







                        <div class="greenbox-side">



                            <h4 class="title">¡Eso me ahorró cientos de dólares!</h4>



                            <p>"Yo estaba a punto de tirar 4 batería viejas que pensé que estaban completamente descargadas. ¡Gracias a su programa, fui capaz de restaurar cada una de ellas en menos de una hora! ¡Eso me ahorró cientos de dólares! Muchas gracias."*</p>



                            <p class="author">Héctor Cisneros</p>



                        </div>







                    </div>



                </div>



            </div>



        </div>



        <div class="row" style="margin-bottom: 45px;">



            <div class="container">







                    <h4 class="text-center" style="margin-bottom: 10px;"><a href="<?php echo $src; ?>">Conózca Más En Esta Presentación Gratuita</a></h4>



                    <div class="text-center"><a href="<?php echo $src; ?>" id="orangebtn"><span class="text">Seleccione Aquí Para Ver La Presentación</span><span class="shine"></span><span class="hover"></span><span class="active"></span></a></div>







            </div>



        </div>



        <div class="row">



            <div class="container">



                <div class="row">







                    <div class="col-md-9">







                        <div class="space"></div>



                        <div class="space"></div>



                        <div class="space"></div>







                        <p>Y no sólo eso...</p>



                        <p>Mientras que la mayoría de las personas están felices con sólo restaurar y reutilizar las baterías que usan en su hogar, ¡hay otros que toman un paso más allá!...</p>



                        <p>Ellos están consiguiendo baterías al por mayor (gratis), restaurándolas, ¡y vendiéndolas, generando ganancias!</p>



                        <p>Y ellos logran hacer esto con cualquier tipo de baterías también...baterías de coche, de teléfonos y computadoras portátiles, baterías de carritos de golf, baterías de montacargas y ¡muchos otros tipos de baterías!</p>



                        <p>¡Y en <a href="<?php echo $src; ?>">esta nueva presentación</a>, le revelamos como puede usar el Programa de Restauración de Baterías™ para lograr esto!</p>



                        <p><strong><u>Seleccione en la enlace abajo</u></strong> para ver el video gratuito y conocer más...</p>



                        <div class="space"></div>



   



                        <p><img src="./images/arrow-red.png" class="align-center" /></p>







                    </div>



                    <div class="col-md-3">







                        <div class="greenbox-side">



                            <h4 class="title">¡Esto me permitió construir mi banco de baterías con un costo muy bajo!</h4>



                            <p>"Estaba a punto de gastar miles de dólares en baterías para construir un banco de baterías para mi sistema de paneles solares. Pero decidí buscar para ver si tenía otras opciones antes de comprarlas. Por suerte, encontré su programa y pude obtener las baterías viejas gratis (así como usted enseña cómo hacerlo), mismas que restauré y utilicé. ¡Esto me permitió construir mi banco de baterías con un costo muy bajo!"*</p>



                            <p class="author">Andrés Trevino</p>



                        </div>







                    </div>



                </div>



            </div>



        </div>



        <div class="row">



            <div class="container">



                <p><a href="<?php echo $src; ?>"><img src="./images/SELECCIONE-AQUI.png" class="align-center" /></a></p>



            </div>



        </div>











     </section><!-- End of Main -->







     <footer id="footer">







	     	<div class="row">



	     		<div class="container">



	     		 



	     			<p><img src="./images/RDB-logo.png" class="align-center" /></p>







                    <p>AVISO LEGAL: Por favor considere que los resultados obtenidos con el Programa de Restauración de Baterías pueden variar según el estado previo de la batería, su uso y otros factores a considerar.</p>







                    <p>AVISO LEGAL SOBRE LAS GANANCIAS: Martín Soto es un profesional experto en restaurar baterías y sus resultados no son comunes. La experiencia de Martín no le garantiza poder obtener ganancias si comienza su propio negocio de restauración/venta de baterías. Usted quizás ganará mas o menos lo mismo.</p>







                    <p>SOBRE EL ENTRENAMIENTO: Al final del entrenamiento, estaré realizando una oferta a las personas que quieran trabajar junto a mí y mi equipo. Esto es totalmente opcional. Si usted no quiere usar nuestro curso ni trabajar conmigo, puede salir de la página sin comprar. Vamos a probar y a enseñarle muchas habilidades muy útiles, y podrá implementar lo que aprendió por su propia cuenta.</p>







                    <p>NO SOMOS FACEBOOK: Este sitio no es parte de la plataforma social Facebook, de su sitio web o de Facebook Inc. Además, este sitio no es patrocinado por Facebook en ningún sentido. Facebook es una marca registrada de FACEBOOK, Inc</p>







                    <div class="space"></div>



                    <div class="space"></div>







	     	 



	     		</div>



	     	</div>



            <div class="row">



                <div class="container">



                    <div class="row">







                        <div class="col-md-6">



                            <p class="copyright">Copyright &copy; 2021 RestauracionDeBaterias.com · Todos los Derechos Reservados</p>



                        </div>



                        <div class="col-md-6">



                            <ul>



                                <li><a href="privacy.php">Privacidad</a></li>



                                <li><a href="disclaimer.php">Descargo de responsabilidad</a></li>



                                <li><a href="contact.php">Contacto</a></li>



                            </ul>



                        </div>







                    </div>



                </div>



            </div>



	



     </footer>















    <!-- Bootstrap core JavaScript



    ================================================== -->



    <!-- Placed at the end of the document so the pages load faster -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>







    <script src="js/bootstrap.min.js"></script>







  	<!-- FontAwesome -->



  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">











	



</body>



</html>