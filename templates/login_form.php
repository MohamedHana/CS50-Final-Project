
    <section class="container" style="position:relative;height:550px; top: 150px; overflow:auto;  z-index:0; ">
        <div class="content row">
            <section id="mainSection" hidden class="main col col-lg-8">
               <article class="intro">
                <h2>(CS50x) Introduction To Computer Science</h2>
                <p>
                  CS50x is Harvard College's introduction to the intellectual enterprises of computer science and the art of programming for majors and non-majors alike, with or without prior programming experience.                                                         
                </p>  
                <p>
                 An entry-level course taught by David J. Malan, CS50x teaches students how to think algorithmically and solve problems efficiently.
                </p>
                <p>
                 Topics include abstraction, algorithms, data structures, encapsulation, resource management, security, software engineering, and web development.
                </p> 
                <p>
                 Languages include C, PHP and JavaScript plus SQL, CSS and HTML. Problem sets inspired by real world domains of biology, cryptography, finance,
                 forensics, and gaming. Designed for concentrators and non concentrators alike, with or without prior
                 programming experience.
                </p>
                <p>
                 Students who earn a satisfactory score on 9 problem sets (i.e., programming assignments) and a final project will receive a certificate from HarvardX. This is a self-paced course - you may take look at <a href="schedule_map.php" ><strong>course map & schedule</strong></a>.
                </p>
               </article>      
               <a href="register.php" class="btn btn-success btn-block"><strong> reserve your discussion seat </strong></a> 
            </section>
            <section id="sidebarSection" hidden class="sidebar col col-lg-4">
               <div id="loginForm" class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="login-panel panel panel-default">
                                <div class="panel-heading text-center">
                                    <h3 id="formTitle"><strong>Login</strong></h3>
                                </div>
                                <div id="formBody" class="panel-body">
                                    <form action="login.php" method="post" role="form">
                                        <fieldset>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Username" id="username" name="username" type="text">
                                                <div hidden id="username_alert" class="alert alert-danger">Sorry, not registered name..</div>
                                                <div hidden id="empty_name_alert" class="alert alert-danger">Enter your name first..</div>
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Password" id="password" name="password" type="password">
                                                <div hidden id="password_alert" class="alert alert-danger">Sorry, wrong password..</div>                                                
                                                <div hidden id="empty_password_alert" class="alert alert-danger">Enter your password first..</div>
                                            </div>
                                            <br/>
                                            <button type="submit" id="submitButton" class="btn btn-primary btn-block">Login <span class="glyphicon glyphicon-log-in"> </span></button>
                                            <hr>
                                           <a href="register.php" class="loginbtn">Or register from here</a>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>   
            </section>
        </div>
    </section>    
    
     <script>
       $(function() {
             
             $("#mainSection").fadeIn(1000); 
             $("#sidebarSection").slideDown(1000);  
             
             $('#username').on('mousedown' , function(){
                 $('#empty_name_alert').slideUp(500);
             });
             
             $('#password').on('mousedown' , function(){
                 $('#empty_password_alert').slideUp(500);
             });
             
             $('#submitButton').on('click' , function(e){                   
                  e.preventDefault();
                  
                  var username = $('#username').val();
                  var password = $('#password').val();
                  
                  if( username == '')
                  {
                     $('#empty_name_alert').show();   
                     return false;
                  }
                  else if(password == '')
                  {
                     $('#empty_password_alert').show();
                     return false;
                  }            
                  
                  $.post("login.php" , {'username': username , 'password': password} , 
                  function(output){                  
                     
                     if(output == 'wrongPassword')
                     {                            
                         $('#password_alert').slideDown(1000).slideUp(2000);
                         return false;                               
                     }
                     else if(output == 'wrongName')
                     {
                         $('#username_alert').slideDown(1000).slideUp(2000);
                         return false; 
                     } 
                     else
                     {                                                
                        //redirect user to home page in jquery                            
                         location.href="home.php";
                     }                    
                  });                  
                                                    
             });          
      
             $('#username').bind('mousedown', function( event ){
                $('#wrongname').hide();
             });
             
             $('#password').bind('mousedown', function( event ){
                $('#wrongpassword').hide();
             });
       });                  
       
    </script>
