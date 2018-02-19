<div class="validation-system">
    <div class="validation-form">
        <?= $this->Form->create($magazines,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Magazine Name</label>
              <input type="text" placeholder="Magazine Name" name="magazine_name" value="<?=h($magazines->magazine_name)?>" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Published Date</label>
              <input type="date" placeholder="" name="published_date" value="<?=h($magazines->published_date)?>" required="">
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label">Magazine Image</label>';
                echo $this->Form->input('magazine_image',['type' => 'file','label'=>false,'id'=>'image']);?>
            </div>
            <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Magazine Publisher</label>
              <input type="text" placeholder="Magazine Name" name="magazine_publisher" value="<?=h($magazines->magazine_publisher)?>" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Magazine Description</label>
              <textarea name="magazine_description" placeholder="Magazine Description....." required=""><?=h($magazines->magazine_description)?></textarea>
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Update</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
  <!---->
 </div>

</div>
<script>
            CKEDITOR.replace( 'magazine_description' );
        </script>