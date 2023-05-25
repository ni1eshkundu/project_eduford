<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}
else{
    echo "No Connection";
}

mysqli_select_db($con,'eduforddatabase');

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$fathers_name=$_POST['fathers_name'];
$mothers_name=$_POST['mothers_name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$current_address=$_POST['current_address'];
$c_pin=$_POST['c_pin'];
$c_district=$_POST['c_district'];
$c_state=$_POST['c_state'];
$c_country=$_POST['c_country'];
$permenant_address=$_POST['permenant_address'];
$p_pin=$_POST['p_pin'];
$p_district=$_POST['p_district'];
$p_state=$_POST['p_state'];
$p_country=$_POST['p_country'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$mp_percentage=$_POST['mp_percentage'];
$hs_percentage=$_POST['hs_percentage'];
$hon_percentage=$_POST['hon_percentage'];
$course=$_POST['course'];

$query = "INSERT INTO admission (`First Name`, `Last Name`, `Father's Name`, `Mother's Name`, `Gender`, `DOB`, `Current Address`, `cPIN`, `cDistrict`, `cState`, `cCountry`, `Permenant Address`, `pPIN`, `pDistrict`, `pState`, `pCountry`, `Email`, `Phone`, `Madhyamik`, `Higher Secondary`, `Graduation`, `Course`) VALUES ('$first_name', '$last_name', '$fathers_name', '$mothers_name', '$gender', '$dob', '$current_address', '$c_pin', '$c_district', '$c_state', '$c_country', '$permenant_address', '$p_pin', '$p_district', '$p_state', '$p_country', '$email', '$phone', '$mp_percentage', '$hs_percentage', '$hon_percentage', '$course')";

mysqli_query($con,$query);

header('location:admission.html');
?>