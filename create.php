<?php
//  include 'config.php';

//     if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
//     if(isset($_POST['Signup'])){

//         $fullname = $_POST['fullname'];
//         $username = $_POST['username'];
//         $email = $_POST['email'];
//         $date = $_POST['date'];
//         $nationality = $_POST['nationality'];
//         $state = $_POST['state'];
//         $lga = $_POST['lga'];
//         $file = 'upload/'.$_FILES['image']['name'];
//         $phone = $_POST['phone'];
//         $address = $_POST['address'];
//         $password = $_POST['password'];
//         $confirmpassword = $_POST['confirmpassword'];
//         $occupation = $_POST['occupation'];
//         $p_occupation = $_POST['placeofoccupation'];
//         $gender = $_POST['gender'];
//         $course1 = $_POST['course1'];
//         $course2 = $_POST['course2'];
//         $course3 = $_POST['course3'];
//         $course4 = $_POST['course4'];
//         $course5 = $_POST['course5'];
//         $course6 = $_POST['course6'];
//         $edu_details1 = $_POST['educationaldetails1'];
//         $edu_details2 = $_POST['educationaldetails2'];
//         $edu_details3 = $_POST['educationaldetails3'];
//         $edu_details4 = $_POST['educationaldetails4'];

//         $sql = "SELECT * FROM `users` WHERE Username = '$username' OR Email = '$email'";
//         $result = mysqli_query($conn,$sql);
//         if($result){
//              $num = mysqli_num_rows($result);
//              if($num>0){
//              echo "<script> alert('Ohh no Sorry! Username or Email has already existed'); </script>";
//              }else{
//                 if($password === $confirmpassword){
//                     if(preg_match("!image!", $_FILES['image']['type'])){
//                         if(copy($_FILES['image']['tmp_name'], $file)){
                        
//                         }else{
//                             echo "<script> alert('Sorry! File uploaded failed!'); </script>";
//                         }
//                     }else{
//                          echo "<script> alert('Opps! Please upload only JPG, PNG or GIF image!'); </script>";
//                     }
//                 $sql = "INSERT INTO `users` (Fullname, DOB, Nationality, State, LGA, Phonenumber, Address, Occupation, Placeofoccupation, Gender, Course1, Course2, Course3, Course4, Course5, Course6, Educationaldetails1, Educationaldetails2, Educationaldetails3, Educationaldetails4) VALUES ('$fullname', '$date', '$nationality', '$state', '$lga', '$phone', '$address', '$occupation', '$p_occupation', '$gender', '$course1', '$course2', '$course3', '$course4', '$course5', '$course6', '$edu_details1', '$edu_details2', '$edu_details3','$edu_details4')"; 
//                 $result = mysqli_query($conn,$sql);
//                 if ($result === TRUE){
//                         echo "<script> alert('Success! You are successfully registered'); </script>";
//                         session_start();
//                             $_SESSION['Username'] = $username;
//                     header('location:dashboard.php');
//                     }else{
//                         echo "<script> alert('Sorry! User could not be added!'); </script>";
//                     }
//                 }else{
//                     echo "<script> alert('Incorrect! Password does not match'); </script>";
//                 }
//             }
//         }
//     }  
// }  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/create.css">
    <link rel="shortcut icon" href="assets/images/logo/faviconKICT3.jpg">

    <title>Sign up page</title>

</head>

