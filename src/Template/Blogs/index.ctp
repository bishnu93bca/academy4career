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
    color: #337ab7;
}

</style>

		<div class="agile-grids">	
				<!-- tables -->
				<div class="agile-tables"><?=$this->Html->link('Add',['action'=>'add'],['class'=>'btn btn-primary'])?>
					<div class="w3l-table-info">
					  <center><h2>Blogs</h2></center>
						<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
					        <thead>
					            <tr>
					            	<th>Post Id</th>
					                <th>Post Name</th>
					                <th>Post Date</th>
					                <th class="action">Action</th>
					            </tr>
					        </thead>
					        <tfoot>
					            <tr>
					            	<th>Post Id</th>
					                <th>Post Name</th>
					                <th>Post Date</th>
					                <th class="action">Action</th>
					            </tr>
					        </tfoot>
					        <tbody>
					        <?php foreach ($blogs as $key => $blog):?>	
					            <tr>
					            	<td><?=h($blog->post_id)?></td>
					                <td><?=h($blog->post_name)?></td>
					                <td><?=h($blog->post_date)?></td>
					                <td class="action">
					                	<?= $this->Html->link(__("<i class='fa fa-eye fa-2x fa-border'></i>"), ['action' => 'view',$blog->post_id], ['escape' => false,'class'=>'']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-pencil-square-o fa-2x fa-border'></i>"), ['action' => 'edit',$blog->post_id], ['escape' => false,'class'=>' ']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-trash-o fa-2x fa-border'></i>"), ['action' => 'delete',$blog->post_id], ['escape' => false,'class'=>'']) ?>
					              	
					                </td> 
					            </tr>
					        <?php endforeach;?>
					        </tbody>
					    </table>
					</div>
				</div>	
			</div>
