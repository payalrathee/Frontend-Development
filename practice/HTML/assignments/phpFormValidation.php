<?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(strlen($username)<=8)
    {
        echo "Username should be more than 8 charcters";
    }
}

?>

<!Doctype html>
<html>
    <head>
        <title>Form Validation in php</title>
    </head>
    <body>
        <form auto_complete="off" method="post" action="">
            <label>Username: </label>
            <input type ="text" name="username">
            <br><br>
            <label>Password: </label>
            <input type="password" name="password">
            <br><br>
            <input type="submit" value="submit" name="submit"> 
        </form>
    </body>
</html>