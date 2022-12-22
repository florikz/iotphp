<!doctype html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel = "stylesheet" href="css/main.css">
</head>
<body>
        <form action = "" method = "post">
            
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter your name">
            <label>Last name</label>
            <input type="text" name="last_name" placeholder="Enter your last name">
            <label>Login</label>
            <input type="text" name="login" placeholder="Enter login">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password">
            <label>Confirm password</label>
            <input type="password" name="password" placeholder="Enter your password again">
            <button type="submit">Log in</button>
            <?php
            $var = $_POST['var'];
            $name = $_POST['name'];
            $last_name = $_POST['last_name'];
            $login = $_POST['login'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];    
            $str = "Name: " .$name."\nLast name: ".$last_name."\nLogin: ".$login."\nEmail: ".$email."\nPasswrod: ".$password;    
            $f = fopen("info.txt", 'w');
            fwrite($f, $str);
            echo $var;
            ?>
        </form> 
</body>
</html>
