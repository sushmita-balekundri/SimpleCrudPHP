<?php include 'header.php'; ?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
      include 'config.php';

      $sql = "SELECT * FROM student";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>phone</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddress']; ?></td>
                <td>
                  <!-- </?php
                      $stu_id = $row['sclass'];
                      $sql = "SELECT * FROM studentclass WHERE cid = {$stu_id}";
                      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
                      $row1 = mysqli_fetch_assoc($result)
                  ?> -->
                  <?php echo $row['sclass']; ?>
                </td>
                <td><?php echo $row['sphone']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }