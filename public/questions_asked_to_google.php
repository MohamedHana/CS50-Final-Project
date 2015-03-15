<?php
	require("../includes/config.php");

	// if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {               
    	$query = query("insert into questions_for_google(student_id,question,url,date_of_ask)
    		            values(?,?,?,now())",$_SESSION["id"] , $_POST["question"] , $_POST["the_link"]);

    	if($query === false)
    	{
    		echo "failed";    		
    	}
    	else
    	{
    		echo "success";
    	}
    }

?>
