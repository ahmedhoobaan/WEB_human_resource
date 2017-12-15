


<?php
include("php_actions/db_config.php");
include("leaves.php");




$EM_NAME = $_POST['Employe_name'];
$EM_leave = $_POST['Leave_Type'];
$EM_Start_date = $_POST['Start_date'];
$EM_End_date = $_POST['Start_date'];


$SQL_leave = "INSERT INTO employee_leave(Employee_name,leave_type,start_date,End_date) VALUES
('$EM_NAME','$EM_leave','$EM_Start_date','$EM_End_date')";


 if(mysqli_query($CONN, $SQL_leave)){
     header("google.com");
 }
?>



