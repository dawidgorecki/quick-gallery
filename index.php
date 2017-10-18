<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Quick Gallery</title>

      <!-- Normalize.css -->
      <link rel="stylesheet" href="css/normalize.css">

      <!-- Custom styles -->
      <link rel="stylesheet" href="css/styles.css">

      <!-- Gallery styles -->
      <link rel="stylesheet" href="css/gallery.css">

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Font Awesome -->
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

      <!-- Google Font -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   </head>
   <body>
      <div class="container">
         <div class="row">
            <?php include 'quick-gallery.php'; ?>
         </div>
         <footer class="row">
            <p>&copy; <?php echo date("Y"); ?> Dawid Górecki. Licensed under the MIT License.</p>
         </footer>
      </div>

      <!-- jQuery -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

      <!-- Gallery JS script -->
      <script src="js/gallery.js"></script>
   </body>
</html>