<html>
    <head>
        <title>login page</title>
        <link rel="stylesheet" href="mycss\login.css">
    </head>
    <body>
         <?php include ('navbar.php') ?>
        <div class="maindiv">
            <form class="f1">
                <div class="div1">
                    <h2 style="color:rgb(67, 67, 186)";>Student Login</h2>
                    <b>Hey enter your details to sign in to your account?</b>
                </div>
                     <input type="text"  placeholder="🗒 Enter your username/email" name="name" required><br><br>
                     <input type="text"  placeholder="🗝 Enter your password" name="password" required><br><br>
                     <a href="#">Having Trouble in sign in?</a><br><br>
                     <a href="#"><input type="submit" name="login IN" class="button"></a>
            </form>
            <div class="signin">
                    <b>Or sign in with</b><br><br>
                    <button class="button1"><img src="img\icons8-facebook-30.png">Facebook</button>
                    <button class="button1"><img src="img\icons8-google-24.png">Google</button><br><br>
                    <span>Do not have an account?<a href="#" id="clr">Signup Now</a></span>
            </div>
        </div><br><br><br>
         <?php include('footer.php') ?>
    </body>
</html>