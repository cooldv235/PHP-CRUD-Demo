<?php 

include 'header.php';
include 'config.php';

$student['id'] = $_GET['id'];

// SQL QUERY
$sql = "SELECT * FROM student WHERE sid={$student['id']}";

// RESULT
$result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>

<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>"/>
          <input type="text" name="sname" value="<?php echo $row['sname']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>"/>
      </div>

      <?php require_once "helpers/select_class_helper.php"; // SELECT CLASS DIV ?>

      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>

    <?php
            }
        }
    ?>

</div>
</div>
</body>
</html>
