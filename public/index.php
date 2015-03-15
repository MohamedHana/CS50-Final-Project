<?php
    require("../includes/config.php");

    render("home_form.php" , ["title" => "Home" , "username"=> $_SESSION["name"]]);

    
?>
