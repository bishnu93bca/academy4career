<div class="about_banner">
	<div class="container-fluid">
		<h2>IAS MCQs</h2>
		<!-- <span class="breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Entrance Materials</span></span> -->
	</div>
</div>
<div class="about_top">
  <div class="container-fluid">
	
	<div class="col-md-12 column-15">
	   <h6>IAS MCQs</h6>
	   <p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
      
		   <div class="col-lg-12 alltest">
		    <div class="panel-body_3">
		    <div class="col-lg-4">
			 <div class="test-img">
        		<a href="#">
        			<?=$this->Html->image('iasmcqs/'.$IASMCQs->subject_image,['class'=>'img-thumbnail','style'=>'width:100%;'])?>
        		</a>
        	</div>
			</div>
         
		 
		 <div class="col-lg-8">
		 
           
        	<div class="test-description">
	            <a href="#">
	                <span><?=h($IASMCQs->ias_subject)?></span>
	            </a><br>
	            
	              <!--  <p> <b>Number of Test:</b> <?=h($IASMCQs->no_of_tests)?></p>  -->                                                                                               
	          
			  <div class="clearfix"></div>	
				
	                <p><b>Description: </b><?=h($IASMCQs->test_desc)?></p>                                                
	     
				
				
            </div>
             </div> 
			   <div class="clearfix"></div>	<br />
			  <div class="col-lg-6">
			  <div class="contact_btn pull-right">
             	<a href="<?php echo BASE_URL.'questions/view/'.$IASMCQs->question_id;?>" class="add_btn classi_btn fulldownload" > Start Test now </a>
             </div>
			 </div>
             <div class="clearfix"></div><hr>
            
			
			</div>
		  
		  
		   
        </div>
		
		
   </div>
</div>