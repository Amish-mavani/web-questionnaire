<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <img src="https://www.iiitsurat.ac.in/assets/img/IIITS_EHG.png" height="auto" width="100%" />
  
  <form id="loginForm" action="" method="POST">
    <h1 style="margin: 4px; background-color: #afe8b1;; text-align: center;">login</h1>
    <p>user_id :</p>
    <input type="text" id="username" name="username" required>
    <p>password :</p>
    <input type="password" id="password" name="password" required>
    <input type="submit" name="submit" value="Login">
  </form>  
</body>
</html>


<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['username']) && isset($_POST['password'])) 
    {
      if (isset($_GET['loginId'])) 
      {

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "login";
            
            $conn = new mysqli($servername, $username, $password, $database);
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            $loginId = $_GET['loginId'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $tableName = "";
            switch ($loginId) {
              case 'loginLink1':
                $tableName = "year1";
                break;
              case 'loginLink2':
                $tableName = "year2";
                break;
              case 'loginLink3':
                $tableName = "year3";
                break;
              case 'loginLink4':
                $tableName = "year4";
                break;
              default:
                die("Invalid login ID");
              }

              $sql = "SELECT * FROM $tableName WHERE user_name = '$username' AND pass_word = '$password'";
              $result = $conn->query($sql);
              $count = $result->num_rows;
              
              if ($count > 0) {
                header("Location: teacher.php");
                exit;
              } else {
                echo "<script> alert(' Invalid username or password');</script>";
              }
              
              $conn->close();
            
            } else {
            echo "<script> alert(' Linkid is missing in the URL');</script>";
        }
    } else {
    echo "<script> alert(' Username or password is missin');</script>";
  }
}
?>


