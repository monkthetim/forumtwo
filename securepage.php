<?PHP
session_start();
echo "Hello " . $_SESSION['userName'];

if (!isset($_SESSION['userName'])) {
    header("Location: http://localhost/forumtwo/loginPage.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Forum</title>
    </head>
    <body>

        <?php
        $servername = "localhost";
        $user = "root";
        $password = "";
        $tablename = "test";

        $conn = mysqli_connect($servername, $user, $password, $tablename);

        $query = "SELECT * FROM topic";

        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['topic_id'];

            echo '<h3><a href=http://localhost/forumtwo/post.php?id=' . $id . '>' . $row['topic_subject'] . '</a></h3>';
            echo $row['topic_creator_name'];
        }
        ?>
    </body>
    <fieldset style="width:20%"><legend>Create Topic</legend>
        <form method="POST" action="http://localhost/forumtwo/createtopic.php"> 
            <textarea name="createTopic" rows="10" cols="30"></textarea>

            <input id="button" type="submit" name="submit" value="Create Topic"> 
        </form> 
</html>
