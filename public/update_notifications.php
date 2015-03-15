<?php
    require("../includes/config.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
       $output= query("update answeres_notifications
               set taken = 1
               where student_who_asked_id = ".$_SESSION["id"]);
               
        echo "success";    
    }       
?>
