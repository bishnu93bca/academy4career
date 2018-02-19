<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($UserTypes,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">User Type</label>
              <input type="text" value="<?=h($UserTypes->user_type)?>" placeholder="User Type" name="user_type" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          <div class="clearfix"> </div>
        </form>
 </div>

</div>
          