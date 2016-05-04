<?php
REQUIRE_ONCE('databaseconnect.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width">
	<title>Search flights</title>
	<link rel="stylesheet" href="./style/style.css">
  <script src="./scripts/script.js"></script>
</head>


<body>
<div id="header">
<button class="button" onclick="loadHomePage()">HOME</button>
<button class="button" onclick="loadyourbookingsPage()">YOUR BOOKINGS</button>
<button class="button" onclick="loadSearchPage()">SEARCH FLIGHTS</button>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="section">


<form action="fetchSelectedFlight.php" method="POST">
	  FROM: <select name="from_city">
                    <option value="">--- Select ---)))))</option>
                    <?php
						$query1 = "select DISTINCT from_city from flights";
						$fromCity = mysqli_query($conn, $query1);

						if (mysqli_num_rows($fromCity) > 0) {
						    // output data of each row
						    while($row = mysqli_fetch_assoc($fromCity)) {
								?><option value="<?php echo $row["from_city"];?>"><?php echo $row["from_city"];?></option>
						    <?php
						    }
						}


					?>
                </select>
                TO: <select name="to_city">
                    <option value="">--- Select ---</option>
                    <?php
						$query2 = "select DISTINCT to_city from flights";
						$toCity = mysqli_query($conn, $query2);

						if (mysqli_num_rows($toCity) > 0) {
						    // output data of each row
						    while($row = mysqli_fetch_assoc($toCity)) {
						        ?><option value="<?php echo $row["to_city"];?>"><?php echo $row["to_city"];?></option>
						    <?php
						    }
						}


					?>
                </select>
  <input type="submit" value="SUBMIT">
  </form>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


</div>

<div id="footer">UNIVERSITY OF TECHNOLOGY SYDNEY</div>

</body>
</html>
