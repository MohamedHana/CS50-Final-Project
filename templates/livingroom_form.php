

   <div class="container" style="position:relative; top: 150px; z-index:0;">        
    <section class="main col col-lg-4"> 
      <div class="list-group">
        <a href="#" id="ask_question_btn" class="list-group-item list-group-item-success">Ask a question >></a>
        <a href="#" id="search_question_btn"class="list-group-item list-group-item-info">Search for a question >></a>
        <a href="#" id="ask_google_btn"class="list-group-item list-group-item-warning">Ask google >></a>       
      </div>
      <div hidden id="successful" class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
        <strong>successful</strong> your question have been added
      </div>
    </section>      
      <section class="main col col-lg-6"> 
        <div class="row">   
            <div class="col-md-6">
                <div hidden id="search_question"class="panel panel-primary">
                    <div class="panel-heading">   
                        <h3 align="center"> Search for a question</h3>                                        
                    </div>
                    <div class="panel-body">             
                        <form class="form-horizontal" role="form" id="all_form_data" action="search_question.php">
                           <div class="form-group">
                              <label for="firstname">Student who asked the question</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" id="student_name" 
                                    placeholder="Student name...">
                              </div>
                           </div>
                           <div class="form-group">
                              <label >Question keywords</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" id="question_keywords" 
                                    placeholder="keywords....">
                              </div>
                           </div>
                           <div class="form-group">
                              <label >Ask date </label>
                              <div class="col-sm-10">
                                 <input type="date" class="form-control" id="ask_date_time">
                              </div>                              
                           </div>
                           <div class="form-group col-sm-10">
                              <label >Question category </label>                                
                              <select id="category_list"class="form-control col-sm-6">
                                 <option value=""></option> 
                                 <option value="appliance">appliance</option>
                                 <option value="materials">materials</option>
                                 <option value="problemSets">problem sets</option>
                                 <option value="general">general</option>
                              </select> 
                              <select hidden id="psets_list" class="form-control col-sm-6">
                                 <option value=""></option> 
                                 <option value="pset0">pset 0</option> 
                                 <option value="pset1">pset 1</option>
                                 <option value="pset2">pset 2</option>
                                 <option value="pset3">pset 3</option>
                                 <option value="pset4">pset 4</option>
                                 <option value="pset5">pset 5</option>
                                 <option value="pset6">pset 6</option>
                                 <option value="pset7">pset 7</option>
                                 <option value="pset8">pset 8</option>                    
                              </select>
                              <select hidden id="weeks_list" class="form-control col-sm-6">
                                 <option value=""></option> 
                                 <option value="week0">week 0</option> 
                                 <option value="week1">week 1</option>
                                 <option value="week2">week 2</option>
                                 <option value="week3">week 3</option>
                                 <option value="week4">week 4</option>
                                 <option value="week5">week 5</option>
                                 <option value="week7">week 7</option>
                                 <option value="week8">week 8</option>
                                 <option value="week9">week 9</option>
                                 <option value="week10">week 10</option>
                                 <option value="week12">week 12</option>
                              </select>
                              <select hidden id="classes_list" class="form-control col-sm-6">
                                 <option value=""></option> 
                                 <option value="lecture">lecture</option> 
                                 <option value="section">section</option>
                                 <option value="walkthrought">walkthrouths</option>
                                 <option value="shorts">shorts</option>                                 
                              </select>                             
                           </div>                                                                                 
                        </form>    
                    </div>
                    <div class="panel-footer">
                       <div hidden id="all_fields_empty" class="alert alert-danger">Enter at least one type of search...</div>
                       <div hidden id="no_such_student" class="alert alert-danger">No student with this name found !!</div>
                       <div align="right"class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                               <button type="submit" id="search_question_submit" class="btn btn-primary">Search..</button>
                            </div>
                       </div>
                   </div>
                </div>
                <div id="questions_found" hidden>                  
                </div>
                <div hidden id="ask_google"class="panel panel-primary">
                    <div class="panel-heading">   
                        <h3 align="center"> Ask google </h3>                 
                    </div>
                    <div class="panel-body">  
                      <div align="center" class="form-group">
                           <label>send my question to google</label>
                           <form id="go_to_google" action="https://www.google.com/search" method="get">
                           <div align="center" class="col-sm-11">
                              <input type="text" class="form-control" id="question_for_google" placeholder="Enter your question....">
                           </div>
                      </div>                   
                    </div>
                    <div class="panel-footer">
                      <div hidden id="empty_input_for_google" class="alert alert-danger">Enter your question first...</div>
                      <div align="right"class="form-group">
                           <div class="col-sm-offset-2 col-sm-10">
                             <button type="submit" id="question_for_google_submit" class="btn btn-primary">Send my question..</button>
                           </div>
                           </form>
                      </div>
                    </div>
                </div>
                <div id="ask_question"class="panel panel-primary">
                      <div class="panel-heading">   
                        <h3 align="center">Ask a question</h3>
                      </div>                      
                      <div class="panel-body">
                          <div id="category" class="btn-group">                        
                            <button id="categorybtn" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                              <span class="caret"></span>
                              <span class="sr-only">Category</span>
                            </button>
                            <ul id="categoryList" class="dropdown-menu" role="menu">
                              <li><a id="appliance" href="appliance">Appliance</a></li>
                              <li><a id="materials" href="materials">Materials</a></li>
                              <li><a id="problemsets" href="problemsets">Problem Sets</a></li>
                              <li><a id="general" href="general">General</a></li>
                            </ul>
                          </div>
                          <div id="psets" class="btn-group">                        
                            <button id="psetsbtn" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                              <span class="caret"></span>
                              <span class="sr-only">Problem Set</span>
                            </button>
                            <ul id="psetsList" class="dropdown-menu" role="menu">
                              <li><a href="0">pset0</a></li>
                              <li><a href="1">pset1</a></li>
                              <li><a href="2">pset2</a></li>
                              <li><a href="3">pset3</a></li>
                              <li><a href="4">pset4</a></li>
                              <li><a href="5">pset5</a></li>
                              <li><a href="7">pset6</a></li>
                              <li><a href="7">pset7</a></li>
                              <li><a href="8">pset8</a></li>
                            </ul>
                          </div>                        
                          <div id="weeks" class="btn-group">                        
                            <button id="weeksbtn" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                              <span class="caret"></span>
                              <span class="sr-only">Week</span>
                            </button>
                            <ul id="weeksList" class="dropdown-menu" role="menu">
                              <li><a href="0">0</a></li>
                              <li><a href="1">1</a></li>
                              <li><a href="2">2</a></li>
                              <li><a href="3">3</a></li>
                              <li><a href="4">4</a></li>
                              <li><a href="5">5</a></li>
                              <li><a href="7">7</a></li>
                              <li><a href="8">8</a></li>
                              <li><a href="9">9</a></li>
                              <li><a href="10">10</a></li>
                              <li><a href="12">12</a></li>
                            </ul>
                          </div>
                          <div id="class" class="btn-group">                        
                            <button id="classbtn" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                              <span class="caret"></span>
                              <span class="sr-only">Class</span>
                            </button>
                            <ul id="classList" class="dropdown-menu" role="menu">
                              <li><a href="lecture">lecture</a></li>
                              <li><a href="section">section</a></li>
                              <li><a href="walkthrough">walkthrough</a></li>
                              <li><a href="shorts">shorts</a></li>
                            </ul>
                          </div>
                          <div id="categoryAlert" class="alert alert-danger "></div> 
                          <br> <br>                      
                        <form id="postForm" role="form" action="post_question.php" method="post">
                          <div class="input-group">
                            <span class="input-group-addon"><strong>keywords</strong></span>
                            <input type="text" id="keywords" class="form-control" >
                          </div>
                          <div id="keywordsAlert" class="alert alert-danger "></div>
                          <div class="form-group">                            
                            <label for="name">Text:</label>                                                       
                            <textarea class="form-control" id="textarea" rows="5" placeholder="Type your question..."></textarea>                                       
                          </div>
                          <div id="questionAlert" class="alert alert-danger "></div>
                        </form>
                                                              
                        <div class="panel-footer">
                          <div align="right">
                             <button id="postbtn" form="postForm" type="submit" class="btn btn-primary ">Ask ??</button>
                          </div>
                        </div>                      
                   </div>      
             </div>
             </div>
        </div>
      </section> 
   </div>    


