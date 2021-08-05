<?php
    include 'header.php';
    include 'config.php';

    // SQL QUERY
    $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";

    // RESULT
    $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0){
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddress']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td><?php echo $row['sphone']; ?></td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
            
        </tbody>
    </table>

    <?php } else { ?>
        <h3>No Record Found</h3>
    <?php } 
    
        // DONT FORGET TO CLOSE THE CONNECTION
        mysqli_close($conn);
    ?>

</div>
</div>
</body>
</html>
