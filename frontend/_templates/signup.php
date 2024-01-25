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


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/css/signup.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
<form method="post" action="signup/index.php">
		<!-- <img class="mb-4" src="https://previews.123rf.com/images/iconhome/iconhome2210/iconhome221001085/195643437-love-photography-camera-color-line-icon.jpg" alt="image" width="100" height="100"> -->
		<h1 class="h3 mt-4 mb-3 fw-normal">Signup here</h1>
		<div class="form-floating m-auto">
			<input name="name" type="text" class="form-control" id="floatingInputUsername" placeholder="Your name">
			<label for="floatingInputUsername">Username</label>
		</div>
		<div class="form-floating">
			<input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
			<label for="floatingInput">Email address</label>
		</div>
		<div class="form-floating">
			<input name="password" type="password" class="form-control" id="floatingInput" placeholder="Password">
			<label for="floatingInput">Password</label>
		</div>
		<div class="form-floating">
			<textarea name="address" class="form-control" id="floatingPassword" placeholder="name@example.com" rows="4" cols="8"></textarea>
			<label for="floatingPassword">Address</label>
		</div>
    <div class="form-floating">
			<input name="phone" type="number" class="form-control" id="floatingInput" placeholder="xxxxxxxxxx">
			<label for="floatingInput">Phone</label>
		</div>
    <input type="hidden" name="form_type" value="signup">
		<button class="w-25 btn btn-lg btn-primary hvr-grow-rotate" type="submit">Sign up</button>
	</form>

</main>


    
  </body>
</html>