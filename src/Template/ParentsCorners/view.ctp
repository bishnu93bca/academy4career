
            <div class="col-md-12 form-group1 group-mail">
              <h3>Parents Name</h3>
              <div class="well">
               <?=h($ParentsCorners->parents_name)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Career Test Image</h3>
              <div class="well">
              <?php 
                echo $this->Html->link(__($this->Html->image('parentscorners/'.$ParentsCorners->parents_image, array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'parentscorners',$ParentsCorners->parents_image], ['escape' => false]); ?>
              </div>
            </div>
