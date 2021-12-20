<?php 
include_once('db/utilidades.php');

if( $_POST )
{
  header('Location: code.php');	
  $nomb = isset( $_POST['nom'] ) ? $_POST['nom'] : '';
  $email = isset( $_POST['email'] ) ? $_POST['email'] : '';
  $solicitud = isset( $_POST['solicitud'] ) ? $_POST['solicitud'] : '';


  add( $nomb, $email, $solicitud );
  die();
}
?>

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>El Creador de sitios Web</title>
	
	<meta name="description" content="Empresa de diseño y desarrollo web, enfocada en la creación de todo tipo de páginas dinámicas, competitivas y de gran interacción.">
	<meta name="keywords" content="páginas web, web, como hacer una página web, diseño web, desarrollo web, god of web, lord of web, tienda web">
	
		<link rel="icon" type="image/png" href="imgs/icon.PNG">
	
	<!-- Bootstrap -->
	<link href="bootstrap-grid.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="estilos.css" rel="stylesheet" type="text/css">
	<link href="scrollup/style_font_scrollup.css" rel="stylesheet" type="text/css">
	<link href="componentes_contacto/style_componentes.css" rel="stylesheet" type="text/css">
	
	<style type="text/css">
			@import url("fonts/fuentes.css");

	</style>
</head>

<body>

		<span class="ir-arriba icon-circle-up"></span>
	<nav class="navbar navbar-default navbar-fixed-top  navbar-inverse">
<a href="pag_web.php"><img src="imgs/gow_pfc.PNG" width="210" height="60" alt="" class="logo"/></a>
<div class="container">
    <div class="navbar-header">
     </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
	<div class="container">
	<div class="row">

	<div class="col-sm-6 col-md-8 col-lg-9 col-xl-10">
      <ul class="nav navbar-nav">
        <li><a href="#letrero">Conóceme</a></li>
		<li><a href="#letrero2">Servicios</a></li>
		<li><a href="#letrero3">Mis diseños</a></li>
		<li><a href="#letrero4">Contáctame</a></li>
      </ul>
    <!--</div><!-- /.navbar-collapse -->
		</div>
		</div>
		</div>
  </div><!-- /.container-fluid -->
</nav>
		
	<section class="inicio">
	<h1 class="h1" id="rotando"></h1>
		<p id="msj">Con GOD OF WEB ten la confianza de que tu sitio trascenderá en internet.</p>
<div style="text-align: center"><a href="#letrero"><input class="Q" name="boton" type="button" id="bttn" title="INTRO" value="Echa un vistazo"></a> </div>		
	</section>
	
	<section id="intro">
	<h2 id="letrero">BIENVENIDO AL OLIMPO</h2> 
<div id="intro2">GOD OF WEB, una empresa de diseño que proveerá los mejores servicios</div>
		<div class="dos">para una página web enérgica y trascendental.</div>
				<div style="text-align: center"><img src="imgs/gow_pfc.PNG" width="480" height="200" alt="" class="slogo"/></div>

	</section>
	
<section id="servicio">
		<h2 id="letrero2">Servicios</h2>
  <div class="descrip"><em>Estos son mis servicios y proyectos disponibles</em></div>
	
	<div class="lcontainer-fluid">
	 <div class="lrow">
		<div class="lcol-sm-6 lcol-md-6 lcol-lg-6 lcol-xl-6" style="border: 1px solid #000000;">
		<ul>
<div class="media1">
  <div class="media-left media-middle">
    <a href="#">
    <img src="imgs/web.PNG" width="90" height="90" alt=""/> </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Una WEB para tu NEGOCIO</h4>
	  <p class="texto">¿Vendes algún producto o servicio?. GOW te ayudará a hacer crecer tu negocio.</p>
       <a href="#letrero4"><input type="button" class="sbtn" value="me interesa"></a>
     </div>
</div> 
	</ul>
	</div>
		 
		<div class="lcol-sm-6 lcol-md-6 lcol-lg-6 lcol-xl-6" style="border: 1px solid #000000;">
		<ul>
	<div class="media2">
  <div class="media-left media-middle">
    <a href="#">
    <img src="imgs/arreglo.PNG" width="80" height="80" alt=""/> </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Mejora tu sitio WEB</h4>
	  <p class="texto">¿Quieres mejorar el aspecto de tu actual sitio web?. GOW te ofrece  diseños y animaciones.</p>
      <a href="#letrero4"><input type="button" class="sbtn2" value="me interesa"></a>     </div>
