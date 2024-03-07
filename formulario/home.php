<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>

body {
    display: flex;
    justify-content: center;
    margin: 150px;
    background-color: #cccfd2;
  }


        .form {
  --input-focus: #2d8cf0;
  --font-color: #323232;
  --font-color-sub: #666;
  --bg-color: #fff;
  --main-color: #323232;
  padding: 20px;
  background: lightgrey;
  width: 300px;
    display: flex;
    position: absolute;
  flex-direction: column;
  align-items:center;
  justify-content: center;
  gap: 20px;
  border-radius: 5px;
  border: 2px solid var(--main-color);
  box-shadow: 4px 4px var(--main-color);
}

.title {
  color: var(--font-color);
  font-weight: 900;
  font-size: 20px;
  margin-bottom: 25px;
}

.title span {
  color: var(--font-color-sub);
  font-weight: 600;
  font-size: 17px;
}
.box{
            
        }
        a{
            text-decoration: none;
            color: #000000;
            border: 1px solid #454545;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: #454545;
        }
</style>


</head>
<body>
    
 <form class="form">
        <div class="title">Welcome</div>
        <div class="box">
            <a href="./login.php">Login</a>
            <a href="./index.php">Register</a>
        </div>
 </form>

</body>
</html>