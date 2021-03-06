
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
                        <th>  Transfer Date </th>
                        <th>  Transfer Department</th>
                        <th> Transfer to station</th>
                        <th> Transfer Discription</th>
                        <td> Actions </td>






                    </tr>
                    </thead>
                    <?php
                    // this code upload the table values
                    while($row = mysqli_fetch_array($Emp_tr2)) { ?>

                        <tr>


                            <td> <?php echo $row["Emp_id"] ?> </td>
                            <td> <?php echo $row["Emp_transfer"] ?> </td>

                            <td> <?php echo $row["trans_date"] ?> </td>
                            <td> <?php echo $row["trans_departement"] ?> </td>
                            <td> <?php echo $row["TransferToStation"] ?> </td>
                            <td> <?php echo $row["trans_discription"] ?> </td>

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

                                <?php while($row2 = mysqli_fetch_array($Emp_tr)):?>
                                    <option> <?php echo $row2[1];?> </option>

                                <?php endwhile;?>

                            </select>
                        </div>



                        <div class="form-group">
                            <label for="Start_date">Transfer_date</label>
                            <input type="date" class="form-control" id="Transfer_date" name="Transfer_date"  required="">
                        </div>



                        <div class="form-group">
                            <label for="DOB">trans_departement</label>
                            <select class="form-control" id="trans_departement" name="trans_departement" required>
                                <option>   </option>
                                <option> Administrator</option>
                                <option> Head</option>
                            </select>
                        </div>




                        <div class="form-group">
                            <label for="Achievements_title">TransferToStation</label>
                            <input type="text" class="form-control" id="TransferToStation" name="TransferToStation"  required="">
                        </div>

                        <div class="form-group">
                            <label for="Achievements_title">Transfer Discription</label>
                            <input type="text" class="form-control" id="trans_discription" name="trans_discription"  required="">
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