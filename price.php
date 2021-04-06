
<?php
  //set variables to empty values
  $priceSingle = $A = "";
  $quantity1 = "";

  $priceDouble = $B = "";
  $quantity1 = "";

$total = $C = "";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="price.css">
  </head>
  <body>
    <h3>CALCULATE THE PRICE FOR RESERVATION </h3>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
       <!--using super global variable $_SERVER-->
       <!--$_SERVER["PHP_SELF"] returns the filename of the currently executing script.
       (sends form data to itself, rather than to a separate script file-->

       <input type="text" id="quantity1"
      name = "quantity1"
      placeholder="Enter your quantity for single seats"
      value="<?php echo $priceSingle;?>"
      >

       <br><br>

       <input type="text" id="quantity2"
      name = "quantity2"
      placeholder="Enter your quantity for double seats"
      value="<?php echo $priceDouble;?>"
      >

 <br><br>

      <button type="submit" name="button">Submit</button>
      <button type="clear" name="button">Clear</button>
    </form>

    <div>
    <?php


      $priceSingle=filter_input (INPUT_POST,' priceSingle ') ; //using super-global variable $_POST
      $quantity1 = filter_input(INPUT_POST,'quantity1');

     $priceDouble= filter_input(INPUT_POST,' priceDouble '); //using super-global variable $_POST
     $quantity2 = filter_input (INPUT_POST,'quantity2');

     $total= filter_input(INPUT_POST,' total');

      $A= (int)$quantity1*50;
      echo "<br>";
      echo "The Price for Single Seat RM". round($A,2);
      echo "<br>";

    $B= (int)$quantity2*40;
      echo "<br>";
      echo "The Price for Double Seat RM". round($B,2);
      echo "<br>";

 $C= $A + $B ;
 echo "<br>";
 echo "<br>";
 echo "The Total is : RM" . ($C);


      ?>
    </div>
  </body>
</html>