<script>

$(document).ready(function() { 

    //ask google panel
    //when user press search google button
    $('#question_for_google_submit').on('click' , function(e){
        e.preventDefault();

        //get user question
        var question_for_google = $('#question_for_google').val();

        //check for user input 
        if(!question_for_google)
        {
          $('#empty_input_for_google').slideDown(1000);
          $('#empty_input_for_google').slideUp(3000);

          return false;
        }
    
        //prepare the data to be send to google and get the response form google (ready for impelement) 
        //$( "#go_to_google" ).submit();
        var encoded = encodeURIComponent($('#question_for_google').val());        
        window.open('https://www.google.com/search?q='+encoded, '_blank');        
        $.post('questions_asked_to_google.php' , {'question':$('#question_for_google').val() , 'the_link':'https://www.google.com/search?q='+encoded} ,
               function(output){
                    if(output == "success")
                    {
                       $('#successful').show(1000);                       
                       $('#successful').hide(6000);
                    }
                    else
                    {
                      alert(output);
                    }
               });
        $('#question_for_google').val('');

    });


    //when category select list change
    $('#category_list').change(function(){

        //get the user choice 
        var user_select = $('#category_list').val();

        if(user_select == "materials")
        {
          $('#weeks_list').slideDown();
          $('#classes_list').slideDown();
          $('#psets_list').hide();
        }
        else if (user_select == "problemSets") 
        {
          $('#weeks_list').hide();
          $('#classes_list').hide();
          $('#psets_list').slideDown();
        }
        else    
        {
          $('#weeks_list').hide();
          $('#classes_list').hide();
          $('#psets_list').hide();
        }

    });


    $('#search_question_submit').on('click', function(e){
          e.preventDefault();                  

          //get all user inputs
          var student_name = $('#student_name').val();
          var question_keywords = $('#question_keywords').val();
          var ask_date_time = $('#ask_date_time').val();
          var category_list = $('#category_list').val();          
          var psets_list = $('#psets_list').val();          
          var weeks_list = $('#weeks_list').val();          
          var classes_list = $('#classes_list').val();          
                              
          //if user didn't enter any search type 
          if(!student_name && !question_keywords && !ask_date_time && category_list==null)
          {
              $('#all_fields_empty').slideDown(1000);
              $('#all_fields_empty').slideUp(3000);

              return false;
          }

          //get all user choices 
          var search_data = {student_name:student_name, question_keywords:question_keywords,
                        ask_date_time:ask_date_time , category_list:category_list ,
                        psets_list:psets_list , weeks_list:weeks_list , classes_list:classes_list};                                                              

          //data ready to be sent (using ajax request with a return of questions matches user inputs)
          $.ajax({
                url: 'search_question.php',  //Server script to process data
                type: 'POST',
                xhr: function() {  // Custom XMLHttpRequest
                    var myXhr = $.ajaxSettings.xhr();
                    return myXhr;
                },
                //Ajax events
                success: function(output){
                            if(output == "student_not_found")
                            {
                                $('#no_such_student').slideDown(1000);
                                $('#no_such_student').slideUp(3000);
                            }
                            else
                            {
                               $('#questions_found').html(output);
                               $('#questions_found').show();
                            }                               
                         },
                error: function(){
                           alert("Error sending the file to server!!"); 
                       },
                // Form data
                data: search_data,
                //Options to tell jQuery not to process data or worry about content-type.
                cache: false,
                contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
                processData: true
           });
    });


    $('#ask_question_btn').on('click' , function(){       
        $('#search_question').hide();
        $('#ask_google').hide();
        $('#ask_question').slideDown(1000);
        $('#questions_found').hide();
    });

    $('#search_question_btn').on('click' , function(){
       $('#category_list').val('0');
        $('#weeks_list').hide();
          $('#classes_list').hide();
          $('#psets_list').hide();
        $('#ask_question').hide();
        $('#ask_google').hide();
        $('#search_question').slideDown(1000);
    });

    $('#ask_google_btn').on('click' , function(){
        $('#search_question').hide();
        $('#ask_question').hide();
        $('#ask_google').slideDown(1000);
        $('#questions_found').hide();
    });
        
    
    
    //hide all alerts 
    $('#questionAlert').hide();
    $('#keywordsAlert').hide();
    $('#categoryAlert').hide();
    
    //hide keywords alert when user enter keywords
    $('#keywords').on('mousedown' , function(){
        $('#keywordsAlert').hide();
    });
    
    $('#textarea').on('mousedown' , function(){
        $('#questionAlert').hide();
    });
    
    //reset all variables that hold user choices
    var category = "";
    var week = "";
    var classification = "";
    var pset = "";  

    //when post button pressed
    $('#postbtn').on('click', function(e){
        //stop submitting the form 
         e.preventDefault();         
        
        //if user didn't determine the category
        if(category == "")
        {
            $('#categoryAlert').html('Please, choose your question category first..');
            $('#categoryAlert').show();            
            return false;
        }       
        else if(category == "materials")
        {
            //if user didn't determine the week or class 
            if(week == "") 
            {
                $('#categoryAlert').html('Please, choose your question week first..');
                $('#categoryAlert').show();
                return false;
            }
            else if(classification == "")
            {
                $('#categoryAlert').html('Please, choose your question class first..');
                $('#categoryAlert').show();                
                return false;
            }   
        }        
        else if(category == "problemSets")         
        {
            //if user didn't determine problem set
            if(pset == "")
            {
                $('#categoryAlert').html('Please, choose your question problem set first..');
                $('#categoryAlert').show();            
                return false;
            }            
        }
        //get user inputs
        var question = $('#textarea').val();
        var keywords = $('#keywords').val();      
        
        //empty keywords  
        if(keywords == "")
        {
            $('#keywordsAlert').html('Please, enter some question keywords first..');
            $('#keywordsAlert').show();            
            return false;
        }
        //empty question  
        if(question == "")
        {
            $('#questionAlert').html('Please, enter your question..');
            $('#questionAlert').show();
            return false;
        }    
                          
        
        $.post('post_question.php',
               {'category': category , 'week': week , 'class': classification , 'pset': pset , 'text_question': question , 'question_keys': keywords},
               function(output){                   
                   if(output == "success") 
                   {                       
                        $('#successful').show(1000);                       
                        $('#successful').hide(6000);
                   }
                   else
                   {
                        alert("failed to insert data into database");
                   }
               });
        
        
        $('#keywords').val('');        
        $('#textarea').val('');
        
        //hide all shown menues
        $('#weeks').hide();
        $('#class').hide();
        $('#psets').hide();
        
        //reset category menu
        $('#categorybtn').html('<span class="caret"></span><span class="sr-only"> Category</span>');
                
        //prepare variables for new inputs
        category = "";
        week = "";
        classification = "";
        pset = "";                
               
    });
  

    $('#weeks').hide();
    $('#class').hide();
    $('#psets').hide();
        
     $('#imageInput').on('click' , function(){
        $('#preview').show();
        $('#screenshot').hide();
     });
        
	var options = { 
			target: '#output',   // target element(s) to be updated with server response 
			beforeSubmit: beforeSubmit,  // pre-submit callback 
			success: afterSuccess,  // post-submit callback 
			resetForm: true        // reset the form after successful submit 
		}; 
		
	 $('#MyUploadForm').submit(function() { 
			$(this).ajaxSubmit(options);  	
			$('#screenshot').show();	
			// always return false to prevent standard browser submit and page navigation 
			return false; 
		});  
		
		       
        
        $('#categoryList').find('a').on('click', function(e){
        
    	    e.preventDefault();
    	    
            $('#categoryAlert').hide();
    	    
    	    switch($(this).attr('href'))
    	    {
    	        case 'appliance':
    	             $('#weeks').hide();
                     $('#class').hide();
                     $('#psets').hide();  
                     $('#categorybtn').html('<span class="caret"></span><span class="sr-only"> Appliance</span>'); 
                     $('#weeksbtn').html('<span class="caret"></span><span class="sr-only"> Week</span>'); 
                     $('#classbtn').html('<span class="caret"></span><span class="sr-only"> Class</span>');
                     $('#psetsbtn').html('<span class="caret"></span><span class="sr-only"> Problem Set</span>');  
                     category = "appliance";
                     break;   
    	        case 'materials':
    	             $('#weeks').fadeIn(200);
    	             $('#psets').hide();
    	             $('#categorybtn').html('<span class="caret"></span><span class="sr-only"> Materials</span>');
    	             $('#psetsbtn').html('<span class="caret"></span><span class="sr-only"> Problem Set</span>');
    	             category = "materials";	                 
                     break;
                case 'general':
                     $('#weeks').hide();
                     $('#class').hide();
                     $('#psets').hide();
                     $('#categorybtn').html('<span class="caret"></span><span class="sr-only"> General</span>'); 
                     $('#weeksbtn').html('<span class="caret"></span><span class="sr-only"> Week</span>'); 
                     $('#classbtn').html('<span class="caret"></span><span class="sr-only"> Class</span>');
                     $('#psetsbtn').html('<span class="caret"></span><span class="sr-only"> Problem Set</span>');
                     category = "general";	                
                     break;      
                case 'problemsets':
                     $('#weeks').hide();
                     $('#class').hide();
                     $('#weeksbtn').html('<span class="caret"></span><span class="sr-only"> Week</span>'); 
                     $('#classbtn').html('<span class="caret"></span><span class="sr-only"> Class</span>');                     
                     $('#categorybtn').html('<span class="caret"></span><span class="sr-only"> Problem Sets</span>'); 
                     $('#psets').fadeIn(200);       	                         
                     category = "problemSets";
    	    }    
	    });
	    
	    $('#weeksList').find('a').on('click', function(e){  
	        e.preventDefault();
	        
            $('#categoryAlert').hide();
            
	        $('#class').fadeIn(200);      
	        $('#classbtn').html('<span class="caret"></span><span class="sr-only"> Class</span>');
	        
	        var choice = $(this).attr('href');
	        $('#weeksbtn').html('<span class="caret"></span><span class="sr-only"> week'+choice+'</span>');
	        week = choice;
	        
	
	    });
	    
	    $('#classList').find('a').on('click', function(e){  
	        e.preventDefault();
	       
            $('#categoryAlert').hide();
            
	        var choice = $(this).attr('href');
	        $('#classbtn').html('<span class="caret"></span><span class="sr-only"> '+choice+'</span>');
	        classification = choice;
	    });
	    
	    
	    $('#psetsList').find('a').on('click', function(e){  
            e.preventDefault(); 

            $('#categoryAlert').hide();
            
            var choice = $(this).attr('href');
            $('#psetsbtn').html('<span class="caret"></span><span class="sr-only"> pset'+choice+'</span>');
            pset = choice;
        }); 
                            
    });  
    
