<?php
$Total=0;
$Right=0;
$Worng=0;
$Skip=0;
foreach ($Results as $key => $value) {
	
		$Total=$value->test->total;
		$right_ans=$value->test->right_ans;
		$worng_ans=$value->test->worng_ans;
		//pr($value);
	// echo $value->question->name.'<br>'; 
	// echo $value->question->op_1.'<br>';
	// echo $value->question->op_2.'<br>';
	// echo $value->question->op_3.'<br>';
	// echo $value->question->op_4.'<br>';
	if($value->answer==$value->question->answer){
		$Right++;
	}elseif($value->answer){
		$Worng++;
	}else{
		$Skip++;
	}
	
}
$worng=$Worng*$worng_ans;
$right=$Right*$right_ans;
$marks=$right-$worng;
$total=$Total*$right_ans;
?>
<div class="panel">
	<center><h1 class="title" style="color:#660033">Result</h1><center><br>
		<table id="example" class="table table-striped title1" style="font-size:20px;font-weight:1000;">
			<tbody>
				<tr style="color:#66CCFF">
					<td>Total Questions</td><td><?php echo $Total;?></td>
				</tr>
      			<tr style="color:#99cc32">
      				<td>right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
      				</td>
      				<td><?php echo $Right;?></td>
      			</tr> 
	  			<tr style="color:red">
	  				<td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	  				</td>
	  				<td><?php echo $Worng;?></td>
	  			</tr>
	  			<tr style="color:#990000">
	  				<td>Marks&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
	  				</td>
	  				<td><?php echo $marks;?> </td>
	  			</tr>
	  			<tr style="color:#66CCFF">
	  				<td>Total Marks&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
	  				</td>
	  				<td><?php echo $total;?></td>
	  			</tr>
	  			<!-- <tr style="color:#990000">
	  				<td>Avg&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
	  				</td>
	  				<td><?php echo $right/$Total;?></td>
	  			</tr> -->
	  		</tbody>
	  	</table>
	</center>
</center>
</div>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL'
            }
        ]
    } );
} );
</script>