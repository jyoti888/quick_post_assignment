<?php
session_start();
include_once'connection.php';

$firstname="";
$lastname="";
$emailid ="";
$password="";
$confirmpass="";
$mobileno="";
$birthdate="";
$gender="";
$terms="";


//connect to database
$db = mysqli_connect($servername, $username, $password, $dbname);
if($db->connect_error){
	die("connection failed:".$db);
}

//if submit button is clicked

if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$emailid = $_POST['emailid'];
	$password = $_POST['password'];
	$confirmpass = $_POST['confirmpass'];
	$mobileno = $_POST['mobileno'];
    $birthdate = $_POST['birthdate'];
	$gender = $_POST['gender'];
	$terms = $_POST['terms'];


$query = "INSERT INTO quick_post(first_name, last_name, email_id, password, confirm_pass, mobile_no, birth_date, gender, terms)VALUES('$firstname', '$lastname', '$emailid', '$password', '$confirmpass', '$mobileno', '$birthdate', '$gender', '$terms')";

mysqli_query($db, $query);

header('Location:sign_in.php');
}
?>