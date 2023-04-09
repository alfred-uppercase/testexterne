<?php
include 'header.php';
?>
<div id="main-content">
    <h2>Se connecter</h2>
    <form class="post-form" action="try-to-log.php" method="post">
      <div class="form-group">
        <label>Email</label>
          <input type="email" name="semail"/>
      </div>
      <div class="form-group">
          <label>Mot de passe</label>
          <input type="text" name="spass"/>
      </div>
      <?php if(!empty($_SESSION['message'])): ?>
                <div class="alert alert-danger alert-container" id="alert">
                    <strong><center><?php echo htmlentities($_SESSION['message']) ?></center></strong>
                    <?php unset($_SESSION['message']); ?>
                </div>
            <?php endif; ?>
      <input class="submit" name="login" type="submit" value="Connexion"/>
    </form>
</div>
</body>
</html>
