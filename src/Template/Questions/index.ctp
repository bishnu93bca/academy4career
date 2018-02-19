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
					  <h2>Questions</h2>
						<table id="example" class="table table-striped table-bordered" cellspacing="0">
					        <thead>
					            <tr>
					                <th>Id</th>
					                <th>Test</th>
					                <th>Questions</th>
					                <th>Option One</th>
					                <th>Option Two</th>
					                <th>Option Three</th>
					                <th>Option Four</th>
					                <th>Answer</th>
					                <th class="action">Action</th>
					            </tr>
					        </thead>
					        <tfoot>
					            <tr>
					                <th>Id</th>
					                <th>Test</th>
					                <th>Questions</th>
					                <th>Option One</th>
					                <th>Option Two</th>
					                <th>Option Three</th>
					                <th>Option Four</th>
					                <th>Answer</th>
					                <th class="action">Action</th>
					            </tr>
					        </tfoot>
					        <tbody>
					        <?php foreach ($Questions as $key => $value):?>	
					            <tr>
					            	<td><?=h($value->id)?></td>
					            	<td><?=h($value->test->title)?></td>
					                <td><?=h($value->name)?></td>
					                <td><?=h($value->op_1)?></td>
					                <td><?=h($value->op_2)?></td>
					                <td><?=h($value->op_3)?></td>
					                <td><?=h($value->op_4)?></td>
					                <td><?=h($value->answer)?></td>
					                
					                <td class="action">
					       
					                	<?= $this->Html->link(__("<i class='fa fa-pencil-square-o fa-2x'></i>"), ['action' => 'edit',$value->id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-trash-o fa-2x'></i>"), ['action' => 'delete',$value->id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					              	
					                </td> 
					            </tr>
					        <?php endforeach;?>
					        </tbody>
					    </table>
					</div>
				</div>	
			</div>
