<?php
	require_once 'app/start.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>API Login Facebook PHP</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<style>
		body {
			margin: 100px auto;
			width: 400px;
			text-align: center;
		}
	</style>
</head>
<body>
	<h2>API Login Facebook PHP</h2>
        <h2>Arquitectura Desarrollo Web</h2>
           <h2>Universidad Mayor</h2>

	<?php if (!isset($_SESSION['facebook'])): ?>
		<a href="<?php echo $helper->getLoginUrl($config['scopes']); ?>" class="btn btn-primary">Iniciar sesión con Facebook!</a>
	<?php else: ?>
		<p>
			Bienvenido, <?php echo $facebook_user->getName(); ?>
		</p>
		<a href="app/logout.php" class="btn btn-danger">Cerrar sesión</a>
	<?php endif; ?>
                <p> </p>
                <p> </p>
                <p>Profesor: Carlos Fuentealba</p>
                <p>Alumno: Esteban Arias </p>    
</body>
</html>