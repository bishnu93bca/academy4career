<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($ClassTestSeriesQuestions,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Class</label>
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
              <label class="control-label">Questions</label>
              <input type="text" placeholder="Questions" name="question" value="<?=h($ClassTestSeriesQuestions->question)?>" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Answer One</label>
              <input type="text" placeholder="Answer One" value="<?=h($ClassTestSeriesQuestions->answer_one)?>" name="answer_one" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Answer Two</label>
              <input type="text" placeholder="Answer Two" value="<?=h($ClassTestSeriesQuestions->answer_two)?>" name="answer_two" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Answer Three</label>
              <input type="text" placeholder="Answer Three" value="<?=h($ClassTestSeriesQuestions->answer_three)?>" name="answer_three" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Answer Four</label>
              <input type="text" placeholder="Answer Four" value="<?=h($ClassTestSeriesQuestions->answer_four)?>" name="answer_four" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Right Answer</label>
              <input type="text" placeholder="Right Answer" value="<?=h($ClassTestSeriesQuestions->right_answer)?>" name="right_answer" required="">
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