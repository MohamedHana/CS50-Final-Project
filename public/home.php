<?php
    require("../includes/config.php");
    
    $no_of_asked_questions = query("SELECT count(question_id) as counter
                                    FROM questions
                                    WHERE student_id = ".$_SESSION["id"]);
                                    
    $no_of_questions_asked_to_google = query("SELECT count(google_question_id) as counter
                                    FROM questions_for_google
                                    WHERE student_id = ".$_SESSION["id"]);                                    
                                    
    $questions = query(" SELECT  s.username , q.student_id , q.question_id , q.category , q.week , q.class , q.pset , q.text_question , q.status , q.ask_date , q.question_keys 
                         FROM students s, questions q
                         WHERE s.id = q.student_id                                     
                         ORDER BY q.ask_date desc 
                         LIMIT 10");
                         
    $answeres = query("SELECT a.answer_id , a.question_id , a.student_id , a.text_answer , a.answer_date , s.username
                       FROM answeres a , students s
                       WHERE a.student_id = s.id
                       ORDER BY a.answer_date ASC");   
                       
                                                        
    $notifications = get_notifications($_SESSION["id"],0);
                                      
    render("home_form.php" , ["title" => "Home" , "username"=> $_SESSION["name"] , 
                              "no_of_asked_questions"=> $no_of_asked_questions[0]["counter"] ,
                              "questions" => $questions , "answeres"=>$answeres,"notifications"=>$notifications,                              
                              "google_questions_count"=> $no_of_questions_asked_to_google[0]["counter"]]);
     
?>
