<?php
    require("../includes/config.php");
  
     // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {    
        $html_code = "";    
        
        // query database for user
        $rows = query("SELECT * FROM students WHERE username = ?", $_POST["username"]);       
        // if we found user, check password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];
            
            // compare hash of user's input against hash that's in database
            if ($_POST["password"] == $row["password"])
            {      
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["id"];
                $_SESSION["name"] = $row["username"];                                                                                                                   
                
                //change the user status to online
                query("UPDATE students SET status = 1 WHERE id = ?" , $row["id"]);
                
                echo "success";                                                                                                                                                                                                                                                                                         
                                
            }
            else
            {
                echo "wrongPassword";
            }            
        }
        else
        {  
                echo "wrongName";                    
        }  
    } 
    else
    {    
        render("login_form.php" , ["title"=>"Log In"]);
    } 
    
    
?>
