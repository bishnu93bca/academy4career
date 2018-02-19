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
					 <center> <h2><u>Experts</u></h2></center>
						<table id="example" class="table table-striped table-bordered" cellspacing="0">
					        <thead>
					            <tr>
					                <th>Expert Id</th>
					                <th>Expert Name</th>
					                <th>Specialization</th>
					                <th class="action">Action</th>
					            </tr>
					        </thead>
					        <tfoot>
					            <tr>
					                <th>Expert Id</th>
					                <th>Expert Name</th>
					                <th>Specialization</th>
					                <th class="action">Action</th>
					            </tr>
					        </tfoot>
					        <tbody>
					        <?php foreach ($Experts as $key => $expert):?>	
					            <tr>
					            	<td><?=h($expert->expert_id)?></td>
					                <td><?=h($expert->expert_name)?></td>
					                <td><?=h($expert->expert_specialization)?></td>
					                
					                <td class="action">
					                	<?= $this->Html->link(__("<i class='fa fa-eye fa-2x'></i>"), ['action' => 'view',$expert->expert_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-pencil-square-o fa-2x'></i>"), ['action' => 'edit',$expert->expert_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-trash-o fa-2x'></i>"), ['action' => 'delete',$expert->expert_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					              	
					                </td> 
					            </tr>
					        <?php endforeach;?>
					        </tbody>
					    </table>
					</div>
				</div>	
			</div>
