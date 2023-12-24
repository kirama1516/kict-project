<?php
$login = 0;
$invalid = 0;

include 'config.php';

// Include the Google API client library
require_once 'vendor/autoload.php';

// init config
$clientID = '128520543646-vplbgjk69jtfsk9m6nap15a6p20eqssq.apps.googleusercontent.com';
$clientSecret = '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';
$redirectURL = 'http://localhost/myshop/kict-project/dashboard.php';

// Set up the Google client
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectURL);
$client->addScope('email');
$client->addScope('profile');

// authenticate code from google oauth flow
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    // get profile info
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    $email = $google_account_info->email;
    $name = $google_account_info->name;

    //now you can use this profile info to create account in your website and make user logged in.
} else {
    echo "<a href='".$client->createAuthUrl()."'>Google login</a>";
}

// // Create the Google login URL
// $loginUrl = $client->createAuthUrl();

// // Redirect the user to the Google login page
// header('Location: ' . $loginUrl);
// exit;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if(isset($_POST['Login'])){

        $username = $_POST['username'];
        
        $password = $_POST['password'];

        $sql =  "SELECT * FROM `users` WHERE Username = '$username' and Password = '$password'";

        $result = mysqli_query($conn,$sql);

        if($result){

            // $file = $result['file'];
            $num = mysqli_num_rows($result);

            $row = mysqli_fetch_assoc($result);

            $file = $row['File'];

            // var_dump($file);

            if($num > 0){
                //echo "<script> alert('Success! You are successfully logged in.'); </script>";
                $login = 1;
                session_start();
                $_SESSION['Username'] = $username;
                $_SESSION['File'] = $file;
                header('location:dashboard.php');
            }else{
            // echo "<script> alert('Error! Invalid data'); </script>";
            $invalid = 1;
        }
    }
}
    }
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Login page</title>
</head>
<body>
<?php
if($login){
    echo "<script> alert('Success! You are successfully logged in.'); </script>";
}
?>

<?php
if($invalid){
    echo "<script> alert('Error! Invalid data'); </script>";
}
?> 
    <div class="countainer">
        <h1>
            <b>KICT</b><sup>experience IT</sup>
        </h1>   
            <h2>KNOW IT ICT LTD. </h2>
            <address>
                ADD: No. 23 Albarka Plaza,Justice Dahiru Mustapha Avenue Farm Center Kano.<br>
                Phone No.:08034099090,08095743914,08038933443. Email:knowitict@gmail.com. Google:kict.online.
            </address>   
    </div>

    <div class="glass">
        <div class="form-box">
            <a href="index10.html">
                <span class="icon-close"><ion-icon name="close">✖</ion-icon></span>
            </a><br>
                <b>LOGIN</b>
            <form action="login.php" method="post">  
                <div class="input-box">
                    <span class="icon"><ion-icon name="username">🧑🏻</ion-icon></span>
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed">🔒</ion-icon></span>
                    <input type="password" name="password" required> 
                    <label>Password</label>
                </div>
                <br>
                 <div class="remember">
                    <label><input type="checkbox">Remember me</label>
                    <a href="forgot-password.php">
                        Forgot Password?
                    </a>
                </div>
                <br>
                <div>
                    <input type="submit" name="Login" class="rcorners" value="Login">
                </div>
                <div class="rcorner">
                    <a href="$client->createAuthUrl()">
                        <span class="buttons">
                        <div class="logo"></div>
                        <p id="google">Login with google</p>   
                        </span>
                    </a>    
                </div>
                <p>If you don't have an account...</p>
                <div>
                    <a href="create.php">
                        <input type="button" class="rcorners" value="Sign in"/>
                    </a>
                </div>
                <br><br>
            </form>
        </div>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>