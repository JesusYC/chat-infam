		<div class="col-lg-12">
            <div class="panel panel-default" style="height:50px;">
				<span style="font-size:18px; margin-left:10px; position:relative; top:13px;"><strong>Sala de clase: <?php echo $chatrow['chat_name']; ?></strong></span>
				<div class="pull-right" style="margin-right:10px; margin-top:7px;">
					<span id="user_details" style="font-size:18px; position:relative; top:2px;"><strong>Miembros: </strong><span class="badge"><?php echo mysqli_num_rows($cmem); ?></span></span>
					<a href="#modalimage" data-toggle="modal" class="btn btn-success"><span class="glyphicon glyphicon-folder-open"></span>  Documentación</a>
					<a href="videollamada.php" class="btn btn-success"><span class="glyphicon glyphicon-facetime-video"></span> Videollamada</a>
					<a href="#add_member" data-toggle="modal" class="btn btn-primary">Añadir alumno</a>
					<a href="#delete_room" data-toggle="modal" class="btn btn-danger">Eliminar clase</a>
					<a href="index.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retroceder</a>
				</div>
				<div class="showme hidden" style="position: absolute; left:570px; top:20px;">
					<div class="well">
						<strong>Miembros:</strong>
						<div style="height: 10px;"></div>
					<?php
						$rm=mysqli_query($conn,"select * from chat_member left join `user` on user.userid=chat_member.userid where chatroomid='$id'");
						while($rmrow=mysqli_fetch_array($rm)){
							?>
							<span>
							<?php
								$creq=mysqli_query($conn,"select * from chatroom where chatroomid='$id'");
								$crerow=mysqli_fetch_array($creq);
								
								if ($crerow['userid']==$rmrow['userid']){
									?>
										<span class="glyphicon glyphicon-user"></span>
									<?php
								}
								
							?>
							<?php echo $rmrow['uname']; ?></span><br>
							<?php
						}
						
					?>
						
					</div>
				</div>
			</div>
			<div>
				<div class="panel panel-default" style="height: 400px;">
					<div style="height:10px;"></div>
					<span style="margin-left:10px;">Bienvenido a la clase</span><br>
					<span style="font-size:10px; margin-left:10px;"><i>Nota: Se recomienda mantener un lenguaje adecuado.</i></span>
					<div style="height:10px;"></div>
					<div id="chat_area" style="margin-left:10px; max-height:320px; overflow-y:scroll;">
					</div>
				</div>
				
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Escribir mensaje..." id="chat_msg">
					<span class="input-group-btn">
					<button href="#modalimage" data-toggle="modal" class="btn btn-info" type="submit" id="imagen" >
					<span class="glyphicon glyphicon-picture"></span> Subir Foto
					</button>
					&nbsp
					<button class="btn btn-success" type="submit" id="send_msg" >
					<span class="glyphicon glyphicon-comment"></span> Enviar
					</button>
					</span>
				</div>
				
			</div>			
		</div>