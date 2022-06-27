<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$dtcon=mysqli_connect($server,$username,$password,$database);
if(isset($_POST['subscribe']))
{
    $email=$_POST["email"];

    $insert=mysqli_query($dtcon,"INSERT INTO aboutus(email)VALUES('$email')");
}
if(isset($insert))
{
    echo "Data submitted successfully .";
}
else{
    echo "Error occured";
}
?>