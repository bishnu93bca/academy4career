<div class="validation-system"><center><h2>Personality Test</h2></center>
    <div class="validation-form">
        <?= $this->Form->create($PersonalityTests,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Personality Name</label>
              <input type="text" value="<?=h($PersonalityTests->personality_test_name)?>" placeholder="Personality Name" name="personality_test_name" required="">
            </div>     
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Personality Description</label>
              <textarea name="personality_test_desc" placeholder="Personality Description....." required=""><?=h($PersonalityTests->personality_test_desc)?></textarea>
            </div>
            </div>
             
            <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label">Personality  Image</label>';
                echo $this->Form->input('personality_test_image',['type' => 'file','label'=>false,'id'=>'image','accept'=>"image/*"]);?>

            </div>
            
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
  <!---->
 </div>
 <script>
  CKEDITOR.replace('personality_test_desc');
</script>

