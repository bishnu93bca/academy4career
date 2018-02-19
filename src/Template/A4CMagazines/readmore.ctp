<div class="magazine_banner">
	<div class="container-fluid">
		
	</div>
</div>
<div class="about_top">
  <div class="container-fluid">
	
	<div class="col-md-12 column-15">
	   <h6>A4C Magazin</h6>
	   <p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
      
		   <div class="col-lg-12 alltest">
		    <div class="panel-body_3">
		    <div class="col-lg-4">
			 <div class="test-img">
        		<a href="#">
        			
        			<?=$this->Html->image('magazine/'.$A4CMagazines->magazine_image,['class'=>'img-thumbnail','style'=>'width:100%;'])?>
        		</a>
        	</div>
			</div>
         
		 
		 <div class="col-lg-8">
		 
           
        	<div class="test-description">
	            <a href="#">
	                <span><?=h($A4CMagazines->magazine_name)?></span>
	            </a><br>
	               <p><b>Publisher: </b> <?=h($A4CMagazines->magazine_publisher)?></p>
	                            
				  <p><b>Date:</b> <?php echo date_format($A4CMagazines->published_date,'d/m/Y');?></p>
			  	<div class="clearfix"></div>	
	                <p><b>Description: </b><?php echo $A4CMagazines->magazine_description;?></p>

            </div>
            </div> 
			<div class="col-lg-12">
			  <!--<p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>-->
			
			  </div>
			   <div class="clearfix"></div>	<br />
			 <!-- <div class="col-lg-6">
			  <div class="contact_btn pull-right">
             	<a href="#" class="add_btn classi_btn fulldownload"> Start Test now </a>
             </div>
			 </div> -->
		  
		  
		   
        </div>
		
		
   </div>
</div>