</div> 
	</ul>
	</div>
		 
		<div class="lcol-sm-6 lcol-md-6 lcol-lg-6 lcol-xl-6" style="border: 1px solid #000000;">
		<ul>
	<div class="media3">
  <div class="media-left media-middle">
    <a href="#">
    <img src="imgs/arte.PNG" width="90" height="90" alt=""/> </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Una WEB de ARTE</h4>
	  <p class="texto">¿Tienes una banda de rock?. ¿Quieres compartir tu colección de pinturas?. GOW hará un arte con tu !arte¡.</p>
        <a href="#letrero4"><input type="button" class="sbtn" value="me interesa"></a>     </div>
</div> 
	</ul>
	</div>
		 
	<div class="lcol-sm-6 lcol-md-6 lcol-lg-6 lcol-xl-6" style="border: 1px solid #000000;">
	<ul>
	<div class="media4">
  <div class="media-left media-middle">
    <a href="#">
    <img src="imgs/seo.JPG" width="90" height="90" alt=""/> </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Aplicación SEO</h4>
	  <p class="texto">Que tu sitio cuente con un gran posicionamiento y optimización en buscadores y motores de búsqueda.</p>
	  <a href="#letrero4"><input type="button" class="sbtn4" value="me interesa"></a>
     </div>
</div> 
	</ul>
	</div>
	
		<div class="lcol-sm-6 lcol-md-6 lcol-lg-6 lcol-xl-6" style="border: 1px solid #000000;">
		<ul>
	<div class="media5">
  <div class="media-left media-middle">
    <a href="#">
    <img src="imgs/cyt.PNG" width="90" height="90" alt=""/> </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Blogs de Ciencia y Tecnología</h4>
	  <p class="texto">¿Quieres compartir tus proyectos e investigaciones?. GOW te brindará un espacio dinámico de interacción y comunicación.</p>
     <a href="#letrero4"><input type="button" class="sbtn" value="me interesa"></a> </div>
</div> 
	</ul>
	</div>
	
		 <div class="lcol-sm-6 lcol-md-6 lcol-lg-6 lcol-xl-6" style="border: 1px solid #000000;">
		<ul>
	<div class="media6">
  <div class="media-left media-middle">
    <a href="#">
    <img src="imgs/dominio.PNG" width="90" height="90" alt=""/></a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Dominios</h4>
	  <p class="texto">Recibirás instrucciones y consejos sobre que dominios emplear para tu sitio y dar seguimiento.</p>
       <a href="#letrero4"><input type="button" class="sbtn6" value="me interesa"></a>     </div>
</div>
	</ul>
	</div>
		</div>
	</div>
	</section>
	
	<section id="disenios">
		<h2 id="letrero3" class="Q">¡Conoce a mis clientes!. ¡Explora mi trabajo!.</h2>
		
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li> 
  </ol>

  
  <div class="carousel-inner" role="listbox">
    <div class="item active">
		<div style="text-align: center"><img src="imgs/liras_pg.png" width="690" height="400" alt=""/></div>
      <div class="carousel-caption">
        <a href="#"><h3 style="color: #ea0928">Solo Guitarras.com</h3></a>
      </div>
    </div>
    <div class="item">
    	<div style="text-align: center"><img src="imgs/sillas_abc.jpg" width="690" height="400" alt=""/>
		</div>
      <div class="carousel-caption">
        <a href="#"><h3 style="color: #515151">Sillas ABC</h3></a>
      </div>
    </div>
	 <div class="item">
    	<div style="text-align: center"><img src="imgs/intec.png" width="690" height="400" alt=""/>
		</div>
      <div class="carousel-caption">
	    <a href="#"><h3 style="color: #FC18C9">Intesc</h3></a>
      </div>
    </div>
    ...
  </div>
</div>
	</section>
	
	<section id="contacto">
		
		<h2 id="letrero4">Contáctame</h2>
		<div id="salto">. . .</div>
		<div class="descrip"><em>Para cualquier pregunta, aclaración, servicio ó cotización. Puedes enviarme un correo.</em></div>
		<div class="descrip"><em> O bien, búscame en mis redes sociales. Será un gusto atenderte.</em></div>
		
	  <form  class="form-inline" method="post">
