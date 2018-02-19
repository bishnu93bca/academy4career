<section class="slider">
<style type="text/css">
	.video-section .pattern-overlay {
background-color: rgba(71, 71, 71, 0.59);
padding: 110px 0 32px;
min-height: 496px; 
/* Incase of overlay problems just increase the min-height*/
}
.video-section h1, .video-section h3{
text-align:center;
color:#fff;
}
.video-section h1{
font-size:110px;
font-family: 'Buenard', serif;
font-weight:bold;
text-transform: uppercase;
margin: 40px auto 0px;
text-shadow: 1px 1px 1px #000;
-webkit-text-shadow: 1px 1px 1px #000;
-moz-text-shadow: 1px 1px 1px #000;
}
.video-section h3{
font-size: 25px;
font-weight:lighter;
margin: 0px auto 15px;
}
.video-section .buttonBar{display:none;}
.player {font-size: 1px;}
</style>
<?=$this->Html->script(['jquery.mb.YTPlayer'])?>

<!--Video Section-->
<section class="content-section video-section">
  <div class="pattern-overlay">
  <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=A1e9RWPNCMY',containment:'.video-section', quality:'large', autoPlay:true, mute:true, opacity:1}">bg</a>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <h1>ACADEMY<span style="font-size:140px;">4</span>CAREER</h1>  
        <h3>Online Test</h3>
	   </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
	$(document).ready(function () {

    $(".player").mb_YTPlayer();

});
</script>
</section>
<marquee direction="left" style="background:#000; color:#fff;" onmouseover="this.stop();" onmouseout="this.start();">
 <h4 style="padding: 15px">   Mauris volutpat sagittis dolor, ac cursus nibh ultricies ac. Mauris lacinia nunc non venenatis aliquam. Aliquam id interdum risus. Integer tempor nulla suscipit congue commodo. Nam congue enim purus, non scelerisque odio mollis sed. Ut quis felis non lectus dignissim tristique.</h4> 
</marquee>
<div class="box_1">
  <div class="container-fluid">
    <div class="box-info clearfix ">
      <div class="heading_1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <div class="heading column heading-v1 separator_align_right">
         <div class="heading-inner">
             <small class="subheading" style="color: white;"> introducing</small>
             <h2 style="color: white;">Why We are different?</h2>
         </div> 
      </div>   
    </div>  
    <div class="col-lg-9 col-md-9 right_grid">
      <h3>Why We are different?</h3>
      <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h4>
      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of lettersIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of lettersIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
    </div>  
    <div class="clearfix"> </div> 
   </div>
  </div> 
</div>

<div class="box_2">
  <div class="container">
	  <div class="course_demo">
        <ul id="flexiselDemo3">	
		  <li><?=$this->Html->image('l1.png',['class'=>'img-responsive'])?></li>
		  <li><?=$this->Html->image('l2.png',['class'=>'img-responsive'])?></li> 
		  <li><?=$this->Html->image('l3.png',['class'=>'img-responsive'])?></li> 
		  <li><?=$this->Html->image('l4.png',['class'=>'img-responsive'])?></li> 
		 </ul>
		<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo3").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: { 
			    		portrait: { 
			    			changePoint:480,
			    			visibleItems: 1
			    		}, 
			    		landscape: { 
			    			changePoint:640,
			    			visibleItems: 2
			    		},
			    		tablet: { 
			    			changePoint:768,
			    			visibleItems: 2
			    		}
			    	}
			    });
			    
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
   </div>
  </div>
</div>

<div class="box_3 clearfix">
  <div class="container-fluid">
	<div class="heading_1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <div class="heading column heading-v1 separator_align_right">
         <div class="heading-inner">
             <small class="subheading" style="color: white;"> introducing</small>
             <h2 style="color: white;">Study Materials</h2>
         </div>   
      </div>   
    </div>  
