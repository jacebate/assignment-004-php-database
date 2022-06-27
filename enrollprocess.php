<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$dtcon=mysqli_connect($server,$username,$password,$database);

if(isset($_POST['submit']))
{
    $fullname=$_POST["fullname"];
    $phonenumber=$_POST["phonenumber"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $course=$_POST["course"];

    $data=mysqli_query($dtcon,"INSERT INTO enrollment(fullname,phonenumber,email,gender,course)
    VALUES('$fullname','$phonenumber','$email','$gender','$course')");
  
}
if(isset($_POST['subscribe']))
{
    $email=$_POST["email"];

    $insert=mysqli_query($dtcon,"INSERT INTO aboutus(email)VALUES('$email')");
}
if(isset($data))
{
    echo "Data submitted successfully .";
}
else{
    echo "Error occured";
}
?>
