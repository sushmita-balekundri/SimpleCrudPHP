<?php include 'header.php'; include 'config.php';?>

<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" required/>
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" required/>
        </div>

        <div class="form-group">
            <label>Class</label>
            <?php
             
          $sql1 = "SELECT * FROM studentclass";
          $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

          if(mysqli_num_rows($result1) > 0)  {
            echo '<select name="sclass">';
            while($row1 = mysqli_fetch_assoc($result1)){
              if($row['sclass'] == $row1['cid']){
                $select = "selected";
              }else{
                $select = "";
              }
              echo  "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
            }
        echo "</select>";
      }
          ?>
            <!-- <input type="text" name="sclass" required/> -->
        </div>

        <div class="form-group">
            <label>phone</label>
            <input type="text" name="sphone" required/>
        </div>

        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