<div class="col-md-9 row-inner">
<div class="col-md-12 row-inner_1">
	
	<div class="col-md-6 col-inner">
		<?php $study=0; foreach ($StudyMaterials as $key => $StudyMaterial):?>
			<ul class="classi_1">
				<li class="classi_1-left"><?=$this->Html->image('studymaterials/'.$StudyMaterial->study_material_image,["class"=>"img-responsive img-thumbnail"])?></li>
				<li class="classi_1-right">
					<h3><?=$this->Html->link($StudyMaterial->study_material_name,['controller'=>'study-materials','action'=>'readmore',$StudyMaterial->study_material_id])?></h3>
					<p><a href="<?php echo BASE_URL.'members/add';?>" class="purchase">Buy Now</a></p>
				</li>
				<div class="clearfix"> </div>
			</ul>
			<?php $study++; if($study==3){?>
			</div>
			<div class="col-md-6 col-inner">
		<?php } endforeach;?>
		</div>
	
	 </div>
   </div>
 </div>
</div>
<hr>
<div class="about_middle">
 <div class="container">
 	 <div id="column" class="sub_col sub_col1" style="height: 65px;">
		<div class="text-inner"><p>&nbsp;&nbsp;NEW</p>
		  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Testimonials</p>
		</div>
	 </div>
	<div class="column_5">
		<?php foreach ($Testimonials as $key => $Testimonial):?>
		 	  <div class="col-md-4">
			  <div class="item-testimonial">
		        <div class="content_box">
		            <blockquote>
		                <p><?=h($Testimonial->testimonial)?></p>    
		                <footer><?=h($Testimonial->user_name)?>-
		                	<?=$this->Html->link('DISTRACTED',['controller'=>'#','action'=>'#',$Testimonial->testimonial_id])?>
		                		
		                </footer>
		            </blockquote>
		          </div>
		           <div class="avatar"><?=$this->Html->image('testimonials/'.$Testimonial->testimonial_image,[ "class"=>"img-responsive"])?></div>
		        </div>
		      </div>
	  <?php endforeach;?>
      <div class="clearfix"> </div>
 </div>
 </div>
</div>
<hr>
<div class="tabs_list">
  <div class="container-fluid">  
  	 <div class="heading_1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <div class="heading column heading-v1 separator_align_right">
         <div class="heading-inner">
             <small class="subheading" style="color: white;"> Introducing</small>
             <h3 style="color: white;">Our Services</h3>
         </div>   
      </div>   
    </div>
	      


		  <div class="bs-example bs-example-tabs col-md-9 right_grid" role="tabpanel" data-example-id="togglable-tabs">
	       	  <h3>Our Services</h3>
		  <div class="icons_box1">
	       <div class="col-sm-6 box_1">
	        <div class="feature-box">
	         <i class="fa fa-book face"></i>
		     <h4>Course Finder</h4> 
		     <p>Candidate will find suitable course details by providing his input.For example,Discipline: ARTS, LEVEL: Post Graduation, then all the relevant course details are found.</p>
		    </div>
		   </div>
           <div class="col-sm-6 box_3">
	        <div class="feature-box">
	         <i class="fa fa-folder-open face"></i>
		     <h4>Entrance Exams</h4> 
		     <p>Similar to course finder and scholarship finder</p>
		    </div>
		   </div>
		   <div class="clearfix"> </div>
		 </div>
		 <div class="icons_box2">
	       <div class="col-sm-6 box_1">
	        <div class="feature-box">
	         <i class="fa fa-graduation-cap face"></i>
		     <h4>Scholarship Finder</h4> 
		     <p>Candidate can find suitable scholarship based on his requirement.</p>
		    </div>
		   </div>
           <div class="col-sm-6 box_3">
	        <div class="feature-box">
	         <i class="fa fa-newspaper-o face"></i>
		     <h4>Articles</h4> 
		     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
		    </div>
		   </div>
		   <div class="clearfix"> </div>
		 </div>
      </div>
    </div>
</div>
<div class="container">
<div class="slider">
<div class="row">
	<div class="col-lg-6">
	<center><br>
	<br><h3>YouTube</h3></center>
	<p style="padding:40px 40px;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
	<center><a href="" target="_black" class="btn btn-success">Go to youtube</a></center>
	
	</div>
	<div class="col-lg-6">
		<iframe width="530" height="315" src="https://www.youtube.com/embed/XGSy3_Czz8k">
</iframe>
	</div>
</div>

</div>
</div>