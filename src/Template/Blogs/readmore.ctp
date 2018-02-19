<div class="blog_banner">
	<div class="container">

	</div>
</div>
<div class="about_top">
 <div class="container-fluid">
	<div class="col-md-12 column-15">
	   <h6><?=h($Blogs->post_name)?></h6>
	   
	   <?=$this->Html->image('blogs/'.$Blogs->post_image,['class'=>'img-responsive']) ?>
         <div class="gallery-cursual">
		 <!-- requried-jsfiles-for owl -->
		 <?=$this->Html->css(['owl.carousel'])?>
		 <?=$this->Html->script(['owl.carousel'])?>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 3,
						lazyLoad : true,
						autoPlay : true,
						pagination : false,
					});
				});
			</script>
		<!-- //requried-jsfiles-for owl -->
		<!-- start content_slider -->
		  
	       </div>	
	       <p class="m_10"><?php echo $Blogs->post_description;?></p>	
		   <!-- <a href="#" class="add_btn classi_btn" data-toggle="modal" data-target="#applyModal">Hire Resume Maker</a> -->
		   <br>
		   <div class="comments-post">
	        <div class="title_1 clearfix">
				<h4 class="comments"> COMMENTS	</h4>
				<div class="leave-reply-link"><a href="#comment">Add Comment</a></div>
		    </div>
			<ul class="comment-list">
			
             <?php foreach ($Comments as $key => $value):?>
             <li>
                <div class="col-lg-2 col-sm-2 col-xs-2">
                	<?php if(empty($value->user_id)){?>
                	<?=$this->Html->image('c10.jpg',['class'=>'img-circle commentimg']) ?>
                	<?php }else{?>
                	<?=$this->Html->image('comment_user.png',['class'=>'img-circle commentimg']) ?>
                	<?php } ?>
                </div>
                <div class="col-lg-10 col-sm-10 col-xs-10 comment-content">
                    <div class="clearfix">
                         <div class="author pull-left author-title">
                            <h5><?=h($value->comment_name)?></h5>
                            <div class="post-element clearfix">
                                <p title="January 6, 2016 10:58" href="#" class="date"><?php echo date_format($value->comment_date,'d/m/Y');?></p>
                            </div>
                         </div>
                         
                     </div>
                     <p class="m_8"><?php echo $value->comment;?></p>
					
					  <div class="comment-tools pull-left">
                            <!-- <a href="#">Reply</a> | <a href="#">Edit | <a href="#">Delete</a>   -->  
                         </div> 
               </div>
                <div class="clearfix"> </div>
             </li>
			<?php endforeach;?>
           </ul>
           <!-- requried-jsfiles-for owl -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<script src="js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 3,
						lazyLoad : true,
						autoPlay : true,
						pagination : false,
					});
				});
			</script>
		<!-- //requried-jsfiles-for owl -->
		<!-- start content_slider -->
		   <?=$this->Form->create('post',array('url' =>'/Comments/add')); ?>
           <div class="comment_box" id="comment">
           <input type="hidden" name="post_id" value="<?=h($Blogs->post_id)?>">
		    <p>Leave your comments. Your email address will not be published.</p>
			  <div class="form-group">
	            <label class="field-label" for="comment">Comment:</label>
	            <textarea id="comment" class="form-control form_control_2" name="comment" aria-required="true" placeholder="Comment......." required=""></textarea>
	           </div>
	           <div class="form-group">
	               <label class="field-label">Name:</label>
	              <input type="text" name="comment_name" class="form-control form_control_2" id="author" aria-required="true" placeholder="Name" required="">
	            </div>
	            <div class="form-group">
	             <label class="field-label">Email:</label>
	             <input id="email" name="comment_email" class="form-control form_control_2" type="email" value="" aria-required="true" placeholder="Email" required="">
	            </div>
	          
	            <div class="submit-wrap submit-wrap_1">
	          	   <input type="submit" value="Submit Comment">
	            </div>
	       </div>
	       <?php echo $this->Form->end();?>
         </div>
		   
       </div>
	   
       <div class="clearfix"> </div>
  </div>
</div>