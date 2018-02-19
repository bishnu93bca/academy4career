<div class="validation-system">
    <div class="validation-form">
        <?= $this->Form->create($EntranceExams,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Entrance Exam Name</label>
              <input type="text" placeholder="Entrance Exam Name" value=" <?=h($EntranceExams->entrance_name)?>" name="entrance_name" required="">
            </div>        
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Entrance Exam Description</label>
              <textarea name="entrance_description"  placeholder="Entrance Exam Description....." required=""><?=h($EntranceExams->entrance_description)?></textarea>
            </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Entrance Date</label>
              <input type="date" placeholder="Entrance Exam Name" name="entrance_date" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="pdf" class="control-label">Entrance Material PDF</label>';
                echo $this->Form->input('entrance_material',['type' => 'file','label'=>false,'id'=>'pdf','accept'=>"application/pdf"]);?>
            </div>
             
            <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label">Entrance  Image</label>';
                echo $this->Form->input('entrance_image',['type' => 'file','label'=>false,'id'=>'image','accept'=>"image/*"]);?>

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
  CKEDITOR.replace('entrance_description');
</script>