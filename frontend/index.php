<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Intern Task</title>
     <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

  <div class="p-5 text-center bg-body-tertiary rounded-3">
    <svg class="bi mt-4 mb-3" style="color: var(--bs-indigo);" width="100" height="100"><use xlink:href="#bootstrap"></use></svg>
    <h1 class="text-body-emphasis">Welcome To PHP Full-Stack Intern Task </h1>
    <p class="col-lg-8 mx-auto fs-5 text-muted">
      This is a user registration form and login validation with a responsive design. Thanks for this oppurtunity. Try my <code>&lt?php...?&gt</code> code, and a customized form template.
    </p>
    <div class="d-inline-flex gap-2 mb-5">
      <a class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" href=<?php $_SERVER['DOCUMENT_ROOT'].'/Intern-Task/frontend/_templates/signup.php' ?>>
        Sign Up
      </a>
      <a class="btn btn-outline-secondary btn-lg px-4 rounded-pill" href=<?php $_SERVER['DOCUMENT_ROOT']."/Intern-Task/frontend/_templates/signin.php" ?>>
        Login
      </a>
    </div>
  </div>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
 
  </body>
</html>