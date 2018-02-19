
            <div class="col-md-12 form-group1 group-mail">
              <h3>Dr Exam Name</h3>
              <div class="well">
               <?=h($DrExams->drexam_name)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Dr Exam Details</h3>
              <div class="well">
              <?php echo $DrExams->drexam_details;?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Dr Exam Material For</h3>
              <div class="well">
              <?php $i=0;
              
                echo $this->Html->link(__($this->Html->image('pdf.png', array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'drexams/pdf',$DrExams->drexammaterial_for], ['escape' => false]);
                
                ?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Dr Exam  Sample Material</h3>
              <div class="well">
              <?php $i=0;
              
                echo $this->Html->link(__($this->Html->image('pdf.png', array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'drexams/pdf',$DrExams->drexam_samplematerial], ['escape' => false]);
                
                ?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Dr Exam Material</h3>
              <div class="well">
              <?php $i=0;
              
                echo $this->Html->link(__($this->Html->image('pdf.png', array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'drexams/pdf',$DrExams->drexam_material], ['escape' => false]);
                
                ?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Dr Exams Image</h3>
              <div class="well">
              <?php 
                echo $this->Html->link(__($this->Html->image('drexams/'.$DrExams->drexam_image, array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'drexams',$DrExams->drexam_image], ['escape' => false]);
                
                ?>
              </div>
            </div>
