<div class="career_banner">
	<div class="container-fluid">
	
	</div>
</div>
<div class="about_top">
 <div class="container">
	<div class="col-md-3" style="
    background: url('<?php echo BASE_URL;?>/img/careers.jpg');
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    min-height: 300px;
    position: relative;
    top: 135px;
    left: 31px;
    z-index: 10;
    padding: 0;">
	</div>
	<div class="col-md-9 column-15">
	   <h6>Opening</h6>
	   <div class="accordation">
	   	<?php foreach ($Opening as $key => $value):?>
		    <div class="jb-accordion-wrapper wrapper_1">
				<div class="jb-accordion-title title-grey">Opening : <?=h($value->opening_name)?><button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#id_<?=h($value->opening_id)?>"><i class="fa fa-plus"></i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="id_<?=h($value->opening_id)?>" class="jb-accordion-content collapse" style="height: auto;">
				<p><?php echo $value->opening_desc;?></p>
				</div>
				<p><!-- /.collapse --></p>
			</div> 
		<?php endforeach;?>
		</div>
	    
	    </div>
	  </div>
	  <div class="clearfix"> </div>
</div>