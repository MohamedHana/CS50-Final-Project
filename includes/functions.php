<?php

    /**
     * functions.php
     *
     * Computer Science 50
     * Problem Set 7
     *
     * Helper functions.
     */
    require_once("PHPMailer/class.phpmailer.php");
    require_once("constants.php");
    
    /**
     * get the notifications 
     */
    function get_notifications($id , $mode)
    {
        $html_code = "";
               
        $new_notifications_count = query("select count(a_notification_id) as count
                                          from answeres_notifications
                                          where taken = 0
                                          && student_who_asked_id = ".$id."
                                          && student_who_answered_id != ".$id);
                                          
        if($mode == 1)
        {
             if($new_notifications_count[0]["count"] == 0)       
             {
                return "no_new_notification";
             }
        }
        
        $old_notifications = query("select * 
                                    from answeres_notifications
                                    where taken = 1
                                    && student_who_asked_id = ".$id."
                                    && student_who_answered_id != ".$id."
                                    order by answer_date desc");
        $new_notifications = query("select * 
                                    from answeres_notifications
                                    where taken = 0
                                    && student_who_asked_id = ".$id."
                                    && student_who_answered_id != ".$id."
                                    order by answer_date desc");   
                                                                                                                                        
                                          
        if($new_notifications_count[0]["count"] == 0)    
        {
            $html_code .= '<span id="notification_count" hidden></span>';
        }   
        else
        {
            $html_code .= '<span id="notification_count">'.$new_notifications_count[0]["count"].'</span>';
        }                           
                                 
        $html_code .='<a href="#" id="notificationLink" class="notificationLink" onclick="click_link()">Notifications</a><div id="notificationContainer"><div id="notificationTitle">Notifications</div><div id="notificationsBody" class="notifications"><div class="list-group">';
                               
                
        foreach($new_notifications as $noty)            
        {
            $html_code .='<a href="'.$noty["a_notification_id"].'" class="list-group-item" style="color:#ff0000">'.$noty["answer_notification_message"].'</a>';                            
        }
        
        foreach($old_notifications as $noty)
        {
            if($noty["status"] == 0)
            {
                $html_code .='<a href="'.$noty["a_notification_id"].'" class="list-group-item" style="color:#ff0000">'.$noty["answer_notification_message"].'</a>';        
            }
            else
            {
                $html_code .='<a href="'.$noty["a_notification_id"].'" class="list-group-item" style="color:#0000ff">'.$noty["answer_notification_message"].'</a>';    
            }
        }

        $html_code .='</div></div>'; 
        
        return $html_code;       
    }
    
    

    /**
     * Apologizes to user with message.
     */
    function apologize($message)
    {
        render("apology.php", ["title"=>"Sorry","message" => $message]);
        exit;
    }

    /**
     * Facilitates debugging by dumping contents of variable
     * to browser.
     */
    function dump($variable)
    {
        require("../templates/dump.php");
        exit;
    }

    /**
     * Logs out current user, if any.  Based on Example #1 at
     * http://us.php.net/manual/en/function.session-destroy.php.
     */
    function logout()
    {
        // unset any session variables
        $_SESSION = [];

        // expire cookie
        if (!empty($_COOKIE[session_name()]))
        {
            setcookie(session_name(), "", time() - 42000);
        }

        // destroy session
        session_destroy();
    }


    /**
     * Executes SQL statement, possibly with parameters, returning
     * an array of all rows in result set or false on (non-fatal) error.
     */
    function query(/* $sql [, ... ] */)
    {
        // SQL statement
        $sql = func_get_arg(0);

        // parameters, if any
        $parameters = array_slice(func_get_args(), 1);

        // try to connect to database
        static $handle;
        if (!isset($handle))
        {
            try
            {
                // connect to database
                $handle = new PDO("mysql:dbname=" . DATABASE . ";host=" . SERVER, USERNAME, PASSWORD);

                // ensure that PDO::prepare returns false when passed invalid SQL
                $handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
            }
            catch (Exception $e)
            {
                // trigger (big, orange) error
                trigger_error($e->getMessage(), E_USER_ERROR);
                exit;
            }
        }

        // prepare SQL statement
        $statement = $handle->prepare($sql);
        if ($statement === false)
        {
            // trigger (big, orange) error
            trigger_error($handle->errorInfo()[2], E_USER_ERROR);
            exit;
        }

        // execute SQL statement
        $results = $statement->execute($parameters);

        // return result set's rows, if any
        if ($results !== false)
        {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            return false;
        }
    }

    /**
     * Redirects user to destination, which can be
     * a URL or a relative path on the local host.
     *
     * Because this function outputs an HTTP header, it
     * must be called before caller outputs any HTML.
     */
    function redirect($destination)
    {
        // handle URL
        if (preg_match("/^https?:\/\//", $destination))
        {
            header("Location: " . $destination);
        }

        // handle absolute path
        else if (preg_match("/^\//", $destination))
        {
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            header("Location: $protocol://$host$destination");
        }

        // handle relative path
        else
        {
            // adapted from http://www.php.net/header
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
            header("Location: $protocol://$host$path/$destination");
        }

        // exit immediately since we're redirecting anyway
        exit;
    }

    /**
     * Renders template, passing in values.
     */
    function render($template, $values = [])
    {
        // if template exists, render it
        if (file_exists("../templates/$template"))
        {
            // extract variables into local scope
            extract($values);

            // render header
            require("../templates/header.php");

            // render template
            require("../templates/$template");

            // render footer
            require("../templates/footer.php");
        }

        // else err
        else
        {
            trigger_error("Invalid template: $template", E_USER_ERROR);
        }
    }
    
                   
    function email($email , $info)
    {

        $mail             = new PHPMailer();

        $body             = $info["message"];
        //$body             = eregi_replace("[\]",'',$body);

        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->Host       = "ssl://smtp.gmail.com"; // SMTP server
        $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                                   // 1 = errors and messages
                                                   // 2 = messages only
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
        $mail->Username   = "mohamed.cs50.student@gmail.com";  // GMAIL username
        $mail->Password   = "mohamedhana2014";            // GMAIL password

        $mail->SetFrom($email , $info["title"]);

        //$mail->AddReplyTo("user2@gmail.com', 'First Last");

        $mail->Subject    = $info["subject"];

        //$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

        $mail->MsgHTML($body);

        $address = "mohamed.hana0@gmail.com";
        $mail->AddAddress($address, "mohamed");

        //$mail->AddAttachment("images/phpmailer.gif");      // attachment
        //$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

        if(!$mail->Send()) {
          echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
          echo "Message sent!";
        }

    } 
   

?>
