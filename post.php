<?php
session_start();
if (!isset($_SESSION['userName'])) {
    header("Location: http://localhost/forumtwo/loginPage.php");
}
echo "Hello " . $_SESSION['userName'] . "<br />";
// $_SESSION['userNameID'];
$servername = "localhost";
$user = "root";
$password = "";
$tablename = "test";

$conn = mysqli_connect($servername, $user, $password, $tablename);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET['id'];
$_SESSION['topicID'] = $id;
$query = mysqli_query($conn, "SELECT post_content FROM post WHERE post_topic='" . $id . "'");



while ($row = mysqli_fetch_assoc($query)) {
    // echo '<pre>', $row["topic_subject"], '<pre>';
    //$id=$row['topic_id'];
    echo $row['post_content'] . "<br />";
    //echo $row['topic_id'];
}
?>

<fieldset style="width:20%"><legend>Comment</legend>
    <form method="POST" action="http://localhost/forumtwo/postcreator.php"> 
        <textarea name="message" rows="10" cols="30"></textarea>

        <input id="button" type="submit" name="submit" value="Create Post"> 
    </form> 


