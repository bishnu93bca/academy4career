<div class="validation-system"><center><h2>IAS MCQs</h2></center>
    <div class="validation-form">
        <?= $this->Form->create($IASMCQs,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Subject Name</label>
              <input type="text" value="<?=h($IASMCQs->ias_subject)?>" placeholder="Subject Name" name="ias_subject" required="">
            </div> 
            <div class="col-md-12 form-group1">
              <label class="control-label">Number Of Test</label>
              <input type="text" value="<?=h($IASMCQs->no_of_tests)?>" placeholder="Number Of Test" name="no_of_tests" required="">
            </div>       
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Description</label>
              <textarea name="test_desc" placeholder="Description....." required=""><?=h($IASMCQs->test_desc)?></textarea>
            </div>
            </div>
             
           <!--  <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label">Image</label>';
                echo $this->Form->input('subject_image',['type' => 'file','label'=>false,'id'=>'image','accept'=>"image/*"]);?>

            </div> -->
            
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
  <!---->
 </div>

</div>