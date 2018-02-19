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
				<div class="agile-tables">
					<div class="w3l-table-info">
					 <center> <h2>Users</h2></center>
						<table id="example" class="table table-striped table-bordered" cellspacing="0">
					        <thead>
					            <tr>
					                <th>Id</th>
					                <th>Name</th>
					                <th>Email</th>
					                <th>Mobile</th>
					               
					                
					               
					            </tr>
					        </thead>
					        <tfoot>
					            <tr>
					                <th>Id</th>
					                <th>Name</th>
					                <th>Email</th>
					                <th>Mobile</th>
					                
					                
					            </tr>
					        </tfoot>
					        <tbody>
					        <?php foreach ($Users as $key => $user):?>	
					            <tr>
					            	<td><?=h($user->id)?></td>
					            	<td><?=h($user->first_name.' '.$user->last_name)?></td>
					                <td><?=h($user->email)?></td>
					                <td><?=h($user->mobile)?></td>
					                
					               
					                 
					            </tr>
					        <?php endforeach;?>
					        </tbody>
					    </table>
					</div>
				</div>	
			</div>
