<?php

include "./db/config.php";

    if(!isset($_SESSION['Fullname'])){
        header('location:home.php');
    }
    $fullname = $_SESSION['Fullname'];

    $sql = "SELECT * FROM `users` WHERE Fullname = '$fullname'";
    
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $fullname = $row["Fullname"];
    $date = $row["DOB"];
    $nationality = $row["Nationality"];
    $state = $row["State"];
    $lga = $row["LGA"];
    $phone = $row["Phonenumber"];
    $address = $row["Address"];
    $occupation = $row["Occupation"];
    $p_occupation = $row["Placeofoccupation"];
    // var_dump($id);
    // die();
    // $result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="shortcut icon" href="assets/images/logo/faviconKICT3.jpg">

    <title>Home Page</title>
</head>

<body>

    <div class="view">
        <p>NAME:<br>
            <?php echo $fullname; ?>
        </p>
        <p>DATE OF BIRTH:<br>
            <?php echo $date; ?>
        </p>
        <p>NATIONALITY:<br>
            <?php echo $nationality; ?>
        </p>
        <p>STATE:<br>
            <?php echo $state; ?>
        </p>
        <p>LGA:<br>
            <?php echo $lga; ?>
        </p>
        <p>PHONE NO.:<br>
            <?php echo $phone; ?>
        </p>
        <p>ADDRESS:<br>
            <?php echo $address; ?>
        </p>
        <p>OCCUPATION:<br>
            <?php echo $occupation; ?>
        </p>
        <p>PLACE OF OCCUPATION:<br>
            <?php echo $p_occupation; ?>
        </p>
    </div>
    <div>
        <a href="logout.php">
            <input type="button" class="rcorner" value="Logout" />
        </a>
    </div>
</body>

</html>