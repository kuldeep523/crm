<?php

// $servername = 'localhost';
// $db='u902173167_crmlanding';
// $username ='u902173167_crmlanding';
// $password = '@Crmlanding2024@@';

$servername = 'localhost';
$db='crm';
$username ='root';
$password = '';

$conn = mysqli_connect($servername, $username, $password, $db);
if(!$conn)
{
  die ("Sorry We can't Connect to Database : ". mysqli_connect_error());
}
//echo "connection was successfully connect";

?>