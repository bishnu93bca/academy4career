<div class="entrance_exam">
	<div class="container">
	
	</div>
</div>
<div class="about_bottom">
	<?php foreach ($DrExams as $key => $drexam):?>
		<div class="container-fluid">
			<div class="col-md-9 column-7">
			<h3><?=h($drexam->drexam_name)?></h3>
			<!-- <h4>Upcomming Exam date: </h4> -->
			<!-- <div class="post__1" style="overflow: hidden;">
			      <span class="post__1-item post__1-date">14.12.2015</span>
			      <span class="post__1-item"><span class="link_2"><a href="#" title="like me" class="like_button">
			          <i class="fa fa-heart-o"></i></a></span><span>1</span>
			      </span>
			       <span class="post__1-item"><span class="link_2"><a href="#" title="like me" class="like_button">
			          <i class="fa fa-comment-o"></i></a></span><span>12</span>
			      </span>
			       <span class="post__1-item"><span class="link_2"><a href="#" title="like me" class="like_button">
			          <i class="fa fa-eye"></i></a></span><span>10</span>
			      </span>
			     </div> -->
			<p><?php if(strlen(strip_tags($drexam->drexam_details))> 200){echo substr(strip_tags($drexam->drexam_details),0,200)."...";} else{echo $drexam->drexam_details."...";}?></p>
			<!-- <div class="footer-social about_social">
			<a target="_blank" href="" hidefocus="true" style="outline: none;"><i class="fa fa-facebook"></i></a>
			<a target="_blank" href="" hidefocus="true" style="outline: none;"><i class="fa fa-twitter"></i></a>
			<a target="_blank" href="" hidefocus="true" style="outline: none;"><i class="fa fa-google-plus"></i></a>
			</div> -->
			<footer class="entry-meta clearfix"> 
			
			<?=$this->Html->link('Read More',['action'=>'readmore',$drexam->drexam_id],['class'=>'btn-read-more'])?> 
			<!-- <a href="drexam_details.php" class="comments-link" hidefocus="true" style="outline: none;"><span>3 Comments</span></a>  -->
			</footer>
			</div>	
			<div class="col-md-3 column-6">
			
			<?=$this->Html->image('drexams/'.$drexam->drexam_image,['class'=>'img-responsive img-thumbnail','alt'=>'Dr Exams Image.'])?>
			</div>	
			<div class="clearfix"> </div>
		</div>
		<hr />
	<?php endforeach;?>

 	
</div>
