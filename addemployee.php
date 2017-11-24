
<?php
include "includes/header.php";
INCLUDE "php_actions/retrieve.php";
?>


<script type="text/javascript" src="assets/jquery/jquery.min.js">      </script>

<!-- bootsrap  js-->
<script  type="text/javascript" src="assets/bootsrap/js/bootstrap.min.js"> </script>

<script src="assets/jquery/jquery.tabledit.js"> </script>
<!-- datatabale js-->
<script  type="text/javascript" src="assets/datatable/dataTables.min.js"> </script>

<script type="text/javascript" src="custom/js/index.js"></script><script type="text/javascript" src="custom/js/index.js"></script>


<button class="btn btn-success pull-right" style="margin-right: 120px"  data-toggle="modal" data-target="#addMember">
    <span class="glyphicon glyphicon-plus-sign"> </span> Add Members

</button>
<br> <br>

<!-- form to add new employee and also report employee list   js-->


<div class="container">
    <div class="row">
        <div class="col-md-12">

            <center> <h1 class="page-header">Employee Management system  </h1> </center>

            <table class="table" id="managetable">
                <thead>
                <tr>

                    <th>  F_Name</th>
                    <th>  S_Name </th>
                    <th>  Date of birth </th>
                    <th>  City </th>
                    <th> Contact </th>
                    <th> Address </th>





                </tr>
                </thead>
                <?php
          // this code upload the table values
                while($row = mysqli_fetch_array($results)){

                    echo'<tr>

                   <td>'.$row["F_name"].'</td>
                   <td>'.$row["S_name"].'</td>
                    <td>'.$row["qualification"].'</td>
                    <td>'.$row["city"].'</td>
                    <td>'.$row["DOB"].'</td>

                    <td>'.$row["contact_no"].'</td>

                     </tr>
                ';
                }

                ?>

            </table>
        </div>
    </div>
</div>



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
                <form  method="post" action="insert.php" id="personainsom" id=" ">



                    <div class="form-group">



                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" id="f_name"  name="f_name" placeholder="Enter Second" required>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Second Name</label>
                        <input type="text" class="form-control" id="S_name" name="S_name"  placeholder="Enter Second" required="">
                    </div>




                    <div class="form-group">
                        <label for="Qualification">Qualification</label>
                        <select class="form-control" id="Qualification" name="Qualification" required>
                            <option>   </option>
                            <option>Secondry</option>
                            <option>Degree</option>
                            <option>Master</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="DOB">Date of birth</label>
                        <input type="date" class="form-control" id="DOB" name="DOB"  placeholder="date of birth" required>
                    </div>

                    <div class="form-group">
                        <label for="DOB">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City">
                    </div>
                    <?php

                    ?>
                    <div class="form-group">
                        <label for="contact">Contact NO </label>
                        <input type="text" class="form-control" id="Contact" name="Contact"  placeholder="date of birth" required>
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