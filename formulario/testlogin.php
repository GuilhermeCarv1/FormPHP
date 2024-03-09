<?php
    session_start();

  //    print_r($_REQUEST);

  if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['password']))
 {
        include_once('config.php');
        $name = $_POST['name'];
        $password = $_POST['password'];

       // print_r('Email: ' . $email);
       // print_r('<br>');
       // print_r('Password: ' . $password);

       $sql = "SELECT *  FROM usuarios WHERE name = '$name' and '$password'";
       $result = $conexao->query($sql);

      // print_r($sql);
     //  print_r($result);

     if(mysqli_num_rows($result) < 1)
     {
        unset($_SESSION['name']);
        unset($_SESSION['password']);
        header('Location: login.php');
     }
     else
     {
        $_SESSION['name'] = $name;
        $_SESSION['password'] = $password;
        header('Location: system.php');
    }


 }
 else
 {
    header('Location: login.php');
 }
?>