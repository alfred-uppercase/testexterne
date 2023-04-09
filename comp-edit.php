<?php include 'header.php'; 
if(!isset($_SESSION)) { session_start();} 
?>

<div id="main-content">
    <h2>Modification</h2>
    <?php
    include 'conn.php';

    $stu_id = $_GET['id'];

    $sql = "SELECT * FROM companies WHERE cid = {$stu_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatecompanies-data.php" method="post">
      <div class="form-group">
          <input type="hidden" name="cid" value="<?php echo $row['cid']; ?>"/>
      </div>
      <div class="form-group">
          <label>Nom</label>
          <input type="text" name="cname" value="<?php echo $row['cname']; ?>"/>
      </div>
      <div class="form-group">
          <label>Syren</label>
          <input type="text" name="siren" value="<?php echo $row['siren']; ?>"/>
      </div>
      <div class="form-group">
          <label>ActivityArea</label>
          <input type="text" name="activityArea" value="<?php echo $row['activityArea']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="Address" value="<?php echo $row['Address']; ?>"/>
      </div>
      <div class="form-group">
          <label>Code Postale</label>
          <input type="text" name="cp" value="<?php echo $row['cp']; ?>"/>
      </div>
      <div class="form-group">
          <label>City</label>
          <input type="text" name="city" value="<?php echo $row['city']; ?>"/>
      </div>
      <div class="form-group">
          <label>Country</label>
          <input type="text" name="country" value="<?php echo $row['country']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Mis à jour"/>
    </form>
    <?php
      }
    }
    ?>
</div>
</div>
</body>
</html>
