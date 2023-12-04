<?php
    /**
     * FORM HANDLING
     * 1. Check if the submit button is clicked
     * 2. Get the user input
     * OPTION
     * 3. PROCESS the input
     * 4. display an OUTPUT
     */

    //  if-statement
    if( isset($_GET["btn_login"]) )
    {
        //if-block => the code here only runs if the condition is TRUE
        
        //INPUT
        $username = $_GET["username"];
        $password = $_GET["password"];

        //OUTPUT
        echo "<p>Username: $username</p>";
        echo "<p>Password: $password</p>";
    }

    //isset() will return TRUE if there is a value in that variable. Otherwise, FALSE

    if( isset($_POST["btn_login"]) )
    {
        //INPUT
        $username = $_POST["username"];
        $password = $_POST["password"];

        //OUTPUT
        echo "<p>Username: $username</p>";
        echo "<p>Password: $password</p>";
    }
?>