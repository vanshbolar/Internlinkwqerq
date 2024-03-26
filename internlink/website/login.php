
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="./login.css" />
</head>
<body style="background-image: url(./user/assets/bg.jpeg);">
<?php
require('internlink.php');
session_start();
// If form submitted, insert values into the database.
if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to check if the username and password match
$query= "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($con,$query);

if ($result->num_rows > 0) {
    // Fetch user details
    $row = $result->fetch_assoc();
    $usertype = $row['usertype'];

    // Start session and store user information
    $_SESSION['username'] = $username;
    $_SESSION['usertype'] = $usertype;

    // Redirect based on role
    if ($usertype === 'user') {
        header("Location: index.php");
    } elseif ($usertype === 'mentor') {
        header("Location: ./mentor/index.php");
    } elseif ($usertype === 'admin') {
        header("Location: ./admin/includes/index.php");
	}
}
    }else{
?>

<br>
	<nav class="container" style="top: 10px; width:100%;">
		<div class="nav-head" style="width:auto ;"><marquee direction="right">WELCOME TO INTERLINK</marquee></div>
	  </nav>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<br>
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>
</body>
</html>