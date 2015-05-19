<?php
if(isset($_POST['submit'])) {
$username = $_POST['user'];
$password = md5($_POST['pass']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="form.php" method="post">
    <input type="text" name="user" placehoder="username"><br>
    <input type="password" name="pass" placeholder="passwrd"><br>
    <input type="submit" name="submit"><br>


</form>

<?php

if(isset($_POST['submit'])) {
        echo $username . " " . $password;
}

?>


</body>
</html>
