<?php 
  if(isset($_POST['submit']))
  { /*
   print_r('Name: ' . $_POST['name']);
    print_r('<br>');
    print_r('Email: ' . $_POST['email']);
    print_r('<br>');
    print_r('Phone: ' . $_POST['phone']);
    print_r('<br>');
    print_r('Sexo: ' . $_POST['gender']);
    print_r('<br>');
    print_r('Age: ' . $_POST['data_nascimento']);
    print_r('<br>');
    print_r('City: ' . $_POST['city']);
    print_r('<br>');
    print_r('State: ' . $_POST['state']);
    print_r('<br>');
    print_r('Adress: ' . $_POST['adress']); */

    include_once('config.php');

    $name =  $_POST['name']; 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $sexo = $_POST['gender'];
    $data_nasc = $_POST['data_nascimento'];
    $city =  $_POST['city'];
    $state = $_POST['state'];
    $adress = $_POST['adress'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios (name,email,password,phone,sexo,data_nasc,city,state,adress) 
    VALUES('$name','$email','$password','$phone','$sexo','$data_nasc','$city','$state','$adress') ");

    header('Location: login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Form</title>

    <style>
      .navbar{
        top:0;
        position: absolute;
        width: 100%;
        height: 60px;
        background: white;
        color:black;
      }
      a {
        color: black;
        font-size: 20px;
        margin: 15px 20px;
      }
      .container {
        display: flex;
        justify-content: space-between;
      }


      .button-back {
         background-color: white;
         color: red;
         margin: 8px 30px;
         border-radius: 10em;
         font-size: 12px;
         font-weight: 600;
         padding: 1em 2em;
         cursor: pointer;
         transition: all 0.2s ease-in-out;
         border: 1px solid red;
         box-shadow: 0 0 0 0 red;
      }

      .button-back:hover {
      transform: translateY(-4px) translateX(-2px);
      box-shadow: 2px 5px 0 0 red;
      }
      .button:active {
      transform: translateY(2px) translateX(1px);
      box-shadow: 0 0 0 0 red;
     }
    </style>


  </head>
  <body>
  <nav class="navbar">
    <div class="container">
      <a  class="navbar-brand">Register </a>
      <div class="d-flex">
          <a href="./home.php">
              <button class="button-back" type="submit">Back</button>
          </a>
      </div>
    </div>
  </nav>
    
    
<div class="box"> 
    <form class="form meugrande"  action="index.php" method="POST" >
      <div class="title">Welcome,<br /><span>sign up to continue</span></div>
      <input type="email" placeholder="Email" name="email" class="input" />
      <input type="text" placeholder="Full Name" name="name" class="input"/>
      <input type="tel" placeholder="Phone" name="phone" class="input">
      <input type="password" placeholder="Password" name="password" class="input">
     
      <div class="radio-container">
        <div class="radio-wrapper">
          <label class="radio-button">
            <input type="radio" name="gender" id="option1" value="Male"  >
            <span class="radio-checkmark"></span>
            <span class="radio-label">Male</span>
          </label>
        </div>
      
        <div class="radio-wrapper">
          <label class="radio-button">
            <input type="radio"  name="gender" id="option2" value="Female" >
            <span class="radio-checkmark"></span>
            <span class="radio-label">Female</span>
          </label>
        </div>
      
        <div class="radio-wrapper">
          <label class="radio-button">
            <input type="radio"  name="gender" id="option3" value="Other">
            <span class="radio-checkmark"></span>
            <span class="radio-label">Other</span>
          </label>
        </div>
      </div>
    <div>
        <label for="data_nascimento"><b>Age:</b></label>
        <input type="date" name="data_nascimento" id="data_nascimento" required>
    </div>
      <input type="text" placeholder="City" name="city" class="input"/>
      
      <input type="text" placeholder="Adress" name="adress" class="input"/>

      <div class="login-with">
        <div class="button-log"></div>
        <div class="button-log">
          <svg
            class="icon"
            height="56.6934px"
            id="Layer_1"
            style="enable-background: new 0 0 56.6934 56.6934"
            version="1.1"
            viewBox="0 0 56.6934 56.6934"
            width="56.6934px"
            xml:space="preserve"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
          >
            <path
              d="M51.981,24.4812c-7.7173-0.0038-15.4346-0.0019-23.1518-0.001c0.001,3.2009-0.0038,6.4018,0.0019,9.6017  
              c4.4693-0.001,8.9386-0.0019,13.407,0c-0.5179,3.0673-2.3408,5.8723-4.9258,7.5991c-1.625,1.0926-3.492,1.8018-5.4168,2.139 
               c-1.9372,0.3306-3.9389,0.3729-5.8713-0.0183c-1.9651-0.3921-3.8409-1.2108-5.4773-2.3649  c-2.6166-1.8383-4.6135-4.5279-5.6388-7.5549c-1.0484-3.0788-1.0561-6.5046,0.0048-9.5805  
               c0.7361-2.1679,1.9613-4.1705,3.5708-5.8002c1.9853-2.0324,4.5664-3.4853,7.3473-4.0811c2.3812-0.5083,4.8921-0.4113,7.2234,0.294  c1.9815,0.6016,3.8082,1.6874,5.3044,3.1163c1.5125-1.5039,3.0173-3.0164,4.527-4.5231c0.7918-0.811,1.624-1.5865,2.3908-2.4196  c-2.2928-2.1218-4.9805-3.8274-7.9172-4.9056C32.0723,4.0363,26.1097,3.995,20.7871,5.8372  C14.7889,7.8907,9.6815,12.3763,6.8497,18.0459c-0.9859,1.9536-1.7057,4.0388-2.1381,6.1836  C3.6238,29.5732,4.382,35.2707,6.8468,40.1378c1.6019,3.1768,3.8985,6.001,6.6843,8.215c2.6282,2.0958,5.6916,3.6439,8.9396,4.5078  c4.0984,1.0993,8.461,1.0743,12.5864,0.1355c3.7284-0.8581,7.256-2.6397,10.0725-5.24c2.977-2.7358,5.1006-6.3403,6.2249-10.2138  C52.5807,33.3171,52.7498,28.8064,51.981,24.4812z"
            ></path>
          </svg>
        </div>
        <div class="button-log">
          <svg
            xmlns:xlink="http://www.w3.org/1999/xlink"
            xmlns="http://www.w3.org/2000/svg"
            xml:space="preserve"
            width="56.693px"
            viewBox="0 0 56.693 56.693"
            version="1.1"
            id="Layer_1"
            height="56.693px"
            class="icon"
          >
            <path
              d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z"
            ></path>
          </svg>
        </div>
      </div>
      <button type="submit" name="submit" class="button-confirm">Submit</button>
    </form>
</div>

  </body>
</html>
