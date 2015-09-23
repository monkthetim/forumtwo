<html>

    <head>
        <title>Sign-In</title>
        <link rel="stylesheet" type="text/css" href="style-sign.css">
    </head> <body id="body-color"> 
        <div id="Sign-In"> 

            <fieldset style="width:20%"><legend>LOG-IN HERE</legend>
                <form method="POST" action="connectivity.php"> 
                    User <br><input type="text" name="user" size="40"><br>
                    Password <br><input type="password" name="pass" size="40"><br> 
                    <input id="button" type="submit" name="submit" value="Log-In"> 
                </form> 

                <form method="POST" action="createUser.php"> 
                    <input id="button" type="submit" name="create" value="Create User"> 
                </form> 
            </fieldset>
        </div> 
    </body> 
</html>

