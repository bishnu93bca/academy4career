<div class="course_banner">
	<div class="container-fluid">
		
	</div>
</div>
<div class="about_top">
  <div class="container-fluid">
	
	<div class="col-md-12 column-15">
	   <h6>Courses</h6>
	   <p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
      
		   <div class="col-lg-12 alltest">
		    <div class="panel-body_3">
		    <div class="col-lg-4">
			 <div class="test-img">
        		<!-- a href="#">
        			<?=$this->Html->image('courses/'.$Courses->course_image,['class'=>'img-thumbnail','width'=>540])?>
        		</a> -->
        	</div>
			</div>
         
		 
		 <div class="col-lg-8">
		 
           
        	<div class="test-description">
	            <a href="#">
	                <span><?=h($Courses->course_name)?></span>
	            </a><br>
	            
	               <p> <b>Class:</b> <?=h($Courses->level->level_name)?></p>                                                
	           
	           
	                <p><b>Discipline:</b> <?=h($Courses->discipline->discipline_name)?></p>                                                
	            
				
	                <p><b>Year:</b> <?=h($Courses->course_year)?></p>                                                
	          
			  <div class="clearfix"></div>		
            </div>
             </div> 
			 <div class="col-lg-12">
			  <p class="m_5"><b>Description: </b><?php echo $Courses->course_desc;?></p>
			  </div>
			   <div class="clearfix"></div>	<br />
			  <div class="col-lg-6">
			 
			 </div>
             <div class="clearfix"></div><hr>
            
			
			</div>
		  
		  
		   
        </div>
		
		
   </div>
</div>