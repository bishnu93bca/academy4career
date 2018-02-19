<div class="validation-system">
    <div class="validation-form">
        <?= $this->Form->create($StudyMaterials,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Class</label>
              <select  name="class_id" id="class_id" class="form-control1" onchange="discipline()">
                    <?php foreach ($Class as $key => $value):?>
                      <option value="<?=h($value->class_id)?>"><?=h($value->class_name)?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Study Material Name</label>
              <input type="text" placeholder="Study Material Name" name="study_material_name" required="">
            </div>

             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Study Material Description</label>
              <textarea name="study_material_description" placeholder="Study Material Description....." required=""></textarea>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Study Material Price</label>
              <input type="text" placeholder="Study Material Price" name="study_material_price" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Study Material Year</label>
              <input type="text" placeholder="Study Material Year" name="study_material_year" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="pdf" class="control-label">Study Material Sample PDF</label>';
                echo $this->Form->input('study_material_sample',['type' => 'file','label'=>false,'id'=>'pdf','accept'=>"application/pdf"]);?>
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="pdf" class="control-label">Study Material Full PDF</label>';
                echo $this->Form->input('study_material_full',['type' => 'file','label'=>false,'id'=>'pdf','accept'=>"application/pdf"]);?>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label">Study Material Image</label>';
                echo $this->Form->input('study_material_image',['type' => 'file','label'=>false,'id'=>'image','accept'=>"image/*"]);?>

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
  CKEDITOR.replace('study_material_description');
</script> 