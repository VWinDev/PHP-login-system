<?php define('__CONFIG__', true);?>
<?php require_once "inc/config.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css" />

	<title>Php Login System Practice</title>
	<!--  -->

</head>

<body>
	<div class="uk-section uk-container">
   <?php echo "Hello World!!!"?>
   <?php echo date('Y M d'); ?>
   <p><a href="login.php">Login</a> <a href="register.php">Register</a></p>
    </div>
<?php require_once "inc/footer.php"?>
</body>

</html>