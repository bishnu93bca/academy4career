<div class="validation-system">
    <div class="validation-form">
        <?= $this->Form->create($DrExams,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Dr Exam Name</label>
              <input type="text" placeholder="Magazine Name" value="<?=h($DrExams->drexam_name)?>" name="drexam_name" required="">
            </div>        
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Dr Exam Description</label>
              <textarea name="drexam_details" placeholder="Dr Exam Description....." required=""><?=h($DrExams->drexam_details)?></textarea>
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="pdf" class="control-label">Dr Exam Material For PDF</label>';
                echo $this->Form->input('drexammaterial_for',['type' => 'file','label'=>false,'id'=>'pdf','accept'=>"application/pdf"]);?>
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="pdf" class="control-label">Dr Exam Sample Material PDF</label>';
                echo $this->Form->input('drexam_samplematerial',['type' => 'file','label'=>false,'id'=>'pdf','accept'=>"application/pdf"]);?>
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="pdf" class="control-label">Dr Exam Material PDF</label>';
                echo $this->Form->input('drexam_material',['type' => 'file','label'=>false,'id'=>'pdf','accept'=>"application/pdf"]);?>
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label">Dr Exam Image</label>';
                echo $this->Form->input('drexam_image',['type' => 'file','label'=>false,'id'=>'image','accept'=>"image/*"]);?>

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
  CKEDITOR.replace('drexam_details');
</script>