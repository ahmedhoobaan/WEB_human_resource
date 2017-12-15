<?php

include("php_actions/db_config.php");
include("addemployee.php");


$f_name= $_POST['f_name'];
$QualificationA= $_POST['Qualification'];
$DOBA = $_POST['DOB'];
$cityA = $_POST['city'];
$ContactA  =$_POST['city'];


$SQL = "INSERT INTO femployee_table(F_name,qualification,DOB,city,contact_no) VALUES
('$f_name','$QualificationA','$DOBA','$cityA','$ContactA')";

if(mysqli_query($CONN, $SQL)){
    echo "<script type='text/javascript'>window.top.location='http://localhost/web_hr/addemployee.php';</script>"; exit;
}








?>


