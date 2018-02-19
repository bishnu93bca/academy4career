<div class="blog_banner">
	<div class="container-fluid">

		
	</div>
</div>
<div class="about_top">
 <div class="container-fluid">
	 
	<div class="col-md-12 column-15">
	   <h6>Latest Blog</h6>
	   <p class="m_5">Ornare tortor vestibulum vestibulum non, fringilla at. Porta at egestas id. Ante sodales sed cum volutpat ac, vel rutrum nunc. Mi fermentum potenti ultrices sapien, lectus ligula. Vestibulum sed a neque wisi tortor ac, wisi orci aenean. Arcu wisi est mauris tellus, bibendum volutpat eu, lectus vulputate tempus egestas. Sem aliquam facilisis etiam neque lectus ultricies, vitae turpis. Curabitur nulla nec mattis egestas. Auctor est orci sed elementum sollicitudin libero, elementum mauris tincidunt. Volutpat eros est in eros quisque duis.</p>
	<?php foreach ($Blogs as $key => $value):?>
	    <div class="row_1">             
	     	<div class="col-lg-3 col-sm-3">                 
	     		<div class="index-post-media">                     
	     			<div class="media-materials clearfix">                       
	     			  <?=$this->Html->image('blogs/'.$value->post_image,['class'=>'img-responsive']) ?>                   
	     			</div>                 
	     	    </div>           
	     	</div>       
	     	<div class="col-lg-9 col-sm-9">            
	     	    <div class="blog-entry-title">                     
	     	  	                          
	     	  	   <h3><?=$this->Html->link($value->post_name,['action'=>'readmore',$value->post_id])?></h3>          
	     	  	      <div class="post-element clearfix">                         
	     	  	        <div class="post__1" style="overflow: hidden;">
	        	          <!-- <span class="post__1-item post__1-date">Date : <?php echo date_format($value->post_date,'d/m/Y');?></span>
	        	          <span class="post__1-item"><span class="link_2"><a href="#" title="like me" class="like_button">
	        		          <i class="fa fa-heart-o"></i></a></span><span>1</span>
	        		      </span>
	        		       <span class="post__1-item"><span class="link_2"><a href="#" title="like me" class="like_button">
	        		          <i class="fa fa-comment-o"></i></a></span><span>12</span>
	        		      </span> -->
	        		       <span class="post__1-item"><span class="link_2">Date : <?php echo date_format($value->post_date,'d/m/Y');?></span>
	        		      </span>
	        		     </div>                     
        		     </div>  
        		     <p><?php if(strlen(strip_tags($value->post_description))> 500){
                          echo substr(strip_tags($value->post_description),0,500)."...";

                        } else{    
                          echo strip_tags($value->post_description)."...";
                        }?></p>   
        		      <h4><?=$this->Html->link('Read more',['action'=>'readmore',$value->post_id])?></h4>
        	    </div>   
        	  </div>  
        	  <div class="clearfix"></div>
        </div>
    <?php endforeach;?>
	       </div>		
        <div class="clearfix"> </div>
      </div>
</div>