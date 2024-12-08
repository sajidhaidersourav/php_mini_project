<?php

  $number3 = null;
  if(isset($_POST['submit'])){

    $number1 = $_POST ['frist_number'];
    $number2 = $_POST ['second_number'];
    $number3 = $number1 + $number2;

  }else{
    $number1 = null;
    $number2 = null;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- fevicon -->
  <link rel="shortcut icon" href="img/logo_icon_sourav.png" type="image/x-icon">
  <!-- link css  -->
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/media.css">
  <title>php mini project</title>
</head>
<body>
  
  <div class="container">
    
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

      <label for="frist_number" class="form-label mt-5"><b>1st Number</b></label>
      <input type="text" class="form-control frist_number" id="frist_number" name="frist_number" placeholder="Enter Your Frist Number" required>

      <label for="second_number" class="form-label mt-3"><b>2nd Number</b></label>
      <input type="text" class="form-control second_number" id="second_number" name="second_number" placeholder="Enter Your Second Number" required>

      <button type="submit" class="mt-3 btn btn-info submit" id="submit" name="submit"><b>SUBMIT</b></button>

    </form>

    <div class="box mt-3">
      <?php
      
        echo "<h2>"."$number1"." "."+"." "."$number2"." "."="." "."$number3"."</h2>";
      
      ?>
    </div>

  </div>

  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>