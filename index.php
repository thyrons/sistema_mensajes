<?php include 'menu/index.php'; ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard - Sistema de Mensajes</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="dist/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="dist/css/fontdc.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="dist/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="js/datepicker/datepicker3.css" class="ace-main-stylesheet" id="main-ace-style" />

		
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="dist/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="dist/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="dist/js/ace-extra.min.js"></script>



		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="dist/js/html5shiv.min.js"></script>
		<script src="dist/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<?php menu_arriba(); ?>
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			
				<?php menu_lateral();?>
			

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Incio</li>
						</ul><!-- /.breadcrumb -->						
					</div>

					<div class="page-content">
						
						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Envío de Mensajes &amp; Correos
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">							
							<form class="form-horizontal" role="form" rol="form" action="" method="POST" id="">
								<div class="col-xs-12">								    
								    <div class="form-group has-warning col-xs-10">
								    	<label for="inputWarning" class="control-label no-padding-left">Envío preventivo a socios (sms faltando 1 día)</label>
								    </div>
				                    <div class="form-group col-xs-2">                            
				                      	<button type="button" class="btn btn-primary"  id="btn_1">
					                      <span class="glyphicon glyphicon-search"></span> Acceder
					                    </button>    
				                    </div>
								</div><!-- /.col -->
								<div class="col-xs-12">								    
								    <div class="form-group has-warning col-xs-10">
								    	<label for="inputWarning" class="control-label no-padding-left">Envío a socios en mora(sms más de 1 día)</label>
								    </div>
				                    <div class="form-group col-xs-2">                            
				                      	<button type="button" class="btn btn-primary"  id="btn_2">
					                      <span class="glyphicon glyphicon-search"></span> Acceder
					                    </button>    
				                    </div>
								</div><!-- /.col -->
								<div class="col-xs-12">								    
								    <div class="form-group has-warning col-xs-10">
								    	<label for="inputWarning" class="control-label no-padding-left">Envío preventivo a socios (email faltando 1 día)</label>
								    </div>
				                    <div class="form-group col-xs-2">                            
				                      	<button type="button" class="btn btn-primary"  id="btn_3">
					                      <span class="glyphicon glyphicon-search"></span> Acceder
					                    </button>    
				                    </div>
								</div><!-- /.col -->
								<div class="col-xs-12">								    
								    <div class="form-group has-warning col-xs-10">
								    	<label for="inputWarning" class="control-label no-padding-left">Envío a socios en mora(email más de 1 día)</label>
								    </div>
				                    <div class="form-group col-xs-2">                            
				                      	<button type="button" class="btn btn-primary"  id="btn_4">
					                      <span class="glyphicon glyphicon-search"></span> Acceder
					                    </button>    
				                    </div>
								</div><!-- /.col -->
								<div class="col-xs-12">								    
								    <div class="form-group has-warning col-xs-10">
								    	<label for="inputWarning" class="control-label no-padding-left">Envío personalizado(sms)</label>
								    </div>
				                    <div class="form-group col-xs-2">                            
				                      	<button type="button" class="btn btn-primary"  id="btn_5">
					                      <span class="glyphicon glyphicon-search"></span> Acceder
					                    </button>    
				                    </div>
								</div><!-- /.col -->
							</form>							
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<?php footer()?>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		
		<!-- <![endif]-->

		<!--[if IE]>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='dist/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='dist/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='dist/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="dist/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="dist/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="dist/js/jquery-ui.custom.min.js"></script>
		<script src="dist/js/jquery.ui.touch-punch.min.js"></script>
		<script src="dist/js/jquery.easypiechart.min.js"></script>
		<script src="dist/js/jquery.sparkline.min.js"></script>
		<script src="dist/js/flot/jquery.flot.min.js"></script>
		<script src="dist/js/flot/jquery.flot.pie.min.js"></script>
		<script src="dist/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="dist/js/ace-elements.min.js"></script>
		<script src="dist/js/ace.min.js"></script>

		
		<script src="js/datepicker/bootstrap-datepicker.js"></script>
		<script src="js/datepicker/locales/bootstrap-datepicker.es.js"></script>

		
		<!-- inline scripts related to this page -->					
	</body>
	<script type="text/javascript">
		$(document).on("ready",inicio);
		function inicio (){
			$("#btn_1").on('click',function(){
				window.location.href = "data/sms";
			})
			
		}

	</script>
</html>
