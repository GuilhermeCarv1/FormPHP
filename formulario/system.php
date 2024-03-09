<?php
    session_start();
   // print_r($_SESSION);
    if((!isset($_SESSION['name']) == true) and (!isset($_SESSION['password']) == true ))
    {
        unset($_SESSION['name']);
        unset($_SESSION['password']);
        header('Location: login.php');
    }
    $logado = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>System</title>
    <style>
     body {
          background-color: #cccfd2; 
        } 
        h1 {
        margin: 150px;
        display: flex; 
        justify-content: center;
         }

        
    </style>

</head>
<body>
  <nav class="navbar bg-body-tertiary">
   <div class="container-fluid">
   <a class="navbar-brand">System </a>
     <div class="d-flex">
        <a href="./exit.php">
            <button class="btn btn-outline-danger me-5 " type="submit">Session Exit</button>
        </a>
     </div>
   </div>
  </nav>

  <?php
    echo "<h1>Great, Welcome <ul>$logado</ul> </h1>";
  ?>

  
</body>
</html>