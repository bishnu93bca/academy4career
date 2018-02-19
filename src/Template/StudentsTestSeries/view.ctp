<center><h3>Students Test Series</h3> </center>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Class</h3>
              <div class="well">
               <?=h($StudentsTestSeries->clas->class_name)?>
              </div>
              </div>
              <div class="col-md-12 form-group1 group-mail">
              <h3>Subject</h3>
              <div class="well">
               <?=h($StudentsTestSeries->subject->subject_name)?>
              </div>
              </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Student Test Series Name</h3>
              <div class="well">
               <?=h($StudentsTestSeries->student_test_series_name)?>
              </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <h3>Total Test</h3>
              <div class="well">
               <?=h($StudentsTestSeries->test_series_total_test)?>
              </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <h3>Student Test Series Description</h3>
              <div class="well">
               <?php echo $StudentsTestSeries->student_test_series_description;?>
              </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <h3>Price</h3>
              <div class="well">
               <?=h($StudentsTestSeries->student_test_series_price)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3> Image</h3>
              <div class="well">
              <?php 
                echo $this->Html->link(__($this->Html->image('studentstestseries/'.$StudentsTestSeries->student_test_series_image, array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'studentstestseries',$StudentsTestSeries->student_test_series_image], ['escape' => false]);?>
              </div>
            </div>
