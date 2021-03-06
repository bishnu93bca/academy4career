<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($Facultys,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Faculty Name</label>
              <input type="text" placeholder="Faculty Name" value="<?=h($Facultys->faculty_name)?>" name="faculty_name" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Faculty Department</label>
              <textarea name="faculty_department" placeholder="Faculty Department....." required=""><?=h($Facultys->faculty_department)?></textarea>
            </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Faculty Description</label>
              <textarea name="faculty_description" placeholder="Faculty Description....." required=""><?=h($Facultys->faculty_description)?></textarea>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label">Faculty Image</label>';
                echo $this->Form->input('faculty_image',['type' => 'file','label'=>false,'id'=>'image','accept'=>"image/*"]);?>

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
<script>
  CKEDITOR.replace('faculty_department');
  CKEDITOR.replace('faculty_description');
</script>
          