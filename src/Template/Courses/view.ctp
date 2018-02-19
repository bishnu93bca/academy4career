            <div class="col-md-12 form-group1 group-mail">
              <h3>ScholarShips</h3>
              <div class="well">
               <?=h($Courses->Scholarships['scholarship_name'])?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Courses Name</h3>
              <div class="well">
               <?=h($Courses->course_name)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Level</h3>
              <div class="well">
               <?=h($Courses->level->level_name)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Discipline</h3>
              <div class="well">
               <?=h($Courses->discipline->discipline_name)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Courses Description</h3>
              <div class="well">
               <?php echo $Courses->course_desc;?>
              </div>
            </div>
           <!--  <div class="col-md-12 form-group1 group-mail">
              <h3>Course Image</h3>
              <div class="well">
              <?php 
                echo $this->Html->link(__($this->Html->image('courses/'.$Courses->course_image, array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'courses',$imag], ['escape' => false]); ?>
              </div>
            </div> -->
