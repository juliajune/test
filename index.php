<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	  
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<div class="row">

	</div>
  <div class="row">
    <ul class="nav nav-pills">
      <li role="presentation" class="active"><a href="index.php?menu=1">Tours</a></li>
      <li role="presentation"><a href="index.php?menu=2">Feedback</a></li>
      <li role="presentation"><a href="index.php?menu=3">Register</a></li>
    </ul>

  </div>
  <div class="row">
     <?php
        if (isset ($_GET['menu'])){
              $menu=$_GET['menu'];
              if ($menu==1) include_once("pages/tours.php");
              if ($menu==2) include_once("pages/feedback.php");
              if ($menu==3) include_once("pages/register.php");

        } 


        
     ?>
  </div>
</div>
</body>
</html>