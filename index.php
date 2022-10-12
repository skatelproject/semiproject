<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/loginpage.css">
  <title>Login Page</title>
</head>

<body>
  <form action="loginph.php" method="post">
    <div class="backbox">
      <div class="loginbox">

        <h1>Login</h1>

        <div class="textbox">
          <input type="text" placeholder="Username" name="username" value="">
        </div>

        <div class="textbox">
          <input type="password" placeholder="Password" name="password" value="">
        </div>

        <input class="button" type="submit" name="login" value="Sign In">
      </div>
    </div>

  </form>
</body>

</html>