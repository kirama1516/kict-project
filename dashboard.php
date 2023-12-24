<?php
include 'config.php';

  session_start();
    if(!isset($_SESSION['Username'])){
        header('location:login.php');
    }

    // $sql = "SELECT * FROM `users` WHERE Fullname = '$fullname' AND Email = '$email' AND DOB = '$date' AND Nationality = '$nationality' AND State = '$state' AND LGA = '$lga' AND Phonenumber = '$phone' AND Address = '$address' AND Occupation = '$occupation' AND Placeofoccupation = '$p_occupation' ";

    // $result = mysqli_query($conn,$sql);

    // current($result);

    // $targetDir = 'upload/';

    $file = $_SESSION['File'];

    // $fullname = $_SESSION['Fullname'];


    // var_dump($file);

    // $staticImage = "6522c0e0e4762_1e9a49df79b7e8eaacc292a1ca9617d6.jpg";

    // $dashboardImg = $targetDir.$staticImage;

    // Set the target file path
    // $targetFilePath = $targetDir . $uniqueFileName;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dashboard.css"> 
    <title>Home page</title>
</head>
<body>
    <h1>Welcome
        <?php echo $_SESSION['Username']; ?>
    </h1>

    <?php
        // if($result -> num_rows > 0){
        //     // if ($result) {
        //     //     $row_count = $result->num_rows; // This line should work fine now
        //     while($row = $result->fetch_assoc()){
                ?>
                  <p>
                        <?php echo '<img src="' . $file . '" alt="Uploaded Image" style="max-width: 15%;">';?>
                    </p>
                <div class="view">
                    <p>NAME:<br>
                        <?php echo $_SESSION['Fullname']; ?>
                    </p> 
                    <p>EMAIL:<br>
                        <?php echo $_SESSION['Email']; ?>
                    </p> 
                    <p>DATE OF BIRTH:<br>
                        <?php echo $_SESSION['DOB']; ?>
                    </p> 
                    <p>NATIONALITY:<br>
                        <?php echo $_SESSION['Nationality']; ?>
                    </p> 
                    <p>STATE:<br>
                        <?php echo $_SESSION['State']; ?>
                    </p> 
                    <p>LGA:<br>
                        <?php echo $_SESSION['LGA']; ?>
                    </p> 
                    <p>PHONE NO.:<br>
                        <?php echo $_SESSION['Phonenumber']; ?>
                    </p> 
                    <p>ADDRESS:<br>
                        <?php echo $_SESSION['Address']; ?>
                    </p> 
                    <p>OCCUPATION:<br>
                        <?php echo $_SESSION['Occupation']; ?>
                    </p>
                    <p>PLACE OF OCCUPATION:<br>
                        <?php echo $_SESSION['Placeofoccupation']; ?>
                    </p>
                </div>

             <?php
        //     }
        // }
    ?>
    
    <div>
        <a href="logout.php">
            <input type="button" class="rcorner" value="Logout"/>
        </a>
    </div>
</body>
</html>