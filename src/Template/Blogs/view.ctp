<center><h2>Blogs</h2></center>
            <div class="col-md-12 form-group1">
             
              <h3>Post Name</h3>
              <div class="alert alert-success">
                <strong><?=h($blogs->post_name)?></strong> 
              </div>
      
              
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Post Date</h3>
              <div class="alert alert-success">
                <strong><?=h($blogs->post_date)?></strong> 
              </div>
            </div>
           
              <div class="col-md-12 form-group2 group-mail">
              <h3>Post Description</h3>
              <div class="well">
               <?php echo $blogs->post_description;?>
              </div>
            </div>
             <div class="col-md-12 form-group2 group-mail">
              <h3>Image</h3>
              <div class="well">
               <?=$this->Html->image('blogs/'.$blogs->post_image,['class'=>'img-responsive']) ?>
              </div>
            </div>