<body>
    <form action="create.php" method="post" enctype="multipart/form-data">
        <fieldset class="glass">
            <div class="countainer">
                <header id="rcorners">
                    <img src="myimage/global.jpg" width="250" height="220" style="float: left; margin-top: 5px;">
                    <h1>
                        <b>KICT</b><sub><i>experience IT</i></sub>
                    </h1>
                    <h2>
                        KNOW IT ICT
                    </h2>
                </header>
                <br>
                <i>
                    <address>
                        No. 23 Albarka Plaza,Justice Dahiru Mustapha Avenue Farm Center Kano.<br>
                        Phone No.:08034099090,08095743914,08038933443. Email:knowitict@gmail.com. Google:kict.online.
                    </address>
                </i>
                <hr>
                <h3>
                    APPLICATION FORM
                </h3>
                </hr>
                <h4>
                    <mark>
                        PERSONAL DETAILS <span>👤</span>
                    </mark>
                </h4>
                <div class="section">
                    <div>
                        <p>
                            <label for="name">FULL NAME:</label><br>
                            <input type="text" name="fullname" id="fullname" size="35" required>
                        </p>
                    </div>
                    <!-- <div>
                        <p>
                            <label for="name">USER NAME:</label><br>
                            <input type="text" name="username" id="fullname" size="35" required>
                        </p>
                    </div>
                    <div>
                        <p>
                            <label for="email">EMAIL:</label><br>
                            <input type="email" name="email" size="35" required>
                        </p>
                    </div> -->
                    <div>
                        <p>
                            <label for="date">DATE OF BIRTH:</label><br>
                            <input type="date" name="date" id="date" size="35">
                        </p>
                    </div>
                    <div>
                        <p>
                            <label for="nationality">NATIONALITY:</label><br>
                            <input type="text" name="nationality" id="nationality" size="35">
                        </p>
                    </div>
                    <div>
                        <p>
                            <label for="state">STATE:</label><br>
                            <input type="text" name="state" id="state" size="35">
                        </p>
                    </div>
                    <div>
                        <p>
                            <label for="lga">LGA:</label><br>
                            <input type="text" name="lga" id="lga" size="35">
                        </p>
                    </div>
                    <!-- <div>
                        <p>
                            <label id="files" for="file">Upload image</label><br>
                            <input type="file" name="image" id="imageInput" accept="image/*">
                        </p>
                    </div> -->
                    <div>
                        <p>
                            <label for="phone">PHONE NO.:</label><br>
                            <input type="tel" name="phone" id="phone" size="35">
                        </p>
                    </div>
                    <div>
                        <p>
                            <label for="address">ADDRESS:</label><br>
                            <textarea id="address" name="address"></textarea>
                        </p>
                    </div>
                    <!-- <div>
                        <p>
                            <label for="password">PASSWORD:</label><br>
                            <input type="password" name="password" id="password" size="35" required>
                        </p>
                    </div>
                    <div>
                        <p>
                            <label for="confirmpassword">CONFIRM PASSWORD:</label><br>
                            <input type="password" name="confirmpassword" id="confirmpassword" size="35" required>
                        </p>
                    </div> -->
                    <div>
                        <p>
                            <label for="occupation">OCCUPATION:</label><br>
                            <input type="text" name="occupation" id="occupation" size="35">
                        </p>
                    </div>
                    <div>
                        <p>
                            <label for="place of occupation">PLACE OF OCCUPATION</label><br>
                            <input type="text" name="placeofoccupation" id="place of occupation" size="35">
                        </p>
                    </div>
                    <div class="gender">
                        <p>
                            GENDER:<br>
                            <label for="male">MALE</label>
                            <input type="radio" name="gender" id="male" value="male">
                            <label for="female">FEMALE</label>
                            <input type="radio" name="gender" id="female" value="female">
                        </p>
                    </div>
                </div>
                <br>
                <div>
                    <h3>Computer Beginner, Must Pay N5,000 Before Any of This Courses.</h3>
                    <table class="tables">
                        <tr>
                            <th>COURSES</th>
                            <th>DURATION</th>
                            <th>PRICE</th>
                            <th>OPTION</th>
                        </tr>
                        <tr>
                            <td>
                                <li>Computer Software</li>
                            </td>
                            <td>2months</td>
                            <td>₦20,000</td>
                            <td>
                                <input type="checkbox" name="course1" id="Computer software" value="Computer software">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <li>Computer Hardware</li>
                            </td>
                            <td>2months</td>
                            <td>₦40,000</td>
                            <td>
                                <input type="checkbox" name="course2" id="Computer hardware" value="Computer hardware">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <li>Networking</li>
                            </td>
                            <td>1month</td>
                            <td>₦15,000</td>
                            <td>
                                <input type="checkbox" name="course3" id="Networking" value="Networking">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <li>Graphics Design</li>
                            </td>
                            <td>1month</td>
                            <td>N30,000</td>
                            <td>
                                <input type="checkbox" name="course4" id="Graphics Design" value="Graphics Design">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <li>Printer Repair</li>
                            </td>
                            <td>1month</td>
                            <td>₦30,000</td>
                            <td>
                                <input type="checkbox" name="course5" id="Printer Repair" value="Printer Repair">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <li>CCTV Installation</li>
                            </td>
                            <td>1month</td>
                            <td>₦20,000</td>
                            <td>
                                <input type="checkbox" name="course6" id="CCTV Installation" value="CCTV Installation">
                            </td>
                        </tr>
                    </table>
                </div>
                <br><br>
                <div>
                    <mark>EDUCATIONAL DETAILS 📚</mark></label>
                    <br><br><br>
                    1.<input type="text" name="educationaldetails1" size="80"><br>
                    2.<input type="text" name="educationaldetails2" size="80"><br>
                    3.<input type="text" name="educationaldetails3" size="80"><br>
                    4.<input type="text" name="educationaldetails4" size="80"><br>
                </div>
                <div>
                    <input type="reset" class="rcorners1" value="RESET" />
                </div>
                <div>
                    <input type="submit" name="Signup" class="rcorners2" value="Register" />
                </div>
                <div>
                    <footer>Copyright © W3Schools.com</footer>
                </div>
            </div>
        </fieldset>
    </form>
</body>

</html>