<div class="lcontainer">
		  <div class="lrow">
			<div class="lcol-sm-3 lcol-md-3 lcol-lg-3">
		  <ul>
			  </ul>
			  </div>
			  
		  <div class="lcol-sm-3 lcol-md-3 lcol-lg-3">
		  <ul>
  <div class="form-group">
    <label for="exampleInputName2" class="nomb">Nombre</label>
    <input type="text" required class="form-control" id="exampleInputName2" name="nom" placeholder="Tu nombre">
  		</div>
			</ul>
			  </div>
		  
		  <div class="lcol-sm-2 lcol-md-2 lcol-lg-2">
		  <ul>
  <div class="form-group mail">
    <label for="exampleInputEmail2" class="mail">Email</label>
    <input type="email" required class="form-control" id="exampleInputEmail2" name="email" placeholder="Tu correo">
  </div>
	</ul>
		</div>
		<div class="lcol-sm-3 lcol-md-3 lcol-lg-3">
		  <ul>
			  </ul>
			  </div>
			  
			  <div class="lcol-sm-3 lcol-md-3 lcol-lg-3">
		  	<ul>
			  </ul>
			  </div>
				 
		 <div class="lcol-sm-8 lcol-md-8 lcol-lg-8">
		  <ul>
		<textarea required class="form-control" rows="3" id="cuadro" name="solicitud" placeholder="Tu plegaria" style="width: 413px; height: 150px;"></textarea>
			 </ul>
			  </div>
			 
		<div class="lcol-sm-1 lcol-md-1 lcol-lg-1">
		  <ul>
			  </ul>
			  </div>
			  
			  <div class="lcol-sm-3 lcol-md-3 lcol-lg-3">
		  		<ul>
			  </ul>
			  </div>
				 
		 <div class="lcol-sm-3 lcol-md-3 lcol-lg-3">
		  <ul>
		  <button type="submit" class="btn btn-default">Enviar</button>
			</ul>
			  </div>
			  </div>
		  </div>
      </form>
	
			 <div class="izq icon-location2">Av Las Cumbres. #202. Int. 5. Aguascalientes, Ags. México.</div>
		  <div class="izq icon-mail2"> gow@outlook.com.mx</div>
		<a href="#"><div class="icon-facebook" style="margin-top: 10px; color: #184DB7"></div></a> 
	</section>
	
	<footer id="fin">
	<h3 id="letrero5" class="Mom">GOD OF WEB</h3>
		<div id="anio">© Copyright 2021.</div>
	</footer>

</body>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-latest.js"></script>

	<script type="text/javascript">
		
/*TITULOS CAMBIANTES*/
var indice = 0;

frases = new Array();
frases[0] = "¡Único en servicios Web!";
frases[1] = "Páginas Web ¡enérgicas!";
frases[2] = "Los mejores diseños";
frases[3] = "¡Excelente precio!";

indice = Math.random()*(frases.length);
indice = Math.floor(indice);
		
function rotar() {
if (indice == frases.length) {indice = 0;}
document.getElementById("rotando").innerHTML = frases[indice];
indice++;
setTimeout("rotar();",4000);
}
/*FIN DE TITULOS CAMBIANTES*/	
		
/*INTRO SCROLLIN*/	
$(document).ready(function() {
  $('a[href^="#"]').click(function() {
    var destino = $(this.hash); //this.hash lee el atributo href de este
    $('html, body').animate({ scrollTop: destino.offset().top }, 700); //Llega a su destino con el tiempo deseado
    return false;
  });
});
/*FIN DE INTRO SCROLLIN*/ 
		
/*BOTON SCRULLUP*/
$(document).ready(function(){ //cargar js hasta que todo el documento haya cargado antes
 
	$('.ir-arriba').click(function(){//hacer que el boton redirija hacia arriba
		$('body, html').animate({//afectará a todo el documento
			scrollTop: '0px' //objeto que hará volver a la parte de arriba
		}, 300);//control de velocidad 
	});
 
	$(window).scroll(function(){//al hacer scroll en la ventana activa la funcion
		if( $(this).scrollTop() > 0 ){//si el efecto del scrolling inicia...
			$('.ir-arriba').slideDown(300);//..a los 300ms aparece el boton
			$('.navbar-inverse').slideUp(300);
		} else {
			$('.ir-arriba').slideUp(300);//..o bien, desaparece
			//https://www.falconmasters.com/web-design/boton-ir-arriba-javascript/
			$('.navbar-inverse').slideDown(300);
		}
	});
}); 
		/*FIN DE BOTON SCROLLUP*/ 
		//$("p").css("background-color","red");todos los p se ven afectados como si se tratase de una clase en css.
		
</script> 
<script type="text/javascript">rotar();</script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


</html>
