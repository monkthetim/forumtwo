<?php

function end_session(){
    session_unset(); 
    session_destroy(); 
    header("Location: http://localhost/forumtwo/loginPage.php");
}

?>


