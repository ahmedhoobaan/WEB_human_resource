<?php
include "includes/header.php";
INCLUDE "php_actions/retrieve.php";
include "php_actions/db_config.php"




?>

<?php
$id = '1';
$query = $CONN-> query("select id, F_name ,qualification, DOB,city , contact_no ");

$query = $CONN->query("select * from femployee_table where id='$id' limit 0,1");
$row = $query->fetch_assoc();
?>

<?php
 if(isset($_POST['update'])){
     $idd = $_POST['id'];
     $Fname = $_POST['f_name'];
     $quali = $_POST['Qualification'];
     $Dob = $_POST['DOB'];
     $cityd = $_POST['city'];
     $cont = $_POST['Contact'];


   $resulttt = $CONN->query("update femployee_table set F_name='$Fname',  qualification='$quali', DOB='$Dob', city='$cityd', contact_no='$cont' where id='$idd'");

     IF($resulttt){
    ?>

    <div class="alert alert-success">
        <strong>Success!</strong> Indicates a successful or positive action.
    </div>
    }

    ?>


        <?php
            }else{
             ?>
    <div class="alert alert-danger">
            <strong>Danger!</strong> Your update is not successfully updated
            </div>
      <?php
         }
     }
    ?>



<div style="padding-left:400px; padding-right:450px;" >
    <Form  method="POST"  >



        <div class="form-group">



            <label for="exampleInputEmail1">ID </label>
            <input type="text" class="form-control" id="f_name"  name="id" value="<?php echo $row['id'] ?>" required>

        </div> <div class="form-group">



            <label for="exampleInputEmail1">First Name</label>
            <input type="text" class="form-control" id="f_name"  name="f_name" value="<?php echo $row['F_name'] ?>" required>







        <div class="form-group">
            <label for="Qualification">Qualification</label>
            <select class="form-control" id="Qualification" name="Qualification"  >
                <option>   </option>
                <option>Secondry</option>
                <option>Degree</option>
                <option>Master</option>

            </select>
        </div>

        <div class="form-group">
            <label for="DOB">Date of birth</label>
            <input type="date" class="form-control" id="DOB" name="DOB"  value="<?php echo $row['DOB'] ?> required>"
        </div>

        <div class="form-group">
            <label for="DOB">City</label>
            <input type="text" class="form-control" id="city" name="city" value="<?php echo $row['city'] ?>" >
        </div>



        <div class="form-group">
            <label for="contact">Contact NO </label>
            <input type="text" class="form-control" id="Contact" name="Contact"  value="<?php echo $row['contact_no'] ?>" required>


        </div>

         <button type="submit" name="update" id="update" class="btn btn-primary">Update</button>
         <a href="http://localhost/web_hr/addemployee.php" class="btn btn-info"> Back </a>

</div>
</div>
</form>
</div>

</div>



