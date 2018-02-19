<center><h2>Personality Test</h2></center>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Personality Name</h3>
              <div class="well">
               <?=h($PersonalityTests->personality_test_name)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Personality Description</h3>
              <div class="well">
               <?php echo $PersonalityTests->personality_test_desc;?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Personality Image</h3>
              <div class="well">
              <?php 
                echo $this->Html->link(__($this->Html->image('personalitytests/'.$PersonalityTests->personality_test_image, array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'personalitytests',$PersonalityTests->personality_test_image], ['escape' => false]); ?>
              </div>
              <div class="clearfix"> </div>
            </div>
