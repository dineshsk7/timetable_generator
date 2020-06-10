	<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
<body>
    <div class="loginbox">
    <img src="signup.png" class="avatar">
        <h1>Sign up</h1>
        <form>
            <p>Username</p>
            <input type="text" name="" placeholder="Enter Username">

            <p>Password</p>
            <input type="password" name="" placeholder="Enter Password">
            <p> Select</p>
            <br>    
            <div class="select">
                <select name="slct" id="slct">
                    <option selected disabled>Choose an option</option>
                    <option value="1">Teacher</option>
                    <option value="2">Helpdesk</option>
                 </select>
            </div>

                <br><br>
            <form action = "signup.php" method = "POST">
                <input type="submit" name="" value="Sign Up">
            </form>
            <form action = "login.php" method = "POST">
                <input type="submit" name="" value="Login">
            </form>
        </form>
        
    </div>

</body>
</head>
</html>