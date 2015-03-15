<?php 
    require("../includes/config.php");
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //set pset variable to NULL to be inserted in database as NULL    
        if($_POST["category"] != "problemSets")
        {
            $_POST["pset"] = NULL;
        }
        else
        {   
            $_POST["pset"] = "pset".$_POST["pset"];
        }
        
        //set week and class variables to NULL to be inserted in database as NULL    
        if($_POST["category"] != "materials")
        {
            $_POST["week"]= NULL;
            $_POST["class"]= NULL;
        }
        else
        {
            $_POST["week"]= "week".$_POST["week"];
        }
           
        //insert the data into database
        $output = query("INSERT INTO questions(student_id,category,week,class,pset,text_question,status,ask_date,question_keys)
                         VALUES (".$_SESSION["id"].",'".$_POST["category"]."','".$_POST["week"]."','".$_POST["class"]."','".$_POST["pset"]."','".$_POST["text_question"]."',0,now(),'".$_POST["question_keys"]."')");            
        
        if($output === false)       
        {
           echo "failed";
        }
        else
        {
            echo "success";
        }
                                                                                                                     
        
        //get the question id
        $last_question_id = query("SELECT LAST_INSERT_ID() AS id FROM questions");
        //get the posted question date and time 
        $last_question_date = query("SELECT ask_date as date
                                     FROM questions 
                                     WHERE question_id = ?" , $last_question_id[0]["id"]);
                        
        //notification message
        $notification_message = "A new question asked by ".$_SESSION["name"]." at ".$last_question_date[0]["date"];                
        //insert the new event into notification area 
        $notification_output = query("INSERT INTO questions_notifications(student_id,question_notification_message,question_ask_date)
                                      VALUES (?,?,?)", $_SESSION["id"] , $notification_message , $last_question_date[0]["date"]); 
                                                                                   
    }    
?>
