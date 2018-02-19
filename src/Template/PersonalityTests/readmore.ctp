<div class="about_banner">
	<div class="container-fluid">
		<h2>Personality Test</h2>
		<!-- <span class="breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Entrance Materials</span></span> -->
	</div>
</div>
<div class="about_top">
  <div class="container-fluid">
	
	<div class="col-md-12 column-15">
	   <h6>Personality Test</h6>
	   <p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
      
		   <div class="col-lg-12 alltest">
		    <div class="panel-body_3">
		    <div class="col-lg-4">
			 <div class="test-img">
        		
        			
        			<?=$this->Html->image('personalitytests/'. $PersonalityTests->personality_test_image,['class'=>'img-thumbnail','style'=>'width:100%;'])?>
        		
        	</div>
			</div>
         
		 
		 <div class="col-lg-8">
		 
           
        	<div class="test-description">
	            <a href="#"><span><?=h($PersonalityTests->personality_test_name)?></span></a>
	                
	            <br>
	            
	              
			  <div class="clearfix"></div>	
				
	                <p><b>Description: </b><?php echo $PersonalityTests->personality_test_desc;?></p>                                                
	     
				
				
            </div>
             </div> 
			   <div class="clearfix"></div>	<br />
			  <div class="col-lg-6">
			  <div class="contact_btn pull-right">
             	<?=$this->Html->link('Start Test now',['controller'=>'questions','action'=>'view',$PersonalityTests->question_id],['class'=>'add_btn classi_btn fulldownload']);?>
             </div>
			 </div>
             <div class="clearfix"></div><hr>
            
			
			</div>
		  
		  
		   
        </div>
		
		
   </div>
</div>