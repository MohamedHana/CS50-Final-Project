    
    <div class="container" style="position:relative; top: 160px; z-index:0;">
         <div class="row  pad-top" align="center">  
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel  panel-default " style="text-align: center">
                            <div class="panel-heading">
                        <strong>  Register </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post" action="register.php">
                                    <br>
                                        <div  class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="Your Name" required>
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" id="confirmation" class="form-control" placeholder="Retype Password" required>                                            
                                        </div>
                                        <div id="passwordsnotmatch" class="text-danger"></div>
                                     <br/>
                                     <button type="submit" id="submitbtn" class="btn btn-success ">Register Me</button>
                                    <hr>
                                    Already Registered ?  <a href="home.php">Login here</a>
                                    </form>              
                            </div>
                        </div>
                    </div>
 
     </div>
  </div>

    <script>
       $(function() {
             $(".panel").hide().slideDown(1000);
             
             $('#submitbtn').on('click' , function(){
             
                if($('#password').val() != $('#confirmation').val())
                {
                    $('#passwordsnotmatch').html('Passwords does not match');
                    return false;
                }   
                
             });   
 
       }); 
    </script>
