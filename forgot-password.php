<!-- <?php
include 'config.php'; 
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];

    $pswrd = $_POST['pswrd'];

    $sql =  "SELECT * FROM `users` WHERE email = '$emai;'";

    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($result);

    if(!$row){
        echo "<script> alert('Sorry! Invalid Email Address!'); </script>";

    }else{
        $token = bin2hex(random_bytes(20));

        $expires = time() + 3600;

        $sql = "UPDATE users SET password_reset_token = '$token', password_reset_token_expires = '$expires' WHERE email ='$email'";

        $result = mysqli_query($conn,$sql);

        $message = '<div>
        <p><b>Hello!</b></p>
        <p>You are recieving this email because we recieved a password reset request for your account.</p>
        <br>
        <p>
        <button><a href = "http://localhost/myshop/reset-password.php?token=$token">Reset Password</a></button>
        </p>
        <br>
        <p>If you did not request a password reset, no further action is required.</p>
        </div>';
    }
    }
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>
</head>
<body>

    <h1>Forgot Password</h1>
    <p>An email will be send to you with instructions on how to reset your password.</p>
    
    <form action="send-password-reset.php" method="post">
    
            <label for="email">EMAIL:</label><br>
            <input type="email" name="email">

            <button type="submit" name="reset-pswrd">send</button>
    
    </form>
</body>
</html>