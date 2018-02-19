<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($QustionTypes,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Question Type</label>
              <input type="text" placeholder="Question Type" name="questions_type" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
    
            
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
          