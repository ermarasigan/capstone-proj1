<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Province - Benguet</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/_header.css" rel="stylesheet" type="text/css">
    <link href="css/province.css" rel="stylesheet" type="text/css">
    <link href="css/_footer.css" rel="stylesheet" type="text/css">
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">        

    <style type="text/css">
      path[title="Benguet"] {
        fill: #f3901b;
        fill-opacity: 1;
        stroke: gold;
        stroke-width:1;
      }

      h1 {
        padding: 30px 0px 30px;
        font-family: "HomemadeApple";
        font-size: 2em;
      }

      h3 {
        font-family: "HomemadeApple";
        font-size: 1em
      }

      p {
        font-family: "HomemadeApple";
        font-size: 0.5em;
        padding: 20px 0;
      }

      /*bigger fonts for bigger screen*/
      @media screen and (min-width: 768px) {
        h1 {
          font-size: 4em;
        }
        h3 {
          font-size: 2em;
        }
        p {
          font-size: 1em;
        }
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
  			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
  				<h1>Mt. Pulag</h1>
  				<h3>Kabayan, Benguet 4/28/17</h3>
  				<p>Five years since I first climbed Mt. Pulag, I'm back to finish what I started. This time, I made it all the way to the summit, the highest point in Luzon. We took the Ambangeg trail, supposedly the easiest and it proved to be a walk in the park. A cold, muddy park ten kilometers long. It rained all night while we trekked. Our feet got soaked, our spirits dampened. But the next morning was nothing short of a miracle. The skies cleared at seven, blessing our weary group with light and energy. In the end, it was worth it. </p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  			</div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
  				<?php include 'partials/_ph-map.html' ?>
  			</div>
  		</div>
  	</main>

  	<?php include 'partials/_footer.html' ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>