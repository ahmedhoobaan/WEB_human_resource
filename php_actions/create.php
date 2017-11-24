<?php

include"connections.php";

?>


<?PHP

// class of insert data / inherient  the database connection ;

CLASS insertdata extends Connect
{

    public function insertemployee($table,$field){
        $sql ="";
        $sql .="insert into ".$table;
        $sql .= "(".implode(",",array_keys($field)).")values";
        $sql .= "('".implode("','",array_keys($field))."')";
        $query = Mysli_query($this->dbc,$sql);
        IF($query){
            return;
        }
    }
}
$objects = new insertdata;
if(isset($_POST["submit"])){
    $myarray = array(

        "f_name"=> $_POST["f_name"],
        "S_name"=> $_POST["S_name"],
        "Qualification"=> $_POST["Qualification"],
        "DOB"=> $_POST["DOB"],
        "CITY"=> $_POST["City"],
        "Contactno"=> $_POST["Contact"]

    );
    if($objects->insertemployee("femployee_table",$myarray)){
        header("location:index.php?msg=Record Inserted");
    }


}

?>