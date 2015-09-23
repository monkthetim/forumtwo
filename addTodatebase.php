<?php

$servername = "localhost";
$user = "root";
$password = "";
$tablename = "test";

$conn = mysqli_connect($servername, $user, $password, $tablename);


$name = mysqli_real_escape_string($conn, $_POST["user"]);
$pass = mysqli_real_escape_string($conn, $_POST["pass"]);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = mysqli_query($conn, "SELECT * FROM userName WHERE userName='" . $name . "'");

if (mysqli_num_rows($query) > 0) {

    echo "User Exist";
} else {


    $addtotable = "INSERT INTO username (userName, pass) VALUES ('$name','$pass')";

    if (mysqli_query($conn, $addtotable)) {

        echo "New User created successfully";
    } else {
        echo "Error: " . $addtotable . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>



