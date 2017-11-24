

<?php

$servername="localhost";
$serveruser="root";
$dbpwd="";
$dbname="employee";

$CONN = mysqli_connect($servername, $serveruser, $dbpwd , $dbname );
IF(!$CONN)
{

    die("ERROR in connection");
}

//echo "successfully";



?>
