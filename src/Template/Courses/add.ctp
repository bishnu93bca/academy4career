<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($Courses,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">ScholarShip</label>
              <select name="scholarship_id" id="scholarship_id" class="form-control1">
                    <?php foreach ($ScholarShips as $key => $value):?>
                      <option value="<?=h($value->scholarship_id)?>"><?=h($value->scholarship_name)?></option>
                    <?php endforeach;?>
              </select>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Course Name</label>
              <input type="text" placeholder="Course Name" name="course_name" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Level</label>
              <select name="level_id" id="level_id" class="form-control1" onchange="discipline()">
                    <?php foreach ($Levels as $key => $value):?>
                      <option value="<?=h($value->level_id)?>"><?=h($value->level_name)?></option>
                    <?php endforeach;?>
                  </select>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Discipline</label>
              <select name="discipline_id" id="discipline_id" class="form-control1">
                      <option>Select Discipline</option>
                  </select>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Course Description</label>
              <textarea placeholder="Course Description" name="course_desc" required=""></textarea>
            </div>
            <div class="clearfix"> </div>
            </div>
             <!-- <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label">Course  Image</label>';
                echo $this->Form->input('course_image',['type' => 'file','label'=>false,'id'=>'image','accept'=>"image/*"]);?>

            </div> -->
            
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
  <!---->
 </div>

</div>
<script>
  CKEDITOR.replace('course_desc');
</script>
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
   