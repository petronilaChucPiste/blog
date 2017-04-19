<!DOCTYPE html>
<html lang="es" ng-app="videoclubApp">
<head>
	<link rel="stylesheet" type="text/css" href="components/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="components/angular-bootstrap/ui-bootstrap.css">
	<title></title>
	<base href="/">
</head>
<style type="text/css">
/* Sticky footer styles
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: #f5f5f5;
}


/* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */

body > .container {
  /*padding: 60px 15px 0;*/
}
.container .text-muted {
  margin: 20px 0;
}

.footer > .container {
  padding-right: 15px;
  padding-left: 15px;
}

code {
  font-size: 80%;
}

/* ui.bootstrap fix*/
.nav, .pagination, .carousel, .panel-title a { cursor: pointer; }

</style>
<body>

<!-- ////////// -->
<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		 
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
		</button> <a class="navbar-brand" href="#">Inicio</a>
	</div>
	
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
		</ul>
	</div>
	
</nav>
<div class="container">

	<div class="row">
		<div class="col-md-12">
		
			<div class="page-header">
				<h1>
					Videos <small>Administrar</small>
				</h1>
			</div>
			<div class="row">
				<div class="col-md-3"> <!-- sidebar -->
					<!-- Menu panel-->
					<div class="panel-group" id="panel-636607">
						<uib-accordion>
						<!-- peliculas -->
					    	<uib-accordion-group heading="Peliculas" class="bg-primary">
								<a href="/movies" class="list-group-item" >Buscar</a>
								<a href="/movies/new" class="list-group-item">Nuevo</a>
							</uib-accordion-group>
						<!-- Directores -->
				    		<uib-accordion-group heading="Directores">
								<a href="/directors" class="list-group-item">Buscar</a>
								<a href="/directors/new" class="list-group-item">Nuevo</a>
							</uib-accordion-group>
						<!-- Generos -->
					    	<uib-accordion-group heading="G&eacute;neros">
								<a href="/genres" class="list-group-item">Buscar</a>
								<a href="/genres/new" class="list-group-item">Nuevo</a>
							</uib-accordion-group>
						<!-- Rentas -->
				     	<uib-accordion-group heading="Rentas">
								<a href="/rents" class="list-group-item">Buscar</a>
								<a href="/rents/new" class="list-group-item">Nuevo</a>
							</uib-accordion-group>
						 
											    		<uib-accordion-group heading="Clientes">
								<a href="/clients" class="list-group-item">Buscar</a>
								<a href="/clients/new" class="list-group-item">Nuevo</a>
							</uib-accordion-group>
 						</uib-accordion>
					</div><!-- fin menu panel -->
					
				</div> <!-- fin sidebar -->

				
				<div class="col-md-9" ng-view>
				</div>

			</div>
		</div>
	</div>
</div>
<div class="footer">
	<div class="container">
		<p>
			<small>:)</small>
		</p>
	</div>
</div>
<!-- //////////-->


<script type="text/javascript" src="components/angular/angular.js"></script>
<script type="text/javascript" src="components/angular-resource/angular-resource.js"></script>
<script type="text/javascript" src="components/angular-route/angular-route.js"></script>
<script type="text/javascript" src="components/jquery/jquery.js"></script>
<script type="text/javascript" src="components/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="components/angular-bootstrap/ui-bootstrap.js"></script>
<script type="text/javascript" src="components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
<script type="text/javascript" src="components/app/app.js"></script>
<script type="text/javascript" src="components/app/controllers/controller.js"></script>
<script type="text/javascript" src="components/app/routes/route.js"></script>
<script type="text/javascript" src="components/app/services/service.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		// Swap active status on sidebar menu
		$(".list-group-item").click(function(){
			var active = $(".list-group-item.active")[0];
			$(active).removeClass("active");
			$(this).addClass("active");
		});
	});

	function highlightSearch(){
		var list = $(".panel-open .list-group-item");
		if(list.length > 0){
			for (var i = list.length - 1; i >= 0; i--) {
				$(list[i]).removeClass("active");
			};
			$(list[0]).addClass("active");
		}
	}
</script>
</body>
</html>