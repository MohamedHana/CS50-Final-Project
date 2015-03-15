<?php
	
	require("../includes/config.php");

	$data = query("select * 
		           from questions_for_google
		           where student_id = ?" , $_SESSION["id"]);
		           
    $notifications = get_notifications($_SESSION["id"], 0);
    
	render("questions_asked_to_google_form.php" , ["title"=>"Google questions" , "data"=>$data , "username"=>$_SESSION["name"] , 
	                                               "notifications"=>$notifications]);
?>
