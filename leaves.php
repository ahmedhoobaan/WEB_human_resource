
<?php
include "includes/header.php";
INCLUDE "php_actions/retrieve.php";
include "php_actions/db_config.php";




?>





<button class="btn btn-success pull-right" style="margin-right: 170px"  data-toggle="modal" data-target="#addMember">
    <span class="glyphicon glyphicon-plus-sign"> </span> Add Members

</button>
<br> <br>

<!-- form to add new employee and also report employee list   js-->


<div class="container">
    <div class="row">
        <div class="col-md-12">


            <div style="padding-left: 300px;" >
                <h1 class="page-header">Employee Management system  </h1>
            </div>

            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="managetable">
                    <thead>
                    <tr>

                        <th>  ID</th>
                        <th>  Full Name</th>
                        <th>  leave Type </th>
                        <th>  Start Date </th>
                        <th> End Date </th>
                        <td> Actions </td>






                    </tr>
                    </thead>
                    <?php
                    // this code upload the table values
                    while($row = mysqli_fetch_array($Employee_leave)) { ?>

                        <tr>


                            <td> <?php echo $row["emp_leave_id"] ?> </td>
                            <td> <?php echo $row["Employee_name"] ?> </td>

                            <td> <?php echo $row["leave_type"] ?> </td>
                            <td> <?php echo $row["start_date"] ?> </td>
                            <td> <?php echo $row["End_date"] ?> </td>

                            <td><a href="editemployee.php"  class="btn btn-warning"> Edit </a>
                                <a href="?id=<?php echo $row['idd']?>" class="btn btn-danger"> Delete </a></td>


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
                    <form  method="POST" action="insertleaves.php">




                        <div >
                            <label for="Employe_name">Employee Name </label>
                            <select name="Employe_name" id="Employe_name" class="form-control" >
                                <option>  </option>

                                <?php while($row2 = mysqli_fetch_array($result1)):?>
                                    <option> <?php echo $row2[1];?> </option>

                                <?php endwhile;?>

                            </select>
                        </div>



                            <div class="form-group">
                                <label for="DOB">Leave Type</label>
                                <select class="form-control" id="Leave_Type" name="Leave_Type" required>
                                    <option>   </option>
                                    <option> study leave</option>
                                    <option> sick leave</option>
                                    <option> Tourism</option>
                                </select>
                            </div>


                        <div class="form-group">
                            <label for="Start_date">Start_date</label>
                            <input type="date" class="form-control" id="Start_date" name="Start_date"  required="">
                        </div>


                        <div class="form-group">
                            <label for="Achievements_title">End_date</label>
                            <input type="date" class="form-control" id="End_date" name="End_date"  required="">
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