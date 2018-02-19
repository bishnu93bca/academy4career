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
					                <th>Parents Doubt Id</th>
					                <th>Parents Doubt</th>
					                <th>Doubt Answer</th>
					                <th class="action">Action</th>
					            </tr>
					        </thead>
					        <tfoot>
					            <tr>
					                <th>Parents Doubt Id</th>
					                <th>Parents Doubt</th>
					                <th>Doubt Answer</th>
					                <th class="action">Action</th>
					            </tr>
					        </tfoot>
					        <tbody>
					        <?php foreach ($ParentsDoubts as $key => $parentsdoubt):?>	
					            <tr>
					            	<td><?=h($parentsdoubt->parents_doubt_id)?></td>
					               
					                <td><?php if(strlen(strip_tags($parentsdoubt->parents_doubt))>50){      echo substr(strip_tags($parentsdoubt->parents_doubt),0,50)."...";} else{echo strip_tags($parentsdoubt->parents_doubt)."...";}?></td>
					                <td><?php if(strlen(strip_tags($parentsdoubt->doubt_answer))>50){      echo substr(strip_tags($parentsdoubt->doubt_answer),0,50)."...";} else{echo strip_tags($parentsdoubt->doubt_answer)."...";}?></td>
					                
					                <td class="action">
					                	<?= $this->Html->link(__("<i class='fa fa-eye fa-2x'></i>"), ['action' => 'view',$parentsdoubt->parents_doubt_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-pencil-square-o fa-2x'></i>"), ['action' => 'edit',$parentsdoubt->parents_doubt_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					                	<?= $this->Html->link(__("<i class='fa fa-trash-o fa-2x'></i>"), ['action' => 'delete',$parentsdoubt->parents_doubt_id], ['escape' => false,'class'=>'btn btn-danger']) ?>
					              	
					                </td> 
					            </tr>
					        <?php endforeach;?>
					        </tbody>
					    </table>
					</div>
				</div>	
			</div>
