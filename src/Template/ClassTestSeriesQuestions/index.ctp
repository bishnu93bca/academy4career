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
					  <h2>Exams</h2>
						<table id="example" class="table table-striped table-bordered" cellspacing="0">
					        <thead>
					            <tr>
					                <th>Question Id</th>
					                <th>Class</th>
					                <th>Subject</th>
					                <th>Question</th>
					                <th>Answer One</th>
					                <th>Answer Two</th>
					                <th>Answer Three</th>
					                <th>Answer Four</th>
					                <th>Right Answer</th>
					                <th class="action">Action</th>
					            </tr>
					        </thead>
					        <tfoot>
					            <tr>
					                <th>Question Id</th>
					                <th>Class</th>
					                <th>Subject</th>
					                <th>Question</th>
					                <th>Answer One</th>
					                <th>Answer Two</th>
					                <th>Answer Three</th>
					                <th>Answer Four</th>
					                <th>Right Answer</th>
					                <th class="action">Action</th>
					            </tr>
					        </tfoot>
					        <tbody>
					        <?php foreach ($ClassTestSeriesQuestions as $key => $classtestseriesquestions):?>	
					        	
					            <tr>
					            	<td><?=h($classtestseriesquestions->question_id)?></td>
					            	<td><?=h($classtestseriesquestions->clas->class_name)?></td>
					            	<td><?=h($classtestseriesquestions->subject->subject_name)?></td>
					                <td><?=h($classtestseriesquestions->question)?></td>
					                <td><?=h($classtestseriesquestions->answer_one)?></td>
					                <td><?=h($classtestseriesquestions->answer_two)?></td>
					                <td><?=h($classtestseriesquestions->answer_three)?></td>
					                <td><?=h($classtestseriesquestions->answer_four)?></td>
					                <td><?=h($classtestseriesquestions->right_answer)?></td>
					                <td class="action">
					                	<?= $this->Html->link(__("<i class='fa fa-eye fa-2x'></i>"), ['action' => 'view',$classtestseriesquestions->question_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-pencil-square-o fa-2x'></i>"), ['action' => 'edit',$classtestseriesquestions->question_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-trash-o fa-2x'></i>"), ['action' => 'delete',$classtestseriesquestions->question_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					              	
					                </td> 
					            </tr>
					        <?php endforeach;?>
					        </tbody>
					    </table>
					</div>
				</div>	
			</div>
