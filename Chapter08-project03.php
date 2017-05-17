<!DOCTYPE html>
<html lang="en">
  <head>
     <!-- Google fonts used in this theme  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,800,600,700,300' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">
    <title>Travel Template</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap3_travelTheme/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="bootstrap3_travelTheme/theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="bootstrap3_travelTheme/assets/js/html5shiv.js"></script>
      <script src="bootstrap3_travelTheme/assets/js/respond.min.js"></script>
    <![endif]-->
    <?php include('travel-data.php') ?>
  </head>

  <body>
    <?php include('header.php') ?>

<div class="container">  <!-- start main content container -->
   <div class="row">  <!-- start main content row -->
      <?php include('left-navigation-boxes.php') ?>
      <div class="col-md-9">  <!-- start main content column -->
         <ol class="breadcrumb">
           <li><a href="#">Home</a></li>
           <li><a href="#">Browse</a></li>
           <li class="active">Posts</li>
         </ol>

         <div class="jumbotron" id="postJumbo">
           <h1>Posts</h1>
           <p>Read other travellers' posts ... or create your own.</p>
           <p><a class="btn btn-warning btn-lg">Learn more &raquo;</a></p>
         </div>
      <!-- start post summaries -->
    <div class="postlist">
      <?php include('outputPostRow.php') ?>
      <?php outputPostRow(1) ?>

    </div>
    <?php include('outputPagination.php') ?>
    <?php outputPagination(4,2) ?>

      </div>  <!-- end main content column -->
   </div>  <!-- end main content row -->
</div>   <!-- end main content container -->
<?php include('footer.php') ?>

 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_travelTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_travelTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_travelTheme/assets/js/holder.js"></script>
</body>
</html>
