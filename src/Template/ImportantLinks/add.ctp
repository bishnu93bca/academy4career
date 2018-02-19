<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($ImportantLinks,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Link Content</label>
              <input type="text" placeholder="Link Content" name="link_content" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Link Url</label>
              <input type="text" placeholder="Link Url" name="link_url" required="">
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label">Link Image</label>';
                echo $this->Form->input('link_image',['type' => 'file','multiple' => true,'label'=>false,'id'=>'image','accept'=>"image/*"]);?>

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
          