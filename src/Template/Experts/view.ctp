
            <div class="col-md-12 form-group1 group-mail">
              <h3>Expert Name</h3>
              <div class="well">
               <?=h($Experts->expert_name)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Expert Specialization</h3>
              <div class="well">
               <?php echo $Experts->expert_specialization;?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Expert Description</h3>
              <div class="well">
               <?php echo $Experts->expert_description;?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Career Test Image</h3>
              <div class="well">
              <?php 
                echo $this->Html->link(__($this->Html->image('experts/'.$Experts->expert_image, array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'experts',$imag], ['escape' => false]);?>
              </div>
            </div>