function afterSuccess()
{
	$('#submit-btn').show(); //hide submit button
	$('#loading-img').hide(); 
	$('#preview').hide();

}

//function to check file size before uploading.
function beforeSubmit(){
    //check whether browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{
		if( !$('#imageInput').val()) //check empty input filed
		{
			$("#output").html("Please, choose image first");
			return false;
		}
		
		var fsize = $('#imageInput')[0].files[0].size; //get file size
		var ftype = $('#imageInput')[0].files[0].type; // get file type
		

		//allow only valid image file types 
		switch(ftype)
        {
            case 'image/png': case 'image/gif': case 'image/jpeg': case 'image/pjpeg':
                break;
            default:
                $("#output").html("<b>"+ftype+"</b> Unsupported file type!");
				return false;
        }
		
		//Allowed file size is less than 1 MB (1048576)
		if(fsize>1048576) 
		{
			$("#output").html("<b>"+bytesToSize(fsize) +"</b> Too big Image file! <br> Please reduce the size of your photo using an image editor.");
			return false;
		}		
		
		$('#submit-btn').hide(); //hide submit button
		$('#loading-img').show(); //hide submit button
		$("#output").html("");  
	}
	else
	{
		//Output error to older browsers that do not support HTML5 File API
		$("#output").html("Please upgrade your browser, because your current browser lacks some new features we need!");
		return false;
	}
}

//show a small preview for the uploaded image
function previewImage(input) {
    var preview = document.getElementById('preview');
    var screenshot = document.getElementById('screenshot');
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        preview.setAttribute('src', e.target.result);
        screenshot.setAttribute('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
    else
    {
      preview.setAttribute('src', 'placeholder.png');
    }
}

//function to format bites bit.ly/19yoIPO
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}      
</script>
