<div class="about_banner">
  <div class="container-fluid">
    <h2>Test</h2>
    <!-- <span class="breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Entrance Materials</span></span> -->
  </div>
</div>
<div class="about_top">
  <div class="container-fluid">
   
  <div class="col-md-12 column-15">
     <h6>Test</h6>
     <p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
       <div class="entry_values">
         <?= $this->Form->create($StudentsTestSeries) ?>
            <div class="col-md-3 grid_1">
                <select class="form-control m_6 col-md-3" name="class_id" id="class_id" onchange="discipline()">
                    <?php foreach ($Class as $key => $value):?>
                      <option value="<?=h($value->class_id)?>"><?=h($value->class_name)?></option>
                    <?php endforeach;?>
                </select>
              </div>
              <div class="col-md-3 grid_1">
                <select class="form-control m_6 col-md-3" name="subject_id" id="subject_id" >
                    
                      <option value="">Select Subject</option>
                   
                </select>
              </div>
              <div class="col-md-3 grid_1">
              <button type="submit" class="btn btn-primary form-control">Search</button>
              </div>
                <div class="clearfix"></div>

              </form>
          </div>
      <?php foreach ($StudentsTestSeries as $key => $value):?>
          <div class="col-lg-6 alltest">
              <div class="panel-body_3">
                <div class="pull-left material-img">
                  <a class="thumbnail" href="#">
                    <?=$this->Html->image('studentstestseries/'.$value->student_test_series_image,['class'=>'img-thumbnail','width'=>140])?>
                  </a>
                </div>
                <div class="name">
                    <a href="#">
                        <span><?=h($value->student_test_series_name)?></span>
                    </a><br>
                    <p> <b>Class: </b><?=h($value->clas->class_name)?></p>
                    <!--<a href="#">
                       <p> <b>Class:</b> 12th</p>                                                
                    </a>
                    <a href="#">
                        <p><b>Discipline:</b> Mathematics group</p>
                    </a>
                    <a href="#">
                              <p><b>Year:</b> 2017</p>                                               
                          </a> <div class="clearfix"></div>--> 
                    
                        <p><?php if(strlen(strip_tags($value->student_test_series_description))> 200){
                          echo substr(strip_tags($value->student_test_series_description),0,200)."...";

                        } else{    
                          echo strip_tags($value->student_test_series_description)."...";
                        }?></p>
                    
                </div> 
                <div class="contact_btn pull-left">
                      <?=$this->Html->link('Read More..',['action'=>'readmore',$value->student_test_series_id],['class'=>'add_btn classi_btn fulldownload'])?>
                     </div>
                     <div class="clearfix"></div><hr>
              </div>
          </div>
      <?php endforeach;?> 
   </div>
</div>
<script type="text/javascript">
 function discipline(){
  var id =$('#class_id').val();
    $.ajax({url: "<?php echo BASE_URL;?>subjects/ajax/"+id,
               success: function(data){
                html = "";
                $obj=JSON.parse(data);
                for (var i =0; i<$obj.length;i++) {
                // console.log($obj[i].id);
                  html += "<option value=" + $obj[i].id  + ">" +$obj[i].name + "</option>"
                }
                 document.getElementById("subject_id").innerHTML = html;
                
          }});
 }
</script>