<center><h3>Scholarship</h3> </center> 
            <div class="col-md-12 form-group1 group-mail">
              <h3>Scholarship Name</h3>
              <div class="well">
               <?=h($ScholarShips->scholarship_name)?>
              </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <h3>Level</h3>
              <div class="well">
               <?=h($ScholarShips->level->level_name)?>
              </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <h3>Discipline</h3>
              <div class="well">
               <?=h($ScholarShips->discipline->discipline_name)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Scholarship Description</h3>
              <div class="well">
               <?php echo $ScholarShips->scholarship_desc;?>
              </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <h3>Scholarship Year</h3>
              <div class="well">
               <?=h($ScholarShips->scholarship_year)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Scholarship Image</h3>
              <div class="well">
              <?php 
                echo $this->Html->link(__($this->Html->image('scholarships/'.$ScholarShips->scholarship_image, array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'scholarships',$ScholarShips->scholarship_image], ['escape' => false]);?>
              </div>
            </div>
