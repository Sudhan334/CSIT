<?php 
if (isset($_POST['name'])) {
    

$server = "localhost";
$username = "root";
$password ="";
$con = mysqli_connect($server,$username,$password);

$name  = $_POST['name'];
$age  = $_POST['age'];
$gender  = $_POST['gender'];
$email  = $_POST['email'];
$number  = $_POST['number'];
$sql = "INSERT INTO `mustang_trip`.`bmc` ( `name`, `age`, `gender`, `gmail`, `number`) VALUES ( '$name', '$age', '$gender', '$email', '$number');";
if($con->query($sql)==true) {
    echo "";
}else {
    echo"ERROR: $sql <br> $con->error";
}$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>
    <img class="bg" src="https://www.collegesnepal.com/cn/img/3be0bd4530e7fdd1ad55f8949f1e6f585690fdb9cbff63.07217266.jpg" alt="Butwal Multiple Campus" >
    <div class="container">
        <h3>Welcome to BMC Mustang Trip Form.</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip.</p>
        <form action="index.php" method="POST">
<input type="text" name="name" id="name" placeholder="Enter your name">
<input type="number" name="age" id="age" placeholder="Enter your age">
<input type="text" name="gender" id="gender" placeholder="Enter your gender">
<input type="email" name="email" id="email" placeholder="Enter your email">
<input type="number" name="number" id="number" placeholder="Enter your phone number">
<textarea name="desc" id="desc" cols="30" rows="9" placeholder="Enter other information here"></textarea>
<button class="btn">Submit</button>

        </form>
    </div>
    <script src="index.js"></script>
</body>
<!-- ALTER TABLE `bmc` CHANGE `Email` `Email` VARCHAR(11) NOT NULL; -->
<!-- INSERT INTO `bmc` (`Student No.`, `Name`, `Age`, `Gender`, `Email`, `Phone Number`) VALUES ('1', 'sudhan', '20', 'male', 'sudhanbhandari78@gmail.com', '9867288436'); -->
</html>
 