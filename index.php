<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Comunidad_Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="app_core/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="app_core/libs/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="app_core/libs/aos/css/aos.css">
    <link rel="stylesheet" href="app_core/fonts/all.css">
    <link rel="stylesheet" href="app_core/libs/bootstrap/css/bootstrap-grid.min.css">
	
	<!-- Custom Alettify -->
	<link rel="stylesheet" href="app_core/alertify/alertify.core.css" />
	<link rel="stylesheet" href="app_core/alertify/alertify.default.css" id="toggleCSS" />

    <link href="https://fonts.googleapis.com/css?family=Gudea|Rajdhani" rel="stylesheet">

	<!-- alertify core JavaScript -->
	<script src="app_core/alertify/alertify.min.js"> </script>
	
	<!-- Custom fa fa icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/> 
    
	<!-- Custom styles css-->
    <link rel="stylesheet" href="app_design/css/content.css">
    <link rel="stylesheet" href="app_design/css/footer.css">
	<link rel="stylesheet" href="app_design/css/header.css">
    
	<script src="app_core/libs/jquery/jquery.min.js"></script>
    <script src="app_core/libs/aos/js/aos.js"></script>
    <script src="app_core/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="app_core/libs/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="app_core/libs/jquery/jquery.easing.min.js"></script>
</head>

<body id="inicio" data-spy="scroll" data-target=".navbar" data-offset="300">
<header>
    <script>
        AOS.init();
    </script>
    <nav id="mainNav" class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="js-scroll-trigger" href=".">
                <img class="navbar-brand" src="app_core/images/Logo.png" alt="Comunidad Web" width="175" height="76">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <!--Las secciones estan por verse-->
                    <a id="nav_color" class="nav-item nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#inicio">Inicio</a>
                    <a id="nav_color" class="nav-item nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#nosotros">Comunidad</a>
					<a id="nav_color" class="nav-item nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#servicios">Servicios</a>
                    <a id="nav_color" class="nav-item nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#beneficios">Beneficios</a>
                    <a id="nav_color" class="nav-item nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#alianzas">Secciones</a>
                    <a id="nav_color" class="nav-item nav-link js-scroll-trigger" data-toggle="collapse" data-target=".navbar-collapse.show" href="#contactenos">Contáctenos</a>
                </div>
            </div>
        </div>
    </nav>
