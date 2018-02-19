
            <div class="col-md-12 form-group1 group-mail">
              <h3>Link Content</h3>
              <div class="well">
               <?=h($ImportantLinks->link_content)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Link Url</h3>
              <div class="well">
               <?=h($ImportantLinks->link_url)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Link Image</h3>
              <div class="well">
              <?php 
                echo $this->Html->link(__($this->Html->image('importantlinks/'.$ImportantLinks->link_image, array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'importantlinks',$ImportantLinks->link_image], ['escape' => false]);?>
              </div>
            </div>
