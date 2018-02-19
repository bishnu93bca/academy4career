<div class="study_banner">
	<div class="container-fluid">
		
	</div>
</div>
<div class="about_top">
  <div class="container-fluid">
	
	<div class="col-md-12 column-15">
	   <h6>Study Material</h6>
	   <p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
      
		   <div class="col-lg-12 alltest">
		    <div class="panel-body_3">
		    <div class="col-lg-4">
			 <div class="test-img">
        		<a href="#">
        			
        			<?=$this->Html->image('studymaterials/'.$StudyMaterials->study_material_image,['class'=>'img-thumbnail','style'=>'width:100%;'])?>
        		</a>
        	</div>
			</div>
         
		 
		 <div class="col-lg-8">
		 
           
        	<div class="test-description">
	            <a href="#">
	                <span><?=h($StudyMaterials->study_material_name)?></span>
	            </a><br>
	               <p><b>Class: </b> <?=h($StudyMaterials->clas->class_name)?></p>
	                            
				   <!--  <p><b>Year:</b> 2017</p> -->
			  	<div class="clearfix"></div>	
	                <p><b>Description: </b><?php echo $StudyMaterials->study_material_description;?></p>

            </div>
            </div> 
			<div class="col-lg-12">
			  <!--<p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>-->
			
			  </div>
			   <div class="clearfix"></div>	<br />
			  <div class="col-lg-6 pull-right" >
			  <div class="col-lg-3">
			  <div class="contact_btn ">

             	<?=$this->Html->link(__($this->Html->image('pdf.png', array('title'=>'Simple Materials','alt' => 'Image','height'=>'60px', 'width'=>'60px'))), ['controller'=>'img','action' => 'studymaterials/pdf',$StudyMaterials->study_material_sample], ['escape' => false])?>
             </div>
             </div>
             <div class="col-lg-3">
			  <div class="contact_btn pull-right">

             	<?=$this->Html->link(__($this->Html->image('pdf.png', array('title'=>'Full Materials','alt' => 'Image','height'=>'60px', 'width'=>'60px'))), ['controller'=>'img','action' => 'studymaterials/pdf',$StudyMaterials->study_material_full], ['escape' => false])?>
             </div>
             </div>
			 </div>
             <div class="clearfix"></div><hr>
            
			
			</div>
		  
		  
		   
        </div>
		
		
   </div>
</div>