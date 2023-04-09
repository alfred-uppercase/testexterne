<?php
include 'header.php';
if(!isset($_SESSION)) { session_start();} 
?>
<div id="main-content">
    <h2>Tous les users</h2>
    <div class="add"><a href="add.php">Ajouter</a></div>
    <?php
      include 'conn.php';

      $sql = "SELECT * FROM users JOIN roles WHERE users.srole = roles.rid";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Password</th>
        <th>Role</th>
        <th>Action</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['snom']; ?></td>
                <td><?php echo $row['sprenom']; ?></td>
                <td><?php echo $row['semail']; ?></td>
                <td><?php echo $row['spass']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid']; ?>'>Modifier</a>
                    <a href='delete.php?id=<?php echo $row['sid']; ?>'>Supprimer</a>
                </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <?php }else{
    echo "<h2>Vide</h2>";
  }
  mysqli_close($conn);
  ?>
</div>
</div>
</body>
</html>
