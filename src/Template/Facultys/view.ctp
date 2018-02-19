            <div class="col-md-12 form-group1 group-mail">
              <h3>Faculty Name</h3>
              <div class="well">
               <?=h($Facultys->faculty_name)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Faculty Department</h3>
              <div class="well">
               <?php echo $Facultys->faculty_department;?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Faculty Description</h3>
              <div class="well">
               <?php echo $Facultys->faculty_description;?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Faculty Image</h3>
              <div class="well">
              <?php 
                echo $this->Html->link(__($this->Html->image('facultys/'.$Facultys->faculty_image, array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'facultys',$Facultys->faculty_image], ['escape' => false]).'&nbsp;&nbsp;&nbsp;';
                
                 ?>
              </div>
            </div>
