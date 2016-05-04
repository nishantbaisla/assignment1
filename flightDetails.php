<?php

REQUIRE_ONCE('databaseconnect.php');

if( !isset($_POST['trip']) || empty($_POST['trip']) || isset($_POST['trip']['routeId']) || empty($_POST['trip']['routeId'])) {
   //Throw error message
}

/*echo '<pre>';
var_dump($_POST);
die();
*/
$routeId = $_POST['trip']['routeId'];
$flightPrice = $_POST['trip'][$routeId]['flightPrice'];
$flightCityFrom = $_POST['trip'][$routeId]['cityFrom'];
$flightCityTo = $_POST['trip'][$routeId]['cityTo'];

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
                            <table align="center">
                              <tr><th colspan="2">Flight Details</th></tr>
                              <tr>
                                <td>Route Number</td>
                                <td><?php echo $routeId ?></td>
                              </tr>
                              <tr>
                                <td>From</td>
                                <td><?php echo $flightCityFrom ?></td>
                              </tr>
                              <tr>
                                <td>To</td>
                                <td><?php echo $flightCityTo ?></td>
                              </tr>
                               <tr>
                                <td>Price</td>
                                <td>$ <?php echo $flightPrice ?></td>
                              </tr>
                            </table>
                            <table align="center">
                            <tr>
                                    <th>Seat No.</th>
                                    <th>Name</th>

                                    <th>Child</th>
                                    <th>Wheelchair</th>
                                    <th>Special Diet</th>
                                    <th>Select</th>
                                  </tr>
                                  <tr>
                                  <td>1</td>
                                  <td><input type="text"></input></td>

                                    <td><input type="checkbox" name="Child"></td>
                                    <td><input type="checkbox" name="Wheelchair"></td>
                                    <td><input type="checkbox" name="Special Diet"></td>
                                    <td><input type="checkbox" name="Select"></td>
                                  </tr>
                                  <tr>
                                  <td>2</td>
                                  <td><input type="text"></input></td>

                                    <td><input type="checkbox" name="Child"></td>
                                    <td><input type="checkbox" name="Wheelchair"></td>
                                    <td><input type="checkbox" name="Special Diet"></td>
                                    <td><input type="checkbox" name="Select"></td>
                                  </tr>
                                  <tr>
                                  <td>3</td>
                                  <td><input type="text"></input></td>

                                    <td><input type="checkbox" name="Child"></td>
                                    <td><input type="checkbox" name="Wheelchair"></td>
                                    <td><input type="checkbox" name="Special Diet"></td>
                                    <td><input type="checkbox" name="Select"></td>
                                  </tr>
                                   <tr>
                                   <td>4</td>
                                   <td><input type="text"></input></td>

                                    <td><input type="checkbox" name="Child"></td>
                                    <td><input type="checkbox" name="Wheelchair"></td>
                                    <td><input type="checkbox" name="Special Diet"></td>
                                    <td><input type="checkbox" name="Select"></td>
                                  </tr>
                                   <tr>
                                   <td>5</td>
                                   <td><input type="text"></input></td>

                                    <td><input type="checkbox" name="Child"></td>
                                    <td><input type="checkbox" name="Wheelchair"></td>
                                    <td><input type="checkbox" name="Special Diet"></td>
                                    <td><input type="checkbox" name="Select"></td>
                                  </tr>
                                        <tr><th colspan="6"><button onclick="loadyourbookingsPage()">ADD TO BOOKINGS</button></th></tr>




                            </table>



                </div>

                <div id="footer">
                 UNIVERSITY OF TECHNOLOGY SYDNEY
                </div>
</body>
</html>
