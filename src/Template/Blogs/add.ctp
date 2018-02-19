<div class="validation-system">
<center><h2>Blogs</h2></center>
    <div class="validation-form">
        <?= $this->Form->create($blogs,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Post Name</label>
              <input type="text" placeholder="Magazine Name" name="post_name" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Post Description</label>
              <textarea name="post_description" placeholder="Post Descriptio....." required=""></textarea>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label"> Image</label>';
                echo $this->Form->input('post_image',['type' => 'file','label'=>false,'id'=>'image','accept'=>"image/*"]);?>

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
  CKEDITOR.replace( 'post_description' );
</script>