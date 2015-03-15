<?php
    require("../includes/config.php");
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {       
        query("update answeres_notifications
               set status = 1 
               where a_notification_id = ".$_POST["notification_id"]);
               
        $notification_data = query("select * 
                                    from answeres_notifications
                                    where a_notification_id = ".$_POST["notification_id"]);
                                    
        $question = query("select * 
                           from questions
                           where question_id = ".$notification_data[0]["question_id"]);
                                   
        $question = $question[0]; 
                          
        $answeres = query("SELECT a.answer_id , a.question_id , a.student_id , a.text_answer , a.answer_date , s.username
                           FROM answeres a , students s
                           WHERE a.student_id = s.id
                           && a.question_id = ".$notification_data[0]["question_id"]."
                           order by a.answer_date asc");             
                           
        extract($question);                                                             
        extract($answeres);
        require("../templates/for_show.php");
        
    }                                                        
?>
