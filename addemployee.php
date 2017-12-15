
<?php
include "includes/header.php";
INCLUDE "php_actions/retrieve.php";




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
                    <th>  Date of birth </th>
                    <th>  City </th>
                    <th> Contact </th>
                    <td> Actions </td>






                </tr>
                </thead>
                <?php
          // this code upload the table values
                while($row = mysqli_fetch_array($results)) { ?>

                    <tr>


                        <td> <?php echo $row["id"] ?> </td>
                        <td> <?php echo $row["F_name"] ?> </td>

                        <td> <?php echo $row["DOB"] ?> </td>
                        <td> <?php echo $row["city"] ?> </td>
                        <td> <?php echo $row["contact_no"] ?> </td>

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
                <form  method="post" action="insert.php" id="personainsom" id=" ">



                    <div class="form-group">



                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" class="form-control" id="f_name"  name="f_name" placeholder="Enter Second" required>




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