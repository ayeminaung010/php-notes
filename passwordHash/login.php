<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password hash</title>
</head>
<body>
    <h1> Log In Form</h1>

    <form action="" method="post">
        Email <input type="email" name="UserEmail" id=""> <br>
        Pasword <input type="password" name="UserPassword" id=""><br>
        <input type="submit" value="Log In" name="LoginBtn">

    </form>
    <?php
    

    $email = 'ayeminaung.mf@gmail.com';
    $password = 'admin123@';

    $passwordHash = password_hash($password , PASSWORD_BCRYPT );//password hash
    // echo $passwordHash;
    // echo '<br>';
    // var_dump(password_verify($password , $passwordHash));

    if(isset($_POST['LoginBtn'])){
        $userInputEmail = $_POST['UserEmail'];
        $userInputPassword = $_POST['UserPassword'];

        if($email == $userInputEmail && $userInputPassword = $passwordHash){
            echo '<br>';
            echo 'Login success!';
        }else{
            echo 'login fail! Try again';
        }
        // setcookie('email',$email);
        // setcookie('password', $passwordHash);

        // echo $_COOKIE['email'];
        // echo $_COOKIE['passwprd'];
    }
    ?>
    
</body>
</html>