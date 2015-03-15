<?php
    require("../includes/config.php");
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $output = get_notifications($_SESSION["id"], 1);
        
        echo $output;       
    }


?>
