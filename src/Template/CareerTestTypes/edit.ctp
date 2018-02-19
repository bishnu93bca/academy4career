<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($CareerTestTypes,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Career Test</label>
              <select name="career_test_id" id="selector1" class="form-control1">
                    <?php foreach ($CareerTests as $key => $value):?>
                      <option value="<?=h($value->career_test_id)?>"><?=h($value->career_test_name)?></option>
                    <?php endforeach;?>
                  </select>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Career Test Type Name</label>
              <input type="text" placeholder="Career Test Type Name" value="<?=h($CareerTestTypes->career_test_type_name)?>" name="career_test_type_name" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label">Career Test Image</label>';
                echo $this->Form->input('career_test_type_image',['type' => 'file','label'=>false,'id'=>'image','accept'=>"image/*"]);?>

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
          