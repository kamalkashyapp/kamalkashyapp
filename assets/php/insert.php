<?php

include 'Config.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile=$_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    

    $q = "INSERT INTO `viewer`(`Name`, `Email`,`Mobile`, `Subject`,`message`) VALUES('$name','$email','$mobile','$subject','$message')";

    

    // echo "<font color="black">Data added successfully.";
    // echo "<br> <a href= 'insert.php'>View Result </font>";


$query = mysqli_query($con,$q);

 
if($query){

    echo ('<script>');
    echo ('alert(location:Config.php?msg=Successfull)');
    echo ('</script>');
//    header("location: Config.php?msg=New record created successfully");
}

else{
   echo "Failed: " .mysqli_error($con);
}

}
?>




<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->


<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->


<!--    <title>CRUD</title>-->
<!--</head>-->
<!--<body>-->

    
<!--<form method="POST">-->
<!--    <label>Username*</label>-->
<!--<input type="text" name="username" required><br><br>-->
<!--<label>Password</label>-->
<!--<input type="Password" name="password" required><br><br>-->
<!--<input type="submit" name="submit" value="submit">-->
<!--</form><br><br>-->

<!--<a href="display.php" style="text-decoration:none;" target=_blank >Check Form</a>-->

<!--</body>-->
<!--</html>-->