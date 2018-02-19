<div class="validation-system">
    <div class="validation-form">
        <?= $this->Form->create($Subjects,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
          <div class="col-md-12 form-group1">
              <label class="control-label">Class Name</label>
              <select name="class_id" value="<?=h($Subjects->class_id)?>" id="selector1" class="form-control1">
                    <?php foreach ($Class as $key => $value):?>
                      <option value="<?=h($value->class_id)?>"><?=h($value->class_name)?></option>
                    <?php endforeach;?>
                  </select>
              
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Subject Name</label>
              <input type="text" value="<?=h($Subjects->subject_name)?>" placeholder="Subject Name" name="subject_name" required="">
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