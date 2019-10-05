<?php
$email = $_POST["email"];
$pass = $_POST["password"];

$conn = new mysqli("localhost", "root", "pwdpwd", "faculty");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM admin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row["username"]==$email && $row["password"]==$pass)
            header("Location: /gucci/file.html");
        else
            echo"Sorry, your credentials are not valid, Please try again.";
    }
} else {
    echo "0 results";
}
$conn->close();