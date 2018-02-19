<div class="validation-system">
            <div class="col-md-12 form-group1">
             
              <h3>Article Title</h3>
              <div class="alert alert-success">
                <strong><?=h($articles->article_title)?></strong> 
              </div>
      
              
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Article Date</h3>
              <div class="alert alert-success">
                <strong><?=h($articles->article_date)?></strong> 
              </div>
            </div>
             <!-- <div class="clearfix"> </div> -->
              <div class="col-md-12 form-group2 group-mail">
              <h3>Article Description</h3>
              <div class="well">
               <?php echo $articles->article_description;?>
              </div>
            </div>
       <div class="col-md-12 form-group2 group-mail">  
       <h3>Magazine Image</h3>    
            <?php 
                echo $this->Html->image('articles/'.$articles->article_image, array('alt' => 'Image','height'=>'200px', 'width'=>'200px'));?>
      </div>
</div>