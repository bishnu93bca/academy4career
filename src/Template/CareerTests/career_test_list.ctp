<div class="career_banner">
  <div class="container-fluid">
   
  </div>
</div>
<div class="about_top">
  <div class="container-fluid">
   
  <div class="col-md-12 column-15">
     <h6>Career Test</h6>
     <p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
       <div class="entry_values">
         <?= $this->Form->create($careertests) ?>
            <div class="col-md-3 grid_1">
                <select class="form-control m_6 col-md-3" name="course_id" id="course_id" onchange="discipline()">
                    <?php foreach ($Courses as $key => $value):?>
                      <option value="<?=h($value->course_id)?>"><?=h($value->course_name)?></option>
                    <?php endforeach;?>
                </select>
              </div>
              <div class="col-md-3 grid_1">
              <button type="submit" class="btn btn-primary form-control">Search</button>
              </div>
                <div class="clearfix"></div>

              </form>
          </div>
      <?php foreach ($careertests as $key => $value):?>
          <div class="col-lg-6 alltest">
              <div class="panel-body_3">
                <div class="pull-left material-img">
                  <a class="thumbnail" href="classified_detail.html">
                    <?=$this->Html->image('careertests/'.$value->career_test_image,['class'=>'img-thumbnail','width'=>'140'])?>
                  </a>
                </div>
                <div class="name">
                    <a href="classified_detail.html">
                        <span><?=h($value->career_test_name)?></span>
                    </a><br>
                    <p> <b>Course: </b><?=h($value->course->course_name)?></p>
                    <!--<a href="#">
                       <p> <b>Class:</b> 12th</p>                                                
                    </a>
                    <a href="#">
                        <p><b>Discipline:</b> Mathematics group</p>
                    </a>
                    <a href="#">
                              <p><b>Year:</b> 2017</p>                                               
                          </a> <div class="clearfix"></div>--> 
                    
                        <p><?php if(strlen(strip_tags($value->career_test_desc))> 200){
                          echo substr(strip_tags($value->career_test_desc),0,200)."...";

                        } else{    
                          echo strip_tags($value->career_test_desc)."...";
                        }?></p>
                    
                </div> 
                <div class="contact_btn pull-left">
                      <?=$this->Html->link('Enter Test..',['action'=>'readmore',$value->career_test_id],['class'=>'add_btn classi_btn fulldownload'])?>
                     </div>
                     <div class="clearfix"></div><hr>
              </div>
          </div>
      <?php endforeach;?> 
   </div>
</div>