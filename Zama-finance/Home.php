<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <style>
    body {
      background-color: steelblue;
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<body>
  <div class="container">
  
    <div class="nav-bar">
      <?php include("_includeNavbar.php"); ?>
    </div>
	
    <div class="content">
      <div class="carousel">
	    <div class="home-carousel">
	      <div class="carousel-item"></div>
	      <div class="carousel-item"></div>
	      <div class="carousel-item"></div>
	      <div class="carousel-item"></div>
        </div>
	  
	  </div>
	  
      <div class="quick-access">
        <div class="get-loans">Get Loans</div>
        <div class="invest">Invest</div>
      </div>
	  
    </div>
  </div>
  <?php include("_includeFooter.php"); ?>
</body>
</html>
