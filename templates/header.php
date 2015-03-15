<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Crafty+Girls|Istok+Web:400,700,400italic,700italic|Shadows+Into+Light|Merriweather:400,700italic,400italic,300,700,300italic' rel='stylesheet' type='text/css'>   --> 

    <!-- Bootstrap -->
    <link href="css/mystyles.css" rel="stylesheet">    
    <link href="css/bootstrap.css" rel="stylesheet">

    
    <?php if (isset($title)): ?>
        <title>CS50x: <?= htmlspecialchars($title) ?></title>
    <?php else: ?>
        <title>CS50x</title>
    <?php endif ?>    
        
  </head>
  <body >  
    <div class="content row" id="head_and_main_menu">
        <div class="col-lg-3">
              <header class="clearfix">                 
                <section id="logo">                   
                    <a href="home.php"><img src="/img/harvard2.jpg" alt="CS50x Logo"></img> </a>                    
                    <a href="home.php" style="position:fixed; left:760px; top:3px"><img src="/img/Harvard_Logo.gif" alt="CS50x Logo"></img> </a>                               
                </section>   
              </header>                  
        </div>
        <div class="container">
        <div class="col-lg-12">
           <ul class="nav nav-tabs">
              <li><a href="home.php">Home</a></li>
              <li><a href="livingroom.php">Ask room</a></li>
              <li><a href="#">Staff room</a></li>
              <li><a href="map_schedule.php">Course map & schedual </a></li>
              <li><a href="appliance.php">Appliance</a></li>
              <li><a href="#">Events</a></li>
              <?php if(isset($username)): ?>
                <li><a href="logout.php">Logout</a></li>                   
                <p align="right">
                <ul id="nav">
                    <li id="notification_li">                      
                        <?php echo $notifications;?>
                    </li>                     
                </ul>          
                </p>        
              <?php endif ?>
           </ul>
        </div>                
        </div>
    </div>
    <br/>          
    
        <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.form.min.js"></script>
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>--> 
    <script src="js/myscript.js"></script> 
    
<script> 
   
   
setInterval( function(){
        $.post("notifications.php" , {} , function(output){
                               
                if(output != "no_new_notification")
                {   
                 
                    $('#notification_li').html(output);
                }
          });
},3000);   


function click_link()
{    
    $.post("update_notifications.php" , {} , function(output){
                
        }); 
        
        $("#notificationContainer").fadeToggle(300);
        $("#notification_count").fadeOut("slow");
        return false;     
}


$(document).ready(function()
{  
 
    //Document Click hiding the popup 
    $(document).click(function(){
        $("#notificationContainer").hide();
    });

    //Popup on click
   /* $("#notificationContainer").click(function(e){
        e.preventDefault();                
    });*/
    
    $('.list-group-item').on('click' , function(e){
        e.preventDefault();                
        
        var notification_id = $(this).attr('href');
        
        if(notification_id != '#')
        {        
            $.post('target_question.php' , {"notification_id":notification_id} , function(output){                        
                
            });       
        }    
    });
     

});
</script>
