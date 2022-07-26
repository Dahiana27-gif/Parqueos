<?php include "./logica/conexion.php"

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>'
    
  
  <?php if($_POST){
		
		$usuario = $_POST['nombre'];
		$password = $_POST['password'];
		
		$sql = "SELECT id, password, nombre, tipo FROM usuario WHERE nombre='$usuario'";
	//echo $sql;
		$resultado = $mysqli->query($sql);
		$num = $resultado->num_rows;
		
		if($num>0){
			$row = $resultado->fetch_assoc();
			$password_bd = $row['password'];
			
			$pass_c = sha1($password);
			
			if($password_bd == $pass_c){
				session_start();
				$_SESSION['id'] = $row['id'];
				$_SESSION['nombre'] = $row['nombre'];
				$_SESSION['tipo'] = $row['tipo'];
				
        if($_SESSION['tipo'] == 0){
				header("Location: principaluser.php");
      }else{
        header("Location: parqueosadm.php");
    }} else {
			
        header("Location: login.php?s=errorpassword");
			
			}
			
			
			} else {
        header("Location: login.php?s=erroruser");
		
		
      }};?>

    <div class="login-box">
      <img src="img/perfil1.png" class="avatar" alt="Avatar Image">
      <h1>Ingresa aqui</h1> 
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <!-- USERNAME INPUT -->
        <label for="username">Nombre de usuario</label>
        <input type="text" placeholder="usuario" name="nombre">
        <!-- PASSWORD INPUT -->
        <label for="password">contrasena</label>
        <input type="password" placeholder="contrasena" name="password">

        <input type="submit" >

        <a href="#">Olvidaste tu contrasena?</a><br>
        <a href="./registro.php"> No tienes una cuenta aun?</a>



        
      </form>
    </div>
  </body>
</html>