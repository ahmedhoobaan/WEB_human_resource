


<button class="btn btn-success pull-right" style="margin-right: 120px"  data-toggle="modal" data-target="#addMember">
    <span class="glyphicon glyphicon-plus-sign"> </span> Add Members

</button>
<br> <br>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <center> <h1 class="page-header">Employee Management system  </h1> </center>

            <table class="table" id="managetable">
                <thead>
                <tr>
                    <th>  id</th>
                    <th>  F_Name</th>
                    <th>  S_Name </th>
                    <th>  Contact_NO </th>
                    <th>  City </th>
                    <th> Contact </th>

                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>



<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <a class="dashboard-stat bg-danger" href="manage-subjects.php">
        <?php
        $sql ="SELECT id from  tblsubjects ";
        $query = $dbh -> prepare($sql);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $totalsubjects=$query->rowCount();
        ?>
        <span class="number counter"><?php echo htmlentities($totalsubjects);?></span>
        <span class="name">Subjects Listed</span>
        <span class="bg-icon"><i class="fa fa-ticket"></i></span>
    </a>
    <!-- /.dashboard-stat -->
</div>
<!-- Module form bootsrap -->

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
                <form action ="create.php" method="post">



                    <div class="form-group">



                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" id="f_name"  name="f_name" placeholder="Enter Second">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Second Name</label>
                        <input type="text" class="form-control" id="S_name" name="S_name"  placeholder="Enter Second">
                    </div>




                    <div class="form-group">
                        <label for="Qualification">Qualification</label>
                        <select class="form-control" id="Qualification" name="Qualification">
                            <option>   </option>
                            <option>Secondry</option>
                            <option>Degree</option>
                            <option>Master</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="DOB">Date of birth</label>
                        <input type="date" class="form-control" id="DOB" name="DOB"  placeholder="date of birth">
                    </div>

                    <div class="form-group">
                        <label for="DOB">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City">
                    </div>
                    <?php

                    ?>
                    <div class="form-group">
                        <label for="contact">Contact NO </label>
                        <input type="text" class="form-control" id="Contact" name="Contact"  placeholder="date of birth">
                    </div>

            </div>

            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>