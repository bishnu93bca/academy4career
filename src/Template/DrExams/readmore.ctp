<div class="entrance_exam">
	<div class="container">
		
	</div>
</div>
<div class="about_top">
 <div class="container-fluid">
	
	<div class="col-md-12 column-15">
	   <h6><?=h($DrExams->drexam_name)?></h6>
	   <div class="single_post_bottom clearfix">
		 <!-- <div class="col-md-4 article_post">
			<div class="single_post">Posted by: <a class="heading_font" href="#">Admin</a></div>
		 </div> -->
		<!--  <div class="col-md-4 article_post text-center">
			<div class="single_post_meta">
				<span class="post_date">July 14, 2017</span>
				<span class="post_views"><i class="fa fa-eye"></i> <span>280</span></span>
				<span class="post_likes">
			      <span class="cstheme_likes cstheme_add_like">
			        <i class="fa fa-heart"></i>
			        <span class="likes_count">20</span>
			      </span>
			    </span>
				<span class="post-meta-comments"><i class="fa fa-comments"></i>2</span>
			</div>
		</div> -->
		<!-- <div class="col-md-4 article_post text-right">
		    <a class="social_link facebook" href=""><i class="fa fa-facebook"></i></a>
		    <a class="social_link twitter" href=""><i class="fa fa-twitter"></i></a>
		    <a class="social_link linkedin" href=""><i class="fa fa-google-plus"></i></a>
		</div> 
	    </div> -->
		<?=$this->Html->image('drexams/'.$DrExams->drexam_image,['class'=>'materialimage','alt'=>'Image'])?>
		<div class="article_desc">
			<p><?php echo $DrExams->drexam_details;?></p>
		</div>
	

		 <a href="#" class="add_btn classi_btn sampledownload" data-toggle="modal" data-target="#applyModal"><i class="fa fa-download"> </i>  Download Sample</a> <a href="#" class="add_btn classi_btn fulldownload" data-toggle="modal" data-target="#applyModal"><i class="fa fa-download"> </i> Download Full Material</a>
		 <div class="clearfix"> </div>
		 
	   <!-- <div class="comments-post">
	        <div class="title_1 clearfix">
				<h4 class="comments">3 COMMENTS	</h4>
				<div class="leave-reply-link"><a href="#">Add Comment</a></div>
		    </div>
			<ul class="comment-list clearfix">
			
             <li>
                <div class="col-lg-2 col-sm-2 col-xs-2">
                	<img src="images/c10.jpg" class="img-circle commentimg" alt="">
                </div>
                <div class="col-lg-10 col-sm-10 col-xs-10 comment-content">
                    <div class="clearfix">
                         <div class="author pull-left author-title">
                            <h5>laoreet</h5>
                            <div class="post-element clearfix">
                                <p title="January 6, 2016 10:58" href="#" class="date">3 January</p>
                            </div>
                         </div>
                         
                     </div>
                     <p class="m_8">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
					
					  <div class="comment-tools pull-left">
                            <a href="#">Reply</a> | <a href="#">Edit | <a href="#">Delete</a>    
                         </div> <br />
						
               </div>
               <div class="clearfix"> </div>
             </li>
			 
			 <li>
                <div class="col-lg-2 col-sm-2 col-xs-2">
                	<img src="images/c10.jpg" class="img-circle commentimg" alt="">
                </div>
                <div class="col-lg-10 col-sm-10 col-xs-10 comment-content">
                    <div class="clearfix">
                         <div class="author pull-left author-title">
                            <h5>laoreet</h5>
                            <div class="post-element clearfix">
                                <p title="January 6, 2016 10:58" href="#" class="date">3 January</p>
                            </div>
							
                         </div>
                         
                     </div>
                     <p class="m_8">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
					 <div class="comment-tools pull-left">
                            <a href="#">Reply</a> | <a href="#">Edit | <a href="#">Delete</a>    
                         </div>
					
               </div>
               <div class="clearfix"> </div>
             </li>
			 
           </ul>
           < requried-jsfiles-for owl -->
		
			<!-- //requried-jsfiles-for owl -->
			<!-- start content_slider -->
		  
           <!-- <div class="comment_box">
		    	<p>Leave your comments. Your email address will not be published.</p>
			  <div class="form-group">
	            <label class="field-label" for="comment">Comment:</label>
	            <textarea id="comment" class="form-control form_control_2" name="comment" aria-required="true"></textarea>
	           </div>
	           <div class="form-group">
	               <label class="field-label">Name:</label>
	              <input type="text" name="author" class="form-control form_control_2" id="author" value="" aria-required="true">
	            </div>
	            <div class="form-group">
	             <label class="field-label">Email:</label>
	             <input id="email" name="email" class="form-control form_control_2" type="text" value="" aria-required="true">
	            </div>
	          
	            <div class="submit-wrap submit-wrap_1">
	          	   <input type="submit" value="Submit Comment">
	            </div>
	       </div>  -->
       <!--  </div>  --> 
	 </div>		
     <div class="clearfix"> </div>
    </div>
</div>