<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Province - Tarlac</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/_header.css" rel="stylesheet" type="text/css">
    <link href="css/_ph-map-province.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lobster" />    

    <style type="text/css">
      path[title="Tarlac"] {
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
  				<h1>Tarlac</h1>
  				<h3>Central Luzon Region</h3>
  				<p>Tarlac's name is a Hispanized derivation from a talahib weed called Malatarlak. Tarlac is the most multi-cultural of the provinces in the region for having a mixture of four distinct groups, the Kapampangans, Pangasinans, Ilocanos and Tagalogs. It is also known for its fine food and vast sugar and rice plantations in Central Luzon.</p>
  			</div>
        <div class="col-sm-12 col-md-6 col-lg-6">
  				<?php include 'partials/_ph-map.html' ?>
  			</div>
  		</div>
  	</main>

  	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>