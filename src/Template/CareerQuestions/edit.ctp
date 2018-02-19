<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($careerquestions,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Career Test Type</label>
              <select name="class_id" id="selector1" class="form-control1">
                    <?php foreach ($CareerTestTypes as $key => $value):?>
                      <option value="<?=h($value->career_test_type_id)?>"><?=h($value->career_test_type_name)?></option>
                    <?php endforeach;?>
                  </select>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Questions</label>
              <input type="text" placeholder="Questions" name="question" value="<?=h($careerquestions->question)?>" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Answer One</label>
              <input type="text" placeholder="Answer One" value="<?=h($careerquestions->answer_one)?>" name="answer_one" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Answer Two</label>
              <input type="text" placeholder="Answer Two" value="<?=h($careerquestions->answer_two)?>" name="answer_two" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Answer Three</label>
              <input type="text" placeholder="Answer Three" value="<?=h($careerquestions->answer_three)?>" name="answer_three" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Answer Four</label>
              <input type="text" placeholder="Answer Four" value="<?=h($careerquestions->answer_four)?>" name="answer_four" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Right Answer</label>
              <input type="text" placeholder="Right Answer" value="<?=h($careerquestions->right_answer)?>" name="right_answer" required="">
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
        