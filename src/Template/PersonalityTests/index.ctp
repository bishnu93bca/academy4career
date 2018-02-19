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
					  <center><h2>Personality Test</h2></center>
						<table id="example" class="table table-striped table-bordered" cellspacing="0">
					        <thead>
					            <tr>
					                <th>Personality Id</th>
					                <th>Personality Name</th>

					                <th class="action">Action</th>
					            </tr>
					        </thead>
					        <tfoot>
					            <tr>
					                <th>Personality Id</th>
					                <th>Personality Name</th>
					                <th class="action">Action</th>
					            </tr>
					        </tfoot>
					        <tbody>
					        <?php foreach ($PersonalityTests as $key => $personalitytests):?>	
					            <tr>
					            	<td><?=h($personalitytests->personality_test_id)?></td>
					                <td><?=h($personalitytests->personality_test_name)?></td>
					                
					                
					                <td class="action">
					                	<?= $this->Html->link(__("<i class='fa fa-eye fa-2x'></i>"), ['action' => 'view',$personalitytests->personality_test_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-pencil-square-o fa-2x'></i>"), ['action' => 'edit',$personalitytests->personality_test_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-trash-o fa-2x'></i>"), ['action' => 'delete',$personalitytests->personality_test_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					              	
					                </td> 
					            </tr>
					        <?php endforeach;?>
					        </tbody>
					    </table>
					</div>
				</div>	
			</div>
