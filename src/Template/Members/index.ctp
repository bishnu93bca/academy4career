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
					                <th>Member Id</th>
					                <th>Member Name</th>
					                <th>Member Email</th>
					                <th>Member Mobile</th>
					                <th>Reg Date</th>
					                <th class="action">Action</th>
					            </tr>
					        </thead>
					        <tfoot>
					            <tr>
					                <th>Member Id</th>
					                <th>Member Name</th>
					                <th>Member Email</th>
					                <th>Member Mobile</th>
					                <th>Reg Date</th>
					                <th class="action">Action</th>
					            </tr>
					        </tfoot>
					        <tbody>
					        <?php foreach ($Members as $key => $Member):?>	
					            <tr>
					            	<td><?=h($Member->member_id)?></td>
					                <td><?=h($Member->user->first_name.' '.$Member->user->last_name)?></td>
					                <td><?=h($Member->user->email)?></td>
					                <td><?=h($Member->user->mobile)?></td>
					                <td><?=h($Member->reg_date)?></td>
					                
					               <!--  <td class="action">
					                	<?= $this->Html->link(__("<i class='fa fa-eye fa-2x'></i>"), ['action' => 'view',$Member->member_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-pencil-square-o fa-2x'></i>"), ['action' => 'edit',$Member->member_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-trash-o fa-2x'></i>"), ['action' => 'delete',$Member->member_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					              	
					                </td>  -->
					            </tr>
					        <?php endforeach;?>
					        </tbody>
					    </table>
					</div>
				</div>	
			</div>
