<?php
//error_reporting(0);
	
//Menu banner arriba usuario perfil dependientes del nivel de usuario
function menu_arriba(){	
	print'<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check("navbar" , "fixed")}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<i class="fa fa-leaf"></i>
						<small>
							';print 'ACCION IMBABURAPAK'; print'
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="ice/dist/avatars/user.jpg" alt="" />
								<span class="user-info">
									<small>Bienvenido,</small>
									Willi
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Configuración
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Perfil
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="../salir/">
										<i class="ace-icon fa fa-power-off"></i>
										Salir
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
	</div>'
	;
}
//Menu Latera perfil aplicacion
function menu_lateral(){	
	error_reporting(0);
	$url = $_SERVER['PHP_SELF'];
	$acus = parse_url($url, PHP_URL_PATH);
	$acus = split ('/', $acus);
	
	print'<div id="sidebar" class="sidebar responsive">
		<script type="text/javascript">
			try{ace.settings.check("sidebar" , "fixed")}catch(e){}
		</script>
		<div class="sidebar-shortcuts" id="sidebar-shortcuts">
			<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
				<button class="btn btn-success">
					<i class="ace-icon fa fa-signal"></i>
				</button>

				<button class="btn btn-info">
					<i class="ace-icon fa fa-pencil"></i>
				</button>

				<button class="btn btn-warning">
					<i class="ace-icon fa fa-users"></i>
				</button>

				<button class="btn btn-danger">
					<i class="ace-icon fa fa-cogs"></i>
				</button>
			</div>

			<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
				<span class="btn btn-success"></span>

				<span class="btn btn-info"></span>

				<span class="btn btn-warning"></span>

				<span class="btn btn-danger"></span>
			</div>
		</div>
		<ul class="nav nav-list">';
			print '<li class="active">
				<a href="../../">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Inicio </span>
				</a>
				<b class="arrow"></b>
			</li>';			
		print '</ul><!-- /.nav-list -->
		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>
		<script type="text/javascript">
			try{ace.settings.check("sidebar" , "collapsed")}catch(e){}
		</script>
	</div>';
}
//pie de Pagina Footer proceso desarrolladores empresa y datos adicionales de la misma
function footer(){
	print'<div class="footer">
		<div class="footer-inner">
			<div class="footer-content">
				<span class="bigger-120">
				<span class="blue bolder">ACCION IMBABURAPAK</span>
					Envio de Mensajería &copy; 2016-2017
				</span>
				&nbsp; &nbsp;
				<span class="action-buttons">
				<a href="#">
					<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
				</a>
				<a href="#">
					<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
				</a>
				<a href="#">
					<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
				</a>
				</span>
			</div>
		</div>
	</div>';
} 
?>