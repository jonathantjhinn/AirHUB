<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>AirHub Login</title>
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <div class="center">
      <img src="resources-img/logo.png" class="logo">
      <form action="/login" method="post">
        @csrf
        <div class="txt_field">
          <input type="email" name="email" id="email" required />
          <span></span>
          <label>E-mail</label>
        </div>
          <div class="txt_field">
          <input type="password" name="password" id="password" required />
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" name="submit" value="Login" />
        <div class="signup_link">Don't have an account? <a href="/register">Signup</a></div>
      </form>
    </div>
  </body>
</html>
