<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($careertests,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Courses Name</label>
              <select name="course_id" id="selector1" class="form-control1">
                    <?php foreach ($Courses as $key => $value):?>
                      <option value="<?=h($value->course_id)?>"><?=h($value->course_name)?></option>
                    <?php endforeach;?>
                  </select>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Discipline Name</label>
              <select name="course_id" id="selector1" class="form-control1">
                    <?php foreach ($Disciplines as $key => $value):?>
                      <option value="<?=h($value->discipline_id)?>"><?=h($value->discipline_name)?></option>
                    <?php endforeach;?>
                  </select>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Career Test Name</label>
              <input type="text" placeholder="Career Test Name" value="<?=h($careertests->career_test_name)?>" name="career_test_name" required="">
            </div>
             <div class="col-md-12 form-group1">
              <label class="control-label">Career Test Description</label>
              <textarea type="text" placeholder="Career Test Description" name="career_test_desc" required=""><?=h($careertests->career_test_desc)?>
              </textarea>
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label">Career Test Image</label>';
                echo $this->Form->input('career_test_image',['type' => 'file','label'=>false,'id'=>'image','accept'=>"image/*"]);?>

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
  CKEDITOR.replace( 'career_test_desc' );
</script>   