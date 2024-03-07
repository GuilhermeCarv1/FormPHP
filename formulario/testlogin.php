<?php
    session_start();

  //    print_r($_REQUEST);

  if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
 {
        include_once('config.php');
        $email = $_POST['email'];
        $password = $_POST['password'];

       // print_r('Email: ' . $email);
       // print_r('<br>');
       // print_r('Password: ' . $password);

       $sql = "SELECT *  FROM usuarios WHERE email = '$email' and '$password'";
       $result = $conexao->query($sql);

      // print_r($sql);
     //  print_r($result);

     if(mysqli_num_rows($result) < 1)
     {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: login.php');
     }
     else
     {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('Location: system.php');
    }


 }
 else
 {
    header('Location: login.php');
 }
?>