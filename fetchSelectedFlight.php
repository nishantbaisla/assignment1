
<?php
REQUIRE_ONCE('databaseconnect.php');


$from  = $_POST['from_city'];
$to   = $_POST['to_city'];

/*echo '<pre>';
var_dump($_POST);
die();*/

if (!empty($from) && !empty($to)){
	$query_string = "select * from flights where from_city = '$from' and to_city = '$to'";
} elseif (!empty($from)) {
	$query_string = "select * from flights where from_city = '$from'";
} else {
	$query_string = "select * from flights where to_city = '$to'";
}

$result = mysqli_query($conn, $query_string);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width">
    <title>On-line Travel Agency</title>
		<link rel="stylesheet" href="./style/style.css">
	  <script src="./scripts/script.js"></script>
</head>


<body>

<div id="header">
<button class="button" onclick="loadHomePage()">HOME</button>

<button class="button" onclick="loadyourbookingsPage()">YOUR BOOKINGS</button>

<button class="button" onclick="loadSearchPage()">SEARCH FLIGHTS</button>
</div>


<div id="section">

<form method="POST" action="flightDetails.php">
<h1 align="center">Select Flight</h1>

    <?php
    $i = 1;
        $num_rows = mysqli_num_rows($result);

        if ($num_rows > 0 ) : ?>
            <table align='center'>
        <?php
            while ( $row = mysqli_fetch_assoc($result) ) : ?>
              <tr>
                       <td>
                        <?php echo $i; ?>
                       </td>
                       <td>
                        <?php echo $row['from_city']; ?>
                       </td>
                       <td>
                        <?php echo $row['to_city']; ?>
                       </td>

                 <td>
                      <input  type='radio' value="<?php echo $row['route_no']; ?>" name="trip[routeId]">
                      <input type="hidden" value="<?php echo $row['from_city']; ?>" name="trip[<?php echo $row['route_no'] ?>][cityFrom]">
                      <input type="hidden" value="<?php echo $row['to_city']; ?>" name="trip[<?php echo $row['route_no'] ?>][cityTo]">
                      <input type="hidden" value="<?php echo $row['price'] ?>" name="trip[<?php echo $row['route_no'] ?>][flightPrice]">
                 </td>
                </tr>
                <?php $i++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        <tr><td colspan="4" ><input type='submit' align="right" value='Make Booking for Selected Flight'></td></tr>
</table>
</form>
</div>

<div id="footer">
 UNIVERSITY OF TECHNOLOGY SYDNEY
</div>
</body>
</html>
