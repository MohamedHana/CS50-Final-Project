<?php
	
	require("../includes/config.php");

	$clause = "";

	// if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {    	    		
		if(!empty($_POST["student_name"]))    	
		{
			$id = query("select id as id
				         from students
				         where username = '".$_POST["student_name"]."'");

			if (!isset($id[0]["id"]) || $id === false ) 
			{
				echo "not found";
			}
			else
			{
				$clause .= " q.student_id = ".$id[0]["id"];
			}
		}	


		if(!empty($_POST["question_keywords"]))
		{
			$clause .= " && q.question_keys LIKE '%".$_POST["question_keywords"]."%' " ;			
		}

		if(!empty($_POST["ask_date_time"]))
		{
		    
			$clause .= " && DATE_FORMAT(q.ask_date,'%Y-%m-%d') = '".$_POST["ask_date_time"]."' ";
			
		}

		if(!empty($_POST["category_list"]))
		{
			$clause .= " && q.category = '".$_POST["category_list"]."' ";			
		}

		if(!empty($_POST["psets_list"]))
		{
			$clause .= " && q.pset = '".$_POST["psets_list"]."' ";			
		}

		if(!empty($_POST["weeks_list"]))
		{
			$clause .= " && q.week = '".$_POST["weeks_list"]."' ";			
		}
		
		if(!empty($_POST["classes_list"]))
		{
			$clause .= " && q.class = '".$_POST["classes_list"]."' ";			
		}


		$check = substr($clause, 0, 3);	

		if($check == " &&")
		{
			$clause = substr($clause,3);
		}		


		$questions = query("SELECT  s.username , q.student_id , q.question_id , q.category , q.week , q.class , q.pset , q.text_question , q.status , q.ask_date , q.question_keys 
                            FROM students s, questions q
                            WHERE s.id = q.student_id
                            && ".$clause);

		$answeres = query("SELECT a.answer_id , a.question_id , a.student_id , a.text_answer , a.answer_date , s.username
                       FROM answeres a , students s
                       WHERE a.student_id = s.id
                       ORDER BY a.answer_date ASC"); 

		extract($questions);
		extract($answeres);
		require("../templates/search_questions.php");					
    	
    }


?>
