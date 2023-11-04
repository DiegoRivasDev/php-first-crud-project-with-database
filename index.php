<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/all.min.css">
    <!-- air-datepicker -->
    <script src="js/air-datepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/air-datepicker.min.css">
    <title>Prestamo de Libros</title>
  </head>
  <body>
    <div class="parent-container">
  	<?php 
      include_once('backend/database.php');
      $db = new Database();

  		include 'views/layout/header.php'; 
  		include 'views/principal.php';
      include 'views/layout/footer.php';
  	?>
    </div>
  </body>
</html>