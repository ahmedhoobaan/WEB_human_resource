<?php

include("php_actions/db_config.php");
include("index.php");


$f_name= $_POST['f_name'];

$S_nameA = $_POST['S_name'];
$QualificationA= $_POST['Qualification'];
$DOBA = $_POST['DOB'];
$cityA = $_POST['city'];
$ContactA  =$_POST['city'];


 $SQL = "INSERT INTO femployee_table(F_name,S_name,qualification,DOB,city,contact_no) VALUES
('$f_name','$S_nameA','$QualificationA','$DOBA','$cityA','$ContactA')";

if (mysqli_query($CONN, $SQL))
{


   header("location:http://localhost/web_hr/addemployee.php");



    # code..
}

else
{

    echo "Error in query";
}
mysqli_close($CONN);

?>


?>