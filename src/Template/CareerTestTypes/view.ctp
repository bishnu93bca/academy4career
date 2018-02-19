            <div class="col-md-12 form-group1 group-mail">
              <h3>Career Test</h3>
              <div class="well">
               <?=h($CareerTestTypes->career_test->career_test_name)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Career Test Type Name</h3>
              <div class="well">
               <?=h($CareerTestTypes->career_test_type_name)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Career Test Image</h3>
              <div class="well">
              <?php
                echo $this->Html->link(__($this->Html->image('careertesttypes/'.$CareerTestTypes->career_test_type_image, array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'careertesttypes',$imag], ['escape' => false]);?>
              </div>
            </div>
