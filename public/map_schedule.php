<?php 
    require("../includes/functions.php");
    
    // enable sessions
    session_start();
    
    if(isset($_SESSION["name"]))
    {
        $notifications = get_notifications($_SESSION["id"],0);
        
        render("map_schedule_form.php" , ["title"=> "Map & Schedule" , "username"=> $_SESSION["name"] , "notifications"=>$notifications]);
    }
    else
    {
        render("map_schedule_form.php" , ["title"=> "Map & Schedule"]);
    }
    
    
?>
