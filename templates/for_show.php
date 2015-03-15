
<section class="container" >
    <div class="content row">         
        <section class="main col col-lg-7">                                                                     
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Student : <span class="label label-primary"><strong><?php echo $_SESSION["name"]?></strong></span>
                        
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
                                <div>                                                
                                    <div class="list-group">                                                   
                                        <h4 class="list-group-item-heading">
                                        Student : <span class="label label-primary"><strong><?php echo $answer["username"]?></strong></span>
                                        Answer date : <span class="label label-primary"><strong><?php echo $answer["answer_date"]?></strong></span>
                                        </h4>
                                        <p class="list-group-item-text"><textarea readonly><?php echo $answer["text_answer"]?></textarea></p>                                                                                                      
                                    </div> 
                                </div>                                                                                    
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
            </section>                                                              
        </div>
    </section>       
