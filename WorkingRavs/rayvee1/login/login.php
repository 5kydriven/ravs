<!DOCTYPE html>
<html>
    <head>
        <title>Log in form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="header">
            <h1 id="logo">life Blog</h1>
            <nav>
                <ul class="menu">
                    <li id="home"><a href="../home.html" style="color: white">Home</a></li>
            </nav>
        </div>
        <div id="loginForm">
            <form action="verify.php" method="POST">
                <br>
                <h1 class="login">Log in Form</h1>
                <?php if(isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?><p>
                <?php } ?>
                <p>Username:</p>
                <input type="text" placeholder="Enter your username" name="username" required>
                <p>Password:</p>
                <input type="password" placeholder="Enter your password" name="password" required><br>
                <button>Log in</button>
                <p><a href="register.php">Don't have an account yet?</a></p>
            </form>
        </div>
    </body>
</html>