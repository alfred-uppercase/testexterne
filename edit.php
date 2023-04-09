<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Modification</h2>
    <?php
    include 'conn.php';

    $stu_id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE sid = {$stu_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Nom</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>"/>
          <input type="text" name="snom" value="<?php echo $row['snom']; ?>"/>
      </div>
      <div class="form-group">
          <label>Prenom</label>
          <input type="text" name="sprenom" value="<?php echo $row['sprenom']; ?>"/>
      </div>
      <div class="form-group">
          <label>Email</label>
          <input type="email" name="semail" value="<?php echo $row['semail']; ?>"/>
      </div>
      <div class="form-group">
          <label>Password</label>
          <input type="text" name="spass" value="<?php echo $row['spass']; ?>"/>
      </div>
      <div class="form-group">
          <label>Role</label>
          <?php
            $sql1 = "SELECT * FROM roles";
            $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

            if(mysqli_num_rows($result1) > 0)  {
              echo '<select name="srole">';
              while($row1 = mysqli_fetch_assoc($result1)){
                if($row['srole'] == $row1['rid']){
                  $select = "selected";
                }else{
                  $select = "";
                }
                echo  "<option {$select} value='{$row1['rid']}'>{$row1['cname']}</option>";
              }
          echo "</select>";
        }
            ?>
      </div>
      <div class="form-group">
          <label>Companies</label>
          <?php
            $sql2 = "SELECT * FROM companies";
            $result2 = mysqli_query($conn, $sql2) or die("Query Unsuccessful.");

            if(mysqli_num_rows($result2) > 0)  {
              echo '<select name="scompanie">';
              while($row1 = mysqli_fetch_assoc($result2)){
                if($row['scompanie'] == $row1['cid']){
                  $select = "selected";
                }else{
                  $select = "";
                }
                echo  "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
              }
          echo "</select>";
        }
            ?>
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
