<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
<body onload="window.print();">


<div class="container" style="background-color: white;" id="content">
	 
	    <div class="row">
	     
	      <div class="col-lg-12 alert alert-dismissible alert-success">
	        <div class="bs-component">
	          <blockquote class="blockquote-reverse">
	           <center><img src="<?php echo BASE_URL;?>img/a4.png" height="100"> 
	           <h4><?php echo $Results->name?></h4>
	           <h4>Name : <?php echo ucfirst($Results->user->first_name)." ".ucfirst($Results->user->last_name);?></h4>
	            <!-- <h4>Email Id  : <?php echo $Results->user->email;?></h4>
	            <h4>Gender  : <?php echo ucfirst($Results->user->gender);?></h4>
	            <h4>Address  : <?php echo ucfirst($_SESSION->address); ?></h4> -->

	            <h4>Time : <?php echo "03:00";?> | Total Marks : <?php echo $Results->total_question*2;?> | Total Questions : <?php echo $Results->total_question?></h4>
	            </center>
	            
	          </blockquote>
	        </div>
	      </div>
	    </div>
		<div class="row">
          <div class="col-lg-12 alert alert-dismissible alert-success">
            <center ><h2 id="type-blockquotes">Result</h2></center>
          </div>
      </div>
	    <div class="row">
	     <hr>
	      <div class="col-lg-12">
	      <table class="table table-striped">
  
			  <tbody style="text-align: center;">
			    <tr class="active">
			      <td>Correct Answers</td>
			      <td></td>
			      <td><?php echo $Results->correct_answer;?></td>
			      <td></td>
			    </tr>
			    <tr class="active">
			      <td>Worng Answers</td>
			      <td></td>
			      <td><?php echo $Results->worng_answer;?></td>
			      <td></td>
			    </tr>
			    <tr class="active">
			      <td>Skip</td>
			      <td></td>
			      <td><?php echo $Results->skip;?></td>
			      <td></td>
			    </tr>
			    <tr class="active">
			      <td>Time</td>
			      <td></td>
			      <td><?php echo gmdate("H:i:s", $Results->time);?></td>
			      <td></td>
			    </tr>
			    <tr class="active">
			      <td>Tuch Questions</td>
			      <td></td>
			      <td><?php echo $Results->tuch_question;?></td>
			      <td></td>
			    </tr>
			    <tr class="active">
			      <td>Date</td>
			      <td></td>
			      <td><?php echo $Results->created;?></td>
			      <td></td>
			    </tr>
			    
			  </tbody>
			</table>
			<center><button class="btn btn-primary" id="cmd">PDF</button>  <button class="btn btn-primary">Print</button></center>
			<br>
	      </div>
	      </div>
</div>
</body>
</html>
<!--Add External Libraries - JQuery and jspdf-->
<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
    <div id="editor"></div>
    <script type="text/javascript">
    	
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};
$('#cmd').click(function () {   
    doc.fromHTML($('#content').html(), 15, 15, {
        'width':170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});


    </script>
