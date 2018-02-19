<?php if(!empty($email)){?>
<script type="text/javascript">
	$(document).ready(function(){
		
			alert('<?php echo $email;?>');
	});
</script>
<?php } ?>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>Register</h2>
		<form action="#" method="post">
			<div class="username">
				<span class="username">First Name:</span>
				<input type="text" name="f_name" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="username">
				<span class="username">Last Name:</span>
				<input type="text" name="l_name" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="username">
				<span class="username">Email Id:</span>
				<input type="email" name="email" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="username">
				<span class="username">Mobile:</span>
				<input type="text" class="name" value="" id="extra7" name="mobile" maxlength="10" required="" onkeypress="return isNumber(event)" />
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Password:</span>
				<input type="password" name="password" class="password" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			
			<div class="">
					<input type="submit" class="login" value="Sign In">

			</div>
			<div class="clearfix"></div>
		</form>
				

<script type="text/javascript">
	function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>