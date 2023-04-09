<?php
include 'header.php';
if(!isset($_SESSION)) { session_start();} 
?>
<div id="main-content">
    <h2>Tous les companies</h2>
    <div class="add"><a href="add-company.php">Ajouter</a></div>
    <?php
      include 'conn.php';
      $sql = "SELECT * FROM companies";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Nom</th>
        <th>Siren</th>
        <th>ActivityArea</th>
        <th>Address</th>
        <th>Code postale</th>
        <th>City</th>
        <th>Country</th>
        <th>Action</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['cid']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td><?php echo $row['siren']; ?></td>
                <td><?php echo $row['activityArea']; ?></td>
                <td><?php echo $row['Address']; ?></td>
                <td><?php echo $row['cp']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['country']; ?></td>
                <td>
                    <a href='comp-edit.php?id=<?php echo $row['cid']; ?>'>Modifier</a>
                    <a href='delete-companies.php?id=<?php echo $row['cid']; ?>'>Supprimer</a>
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
