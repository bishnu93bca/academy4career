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
					  <center><h2>Students Test Series</h2></center>
						<table id="example" class="table table-striped table-bordered" cellspacing="0">
					        <thead>
					            <tr>
					                <th>Id</th>
					                <th>Class</th>
					                <th>Subject</th>
					                <th>Name</th>
					                <th>Total Test</th>
					                <th>Price</th>
					                <th>Image</th>
					                <th class="action">Action</th>
					            </tr>
					        </thead>
					        <tfoot>
					            <tr>
					                <th>Id</th>
					                <th>Class</th>
					                <th>Subject</th>
					                <th>Name</th>
					                <th>Total Test</th>
					                <th>Price</th>
					                <th>Image</th>
					                <th class="action">Action</th>
					            </tr>
					        </tfoot>
					        <tbody>
					        <?php foreach ($StudentsTestSeries as $key => $studentstestseries):?>	
					            <tr>
					            	<td><?=h($studentstestseries->student_test_series_id)?></td>
					            	<td><?=h($studentstestseries->clas->class_name)?></td>
					            	<td><?=h($studentstestseries->subject->subject_name)?></td>
					            	<td><?=h($studentstestseries->student_test_series_name)?></td>
					            	<td><?=h($studentstestseries->test_series_total_test)?></td>
					                <td><?=h($studentstestseries->student_test_series_price)?></td>
					                <td><?=$this->Html->image('studentstestseries/'.$studentstestseries->student_test_series_image,['height'=>100,'width'=>100])?></td>
					                
					                <td class="action">
					                	<?= $this->Html->link(__("<i class='fa fa-eye fa-2x'></i>"), ['action' => 'view',$studentstestseries->student_test_series_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-pencil-square-o fa-2x'></i>"), ['action' => 'edit',$studentstestseries->student_test_series_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-trash-o fa-2x'></i>"), ['action' => 'delete',$studentstestseries->student_test_series_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					              	
					                </td> 
					            </tr>
					        <?php endforeach;?>
					        </tbody>
					    </table>
					</div>
				</div>	
			</div>
