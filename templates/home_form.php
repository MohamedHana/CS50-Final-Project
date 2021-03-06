    <div class="container" style="position:relative; top: 150px; z-index:0;" >
    <section class="container" >
        <div class="content row">         
            <section class="main col col-lg-7">
               <?php if(isset($questions)):?>
                 <?php foreach($questions as $question):?>                                                                       
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Student : <span class="label label-primary"><strong><?php echo $question["username"]?></strong></span>
                                        
                                        <div class="btn-group">
                                            Category : <span class="label label-primary"><strong><?php echo $question["category"]?></strong></span>                                        
                                            
                                            <?php if(!empty($question["week"])):?>
                                            <span class="label label-primary"><strong><?php echo $question["week"]?></strong></span>
                                            <?php endif ?>
                                            
                                            <?php if(!empty($question["class"])):?>
                                            <span class="label label-primary"><strong><?php echo $question["class"]?></strong></span>
                                            <?php endif ?>
                                            
                                            <?php if(!empty($question["pset"])):?>
                                            <span class="label label-primary"><strong><?php echo $question["pset"]?></strong></span>
                                            <?php endif ?>                                                                      
                                        </div>                                    
                                        <br/> 
                                        Ask date : <span class="label label-primary"><strong><?php echo $question["ask_date"]?></strong></span>
                                        
                                        <?php if($question["status"] == 0):?>
                                        Status : <span class="label label-primary"><strong>Not answered</strong></span> 
                                        <?php else: ?>
                                        Status : <span class="label label-primary"><strong>Answered</strong></span>
                                        <?php endif ?>                                                                           
                                    </div>
                                    <div class="panel-body">                           
                                        <label><h3><span class="label label-warning">Question ?</span></h3></label>
                                        <textarea readonly><?php echo $question["text_question"]?></textarea>                                                                                                                                         
                                        <label><h3><span class="label label-warning">Answeres *</span></h3></label>  
                                            <?php foreach($answeres as $answer):?>                              
                                                <?php if($answer["question_id"] == $question["question_id"]):?> 
                                                <div>                                                
                                                    <div class="list-group">                                                   
                                                        <h4 class="list-group-item-heading">
                                                        Student : <span class="label label-primary"><strong><?php echo $answer["username"]?></strong></span>
                                                        Answer date : <span class="label label-primary"><strong><?php echo $answer["answer_date"]?></strong></span>
                                                        </h4>
                                                        <p class="list-group-item-text"><textarea readonly><?php echo $answer["text_answer"]?></textarea></p>                                                                                                      
                                                    </div> 
                                                </div>                                                    
                                                <?php endif ?>                                                    
                                            <?php endforeach; ?>  
                                            <div id="new_answer<?php echo $question['question_id']?>">
                                            </div>                                                                                                                                                        
                                    </div> 
                                    <div class="panel-footer">
                                        <form action="add_answer.php" method="post">
                                            <label>Answer :</label>                                 
                                            <textarea id="answer<?php echo $question['question_id']?>"></textarea>
                                            <div hidden id="alert<?php echo $question['question_id']?>" class="alert alert-danger">Type your answer first..</div>
                                            <br/>
                                            <p align="right"><button id="<?php echo $question['question_id']?>" type="submit" class="btn addAnswer btn-primary">Add answer</button></p>  
                                        </form>                                  
                                    </div>                    
                                </div>                                                                     
                  <?php endforeach; ?>
              <?php endif ?>    
            </section>
                    <section class="sidebar col col-lg-5" style="position: fixed; top:170px; left:768px">
                        <div id="loginForm" hidden class="container" >
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    <div class="login-panel panel panel-default" >
                                        <div id="formTitle" class="panel-heading">
                                         <h3 align="center">Welcome, <?php print($username)?></h3>                           
                                        </div>
                                    <div id="formBody" class="panel-body"> 
                                        <a href="questions_asked_by_each_student.php">Asked questions <span class="badge pull-right"><?php print($no_of_asked_questions)?></span></a><br>
                                        <a href="google_questions.php">Google questions<span class="badge pull-right"><?php print($google_questions_count)?></span></a>                                   
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </section>
                  </div>    
            </section>
        </div>        
 
 <script>
       $(function() {                                     
            $('#loginForm').fadeIn(1000);
       });    
       
       
       //when user clicked add answer button
    $('.addAnswer').on('click' , function(e){
        e.preventDefault();
                
        //get the id of the pressed button
        var id_for_all = $(this).attr('id');        

        //get the answer 
        var answer = $('#answer'+id_for_all).val();       
        //alert user if the answer is empty
        if(answer == "")
        {
            $('#alert'+id_for_all).slideDown(1000);     
            $('#alert'+id_for_all).slideUp(2000); 
            
            return false;    
        }
        
        //reset the answer area
        $('#answer'+id_for_all).val('');
        
        var dt = new Date();  
        //send the data to add_answer.php file to be processed
        $.post('add_answer.php', 
               {'question_id': id_for_all , 'answer': answer},
               function(output){
                    //get the response from add_answer.php
                    if(output == "failed")
                    {
                        alert(output);
                    }
                    else 
                    {      
                        var month = dt.getMonth()+1;
                        var time = dt.getFullYear()+"-"+month+"-"+dt.getDate()+" "+dt.getHours()+":"+dt.getMinutes()+":"+dt.getSeconds();                                                                                      
                        var add_this_answer = '<div class="list-group"><h4 class="list-group-item-heading"> Student : <span class="label label-primary"><strong>'+output+'</strong></span> Answer date : <span class="label label-primary"><strong>'+time+'</strong></span></h4><p class="list-group-item-text"><textarea readonly>'+answer+'</textarea></p></div>'  
                        $('#new_answer'+id_for_all).append(add_this_answer);
                    }                                            
               });
               
    }); 
 </script>
