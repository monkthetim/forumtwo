<?php

session_start();


if (!isset($_SESSION['userName'])) {
    header("Location: http://localhost/forumtwo/loginPage.php");
}

$servername = "localhost";
$user = "root";
$password = "";
$tablename = "test";

$userID = $_SESSION['userNameID'];
$username = $_SESSION['userName'];
$conn = mysqli_connect($servername, $user, $password, $tablename);
$Create_Topic = mysqli_real_escape_string($conn, $_POST["createTopic"]);
echo $Create_Topic;

$addtotable = "INSERT INTO topic (topic_creator, topic_subject, topic_creator_name) VALUES ('$userID','$Create_Topic','$username')";
if (mysqli_query($conn, $addtotable)) {

    header("Location: " . $_SERVER["HTTP_REFERER"]);
} else {
    echo "Error: " . $addtotable . "<br>" . mysqli_error($conn);
}