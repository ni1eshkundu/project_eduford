<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}
else{
    echo "No Connection";
}

mysqli_select_db($con,'eduforddatabase');

$user = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = "insert into message (user,email,subject,message) values ('$user','$email','$subject','$message')";

mysqli_query($con,$query);

header('location:contact.html');
?>