<center><h3>Study Materials</h3></center>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Study Material Name</h3>
              <div class="well">
               <?=h($StudyMaterials->study_material_name)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Study Material Class</h3>
              <div class="well">
              <?=h($StudyMaterials->clas->class_name)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Study Material Description</h3>
              <div class="well">
              <?=h($StudyMaterials->study_material_description)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Study Material Price</h3>
              <div class="well">
              <?=h($StudyMaterials->study_material_price)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Study Material Year</h3>
              <div class="well">
              <?php echo date_format($StudyMaterials->study_material_year,'Y');?>
              </div>
            </div>

            <div class="col-md-12 form-group1 group-mail">
              <h3>Study Material Sample PDF</h3>
              <div class="well">
              <?php 
                echo $this->Html->link(__($this->Html->image('pdf.png', array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'studymaterials/pdf',$StudyMaterials->study_material_sample], ['escape' => false]);
                
                ?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Study Material Full PDF</h3>
              <div class="well">
              <?php
              
                echo $this->Html->link(__($this->Html->image('pdf.png', array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'studymaterials/pdf',$StudyMaterials->study_material_full], ['escape' => false]);
                
                ?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Study Material Image</h3>
              <div class="well">
              <?php
              
                echo $this->Html->link(__($this->Html->image('studymaterials/'.$StudyMaterials->study_material_image, array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'studymaterials/',$StudyMaterials->study_material_image], ['escape' => false]);
                
                ?>
              </div>
            </div>
            