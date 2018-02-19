<div class="validation-system">
    <div class="validation-form">  <center><h3>Students Test Series Results</h3> </center>        
        <?= $this->Form->create($CareerTestResults,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Career Test</label>
              <select name="career_test_id" id="career_test_id" class="form-control1">
                    <?php foreach ($CareerTest as $key => $value):?>
                      <option value="<?=h($value->career_test_id)?>"><?=h($value->career_test_name)?></option>
                    <?php endforeach;?>
                  </select>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Career Test Type</label>
              <select name="career_test_id" id="career_test_id" class="form-control1">
                    <?php foreach ($CareerTestTypes as $key => $value):?>
                      <option value="<?=h($value->career_test_type_id)?>"><?=h($value->career_test_type_name)?></option>
                    <?php endforeach;?>
                  </select>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Answer</label>
              <input type="text" placeholder="Answer" value=" <?=h($CareerTestResults->answered)?>" name="answered" required="">
            </div>
             <div class="col-md-12 form-group1">
              <label class="control-label">Right Answer</label>
              <input type="text" value=" <?=h($CareerTestResults->right_answer)?>" placeholder="Right Answer" name="right_answer" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Answer Status</label>
              <input type="text" value=" <?=h($CareerTestResults->answer_status)?>" placeholder="Answer Status" name="answer_status" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Question Attempted</label>
              <input type="text" value=" <?=h($CareerTestResults->question_attempted)?>" placeholder="Question Attempted" name="question_attempted" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Question Unattempted</label>
              <input type="text" value="<?=h($CareerTestResults->question_unattempted)?>" placeholder="Question Unattempted" name="question_unattempted" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Test Given Time</label>
              <input type="text" value=" <?=h($CareerTestResults->test_given_time)?>" placeholder="Test Given Time" name="test_given_time" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Test Completion Duration</label>
              <input type="text" value=" <?=h($CareerTestResults->test_completed_duration)?>" placeholder="Test Completion Duration" name="test_completed_duration" required="">
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
          