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
					                <th>Courses Id</th>
					                <th>Courses Name</th>
					                <th>Level</th>
					                <th>Discipline</th>
					                
					                <th class="action">Action</th>
					            </tr>
					        </thead>
					        <tfoot>
					            <tr>
					                <th>Courses Id</th>
					                <th>Courses Name</th>
					                <th>Level</th>
					                <th>Discipline</th>
					               
					                <th class="action">Action</th>
					            </tr>
					        </tfoot>
					        <tbody>
					        <?php foreach ($Courses as $key => $courses):?>	
					            <tr>
					            	<td><?=h($courses->course_id)?></td>
					                <td><?=h($courses->course_name)?></td>
					                <td><?=h($courses->level->level_name)?></td>
					                <td><?=h($courses->discipline->discipline_name)?></td>
					                
					                <td class="action">
					                	<?= $this->Html->link(__("<i class='fa fa-eye fa-2x'></i>"), ['action' => 'view',$courses->course_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-pencil-square-o fa-2x'></i>"), ['action' => 'edit',$courses->course_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-trash-o fa-2x'></i>"), ['action' => 'delete',$courses->course_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					              	
					                </td> 
					            </tr>
					        <?php endforeach;?>
					        </tbody>
					    </table>
					</div>
				</div>	
			</div>
