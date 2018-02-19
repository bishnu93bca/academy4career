
            <div class="col-md-12 form-group1">
             
              <h3>Name</h3>
              <div class="alert alert-success">
                <strong><?=h($magazines->magazine_name)?></strong> 
              </div>
      
              
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Published Date</h3>
              <div class="alert alert-success">
                <strong><?=h($magazines->published_date)?></strong> 
              </div>
            </div>
           
            <div class="col-md-12 form-group1 group-mail">
              <h3>Magazine Publisher</h3>
              <div class="alert alert-success">
                <strong><?=h($magazines->magazine_publisher)?></strong> 
              </div>
            </div>
             <!-- <div class="clearfix"> </div> -->
              <div class="col-md-12 form-group2 group-mail">
              <h3>Magazine Description</h3>
              <div class="well">
               <?=h($magazines->magazine_description)?>
              </div>
            </div>
       <div class="col-md-12 form-group2 group-mail">  
       <h3>Magazine Image</h3>    
            <?php
                echo $this->Html->image('magazine/'.$magazines->magazine_image, array('alt' => 'CakePHP','height'=>'200px', 'width'=>'200px'));?>
             <div class="col-md-12 form-group2 group-mail">