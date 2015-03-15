<?php

    // configuration
    require("../includes/config.php"); 
    
    //change the user status to offline
    query("UPDATE students SET status = 'offline' WHERE id = ?" , $_SESSION["id"]);

    // log out current user, if any
    logout();

    // redirect user
    redirect("login.php");

?>
