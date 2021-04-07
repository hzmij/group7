<?php


	$seatnum = -1;
	if (isset($_POST['bookwindow'])){
		$bookwindowvalue = $_POST['bookwindow'];
		$seatnum = (int) filter_var($bookwindowvalue, FILTER_SANITIZE_NUMBER_INT);
		$seattype = "window";
	}

	if (isset($_POST['bookaisle'])){
		$bookaislevalue = $_POST['bookaisle'];
		$seatnum = (int) filter_var($bookaislevalue, FILTER_SANITIZE_NUMBER_INT);
		$seattype = "aisle";
	}

	if (isset($_POST['booksingle']))
	{
		$booksinglevalue = $_POST['booksingle'];
		$seatnum = (int) filter_var($booksinglevalue, FILTER_SANITIZE_NUMBER_INT);
		$seattype = "sinlge";
	}

	if (!empty($_POST) && $seatnum == -1)
		echo "error in the system";
	//TO DO other staff like reservation print list	and allocating reserved seats in a multidimensional array
    else if (!empty($_POST))
	    echo "You have chosen seat No. ". ($seatnum+1) . " and your seat type is: ". $seattype. ".";
?>

<form name="seatsystem" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
<table border=1>
<?php
  for($i=0; $i < 30; $i++) {
  //TO DO other staff like reservation print list some iffs are required to determine which seats are reserved and you can use php session to save page state
     echo "<tr><td>Seat No.".($i+1)."</td><td><button name='bookwindow' value='".$i."bw' type='submit'>Book Window</button></td><td><button name='bookaisle' value='".$i."ba' type='submit'>Book Aisle</button></td><td><button name='booksingle' value='".$i."bs' type='submit'>Book Single</button></td></tr>";
  }
?>
</table>
</form>
  </body>
</html>
