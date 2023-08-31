<?php
// Connecting Through mysql database
if(isset($_POST['name'])){
$server="127.0.0.1:4306";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("connection to the database failed due to ".mysqli_connect_error());
}
// echo "Success connecting to the db ";

$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];

// $result = $con->query("SHOW DATABASES");
// while ($row = $result->fetch(PDO::FETCH_NUM)) {
// echo $row[0]."<br>";
// }


$sql="INSERT INTO `store`.`store` (`name`, `age`, `gender`, `email`, `phone`, `other`, `datetime`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
//echo $sql;
if($con -> query($sql) == TRUE)
{
    echo "Successfully Inserted ";
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Shop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="wt" src="wt3.jpg.jpg" alt="Walmart Store NY">
    <div class="container">
        <h2>Welcome to the Walmart store, New York</h3>
        <p>Please Enter your details </p>
    
    <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your Name">
        <input type="text" name="age" id="age" placeholder="Enter your Age">
        <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
        <input type="text" name="email" id="email" placeholder="Enter your email">
        <input type="text" name="phone" id="phone" placeholder="Enter your Phone Number">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your Valuable Feedback"></textarea>
        <button class="btn">Submit</button>

    </div>
    </form>
    <script src="index.js"></script>
    <!-- INSERT INTO `store` (`name`, `age`, `gender`, `email`, `phone`, `other`, `datetime`) VALUES ('himu', '26', 'male', 'himu@rupa.com', '7878656534', 'Himura kkhono karor hat dhore na...', current_timestamp());  -->
</body>
</html>