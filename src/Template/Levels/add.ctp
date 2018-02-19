<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($Levels,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            
            <div class="col-md-12 form-group1">
              <label class="control-label">Level Name</label>
              <input type="text" placeholder="Level Name" name="level_name" required="">
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
   