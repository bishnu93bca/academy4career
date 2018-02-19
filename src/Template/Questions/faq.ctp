<div class="about_banner">
	<div class="container-fluid">
		<h2>Faqs</h2>
	</div>
</div>
<div class="about_top">
 <div class="container">
	<div class="col-md-3 column-10">
	</div>
	<div class="col-md-9 column-15">
	   <h6>Faqs</h6>
	   <div class="accordation">
	   	<?php foreach ($ParentsDoubts as $key => $value):?>
		    <div class="jb-accordion-wrapper wrapper_1">
				<div class="jb-accordion-title title-grey"> Q:<?php echo $value->parents_doubt;?><button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#id_<?=h($value->parents_doubt_id)?>"><i class="fa fa-plus"></i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="id_<?=h($value->parents_doubt_id)?>" class="jb-accordion-content collapse" style="height: auto;">
				<p><?php echo $value->doubt_answer;?></p>
				</div>
				<p><!-- /.collapse --></p>
			</div> 
		<?php endforeach;?>
		</div>
	    
	    </div>
	  </div>
	  <div class="clearfix"> </div>
</div>