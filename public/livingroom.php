<?php
    require("../includes/config.php");                           
    
    $notifications = get_notifications($_SESSION["id"],0);
    
    render("livingroom_form.php" , ["title" => "Living Room" ,"username" => $_SESSION["name"] , "notifications"=>$notifications]);
?>


