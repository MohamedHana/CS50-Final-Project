<?php
    // configuration
    require("../includes/config.php");
    
        // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {   
        //insert new data into students table
        $success = query("insert into students(username,email,password) values(?,?,?)" , $_POST["username"],$_POST["email"],$_POST["password"]);
        
        //if query returns false
        if($success === false)
        {
            apologize("Username or email already taken, please choose another");
            //render("register_form.php" , ["title"=>"Register" , "chooseanothername"=>"chooseanothername"]);
        }
        
        //save the user id 
        $rows = query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];
        
        //store user id in current session 
        $_SESSION["id"] = $id;
        $_SESSION["name"] = $_POST["username"];
        
        //change the user status to online
        query("UPDATE students SET status = 1 WHERE id = ?" , $_SESSION["id"]);        
        
        //redirect user to index.php
        redirect("home.php");
    }
    else
    {
        render("register_form.php" , ["title"=>"Register"]);    
    }
?>    
