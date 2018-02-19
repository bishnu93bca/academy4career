<?php if(!empty($action)){?>
<script type="text/javascript">
	$(document).ready(function(){
		
			alert('<?php echo $action;?>');
	});
</script>
<?php } ?>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>Reset Password</h2>
		<form action="#" method="post">
			<div class="username">
				<span class="username">Email Id:</span>
				<input type="email" name="email" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="">
					<input type="submit" class="login" value="Reset Password">

			</div>
			<div class="clearfix"></div>
		</form>
