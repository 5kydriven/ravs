<!DOCTYPE html>
<html>
    <head>
        <title>About myself</title>
        <link re="stylesheet" href="style.css">
    </head>
    <body>
        <div id="header">
            <h1 id="logo">Life Blog</h1>
            <nav>
                <ul class="menu">
                    <li id="home"><a href="../home/index.html">home</a></li>
                    <li id="About"><a href="../about/index.html">About</a></li>
                    <li id="login"><a href="../login/login.php">login</a></li>
                 </ul>
            </nav>
        </div>
        <div id="Registerform">
            <form action="add.php" method="post">
                <br>
                <h1 class="register">Registration form</h1>
                <?php if (isset($_GET['error'])) { ?>
     		        <div class="error">
                        <strong><?php echo $_GET['error']; ?></strong>
                    </div>
     	        <?php } ?>
                <br>
                <p>Name:</p>
                <input type="text" placeholder="Enter your name" name="name" required>
                <p>Surname:</p>
                <input type="text" placeholder="Enter your surname" name="surname" required>
                <p>Username:</p>
                <input type="text" placeholder="Enter your username" name="username" required>
                <p>Password:</p>
                <input type="password" placeholder="Enter your password" name="password" required>
                <button type="submit" name="send">Register</button>
                <p><a href="login.php"> I have account</a></p>
            </form>
        </div>
    </body>
</html>