<?php

session_start();
if (!isset($_SESSION['userName'])) {
    header("Location: http://localhost/forumtwo/loginPage.php");
}
//echo "Hello " . $_SESSION['userName']. "<br />";
// $_SESSION['userNameID'];
$servername = "localhost";
$user = "root";
$password = "";
$tablename = "test";
$conn = mysqli_connect($servername, $user, $password, $tablename);

$topicID = $_SESSION['topicID'];
$userID = $_SESSION['userNameID'];
$message = mysqli_real_escape_string($conn, $_POST["message"]);

$addtotable = "INSERT INTO post (post_content, post_topic, post_by) VALUES ('$message','$topicID','$userID')";
if (mysqli_query($conn, $addtotable)) {

    header("Location: " . $_SERVER["HTTP_REFERER"]);
} else {
    echo "Error: " . $addtotable . "<br>" . mysqli_error($conn);
}
