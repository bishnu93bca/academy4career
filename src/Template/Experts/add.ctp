<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($Experts,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Expert Name</label>
              <input type="text" placeholder="Expert Name" name="expert_name" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Expert Specialization</label>
              <textarea name="expert_specialization" placeholder="Expert Specialization....." required=""></textarea>
            </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Expert Description</label>
              <textarea name="expert_description" placeholder="Expert Description....." required=""></textarea>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label">Expert Image</label>';
                echo $this->Form->input('expert_image',['type' => 'file','label'=>false,'id'=>'image','accept'=>"image/*"]);?>

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
  CKEDITOR.replace('expert_specialization');
  CKEDITOR.replace('expert_description');
</script>
          