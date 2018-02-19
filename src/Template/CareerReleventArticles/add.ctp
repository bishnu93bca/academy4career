<div class="validation-system">
    <div class="validation-form">
        <?= $this->Form->create($articles,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Article Title</label>
              <input type="text" placeholder="Article Title" name="article_title" required="">
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Article Description</label>
              <textarea name="article_description" placeholder="Article Description....." required=""></textarea>
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label">Article Image</label>';
                echo $this->Form->input('article_image[]',['type' => 'file','multiple' => true,'label'=>false,'id'=>'image']);?>

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
  CKEDITOR.replace( 'article_description' );
</script>