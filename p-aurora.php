<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Province - Aurora</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/_header.css" rel="stylesheet" type="text/css">
    <link href="css/province.css" rel="stylesheet" type="text/css">
    <link href="css/_footer.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lobster" />    

    <style type="text/css">
      path[title="Aurora"] {
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
  				<h1>Aurora</h1>
  				<h3>Central Luzon Region</h3>
  				<p>Before 1979, Aurora was part of the province of Quezon. Aurora was, in fact, named after Aurora Aragon, the wife of Pres. Manuel L. Quezon, the president of the Philippine Commonwealth, after whom the mother province was named. The province covers a portion of the Sierra Madre mountain range. As such, the elevation is generally steep to very steep and only about 14% of the province's total area is flat.</p>
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