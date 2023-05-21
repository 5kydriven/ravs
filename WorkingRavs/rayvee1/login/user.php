<?php

require_once('dbConnect.php');
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
$index = 1;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Administrator Mode</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="header">
            <h1 id="logo">life Blog</h1>
            <nav>
                <ul class="menu">
                    <li id="login"><a href="login.php" style="color: white">Log Out</a></li>
                </ul>
            </nav>
        </div>
        <center>
        <table class="table">
            <tr>
                <th colspan="5">Accounts</th>
            </tr>
            <tr>
                <th>User Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
            <tr>
                <?php
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $id = $index++;
                ?>
                    <td><?php echo $id ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['surname'] ?></td> 
                    <td><?php echo $row['username'] ?></td> 
                    <td><?php echo $row['password'] ?></td> 
                <tr>
                <?php
                    }
                ?>
            </tr>
        </table>
    </center>
    </body>
    <style>
        .table{
    padding: 15px;
    margin-top: 20px;
    background: rgba(0, 0, 0, 0.222);
}

th{
    padding: 0px 20px;
}

table, th, td {
    padding: 10px;
    border: 2px solid white;
    border-collapse: collapse;
}
</style>
</html>