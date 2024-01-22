<?php

$server='localhost';
$username='id19830405_admin';
$password='Admin@123';
$database='id19830405_kamalkp27';

$con= mysqli_connect($server, $username, $password, $database);
 $db= mysqli_select_db($con, $database);


if($con){
    "<script>
    alert('Submit')
    ";
}else{
    echo "failed";
}


?>




















<?php

// $server='localhost';
// $username='admin';
// $password='Qwertyuiop@123';
// $database=' id19830405_kamalkp27';

// $con= mysqli_connect($server, $username, $password, $database);
//  $db= mysqli_select_db($con, $database);


// if($con){
//     "<script>
//     alert('Submit')
//     ";
// }else{
//     echo "failed";
// }


?>