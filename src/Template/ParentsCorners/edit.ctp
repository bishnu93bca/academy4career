<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($ParentsCorners,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Parent Name</label>
              <input type="text" value="<?=h($ParentsCorners->parents_name)?>" placeholder="Parent Name" name="parents_name" required="">
            </div>
            <div class="clearfix"> </div>
            </div>

             <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label">Parents Image</label>';
                echo $this->Form->input('parents_image',['type' => 'file','label'=>false,'id'=>'image','accept'=>"image/*"]);?>

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
        