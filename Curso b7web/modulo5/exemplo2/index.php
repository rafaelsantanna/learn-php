<?php
session_start();

if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
    echo "Área restrita...";
  }else {
  header("Location: login.php");
}
 ?>

 <html><body>
 <form action="login.php" method="post">
   <br>
 <input type="submit" value="Sair" />
 </form>
 </body></html>
