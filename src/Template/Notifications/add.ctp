<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($Notifications,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Notification</label>
              <input type="text" placeholder="Notification" name="notification" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Notification Url</label>
              <input type="text" placeholder="Notification Url" name="visit_original_site" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Notification Date</label>
              <input type="date" placeholder="Link Url" name="notification_date" required="">
            </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Notification Description</label>
              <textarea name="notification_description" placeholder="Notification Description....." required=""></textarea>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label">Notification Image</label>';
                echo $this->Form->input('notification_image',['type' => 'file','label'=>false,'id'=>'image','accept'=>"image/*"]);?>

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
<script>
  CKEDITOR.replace('notification_description');
</script>
          