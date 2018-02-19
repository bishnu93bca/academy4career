
            <div class="col-md-12 form-group1 group-mail">
              <h3>Entrance Exam Name</h3>
              <div class="well">
               <?=h($EntranceExams->entrance_name)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Entrance Exams Description</h3>
              <div class="well">
              <?php echo $EntranceExams->entrance_description;?>?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Entrance Exams Date</h3>
              <div class="well">
              <?php echo date_format($EntranceExams->entrance_date,'d/m/Y');?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Entrance Exams Material For</h3>
              <div class="well">
              <?php 
                echo $this->Html->link(__($this->Html->image('pdf.png', array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'entranceexams/pdf',$EntranceExams->entrance_material], ['escape' => false]);
                
                ?>
              </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <h3>Entrance Exams Image</h3>
              <div class="well">
              <?php 
                echo $this->Html->link(__($this->Html->image('entranceexams/'.$EntranceExams->entrance_image, array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'entranceexams',$imag], ['escape' => false]);?>
              </div>
            </div>