</header>	<!-- Slider Home -->

	<div class="carousel-full">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		   <div class="carousel-inner">
		      <div class="carousel-item active">
		         <img class="d-block " src="app_core/images/creacion.jpg" alt="Desarrollo Web">
		         <div class="carousel-caption d-md-block d-inline-block">
		            <div class="d-inline-block px-4 py-2">
		               <h2 class="px-4 py-2">Desarrollo Web</h2>
		            </div>
		            <!-- <p>...</p> -->
		         </div>
		      </div>
		      <div class="carousel-item">
		         <img class="d-block " src="app_core/images/consulta.jpg" alt="Consultoría Web">
		         <div class="carousel-caption d-md-block">
		            <div class="d-inline-block px-4 py-2">
		               <h2 class="px-4 py-2" >Consultoría Web</h2>
		            </div>
		            <!-- <p>...</p> -->
		         </div>
		      </div>
		      <div class="carousel-item">
		         <img class="d-block " src="app_core/images/analisis.jpg" alt="Analisis">
		         <div class="carousel-caption d-md-block">
		            <div class="d-inline-block px-4 py-2">
		               <h2 class="px-4 py-2">Análisis</h2>
		               
		            </div>
		            <!-- <p>...</p> -->
		         </div>
		      </div>
		   </div>
		</div>	
	</div>
	
	<!-- Queienes somos -->
	<div class="section-home  section-bg wrapper-quienes-somos">
		<div class="bg-faded"></div>
		<div id="nosotros" class="content-faded">
			<div class="container">
				<br>
				<br>
				<div class="text-center" data-aos="fade-right">
					<h2 class="title-section">¿Que es la Comunidad de Desarrollo Web UNA P.Z.?</h2>
				</div>
				<div class="row">
					<div class="col-md-6" data-aos="fade-down">
						<p>Somos una comunidad de desarrollo de aplicaciones y sitios web para el beneficio de la región, con el proposito de promover nuevos conocimientos y aprendizajes en los estudiantes de la carrera de Ingeniería en Sistemas de la Universidad Nacional y otras afines de la Sede Regional Brunca, campus Pérez Zeledón.</p>
						<p>Nuestra Visión: Ser la comunidad con mayor impacto social y tecnológico, en el área del desarrollo web de la región, mediante la creación de soluciones que cumplan con las expectativas y necesidades específicas de las empresas dentro de un marco competitivo. </p>
					</div>	
					<div class="col-md-6" data-aos="fade-down">
						<p>Fundado en el 2018, para satisfacer las necesidades basicas a nivel web de las micro y pequeñas compañias de la zona sur.</p>
					</div>	
				</div>
			</div>	
		</div>
		
	</div>

	<div id="servicios">
		<p style="visibility: hidden">cdw</p>
	</div>
	<!-- Nuestros servicios -->	
	<div class="section-home">
		<div class="container">
			<div class="text-center" data-aos="fade-left">
				<h2 class="title-section">Nuestros servicios</h2>
			</div><br><br>
			<div class="row">
				<div class="col-md-6 text-center" data-aos="fade-up-right">
					<span class="fa-stack fa-lg fa-3x">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="cdw_color fa fa-code fa-stack-1x fa-inverse"></i>
					</span>
					<h4>Desarrollo de aplicaciones Web. </h4>
				</div>
				<div class="col-md-6 text-center" data-aos="fade-up-left">
					<span class="fa-stack fa-lg fa-3x">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class=" cdw_color fa fa-cogs fa-stack-1x fa-inverse"></i>
					</span>
					<h4>Desarrollo de Sitios Web. </h4>
				</div>	
				<div class="col-md-6 text-center" data-aos="fade-up-right">
					<span class="fa-stack fa-lg fa-3x">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="cdw_color fa fa-puzzle-piece fa-stack-1x fa-inverse"></i>
					</span>
					<h4>Consultoria. </h4>
				</div>	
				<div class="col-md-6 text-center" data-aos="fade-up-left">
					<span class="fa-stack fa-lg fa-3x">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="cdw_color fa fa-dashboard fa-stack-1x fa-inverse"></i>
					</span>
					<h4>Analisis de requerimientos Web.  </h4>
				</div>	
			</div>
		</div>	
	</div>
	
	<!-- Beneficios de las empresas -->
	<div class="section-home section-bg wrapper-clientes ">
		<div class="bg-faded"></div>
		<div id="beneficios" class="content-faded">
			<div class="container">
				<br>
				<br>
				<div class="text-center" data-aos="fade-right">
					<h2 class="title-section">Beneficios</h2>
					<p>Los beneficios que brinda una herramienta web para una pequeña y mediana empresa o pyme.</p>
					<br>
					<br>
				</div>
				<div class="row text-center">
					<div class="col-md-4" data-aos="fade-down">
						<span class="fa-stack fa-lg fa-5x">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="cdw_color fa fa-line-chart fa-stack-1x fa-inverse"></i>
						</span>
						<p>Cumplimiento de Objetivos.</p>
					</div>	
					<div class="col-md-4" data-aos="fade-down">
						<span class="fa-stack fa-lg fa-5x">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="cdw_color fa fa-pie-chart fa-stack-1x fa-inverse"></i>
						</span>
						<p>Manejo adecuado de Materias Primas.</p>
					</div>	
					<div class="col-md-4" data-aos="fade-down">
						<span class="fa-stack fa-lg fa-5x">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="cdw_color fa fa-black-tie fa-stack-1x fa-inverse"></i>
						</span>
						<p>Facil Implementacion y Adaptacion.</p>
					</div>
				</div>
			</div>	
		</div>
		
	</div>

	<!-- Secciones -->
	<div id="alianzas" class="section-home ">
		<div class="container" data-aos="fade-right">
			<div class="text-center" data-aos="fade-right">
				<h2 class="title-section">Secciones</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6" data-aos="zoom-out-right">
					<div class="img-box rgba-red-light">
						<img src="">
					</div>
				</div>
			</div>
		</div>	
	</div>

	<!-- Contactenos -->
	<div id="contactenos" class="section-home wrapper-contactenos">
	
		<div class="bg-faded"></div>
		<div class="bg-contact">
			<div class="container" data-aos="fade-right">
				<div class="text-center" data-aos="fade-left">
					<h2 class="title-section">Contáctenos</h2>
					<div class="row">
						<div class="col-lg-2 col-md-12">
						</div>
						<div class="col-lg-8 col-md-12">
							<h3>Comunidad de Desarrollo Web</h3>
							<p>Amplía tu visión de tu negocio, haslo de la mejor manera.</p>	
						</div>
					</div>
					<br>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 map-container" data-aos="fade-down-right">
						<div class="form">
						<h3>Dudas o Preguntas</h3><br><br>
						  <div id="errormessage"></div>
						  <form action="" method="post" role="form" class="contactForm">
							  <div class="form-group">
								<input type="text" name="name" class="form-control" id="nameCW" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<input type="email" class="form-control" name="email" id="emailCW" placeholder="Correo elecronico" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								  <textarea class="form-control" name="message" rows="5" id="messageCW" data-rule="required" data-msg="Porfavor escribe algo para nosotros" placeholder="Mensaje"></textarea>
								<div class="validation"></div>
							  </div>
							  <div>
								<a href="#" onclick="" class="button6">Enviar Mensaje</a>
							  </div>
						  </form>
						</div>
					</div>	
					<div class="col-lg-6 col-md-12  map-container" data-aos="fade-down-left">
						<h3>Comunidad Web</h3>
						<p>Email: <a href="mailto:comunidadwebuna@gmail.com">comunidadwebuna@gmail.com</a>
						<p>Tel: <a href="tel:+83278518">(506) 83278518</a></p>
					</div>	
						
				</div>
			</div>	
		</div>
		
	</div>
	

<footer id="page-footer">
    <div class="container">
        <div data-aos="fade-up">
        </div>

    </div>
    <div class="footer-copyright">
        <p>© 2018 | Comunidad Desarrollo Web</p>
    </div>

</footer>
<script src="app_design/js/scrolling-nav.js"></script>

</body>

</html>
<script type="text/javascript">
	(function (d, w) {
		var x = d.getElementsByTagName('SCRIPT')[0];var f = function () {var s = d.createElement('SCRIPT');
		s.type = 'text/javascript';
		s.async = true;
		s.src = "//np.lexity.com/embed/YW/17772d1ef34b60dece458e3bbcdcb8c6?id=ee3d1e186d3e";
		x.parentNode.insertBefore(s, x);};
		w.attachEvent ? w.attachEvent('onload',f) :w.addEventListener('load',f,false);
	}
	(document, window));
</script>