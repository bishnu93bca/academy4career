<script type="text/javascript">
   
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
<style type="text/css">
	.action{text-align: center;}
	td i{
    color: #337ab7!important;
}

</style>
		<div class="agile-grids">	
				<!-- tables -->
				<div class="agile-tables"><?=$this->Html->link('Add',['action'=>'add'],['class'=>'btn btn-primary'])?>
					<div class="w3l-table-info">
					  <center><h2>Students Test Series Results</h2></center>
						<table id="example" class="table table-striped table-bordered" cellspacing="0">
					        <thead>
					            <tr>
					                <th>Id</th>
					                <th>Class</th>
					                <th>Subject</th>
					                <th>Student Test Series</th>
					                <th>Answer</th>
					                <th>Right Answer</th>
					                <th>Answer Status</th>
					                <th>Test Given Time</th>
					                <th class="action">Action</th>
					            </tr>
					        </thead>
					        <tfoot>
					            <tr>
					                <th>Id</th>
					                <th>Class</th>
					                <th>Subject</th>
					                <th>Student Test Series</th>
					                <th>Answer</th>
					                <th>Right Answer</th>
					                <th>Answer Status</th>
					                <th>Test Given Time</th>
					                <th class="action">Action</th>
					            </tr>
					        </tfoot>
					        <tbody>
					        <?php foreach ($StudentsTestSeriesResults as $key => $studentstestseriesresults):?>	
					            <tr>
					            	<td><?=h($studentstestseriesresults->student_test_series_result_id)?></td>
					            	<td><?=h($studentstestseriesresults->clas->class_name)?></td>
					            	<td><?=h($studentstestseriesresults->subject->subject_name)?></td>
					            	<td><?=h($studentstestseriesresults->students_test_series->student_test_series_name)?></td>
					            	<td><?=h($studentstestseriesresults->answered)?></td>
					            	<td><?=h($studentstestseriesresults->right_answer)?></td>
					                <td><?=h($studentstestseriesresults->answer_status)?></td>
					                <td><?=h($studentstestseriesresults->test_given_time)?></td>
					                
					                <td class="action">
					                	<?= $this->Html->link(__("<i class='fa fa-eye fa-2x'></i>"), ['action' => 'view',$studentstestseriesresults->student_test_series_result_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-pencil-square-o fa-2x'></i>"), ['action' => 'edit',$studentstestseriesresults->student_test_series_result_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-trash-o fa-2x'></i>"), ['action' => 'delete',$studentstestseriesresults->student_test_series_result_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					              	
					                </td> 
					            </tr>
					        <?php endforeach;?>
					        </tbody>
					    </table>
					</div>
				</div>	
			</div>
