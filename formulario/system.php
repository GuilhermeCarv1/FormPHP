<?php
    session_start();
    include_once('config.php');
   // print_r($_SESSION);
    if((!isset($_SESSION['name']) == true) and (!isset($_SESSION['password']) == true ))
    {
        unset($_SESSION['name']);
        unset($_SESSION['password']);
        header('Location: login.php');
    }
    $logado = $_SESSION['name'];
    if(!empty($_GET['search']))
    {
       
       $data = $_GET['search'];
       $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or name LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
      $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }

   
    $result = $conexao->query($sql);

   
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

         .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
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
 
 
  <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Search" id="search">  
        
        <button onclick="searchData()" class="btn btn-primary">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
      </svg>
  </button>
  </div>



  <div class="m-3">
      <table class="table table-dark table-hover table-bordered ">
        <thead>
          <tr>
            <th scope="col" >#</th>
            <th scope="col">name</th>
            <th scope="col">Password</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Sexo</th>
            <th scope="col">Birth data</th>
            <th scope="col">City</th>
            <th scope="col">Adress</th>
            <th scope="col">...</th>
          </tr>
        </thead>
        <tbody>
              <?php
                while($user_data = mysqli_fetch_assoc($result))
                {
                  echo "<tr>";
                  echo "<td>" .$user_data['id']. "</td>";
                  echo "<td>" .$user_data['name']. "</td>";
                  echo "<td>" .$user_data['password']. "</td>";
                  echo "<td>" .$user_data['email']. "</td>";
                  echo "<td>" .$user_data['phone']. "</td>";
                  echo "<td>" .$user_data['sexo']. "</td>";
                  echo "<td>" .$user_data['data_nasc']. "</td>";
                  echo "<td>" .$user_data['city']. "</td>";
                  echo "<td>" .$user_data['adress']. "</td>";
                  echo "<td>
                      <a class='btn btn-sm btn-primary' href='./edit.php?id=$user_data[id]'>
                      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                      <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
                    </svg>
                    </a>
                  
                    <a class='btn btn-sm btn-danger' href='./delete.php?id=$user_data[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                    <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5'/>
                  </svg>
                    </a>

                </td>";
                echo "<tr>";
                }
              ?>
        </tbody>
      </table>
  </div>
</body>
<script>
    var search = document.getElementById('search'); 

    search.addEventListener("keydown", function(event) {
      if (event.key == "Enter")
      {
          searchData();
      }
    });

    function searchData()
    {
      window.location = 'system.php?search='+search.value;
    }
</script>
</html>