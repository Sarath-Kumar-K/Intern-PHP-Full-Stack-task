<?php
include_once $_SERVER['DOCUMENT_ROOT']."/Intern-Task/backend/load.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <meta name="theme-color" content="#7952b3">
    
  </head>
  <body>
<?php

if ($_SERVER['REQUEST_METHOD'] == "POST"){
  if (isset($_POST["form_type"])){
    $formType = $_POST["form_type"];
    
    if ($formType == "signup"){
      // signup
      if (isset($_POST['name']) and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['address']) and isset($_POST['phone'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $signup = User::signup($name,$email,$password,$address,$phone);
      }
      if($signup){
        ?>
        <main class="container">
          <div class="bg-light p-5 rounded mt-3">
            <h1>Signup Success</h1>
            <p class="lead">Now you can login from <a
            href=<?php $_SERVER['DOCUMENT_ROOT']."/Intern-Task/frontend/_templates/signin.php"?>>here</a>
            </p>
    
          </div>
        </main>
      <?php
      }else{
        ?>
        <main class="container">
          <div class="bg-light p-5 rounded mt-3">
            <h1>Signup Fail</h1>
            <p class="lead">Something went wrong, <?php echo "Error : ".$sql."<br>".$conn->error;?>
            </p>
            <p>Please <a class="lead" href=<?php $_SERVER['DOCUMENt_root']."/Intern-Task/frontend/_templates/signup.php"?>> Try Again</a>.
            </p>
          </div>
        </main>
      <?php
      }
    
    } else if ($formType == "signin"){
      //sigin
      if (isset($_POST['email']) and isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $signin = User::login($email,$password);
      }

      if($signin){
        ?>
        <main class="container">
          <div class="bg-light p-5 rounded mt-3">
            <h1>Login Success</h1>
            <p class="lead">Now you can Go Back To Home <a
            href=<?php $_SERVER['DOCUMENT_ROOT']."/Intern-Task/frontend/index.php"?>>here</a>
            </p>
    
          </div>
        </main>
      <?php
      }else{
        ?>
        <main class="container">
          <div class="bg-light p-5 rounded mt-3">
            <h1>Signup Fail</h1>
            <p class="lead">Something went wrong, <?php echo "Error : ".$sql."<br>".$conn->error;?>
            </p>
            <p>Please <a class="lead" href=<?php $_SERVER['DOCUMENt_root']."/Intern-Task/frontend/_templates/signup.php"?>> Try Again</a>.
            </p>
          </div>
        </main>
      <?php
      }
    }
  }
}
?>


  </body>
</html>