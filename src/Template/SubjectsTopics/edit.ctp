<div class="validation-system">
    <div class="validation-form">
        <?= $this->Form->create($SubjectsTopics,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Class Name</label>
              <select name="class_id" id="class_id" class="form-control1" onchange="subject()">
                    <?php foreach ($Class as $key => $value):?>
                      <option value="<?=h($value->class_id)?>"><?=h($value->class_name)?></option>
                    <?php endforeach;?>
                  </select>
              
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Subject Name</label>
              <select name="subject_id" id="subject_id" class="form-control1">
                    <option>Select Subject</option>
                  </select>
              
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Topic Name</label>
              <input type="text" value="<?=h($SubjectsTopics->topic_name)?>" placeholder="Topic Name" name="topic_name" required="">
            </div>
            
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
  <!---->
 </div>

</div>
<script type="text/javascript">
 function subject(){
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