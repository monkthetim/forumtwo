<?php include("header.php"); ?>
    <body> 
        <div> 

             <fieldset style="width:20%"><h1><legend>Create Account<h1></legend>
                <form method="POST" action="addTodatebase.php"> 
                   <h4> User ID  <br><input type="text" name="user" size="40"><br><h4>
                   <h4> Password <br><input type="password" name="pass" size="40"><br><h4>
                          <input id="button" type="submit" name="submit" value="Create User"> 
                </form> 
            </fieldset>
<?php include("footer.php"); ?>
