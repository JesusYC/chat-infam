<nav class="navbar navbar-default">
    <div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" style="position: relative"> <img src="../logo/unknown.png" alt="logo" style="position: relative; top: -13px;   width: 2.3vw;
   height: 2.3vw"></a>
		</div>
        <div><a class="navbar-brand">INFAM Perú/Centro Patricio Peyton</a></div>
		
		<ul class="nav navbar-nav">
			<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span> <?php echo $user; ?></a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
						<li><a href="#photo" data-toggle="modal"><span class="glyphicon glyphicon-picture"></span> Actualizar foto</a></li>
						<li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesión</a></li>
                    </ul>
			</li>
		</ul> 
    </div>
</nav>