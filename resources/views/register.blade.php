<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>AirHub Register</title>
    <link rel="stylesheet" href="css/register.css" />
  </head>
  <body>
    <div class="center">
      <img src="resources-img/logo.png" class="logo">
      <form method="post" action="/register">
        @csrf
        <div class="txt_field">
          <input type="text" id="name" name="name" required/>
          <span></span>
          <label>Full Name</label>
        </div>
        <div class="txt_field">
          <input type="email" id="email" name="email" required/>
          <span></span>
          <label>E-Mail</label>
        </div>
        <div class="txt_field">
          <input type="password" id="password" name="password" required />
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Register" />
        <div class="signup_link">Have an account? <a href="/login">Login</a></div>
      </form>
    </div>
  </body>
</html>
