<center><h2>IAS MCQs</h2></center>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Name</h3>
              <div class="well">
               <?=h($IASMCQs->ias_subject)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Number of Test</h3>
              <div class="well">
               <?=h($IASMCQs->no_of_tests)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Description</h3>
              <div class="well">
               <?=h($IASMCQs->test_desc)?>
              </div>
            </div>
           <!--  <div class="col-md-12 form-group1 group-mail">
              <h3>Image</h3>
              <div class="well">
              <?php 
                echo $this->Html->link(__($this->Html->image('iasmcqs/'.$IASMCQs->subject_image, array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'iasmcqs',$IASMCQs->subject_image], ['escape' => false]); ?>
              </div>
              <div class="clearfix"> </div>
            </div>
 -->