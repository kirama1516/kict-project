<!-- <?php
 
   if(isset($_POST["reset-pswrd"])) {

    $selector = bin2hex(random_bytes(8));

    $token = random_bytes(32);

    $url = "http://localhost/myshop/create-new-password.php?selector=" . $selector . "&validator" . bin2hex($token);

    $expires = date("U") + 1800;

    include 'config.php';

    $userEmail = $_POST["email"];
    
    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo "There was an Error!";
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "s", $userEmail);
      mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo "There was an Error!";
      exit();
    } else {
      $hashedToken = password_hash($token, PASSWORD_DEFAULT);
      mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
      mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    // mysqli_close();

    $to = $userEmail;

    $subject = 'Reset yur password for Abdullahi';

    $message = '<p>We recieved a password reset request. The link to reset your password is blow if you did not make this request, you can ignore this email</p>';
    $message .= '<p>Here is your password reset link: </br>';
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';

    $headers = "From: Abdullahi <webside dina@gmail.com\r\n";
    $headers .= "Reply-To: webside dina@gmail.com\r\n";

   } else{
     header("Location: login.php");
   } 
  
  
   ?>
    -->