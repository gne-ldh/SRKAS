<?php

$prefix = $_POST["pre"];
$name = $_POST["name"];
$email = $_POST["email"];
$user_name = $_POST["user_name"];
$qualification = $_POST["qualification"];
$prefix = $_POST["pre"];
$course = $_POST["course"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];
$employee_id = $_POST["employee_id"];
$branch_code = $_POST["branch_code"];
$designation = $_POST["designation"];
$appointment_type = $_POST["appointment_type"];
$subjects_taught = $_POST["subjects_taught"];
$research_interest = $_POST["research_interest"];
$publications = $_POST["publications"];
$project_details = $_POST["project_details"];

$conn = new mysqli("localhost", "root", "pwdpwd", "faculty");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users ( username, course, branch_code,	designation,	Qualification,	gender,	email,	prefix,	name,	mobile,	appointment_type,	employee_id)
VALUES ('$username', '$course', '$branch_code',	'$designation',	'$qualification',	'$gender',	'$email',	'$prefix',	'$name',	'$mobile',	'$appointment_type', '$employee_id')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>










?>