<div class="container" style="position:relative; top: 150px; z-index:0;">
	<?php foreach($data as $row):?>		
		<div class="panel panel-primary">
		  <div class="panel-body">
		  	<label><h3><span class="label label-warning">Ask date /</span></h3></label>  
		  	<span class="label label-default"><strong><?php print($row["date_of_ask"])?></strong></span>
		  	<br>
		  	<label><h3><span class="label label-warning">Question ?</span></h3></label>  
		    <span class="label label-default"><strong><?php print($row["question"])?></strong></span>
		    <br>
		    <label><h3><span class="label label-warning">Link #</span></h3></label>  
		    <a href='<?php print($row["url"])?>' target="_blank"><strong><?php print($row["url"])?></strong></a>
		  </div>
		</div>  	
	<?php endforeach;?>
</div>
