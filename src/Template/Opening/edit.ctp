<center><h2><u>Opening</u></h2></center>
<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($Opening,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Opening Name</label>
              <input type="text" placeholder="Opening Name" value="<?php echo $Opening->opening_name;?>" name="opening_name" required="">
              <div class="clearfix"> </div>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Opening Description</label>
              <textarea placeholder="Opening Name" name="opening_desc" required=""><?php echo $Opening->opening_desc;?></textarea>
              <div class="clearfix"> </div>
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
            CKEDITOR.replace( 'opening_desc' );
        </script>