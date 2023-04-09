<?php include 'header.php'; 
if(!isset($_SESSION)) { session_start();} 
?>
<div id="main-content">
    <h2>Ajouter un companie</h2>
    <form class="post-form" action="savecompany.php" method="post">
      <div class="form-group">
          <label>Nom</label>
          <input type="text" name="cname" required/>
      </div>
      <div class="form-group">
          <label>Syren</label>
          <input type="text" name="siren" required/>
      </div>
      <div class="form-group">
          <label>ActivityArea</label>
          <input type="text" name="activityArea" />
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="Address" required/>
      </div>
      <div class="form-group">
          <label>Code Postale</label>
          <input type="text" name="cp" />
      </div>
      <div class="form-group">
          <label>City</label>
          <input type="text" name="city" />
      </div>
      <div class="form-group">
          <label>Country</label>
          <input type="text" name="country" required/>
      </div>
        <input class="submit" type="submit" value="Ajouter"  />
    </form>
</div>
</div>
</body>
</html>
