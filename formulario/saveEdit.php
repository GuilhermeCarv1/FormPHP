<?php 
include_once('config.php');

if(isset($_POST['update']))
{
    $id =  $_POST['id']; 
    $name =  $_POST['name']; 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $sexo = $_POST['gender'];
    $data_nasc = $_POST['data_nascimento'];
    $city =  $_POST['city'];
    $adress = $_POST['adress'];

    $sqlUpdate = "UPDATE usuarios SET name= '$name',email='$email',password='$password',phone='$phone',sexo='$sexo',data_nasc='$data_nasc',city='$city',state='$state',adress='$adress'
    WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);

    header('Location: system.php');
}

?>