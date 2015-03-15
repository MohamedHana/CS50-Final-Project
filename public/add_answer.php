<?php

    require("../includes/config.php");
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //insert the new answer into answeres table
        $output = query("INSERT INTO answeres(question_id,student_id,text_answer,answer_date) 
                         VALUES (".$_POST["question_id"].",".$_SESSION["id"].",'".$_POST["answer"]."',now())");
                         
                  query("update questions 
                         set status = 1
                         where question_id = ".$_POST["question_id"]);       
                  
        //check if failed to insert answer           
        if($output === false)
        {
            echo "failed";
        }
        else
        {
             echo $_SESSION["name"];
        }


        //get the answer id
        $last_answer_id = query("SELECT LAST_INSERT_ID() AS id FROM answeres");
        
        //get the posted answer date and time 
        $last_answer_date = query("SELECT answer_date as date , question_id 
                                   FROM answeres 
                                   WHERE answer_id = ?" , $last_answer_id[0]["id"]);

        $student_who_asked_id = query("SELECT student_id
                                       FROM questions
                                       WHERE question_id = ".$_POST["question_id"]);
                
                        
        //notification message
        $notification_message = "A new Answer added by ".$_SESSION["name"]." at ".$last_answer_date[0]["date"];                
        //insert the new event into notification area 
        $notification_output = query("INSERT INTO answeres_notifications(student_who_asked_id,student_who_answered_id,answer_notification_message,answer_date,status,taken,question_id)
                                      VALUES (?,?,?,?,0,0,?)",
                                      $student_who_asked_id[0]["student_id"] ,$_SESSION["id"] ,
                                      $notification_message , $last_answer_date[0]["date"],$last_answer_date[0]["question_id"]); 
        
               
    }

?>
