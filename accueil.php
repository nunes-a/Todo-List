<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TODO LIST</title>
  	<!--<link rel="stylesheet" href="../styles/style.css">-->
  </head>
  <body>


    <?php if (isLoggedIn()): ?>
            <p>Salut, <?php echo $_SESSION['user_email']; ?>. <a href="index.php">Log Out</a></p>
        <?php else: ?>
            <p>Salut. <a href="form-login.php">Login</a></p>
        <?php endif; ?>
  
    <!--<input type="submit"value="Log Out">-->



  </body>
</html>
