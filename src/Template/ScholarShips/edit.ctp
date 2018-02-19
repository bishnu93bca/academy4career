<div class="validation-system">
    <div class="validation-form">  <center><h3>Scholarship</h3> </center>        
        <?= $this->Form->create($ScholarShips,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Scholarship Name</label>
              <input type="text" placeholder="Scholarship Name" value="<?=h($ScholarShips->scholarship_name)?>" name="scholarship_name" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Level</label>
              <select name="level_id" id="selector1" class="form-control1">
                    <?php foreach ($Levels as $key => $value):?>
                      <option value="<?=h($value->level_id)?>"><?=h($value->level_name)?></option>
                    <?php endforeach;?>
                  </select>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Discipline</label>
              <select name="discipline_id" id="selector1" class="form-control1">
                    <?php foreach ($Disciplines as $key => $value):?>
                      <option value="<?=h($value->discipline_id)?>"><?=h($value->discipline_name)?></option>
                    <?php endforeach;?>
                  </select>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Scholarship Description</label>
              <textarea type="text" placeholder="Scholarship Description" name="scholarship_desc" required=""> <?=h($ScholarShips->scholarship_desc)?></textarea>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Scholarship Year</label>
              <input type="text" placeholder="Scholarship Year" value="<?=h($ScholarShips->scholarship_year)?>" name="scholarship_year" required="">
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label">Link Image</label>';
                echo $this->Form->input('scholarship_image',['type' => 'file','label'=>false,'id'=>'image','accept'=>"image/*"]);?>

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
  CKEDITOR.replace('scholarship_desc');
</script> 
          