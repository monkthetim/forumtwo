<?php
session_start();
if (!isset($_SESSION['userName'])) {
    header("Location: http://localhost/forumtwo/loginPage.php");
}
echo "Hello " . $_SESSION['userName'] . "<br />";
echo "   ". "<br />";
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


$sql = mysqli_query($conn, "SELECT post.post_content, username.userName as username From post LEFT JOIN username ON username.usernameID = post_by WHERE post_topic='" . $id . "'");

while ($row = mysqli_fetch_assoc($sql)) {

    echo "\n" . $row['post_content'] . " Said by " . $row['username'] . "<br />" ;
    echo " " . "<br />";
}
?>

<fieldset style="width:20%"><legend>Comment</legend>
    <form method="POST" action="http://localhost/forumtwo/postcreator.php"> 
        <textarea name="message" rows="10" cols="30"></textarea>

        <input id="button" type="submit" name="submit" value="Create Post"> 
    </form> 


