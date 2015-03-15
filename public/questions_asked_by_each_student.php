<?php
    
    require("../includes/config.php");
    
    $no_of_asked_questions = query("SELECT count(question_id) as counter
                                    FROM questions
                                    WHERE student_id = ".$_SESSION["id"]);
                                    
    $no_of_questions_asked_to_google = query("SELECT count(google_question_id) as counter
                                    FROM questions_for_google
                                    WHERE student_id = ".$_SESSION["id"]);    
                                    
    //get all questions asked by current user from database
    $asked_questions = query("SELECT question_id , student_id , category , week , class , pset , text_question , status ,
                                     ask_date , question_keys 
                              FROM questions
                              WHERE  student_id = ?                                                           
                              ORDER BY ask_date DESC", $_SESSION["id"]);
                              
    $x = 0;//counter for array index    
    
    //store all question ids into array                              
    foreach($asked_questions as $question)
    {
        $question_ids[$x] = $question["question_id"];
        $x++;
    }
    
    //convert the array elemets to a string
    $question_ids = implode(",",$question_ids);                              
    
    //get all answeres for all questions asked by current user
    $answeres = query("SELECT a.answer_id , a.question_id , a.student_id , s.username , a.text_answer , a.answer_date 
                       FROM answeres a , students s                        
                       WHERE a.question_id IN(".$question_ids.")
                       AND   s.id = a.student_id ");                          
    
    $notifications = get_notifications($_SESSION["id"] , 0);
                         
    //check for database errors 
    if($asked_questions === false)                          
    {
        return false ;
    }
    else
    {
        //redirect user to questions_asked_form with the collected data
        render("questions_asked_form.php" , ["title"=>"My questions" , "questions"=> $asked_questions , "notifications"=>$notifications ,
                                             "answeres"=> $answeres , "no_of_asked_questions"=> $no_of_asked_questions[0]["counter"] , "username"=> $_SESSION["name"],
                                             "google_questions_count"=> $no_of_questions_asked_to_google[0]["counter"]]);
    }
?>
