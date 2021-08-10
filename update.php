<?php 

include 'header.php'; 
include 'config.php';

if($_POST['showbtn']){

    $stu_id = $_POST['sid'];

    // INSERT RECORD IN DATABASE
    $sql = "SELECT * FROM student student WHERE sid = {$stu_id}";
    
    $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
}
?>

<div id="main-content">
    <h2>Edit Record</h2>
    <!-- FETCH STUDENT RECORD FROM ID FORM -->
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <!-- UPDATE STUDENT RECORD FORM --> 
    <?php 
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['sid']; ?>" />
            <input type="text" name="sname" value="<?php echo $row['sname']; ?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>" />
        </div>

        <?php require_once "helpers/select_class_helper.php"; // SELECT CLASS DIV ?>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>

<?php
            }
        }
?>
</div>
</div>
</body>
</html>
