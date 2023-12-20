<?php
    function dbConnect()
    {
        $servername = "localhost";
        $username = "root"; //MAMP and XAMPP uses "root"
        $password = "root"; //MAMP uses "root" for the password. XAMPP doesn't have a password.
        $db_name = "minimart_catalog";
        
        $conn = new mysqli($servername, $username, $password, $db_name);
        // new mysqli($servername, $username, $password, $db_name) 
        // this creates a connection to the database.
        // This code returns what we call an Object.
        //When you say an object, it has variables and functions in it.
        //On line 7, the connection to the database is assign to $conn
    
        if($conn->connect_error) //check if there is an error in the connection
        {
            die("Connection unsuccessful: ". $conn->connect_error);
        }
        else
        {
            // echo "connection successful";
            return $conn; //return the connection to the database
        }
    }

?>
