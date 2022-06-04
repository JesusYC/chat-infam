<?php
	include('session.php');
	
	$fileInfo = PATHINFO($_FILES["image"]["name"]);
	
	if (empty($_FILES["image"]["name"])){
		$location=$srow['photo'];
		?>
			<script>
				window.alert('¡No se ha subido una foto!');
				window.history.back();
			</script>
		<?php
	}
	else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png") {
			$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFilename);
			$location = "upload/" . $newFilename;
			
			mysqli_query($conn,"update `user` set photo='$location' where userid='".$_SESSION['id']."'");
	
			?>
				<script>
					window.alert('¡Foto actualizada!');
					window.history.back();
				</script>
			<?php
		}
		else{
			?>
				<script>
					window.alert('¡Foto no actualizada. Usar formatos png o jpg!');
					window.history.back();
				</script>
			<?php
		}
	}
	
	

?>