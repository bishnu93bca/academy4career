<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($Disciplines,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Level</label>
              <select name="level_id" id="scholarship_id" class="form-control1">
                    <?php foreach ($Levels as $key => $value):?>
                      <option value="<?=h($value->level_id)?>"><?=h($value->level_name)?></option>
                    <?php endforeach;?>
              </select>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Discipline Name</label>
              <input type="text" placeholder="Discipline Name" name="discipline_name" required="">
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
   