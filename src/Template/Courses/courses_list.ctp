<div class="course_banner">
	<div class="container-fluid">
		
	</div>
</div>
<div class="about_top">
  <div class="container-fluid">
	
  	<div class="col-md-12 column-15">
  	   <h6>Courses</h6>
  	   <p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
         <div class="entry_values">
  	     <?= $this->Form->create($Courses) ?>
            <div class="col-md-4 grid_1">
                <select class="form-control m_6 col-md-4" name="level_id" id="level_id" onchange="discipline()">
                <option value="">Select Level</option>
                    <?php foreach ($Levels as $key => $value):?>
                      <option value="<?=h($value->level_id)?>"><?=h($value->level_name)?></option>
                    <?php endforeach;?>
                </select>
              </div>
            <div class="col-md-4 grid_1">
              <select class="form-control m_6 col-md-4" name="discipline_id" id="discipline_id" >
                <option>Select Discipline</option>
              </select>
            </div>
              <div class="col-md-4 grid_1">
              <button type="submit" class="btn btn-primary form-control">Search</button>
              </div>
                <div class="clearfix"></div>

              </form>
          </div>
        <?php foreach ($Courses as $key => $course):?>
    		  <div class="col-lg-6 alltest">
              <div class="panel-body_3">
                <div class="pull-left material-img">
                  <!-- <a class="thumbnail" href="classified_detail.html">
                  <?=$this->Html->image('courses/'.$course->course_image,['class'=>'img-thumbnail','width'=>140])?>
                  </a> -->
                </div>
                <div class="name">
                    
                    <?= $this->Html->link(__('<span>'.$course->course_name.'</span>'), ['action' => 'readmore',$course->course_id],['escape'=> false])?>
                   <br>
                    <p> <b>Class:</b> <?=h($course->level->level_name)?></p>
                    <p><b>Discipline:</b> <?=h($course->discipline->discipline_name)?></p>
                    <p><b>Year:</b> <?=h($course->course_year)?></p>
                    <div class="clearfix"></div>	
                    <p><?php if(strlen(strip_tags($course->course_desc))> 200){
                          echo substr(strip_tags($course->course_desc),0,200)."...";

                        } else{    
                          echo strip_tags($course->course_desc)."...";}?>
                </div> 
        			  <div class="contact_btn pull-left">
                      <?=$this->Html->link('Read More..',['controller'=>'courses','action'=>'readmore',$course->course_id],['class'=>'add_btn classi_btn fulldownload'])?>
                </div>
                 <div class="clearfix"></div><hr> 
    			   </div>
          </div>
        <?php endforeach;?>

  		
  		
    </div>
  </div>
</div>
<script type="text/javascript">
 function discipline(){
  var id =$('#level_id').val();
    $.ajax({url: "<?php echo BASE_URL;?>disciplines/ajax/"+id,
               success: function(data){
                html = "";
                $obj=JSON.parse(data);
                for (var i =0; i<$obj.length;i++) {
                // console.log($obj[i].id);
                  html += "<option value=" + $obj[i].id  + ">" +$obj[i].name + "</option>"
                }
                 document.getElementById("discipline_id").innerHTML = html;
                
          }});
 }
</script>