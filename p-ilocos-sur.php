<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Province - Ilocos Sur</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/_header.css" rel="stylesheet" type="text/css">
    <link href="css/province.css" rel="stylesheet" type="text/css">
    <link href="css/_footer.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lobster" />    

    <style type="text/css">
      path[title="Ilocos Sur"] {
        fill: #f3901b;
        fill-opacity: 1;
        stroke: gold;
        stroke-width:1;
      }
    </style>
     
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include 'partials/_header.html' ?>

    <main class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <h1>Ilocos Sur</h1>
          <h3>Ilocos Region</h3>
          <p>Ilocos is named after i-lokong, Ilokano for "of the lowland," referring to the inhabitants of the narrow coastal plain along northwest coast of Luzon. A royal decree of February 2, 1818 separated Ilocos Norte from Ilocos Sur, the latter to include the northern part of La Unión (as far as Namacpacan, now Luna) and all of what is now the province of Abra.</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <?php include 'partials/_ph-map.html' ?>
        </div>
      </div>
    </main>

    <?php include 'partials/_footer.html' ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>