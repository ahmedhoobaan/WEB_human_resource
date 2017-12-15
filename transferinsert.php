


<?php
include("php_actions/db_config.php");
include("transfer.php");





$EM_NAME = $_POST['Employe_name'];
$EM_Tran_date = $_POST['Transfer_date'];
$EM_tran_depart = $_POST['trans_departement'];
$EM_Tras_to = $_POST['TransferToStation'];
$EM_Dicripton = $_POST['Discription'];


$SQL_leave = "INSERT INTO employee_trans(Emp_transfer,trans_date,trans_departement,TransferToStation,trans_discription,) VALUES
('$EM_NAME','$EM_Tran_date','$EM_tran_depart','$EM_Tras_to','$EM_Dicripton')";


if(mysqli_query($CONN, $SQL_leave)){
    header("google.com");
}
?>

