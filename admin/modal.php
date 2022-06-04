<!-- Logout-->
    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Cerrando sesión...</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<center><strong><span style="font-size: 15px;">Nombre de usuario: <?php echo $user; ?></span></strong></center>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesión</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->

<!-- Update Photo-->
    <div class="modal fade" id="photo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Actualizando foto...</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<form method="POST" enctype="multipart/form-data" action="update_photo.php">
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Foto:</span>
						<input type="file" style="width:350px;" class="form-control" name="image">
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-upload"></span> Actualizar</button>
					</form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->

<!-- Account-->
    <div class="modal fade" id="account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Mi Cuenta</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="update_account.php">
					<div style="height: 10px;"></div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Nombre:</span>
						<input type="text" style="width:350px;" class="form-control" name="mname" value="<?php echo $srow['uname']; ?>">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Nombre de usuario:</span>
						<input type="text" style="width:350px;" class="form-control" name="musername" value="<?php echo $srow['username']; ?>">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Contraseña:</span>
						<input type="password" style="width:350px;" class="form-control" name="mpassword" value="<?php echo $srow['password']; ?>">
					</div>
					<hr>
					<span>Ingresa tu contraseña actual para guardar los cambios:</span>
					<div style="height: 10px;"></div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Contraseña:</span>
						<input type="password" style="width:350px;" class="form-control" name="cpassword">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Repetir contraseña:</span>
						<input type="password" style="width:350px;" class="form-control" name="apassword">
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Actualizar</button>
				</form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

<!-- FOTO-->
<?php 
  $query = "select * from imagenes";
  $resultado = mysqli_query($conn,$query);
?>
<div class="modal fade" id="modalimage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Subir Imagen</h4></center>
                </div>
                <div class="container">
    <div class="row">
       <div class="col-lg-4">
         <form action="subir.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label for="my-input">Seleccione una Imagen</label>
              <input id="my-input"  type="file" name="imagen">
          </div>
          <div class="form-group">
              <label for="my-input">Titulo de la Imagen</label>
              <input id="my-input" class="form-control" type="text" name="titulo">
          </div>
          <?php if(isset($_SESSION['mensaje'])){ ?>
          <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
         <strong><?php echo $_SESSION['mensaje']; ?></strong> 
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
     </button>
       </div>
          <?php session_set(); } ?>
          <input type="submit" value="Guardar" class="btn btn-primary" name="Guardar" value="<?php echo $id; ?>">
          
         </form>
       
           <hr>
           <div >
               <?php foreach($resultado as $row){ ?>
    
    
                <div class="card">
               </div>
    
      <img src="imagenes/<?php echo $row['imagen']; ?>" class="card-img-top" alt="..." width="200" height="280">
       <div class="card-body">
      <h5 class="card-title"><strong><?php echo $row['nombre']; ?></strong></h5>
    </div>
         
               
  </div>
  <?php }?>
       </div>
    </div>
  </div>                
				</form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- /.modal -->