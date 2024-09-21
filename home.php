<?php
    session_start();
    if(!isset($_SESSION['userid']) || !isset($_SESSION['fullname'])){
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shh..</title>
    <link rel="stylesheet" href="style9.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="#" class="wip">Home</a></li>
            <li><a href="index.php">Profile</a></li>
            <li class="dropdown"><a href="about.php" class="selected">About</a>
                <ul>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="#">Material</a>
                    <ul>
                        <li><a href="CSS.docx">CSS</a></li>
                    </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#" class="secretlair.php">Secret Lair</a>
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <hr>
        <h1>Welcome.</h1>
        <p>If you're here, that means the login worked, yipee!!</p>
        <p>Unless if you were trying to fail the login, in which case, aww..</p>
        <a href="actlogout.php">designthislater -A</a>
    <hr class="spaced">
        <footer class="centered">
            <p>Copyright &copy; 2024 Andhika Putra</p>
        </footer>
</body>
</html>