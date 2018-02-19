<div class="validation-system">
    <div class="validation-form">  <center><h3>Students Test Series Results</h3> </center>        
        <?= $this->Form->create($StudentsTestSeriesResults,['enctype'=>"multipart/form-data"]) ?>
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
              <label class="control-label">Subject</label>
              <select name="subject_id" id="subject_id" class="form-control1">
                    <option>Select Subject</option>
                  </select>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Student Test Series</label>
              <select name="student_test_series_id" id="student_test_series_id" class="form-control1" onchange="subject()">
                    <?php foreach ($StudentsTestSeries as $key => $value):?>
                      <option value="<?=h($value->student_test_series_id)?>"><?=h($value->student_test_series_name)?></option>
                    <?php endforeach;?>
                  </select>
            </div>
            <div class="col-md-12 form-group1">

              <label class="control-label">Answer</label>
              <input type="text" placeholder="Answer" value=" <?=h($StudentsTestSeriesResults->answered)?>" name="answered" required="">
            </div>
             <div class="col-md-12 form-group1">
              <label class="control-label">Right Answer</label>
              <input type="text" value=" <?=h($StudentsTestSeriesResults->right_answer)?>" placeholder="Right Answer" name="right_answer" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Answer Status</label>
              <input type="text" value=" <?=h($StudentsTestSeriesResults->answer_status)?>" placeholder="Answer Status" name="answer_status" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Question Attempted</label>
              <input type="text" value=" <?=h($StudentsTestSeriesResults->question_attempted)?>" placeholder="Question Attempted" name="question_attempted" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Question Unattempted</label>
              <input type="text" value="<?=h($StudentsTestSeriesResults->question_unattempted)?>" placeholder="Question Unattempted" name="question_unattempted" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Test Given Time</label>
              <input type="text" value=" <?=h($StudentsTestSeriesResults->test_given_time)?>" placeholder="Test Given Time" name="test_given_time" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Test Completion Duration</label>
              <input type="text" value=" <?=h($StudentsTestSeriesResults->test_completion_duration)?>" placeholder="Test Completion Duration" name="test_completion_duration" required="">
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