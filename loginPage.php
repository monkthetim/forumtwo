<?php include("header.php"); ?>
       
       
    

            <fieldset style="width:20%"><h1>LOG-IN HERE</h1>
                <form method="POST" action="connectivity.php"> 
                    <h4>User  <br><input type="text" name="user" size="40"><br> <h4>
                    <h4> Password <br><input type="password" name="pass" size="40"><br> <h4>
                    <input id="button" type="submit" name="submit" value="Log-In"> 
                </form> 

                <form method="POST" action="createUser.php"> 
                    <input id="button" type="submit" name="create" value="Create User"> 
                </form> 
            </fieldset>
            
 <?php include("footer.php"); ?>
