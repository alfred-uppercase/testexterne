<?php include 'header.php'; 
if(!isset($_SESSION)) { session_start();} 
?>
<div id="main-content">
    <h2>Ajouter un user</h2>
    <form class="post-form" action="saveuser.php" method="post">
    <div class="form-group">
          <label>Nom</label>
          <input type="text" name="snom" required/>
      </div>
      <div class="form-group">
          <label>Prenom</label>
          <input type="text" name="sprenom" />
      </div>
      <div class="form-group">
          <label>Email</label>
          <input type="email" name="semail"/>
      </div>
      <div class="form-group">
          <label>Password</label>
          <input type="text" name="spass"/>
      </div>
        <div class="form-group">
            <label>Role</label>
            <select name="srole" required>
                <option value="" selected disabled>Selectioner un role</option>
                <?php
                include 'conn.php';

                $sql = "SELECT * FROM roles";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['rid']; ?>"><?php echo $row['cname']; ?> </option>

              <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Role</label>
            <select name="scompanie" required>
                <option value="" selected disabled>Selectioner un companies</option>
                <?php
                include 'conn.php';

                $sql = "SELECT * FROM companies";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?> </option>

              <?php } ?>
            </select>
        </div>
        <input class="submit" type="submit" value="Ajouter"  />
    </form>
</div>
</div>
</body>
</html>
