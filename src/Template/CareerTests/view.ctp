            
            <div class="col-md-12 form-group1 group-mail">
              <h3>Course</h3>
              <div class="well">
               <?=h($careertests->course->course_name)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Discipline</h3>
              <div class="well">
               <?=h($careertests->discipline->discipline_name)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Career Test Name</h3>
              <div class="well">
               <?=h($careertests->career_test_name)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Career Test Description</h3>
              <div class="well">
               <?php echo $careertests->career_test_desc;?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Career Test Image</h3>
              <div class="well">
              <?php 
              
                echo $this->Html->link(__($this->Html->image('careertests/'.$careertests->career_test_image, array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'careertests',$imag], ['escape' => false]); ?>
              </div>
            </div>
