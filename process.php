<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server,$username,$password,$database);

if( isset($_POST[ 'submitButton']) )
{
    // 1.fetch form data
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $phone=$_POST["phonenumber"];
    $message=$_POST["message"];
    // 2.submit form data
    $insertData= mysqli_query($conn,"INSERT INTO contactus(firstname,lastname,email,phonenumber,message)
    VALUES('$firstname','$lastname','$email','$phone','$message')");
}
if(isset($insertData))
{
    echo "Data submitted successfully .";
}
else{
    echo "Error occured";
}
?>