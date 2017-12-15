
    <?php
    include "includes/header.php";
    INCLUDE "php_actions/retrieve.php";
    include "php_actions/db_config.php";

    ?>







<button class="btn btn-success pull-right" style="margin-right: 120px"  data-toggle="modal" data-target="#addMember">
    <span class="glyphicon glyphicon-plus-sign"> </span>Achievements


</button>
<br> <br>

<!-- form to add new employee and also report employee list   js-->



<div class="container">
    <div class="row">
        <div class="col-md-12">


            <div class="container"style="padding-left: 300px;" >
                <div class="row">
                <h1 class="page-header">Achievements</h1>
            </div>
                </div>


            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="managetable">
                    <thead>
                    <tr>


                        <th>  Full Name</th>
                        <th>  Achievements Title</th>
                        <th>  Achievements Date </th>
                        <th>  Forward Application To </th>
                        <th> actions</th>







                    </tr>
                    </thead>
                    <?php
                    // this code upload the table values
                    while($row = mysqli_fetch_array($achi_results)) { ?>

                        <tr>


                            <td> <?php echo $row["Employee_name"] ?> </td>
                            <td> <?php echo $row["Achievement_Title"] ?> </td>

                            <td> <?php echo $row["Achievement_Date"] ?> </td>
                            <td> <?php echo $row["Forward_Application_To"] ?> </td>


                            <td><a href="editemployee.php"  class="btn btn-warning"> Edit </a>
                                <a href="?id=<?php echo $row['idd']?>" class="btn btn-danger"> Delete </a> </td>


                        </tr>

                    <?php }
                    ?>

                </table>
            </div>
        </div>
    </div>
    <script>

        $(document).ready(function() {

            $("#managetable").DataTable();

        });
    </script>
    <?php

    $servername="localhost";
    $serveruser="root";
    $dbpwd="";
    $dbname="employee";

    $CONN = mysqli_connect($servername, $serveruser, $dbpwd , $dbname );
    $query ="SELECT * FROM  femployee_table";
    $result1 = mysqli_query($CONN,$query);

    ?>



    <?php
    if(isset($_POST['submit'])) {
        $Employe_name1 = $_POST['Employe_name'];
        $Achievements2_title = $_POST['Achievements_title'];
        $Achievements3_date = $_POST['Achievements_date'];
        $Forward_to4 = $_POST['Forward_to'];


        $SQL = "INSERT INTO achievement(Employee_name,Achievement_Title,Achievement_Date,Forward_Application_To) VALUES
    ('$Employe_name1','$Achievements2_title','$Achievements3_date','$Forward_to4')";

        if (!mysqli_query($CONN, $SQL)) {


            heading('http://localhost/web_hr/addemployee.php');


        } else {


            mysqli_close($CONN);
        }
    }
    ?>



    <!-- Module form bootsrap  to add new employee module -->

    <div class="modal" tabindex="-1" role="dialog" id="addMember">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <center>  <h3 class="modal-title"> Add employee </h3> </center>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="post">



                        <div >
                            <label for="Achievements_title">Employee Name </label>
                            <select name="Employe_name" id="Achievements_title" class="form-control" >
                                <option>  </option>

                                <?php while($row2 = mysqli_fetch_array($result1)):?>
                                    <option> <?php echo $row2[1];?> </option>

                                <?php endwhile;?>

                            </select>
                        </div>
<br>




                        <div class="form-group">
                            <label for="Achievements_title">Achievements title</label>
                            <input type="text" class="form-control" id="Achievements_title" name="Achievements_title"  required="">
                        </div>





                        <div class="form-group">
                            <label for="Achievements_date">Achievements date</label>
                            <input type="date" class="form-control" id="Achievements_date" name="Achievements_date">
                        </div>



                        <div class="form-group">
                            <label for="Forward_to">Forward Application To:</label>
                            <select class="form-control" id="Forward_to" name="Forward_to" required>
                                <option>   </option>
                                <option>Administrator</option>


                            </select>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>


                </div>
                </form>
            </div>

        </div>
    </div>
</div>