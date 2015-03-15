<?php
    
    require("../includes/functions.php");
    
    // enable sessions
    session_start();
    
    if(isset($_SESSION["name"]))
    {
        $notifications = get_notifications($_SESSION["id"] , 0);
        
        render("appliance_form.php", ["title"=>"Appliance" , "username"=> $_SESSION["name"] , "notifications"=>$notifications ] );
    }
    else
    {
        render("appliance_form.php", ["title"=>"Appliance"] );
    }
    
    
?>
