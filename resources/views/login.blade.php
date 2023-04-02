<html>
    <head>
        <title>log in</title>
        <link rel="stylesheet" href="{{ asset("cssfile/login.css") }}">
    </head>
    <body>
        <form action="action_page.php" method="post">
            <div class="imgcontainer">
              <h1 class="head">WELCOME TO STOCK<span>BREED </span> LOGIN PAGE</h1>
            </div>

            <div class="container">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>

              <button type="submit">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>
            <div class="imgcontainer">
                <h1 class="account">Don't have an account?</h1>
              <h1 class="head">Use The Sign Up Button To Register</h1>
              </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" class="cancelbtn">Cancel</button>
              <button type="button" class="signupbtn">sign up</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>

    </body>
</html>
