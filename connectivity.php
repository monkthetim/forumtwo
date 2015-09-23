<?php

$servername = "localhost";
$user = "root";
$password = "";
$tablename = "test";

$conn = mysqli_connect($servername, $user, $password, $tablename);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    SignIn($conn);
}

function SignIn($conn) {

    session_start();

    if (!empty($_POST['user'])) {

        $query = mysqli_query($conn, "SELECT * FROM username where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysqli_error());

        $row = mysqli_fetch_array($query);
        if (!empty($row['userName']) AND ! empty($row['pass'])) {

            $_SESSION['userName'] = $row['userName'];
            $_SESSION['userNameID'] = $row['userNameID'];

            header('Location: http://localhost/forumtwo/securepage.php/');
        } else {
            echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
        }
    }
}

?>