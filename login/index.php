<?php
session_start();

if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
    echo "<p>
    Área restrita...
    </p>";
  }else {
  header("Location: login.php");
}
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Login</title>
     <link rel="stylesheet" href="css/bootstrap.css" media="screen" title="no title" charset="utf-8">
   </head>
   <body>
     <div class="container" >

     <form action="login.php" method="post"> <!--O ideal é destruir a Session -->
       <br>
     <input type="submit" value="Sair" class="form-control" />
     </form>

   </div>
   </body>
 </html>
