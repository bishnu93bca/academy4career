<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($Members,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" placeholder="Expert Name" value="<?=h($Members->member_name)?>" name="member_name" required="">
            </div>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Email</label>
              <input type="text" placeholder="Email" value="<?=h($Members->member_email)?>" name="member_email" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Mobile</label>
              <input type="text" placeholder="Mobile" name="member_mob" value="<?=h($Members->member_mob)?>" required="">
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
          