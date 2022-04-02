<!DOCTYPE html>
<?php 
 session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz</title>
</head>
<body>
    <h1>Login</h1>
    <?php 
       if(isset ( $_POST['password'])){
           if( $_POST['email'] == "user@gmail.com" && $_POST['password']=='123')
           {
            $_SESSION['user_id']= array("id" => 1, "name" =>$_POST['email'] , "password" =>$_POST['password'], "role" => "user" );
            header('Location: quiz.php');
           }elseif($_POST['email'] == "admin@gmail.com" && $_POST['password']=='123')
           {
            $_SESSION['admin_id']= array("id" => 2, "name" =>$_POST['email'] , "password" =>$_POST['password'], "role"=> "admin");
            header('Location: dashboard.php');
           }
           
           else{
            echo 'sai mật khẩu ';
        }
           
       }
    ?>
    <form action="" method="post">
        <label>Email </label>
        <input type="text" name="email">
        <label>Password </label>
        <input type="password" name="password">
        <button type="submit"> Đăng Nhập</button>
    </form>
    
    </body>
</html>