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
					 <center><h2><u>Scholarship</u></h2></center>
						<table id="example" class="table table-striped table-bordered" cellspacing="0">
					        <thead>
					            <tr>
					                <th>Scholarship Id</th>
					                <th>Scholarship Name</th>
					                <th>Level Name</th>
					                <th>Discipline Name</th>
					                <th>Scholarship Year</th>
					                <th class="action">Action</th>
					            </tr>
					        </thead>
					        <tfoot>
					            <tr>
					                <th>Scholarship Id</th>
					                <th>Scholarship Name</th>
					                <th>Level Name</th>
					                <th>Discipline Name</th>
					                <th>Scholarship Year</th>
					                <th class="action">Action</th>
					            </tr>
					        </tfoot>
					        <tbody>
					        <?php foreach ($ScholarShips as $key => $scholarship):?>	
					            <tr>
					            	<td><?=h($scholarship->scholarship_id)?></td>
					            	<td><?=h($scholarship->scholarship_name)?></td>
					            	<td><?=h($scholarship->level->level_name)?></td>
					            	<td><?=h($scholarship->discipline->discipline_name)?></td>
					                <td><?=h($scholarship->scholarship_year)?></td>
					                
					                <td class="action">
					                	<?= $this->Html->link(__("<i class='fa fa-eye fa-2x'></i>"), ['action' => 'view',$scholarship->scholarship_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-pencil-square-o fa-2x'></i>"), ['action' => 'edit',$scholarship->scholarship_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-trash-o fa-2x'></i>"), ['action' => 'delete',$scholarship->scholarship_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					              	
					                </td> 
					            </tr>
					        <?php endforeach;?>
					        </tbody>
					    </table>
					</div>
				</div>	
			</div>
