<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($Testimonials,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Test Imonial</label>
              <input type="text" value="<?=h($Testimonials->testimonial)?>" placeholder="Test Imonial" name="testimonial" required="">
            </div>
            <div class="clearfix"> </div>
            </div>

             <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label">Test Imonial Image</label>';
                echo $this->Form->input('testimonial_image',['type' => 'file','label'=>false,'id'=>'image','accept'=>"image/*"]);?>

            </div>
            
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Update</button>

            </div>
          <div class="clearfix"> </div>
        </form>
 </div>

</div>
          