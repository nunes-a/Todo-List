<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TODO LIST</title>
  	<!--<link rel="stylesheet" href="../styles/style.css">-->
  </head>
  <body>


    <?php 
    session_start();
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
            echo "Salut,".$_SESSION['us'];

    }
    else
    {
      echo "vous devez vous connecter";
    }

    ?>

    <!--<a href="index.php">Log Out</a></p>
        <?php// else: ?>
            <p>Salut. <a href="form-login.php">Login</a></p>
        <?php //endif; ?>
  
    <input type="submit"value="Log Out">-->



  </body>
</html>
