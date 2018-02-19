<div class="about_banner">
	<div class="container-fluid">
		<h2>Test</h2>
		<!-- <span class="breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Entrance Materials</span></span> -->
	</div>
</div>
<div class="about_top">
  <div class="container-fluid">
	
	<div class="col-md-12 column-15">
	   <h6>Test</h6>
	   <p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
      
		   <div class="col-lg-12 alltest">
		    <div class="panel-body_3">
		    <div class="col-lg-4">
			 <div class="test-img">
        		<a href="#">
        			
        			<?=$this->Html->image('studentstestseries/'.$StudentsTestSeries->student_test_series_image,['class'=>'img-thumbnail','style'=>'width:100%;'])?>
        		</a>
        	</div>
			</div>
         
		 
		 <div class="col-lg-8">
		 
           
        	<div class="test-description">
	            <a href="#">
	                <span><?=h($StudentsTestSeries->student_test_series_name)?></span>
	            </a><br>
	               <p><b>Class: </b> <?=h($StudentsTestSeries->clas->class_name)?></p>
	                            
				   <!--  <p><b>Year:</b> 2017</p> -->
			  	<div class="clearfix"></div>	
	                <p><b>Description: </b><?php echo $StudentsTestSeries->student_test_series_description;?></p>

            </div>
            </div> 
			<div class="col-lg-12">
			  <!--<p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>-->
			
			  </div>
			   <div class="clearfix"></div>	<br />
			 <div class="col-lg-6">
			  <div class="contact_btn pull-right">
             	<a href="#" class="add_btn classi_btn fulldownload"> Start Test now </a>
             </div>
			 </div>
		  
		  
		   
        </div>
		
		
   </div>
</div>