<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($Class,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Class Name</label>
              <input type="text" placeholder="Class Name" value="<?=h($Class->class_name)?>" name="class_name" required="">
              <div class="clearfix"> </div>
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
          