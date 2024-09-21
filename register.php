<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazing Profile</title>
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
<h1>Let's Journey the Stars Together, Trailblazer~!</h1>
    <form action="actregister.php" method="POST">
        <table>
<tr>
    <td><label for="name">Username</label></td>
    <td>:</td>
    <td><input type="text" name="name" id="name" placeholder="John Bob" required></td>
</tr>
<tr>
    <td><label for="pass">Password</label></td>
    <td>:</td>
    <td><input type="password" name="pass" id="pass" required></td>
</tr>
<tr>
    <td><label for="fname">Full Name</label></td>
    <td>:</td>
    <td><input type="text" name="fname" id="fname" placeholder="Bob Johnson" required></td>
</tr>
<tr>
    <td><label for="address">Address</label></td>
    <td>:</td>
    <td><textarea name="address" id="address" placeholder="221B Baker St. London" required></textarea></td>
</tr>
<tr>
    <td colspan="2"></td>
    <td><input type="submit" value="Register"> <input type="reset" value="Reset"></td>
</tr>
        </table>
    </form>
    <hr class="spaced">
        <footer class="centered">
            <p>Copyright &copy; 2024 Andhika Putra</p>
        </footer>
</body>
</html>